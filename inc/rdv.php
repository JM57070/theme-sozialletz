<?php
/**
 * SozialLëtz — Prise de rendez-vous (siège social, samedi matin uniquement)
 * Inclus depuis functions.php
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/* ---------------------------------------------------------
 * 1. RÉGLAGES (modifiables ici ou via le filtre
 *    'sozialletz_rdv_config')
 * ------------------------------------------------------- */
function sozialletz_rdv_config() {
    return apply_filters( 'sozialletz_rdv_config', array(
        // Créneaux du samedi matin (1 personne par créneau)
        'slots'         => array( '09:00', '09:30', '10:00', '10:30', '11:00', '11:30' ),
        // Délai minimum avant le 1er rendez-vous possible (en jours)
        'lead_days'     => 2,
        // Combien de semaines à l'avance on peut réserver
        'horizon_weeks' => 12,
        // Samedis fermés (jours fériés, vacances...) au format AAAA-MM-JJ
        'closed_dates'  => array(),
        // Adresse affichée au visiteur et dans l'e-mail de confirmation
        'address'       => 'Siège social OLICAS asbl — 124, rue du Puits L-2355, Luxembourg',
        // Qui reçoit les demandes
        'notify_email'  => get_option( 'admin_email' ),
    ) );
}

function sozialletz_rdv_demarches() {
    return array(
        'sejour'    => 'Titre de séjour / immigration',
        'logement'  => 'Logement / aides au logement',
        'sante'     => 'Santé / CNS / assurance',
        'social'    => 'Aides sociales / allocations',
        'emploi'    => 'Emploi / ADEM',
        'impots'    => 'Impôts / documents officiels',
        'famille'   => 'Famille / regroupement familial',
        'autre'     => 'Autre démarche',
    );
}

/* ---------------------------------------------------------
 * 2. DATES
 * ------------------------------------------------------- */
function sozialletz_rdv_bounds() {
    $c    = sozialletz_rdv_config();
    $tz   = wp_timezone();
    $min  = ( new DateTimeImmutable( 'now', $tz ) )->setTime( 0, 0 )->modify( '+' . (int) $c['lead_days'] . ' days' );
    while ( (int) $min->format( 'N' ) !== 6 ) {
        $min = $min->modify( '+1 day' );
    }
    $max = $min->modify( '+' . (int) $c['horizon_weeks'] . ' weeks' );
    return array( $min, $max );
}

function sozialletz_rdv_is_valid_slot( $date, $time ) {
    $c  = sozialletz_rdv_config();
    $dt = DateTimeImmutable::createFromFormat( '!Y-m-d', (string) $date, wp_timezone() );
    if ( ! $dt || $dt->format( 'Y-m-d' ) !== $date ) {
        return false;
    }
    if ( (int) $dt->format( 'N' ) !== 6 ) {
        return false; // samedi uniquement
    }
    list( $min, $max ) = sozialletz_rdv_bounds();
    if ( $dt < $min || $dt > $max ) {
        return false;
    }
    if ( in_array( $date, $c['closed_dates'], true ) ) {
        return false;
    }
    return in_array( $time, $c['slots'], true );
}

/* ---------------------------------------------------------
 * 3. TYPE DE CONTENU « Rendez-vous » (visible dans l'admin)
 * ------------------------------------------------------- */
function sozialletz_rdv_register_cpt() {
    register_post_type( 'sl_rdv', array(
        'labels' => array(
            'name'          => 'Rendez-vous',
            'singular_name' => 'Rendez-vous',
            'edit_item'     => 'Détail du rendez-vous',
            'all_items'     => 'Tous les rendez-vous',
            'not_found'     => 'Aucun rendez-vous pour le moment',
        ),
        'public'       => false,
        'show_ui'      => true,
        'menu_icon'    => 'dashicons-calendar-alt',
        'menu_position'=> 25,
        'supports'     => array( 'title' ),
        'capabilities' => array( 'create_posts' => 'do_not_allow' ),
        'map_meta_cap' => true,
    ) );
}
add_action( 'init', 'sozialletz_rdv_register_cpt' );

function sozialletz_rdv_columns( $cols ) {
    return array(
        'cb'       => $cols['cb'],
        'title'    => 'Personne',
        'rdv_date' => 'Date',
        'rdv_time' => 'Heure',
        'rdv_tel'  => 'Téléphone',
        'rdv_mail' => 'E-mail',
        'rdv_type' => 'Démarche',
    );
}
add_filter( 'manage_sl_rdv_posts_columns', 'sozialletz_rdv_columns' );

function sozialletz_rdv_column_content( $col, $id ) {
    $map = array(
        'rdv_date' => '_sl_rdv_date',
        'rdv_time' => '_sl_rdv_time',
        'rdv_tel'  => '_sl_rdv_tel',
        'rdv_mail' => '_sl_rdv_email',
        'rdv_type' => '_sl_rdv_type_label',
    );
    if ( isset( $map[ $col ] ) ) {
        echo esc_html( get_post_meta( $id, $map[ $col ], true ) );
    }
}
add_action( 'manage_sl_rdv_posts_custom_column', 'sozialletz_rdv_column_content', 10, 2 );

function sozialletz_rdv_sortable( $cols ) {
    $cols['rdv_date'] = 'rdv_date';
    return $cols;
}
add_filter( 'manage_edit-sl_rdv_sortable_columns', 'sozialletz_rdv_sortable' );

function sozialletz_rdv_admin_order( $q ) {
    if ( is_admin() && $q->is_main_query() && $q->get( 'post_type' ) === 'sl_rdv' ) {
        $q->set( 'meta_key', '_sl_rdv_date' );
        $q->set( 'orderby', array( 'meta_value' => 'ASC', 'title' => 'ASC' ) );
        if ( $q->get( 'orderby' ) === 'rdv_date' ) {
            $q->set( 'order', $q->get( 'order' ) ?: 'ASC' );
        }
    }
}
add_action( 'pre_get_posts', 'sozialletz_rdv_admin_order' );

function sozialletz_rdv_metabox() {
    add_meta_box( 'sl_rdv_detail', 'Détail de la demande', 'sozialletz_rdv_metabox_cb', 'sl_rdv', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'sozialletz_rdv_metabox' );

function sozialletz_rdv_metabox_cb( $post ) {
    $f = function ( $k ) use ( $post ) {
        return esc_html( get_post_meta( $post->ID, $k, true ) );
    };
    echo '<p><strong>Date :</strong> ' . $f( '_sl_rdv_date' ) . ' à ' . $f( '_sl_rdv_time' ) . '</p>';
    echo '<p><strong>Téléphone :</strong> ' . $f( '_sl_rdv_tel' ) . '<br><strong>E-mail :</strong> ' . $f( '_sl_rdv_email' ) . '</p>';
    echo '<p><strong>Type de démarche :</strong> ' . $f( '_sl_rdv_type_label' ) . '</p>';
    echo '<p><strong>Besoin exprimé :</strong><br>' . nl2br( $f( '_sl_rdv_besoin' ) ) . '</p>';
    echo '<p style="color:#666"><em>Pour annuler un rendez-vous et libérer le créneau : mettez-le à la corbeille.</em></p>';
}

/* ---------------------------------------------------------
 * 4. CRÉNEAUX DÉJÀ PRIS
 * ------------------------------------------------------- */
function sozialletz_rdv_booked() {
    list( $min ) = sozialletz_rdv_bounds();
    $ids = get_posts( array(
        'post_type'      => 'sl_rdv',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'fields'         => 'ids',
        'meta_query'     => array( array(
            'key'     => '_sl_rdv_date',
            'value'   => $min->format( 'Y-m-d' ),
            'compare' => '>=',
            'type'    => 'CHAR',
        ) ),
    ) );
    $out = array();
    foreach ( $ids as $id ) {
        $d = get_post_meta( $id, '_sl_rdv_date', true );
        $t = get_post_meta( $id, '_sl_rdv_time', true );
        if ( $d && $t ) {
            $out[ $d ][] = $t;
        }
    }
    return $out;
}

/* ---------------------------------------------------------
 * 5. ASSETS
 * ------------------------------------------------------- */
function sozialletz_rdv_enqueue() {
    $c = sozialletz_rdv_config();
    list( $min, $max ) = sozialletz_rdv_bounds();

    wp_enqueue_script(
        'sozialletz-rdv',
        get_template_directory_uri() . '/assets/rdv.js',
        array(),
        '1.0.0',
        true
    );
    wp_localize_script( 'sozialletz-rdv', 'slRdv', array(
        'ajax'    => admin_url( 'admin-ajax.php' ),
        'minDate' => $min->format( 'Y-m-d' ),
        'maxDate' => $max->format( 'Y-m-d' ),
        'slots'   => array_values( $c['slots'] ),
        'closed'  => array_values( $c['closed_dates'] ),
        'booked'  => (object) sozialletz_rdv_booked(),
        'locale'  => 'fr-FR',
    ) );
}
add_action( 'wp_enqueue_scripts', 'sozialletz_rdv_enqueue' );

/* ---------------------------------------------------------
 * 6. AFFICHAGE DU PANNEAU (appelé depuis template-accueil.php)
 * ------------------------------------------------------- */
function sozialletz_rdv_render_panel() {
    $c = sozialletz_rdv_config();
    ?>
    <div id="sl-rdv-panel" class="sl-rdv-panel" hidden>
        <div data-sl-rdv-body>
            <p class="sl-rdv-intro">
                <strong>Aide aux démarches administratives au Luxembourg.</strong>
                Rendez-vous <u>uniquement le samedi matin</u>, au siège social :
                <span class="sl-rdv-address"><?php echo esc_html( $c['address'] ); ?></span>
            </p>

            <div class="sl-rdv-cols">
                <!-- 1. Calendrier -->
                <div class="sl-rdv-step">
                    <h3 class="sl-rdv-h"><span>1</span> Choisissez un samedi</h3>
                    <div class="sl-cal" aria-live="polite">
                        <div class="sl-cal-head">
                            <button type="button" class="sl-cal-nav" data-cal="prev" aria-label="Mois précédent">&lsaquo;</button>
                            <strong class="sl-cal-title" id="sl-cal-title"></strong>
                            <button type="button" class="sl-cal-nav" data-cal="next" aria-label="Mois suivant">&rsaquo;</button>
                        </div>
                        <div class="sl-cal-grid" id="sl-cal-grid" role="group" aria-labelledby="sl-cal-title"></div>
                        <p class="sl-cal-legend"><i></i> Samedi disponible</p>
                    </div>
                </div>

                <!-- 2. Créneaux -->
                <div class="sl-rdv-step">
                    <h3 class="sl-rdv-h"><span>2</span> Choisissez une heure</h3>
                    <p class="sl-rdv-hint" id="sl-slots-hint">Sélectionnez d'abord un samedi dans le calendrier.</p>
                    <div class="sl-slots" id="sl-slots"></div>
                </div>
            </div>

            <!-- 3. Formulaire -->
            <form id="sl-rdv-form" class="sl-rdv-form" hidden novalidate>
                <h3 class="sl-rdv-h"><span>3</span> Vos coordonnées et votre besoin</h3>
                <p class="sl-rdv-summary" id="sl-rdv-summary"></p>

                <input type="hidden" name="action" value="sl_rdv_submit">
                <?php wp_nonce_field( 'sl_rdv_submit', 'sl_rdv_nonce' ); ?>
                <input type="hidden" name="sl_date" id="sl-f-date">
                <input type="hidden" name="sl_time" id="sl-f-time">
                <div class="sl-hp" aria-hidden="true">
                    <label>Ne pas remplir <input type="text" name="sl_website" tabindex="-1" autocomplete="off"></label>
                </div>

                <div class="sl-rdv-fields">
                    <label>Nom et prénom *
                        <input type="text" name="sl_nom" required maxlength="100" autocomplete="name">
                    </label>
                    <label>Téléphone *
                        <input type="tel" name="sl_tel" required maxlength="30" autocomplete="tel" inputmode="tel">
                    </label>
                    <label>E-mail *
                        <input type="email" name="sl_email" required maxlength="120" autocomplete="email" inputmode="email">
                    </label>
                    <label>Type de démarche
                        <select name="sl_type">
                            <?php foreach ( sozialletz_rdv_demarches() as $k => $label ) : ?>
                                <option value="<?php echo esc_attr( $k ); ?>"><?php echo esc_html( $label ); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>
                </div>

                <label class="sl-rdv-wide">Expliquez en quelques mots votre besoin *
                    <textarea name="sl_besoin" id="sl-f-besoin" rows="4" required minlength="10" maxlength="600"
                              placeholder="Ex. : j'ai reçu un courrier de l'administration et je ne comprends pas quels documents fournir…"></textarea>
                    <small class="sl-count"><span id="sl-f-count">0</span> / 600</small>
                </label>

                <label class="sl-rdv-check">
                    <input type="checkbox" name="sl_rgpd" value="1" required>
                    <span>J'accepte que mes données soient utilisées uniquement pour traiter ma demande de rendez-vous. *</span>
                </label>

                <div class="sl-rdv-error" id="sl-rdv-error" role="alert" hidden></div>

                <button type="submit" class="button sl-btn-rdv sl-rdv-submit" id="sl-rdv-submit">Confirmer ma demande</button>
            </form>
        </div>
    </div>
    <?php
}

/* ---------------------------------------------------------
 * 7. TRAITEMENT DE LA DEMANDE (AJAX)
 * ------------------------------------------------------- */
add_action( 'wp_ajax_nopriv_sl_rdv_submit', 'sozialletz_rdv_submit' );
add_action( 'wp_ajax_sl_rdv_submit', 'sozialletz_rdv_submit' );

function sozialletz_rdv_submit() {
    if ( ! isset( $_POST['sl_rdv_nonce'] ) || ! wp_verify_nonce( $_POST['sl_rdv_nonce'], 'sl_rdv_submit' ) ) {
        wp_send_json_error( array( 'message' => 'Session expirée. Merci de recharger la page et de réessayer.' ), 403 );
    }

    // Anti-spam : champ piège
    if ( ! empty( $_POST['sl_website'] ) ) {
        wp_send_json_success( array( 'message' => 'Merci.' ) );
    }

    // Anti-spam : 3 demandes / heure / IP
    $ip  = isset( $_SERVER['REMOTE_ADDR'] ) ? $_SERVER['REMOTE_ADDR'] : 'x';
    $key = 'sl_rdv_rate_' . md5( $ip );
    $n   = (int) get_transient( $key );
    if ( $n >= 3 ) {
        wp_send_json_error( array( 'message' => 'Trop de demandes. Merci de réessayer plus tard.' ), 429 );
    }

    $nom    = sanitize_text_field( wp_unslash( $_POST['sl_nom'] ?? '' ) );
    $tel    = sanitize_text_field( wp_unslash( $_POST['sl_tel'] ?? '' ) );
    $email  = sanitize_email( wp_unslash( $_POST['sl_email'] ?? '' ) );
    $type   = sanitize_key( wp_unslash( $_POST['sl_type'] ?? '' ) );
    $besoin = sanitize_textarea_field( wp_unslash( $_POST['sl_besoin'] ?? '' ) );
    $date   = sanitize_text_field( wp_unslash( $_POST['sl_date'] ?? '' ) );
    $time   = sanitize_text_field( wp_unslash( $_POST['sl_time'] ?? '' ) );
    $demarches = sozialletz_rdv_demarches();

    if ( mb_strlen( $nom ) < 2 ) {
        wp_send_json_error( array( 'message' => 'Merci d\'indiquer votre nom.' ) );
    }
    if ( ! preg_match( '/^[0-9 +().\-]{6,30}$/', $tel ) ) {
        wp_send_json_error( array( 'message' => 'Numéro de téléphone invalide.' ) );
    }
    if ( ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => 'Adresse e-mail invalide.' ) );
    }
    if ( mb_strlen( $besoin ) < 10 ) {
        wp_send_json_error( array( 'message' => 'Merci de décrire votre besoin en quelques mots (10 caractères minimum).' ) );
    }
    if ( empty( $_POST['sl_rgpd'] ) ) {
        wp_send_json_error( array( 'message' => 'Merci d\'accepter l\'utilisation de vos données pour traiter la demande.' ) );
    }
    if ( ! isset( $demarches[ $type ] ) ) {
        $type = 'autre';
    }
    if ( ! sozialletz_rdv_is_valid_slot( $date, $time ) ) {
        wp_send_json_error( array( 'message' => 'Ce créneau n\'est pas valide. Rendez-vous uniquement le samedi matin.', 'code' => 'slot_invalid' ) );
    }

    // Verrou atomique pour éviter une double réservation simultanée
    $lock = 'sl_rdv_lock_' . md5( $date . $time );
    if ( ! add_option( $lock, time(), '', 'no' ) ) {
        if ( (int) get_option( $lock ) < time() - 30 ) {
            delete_option( $lock );
            add_option( $lock, time(), '', 'no' );
        } else {
            wp_send_json_error( array( 'message' => 'Ce créneau vient d\'être pris. Merci d\'en choisir un autre.', 'code' => 'slot_taken' ) );
        }
    }

    $booked = sozialletz_rdv_booked();
    if ( isset( $booked[ $date ] ) && in_array( $time, $booked[ $date ], true ) ) {
        delete_option( $lock );
        wp_send_json_error( array( 'message' => 'Ce créneau vient d\'être pris. Merci d\'en choisir un autre.', 'code' => 'slot_taken' ) );
    }

    $post_id = wp_insert_post( array(
        'post_type'   => 'sl_rdv',
        'post_status' => 'publish',
        'post_title'  => $nom,
    ), true );

    if ( is_wp_error( $post_id ) ) {
        delete_option( $lock );
        wp_send_json_error( array( 'message' => 'Une erreur est survenue. Merci de réessayer.' ), 500 );
    }

    update_post_meta( $post_id, '_sl_rdv_date', $date );
    update_post_meta( $post_id, '_sl_rdv_time', $time );
    update_post_meta( $post_id, '_sl_rdv_tel', $tel );
    update_post_meta( $post_id, '_sl_rdv_email', $email );
    update_post_meta( $post_id, '_sl_rdv_type', $type );
    update_post_meta( $post_id, '_sl_rdv_type_label', $demarches[ $type ] );
    update_post_meta( $post_id, '_sl_rdv_besoin', $besoin );

    delete_option( $lock );
    set_transient( $key, $n + 1, HOUR_IN_SECONDS );

    // E-mails
    $c         = sozialletz_rdv_config();
    $dt        = DateTimeImmutable::createFromFormat( '!Y-m-d', $date, wp_timezone() );
    $date_lisible = wp_date( 'l j F Y', $dt->getTimestamp() );
    $site      = wp_specialchars_decode( get_bloginfo( 'name' ), ENT_QUOTES );

    $admin_body = "Nouvelle demande de rendez-vous\n\n"
        . "Date : $date_lisible à $time\n"
        . "Nom : $nom\nTéléphone : $tel\nE-mail : $email\n"
        . 'Démarche : ' . $demarches[ $type ] . "\n\n"
        . "Besoin exprimé :\n$besoin\n\n"
        . 'Gérer : ' . admin_url( 'post.php?post=' . $post_id . '&action=edit' );
    wp_mail( $c['notify_email'], "[RDV] $date_lisible $time — $nom", $admin_body, array( 'Reply-To: ' . $nom . ' <' . $email . '>' ) );

    $user_body = "Bonjour $nom,\n\n"
        . "Votre rendez-vous est bien enregistré :\n\n"
        . "  Date : $date_lisible\n  Heure : $time\n  Lieu : " . $c['address'] . "\n\n"
        . "Merci d'apporter les documents en lien avec votre démarche (courriers reçus, pièce d'identité…).\n"
        . "En cas d'empêchement, répondez simplement à cet e-mail.\n\n"
        . "À samedi,\nL'équipe $site";
    wp_mail( $email, 'Confirmation de votre rendez-vous — ' . $site, $user_body, array( 'Reply-To: ' . $c['notify_email'] ) );

    wp_send_json_success( array(
        'message' => "Votre rendez-vous est enregistré pour le $date_lisible à $time. Un e-mail de confirmation vient de vous être envoyé.",
        'date'    => $date,
        'time'    => $time,
    ) );
}