<?php
/*
Template Name: Page 6 - Le Journal
*/
get_header(); 

function sl_get_asset_url( $name ) {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();
    $paths = array(
        '/assets/' . $name . '.png',
        '/assets/' . $name . '.jpg',
        '/assets/images/' . $name . '.png',
        '/assets/images/' . $name . '.jpg',
    );
    foreach ( $paths as $rel_path ) {
        if ( file_exists( $theme_dir . $rel_path ) ) {
            return esc_url( $theme_uri . $rel_path );
        }
    }
    return esc_url( $theme_uri . '/assets/' . $name . '.png' );
}
?>

<main class="grid-container" style="padding-top: 1rem; padding-bottom: 2.5rem;">

    <!-- EN-TÊTE INSTITUTIONNEL AVEC ILLUSTRATION -->
    <header class="sl-box sl-box-cream" style="border-left: 6px solid var(--sl-teal-lu); margin-bottom: 1.5rem;">
        <div class="grid-x grid-margin-x align-middle">
            <div class="cell medium-8">
                <span class="sl-tag-pill" style="background: var(--sl-teal-dark); color: #ffffff; margin-bottom: 0.5rem;">
                    📰 LE JOURNAL • IDENTITÉ &amp; ENGAGEMENTS
                </span>
                <h1 class="brand-title" style="font-size: 2.25rem; margin-bottom: 0.45rem;">
                    <span class="sl-title-navy">SozialLëtz</span><span class="sl-title-lu">.lu</span> &amp; OLICAS asbl
                </h1>
                <p style="font-size: 0.96rem; margin: 0; color: var(--sl-navy-soft); line-height: 1.5;">
                    Découvrez la ligne éditoriale, la direction, les missions, les valeurs, l'équipe de rédaction et l'espace de participation citoyenne du média solidaire du Luxembourg.
                </p>
            </div>
            <div class="cell medium-4 text-center">
                <img src="<?php echo sl_get_asset_url( 'onTheWorldSansBG' ); ?>" alt="SozialLëtz.lu dans le monde" style="max-height: 135px; width: auto; object-fit: contain;">
            </div>
        </div>
    </header>

    <div class="grid-x grid-margin-x">

        <!-- =========================================================
             COLONNE GAUCHE (7 colonnes)
        ========================================================== -->
        <div class="cell large-7">

            <!-- 1. QUI SOMMES-NOUS ? -->
            <section id="qui-sommes-nous" class="sl-box sl-box-cream" style="border-top: 4px solid var(--sl-teal-lu);">
                <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 0.8rem;">
                    <img src="<?php echo sl_get_asset_url( 'terreSurLesMainsSansBG' ); ?>" alt="Qui sommes-nous" class="sl-icon-img">
                    <div>
                        <span class="sl-eyebrow" style="margin: 0;">Identité du Média</span>
                        <h2 class="sl-section-title" style="margin: 0;">Qui sommes-nous ?</h2>
                    </div>
                </div>
                <p style="font-size: 0.94rem; line-height: 1.65; margin-bottom: 0.9rem;">
                    <strong>SozialLëtz.lu</strong> est un journal citoyen en ligne indépendant et émergent, édité et publié par l’<strong>Observatoire Luxembourgeois pour l’Information, la Communication et l’Action Sociale — OLICAS asbl</strong>. Positionné au carrefour du journalisme citoyen, de la solidarité, des droits, de la recherche et de l’action internationale, le média vise à informer avec rigueur, à donner de la visibilité aux initiatives sociales et associatives, à promouvoir l’accessibilité universelle (WCAG) et à soutenir l’engagement citoyen, notamment auprès de la jeunesse.
                </p>
                <!-- 3 pastilles visuelles clés -->
                <div class="grid-x grid-margin-x small-up-3 text-center">
                    <div class="cell">
                        <div class="sl-journal-badge-card">
                            <span style="font-size: 1.35rem;">🇱🇺</span>
                            <strong>Indépendant</strong>
                            <small>R.C.S. F15947</small>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="sl-journal-badge-card">
                            <span style="font-size: 1.35rem;">♿</span>
                            <strong>Accessible</strong>
                            <small>Normes WCAG &amp; FALC</small>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="sl-journal-badge-card">
                            <span style="font-size: 1.35rem;">🎙️</span>
                            <strong>Citoyen</strong>
                            <small>Incubateur Jeunes (JRS)</small>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 2. LE DIRECTEUR -->
            <section id="le-directeur" class="sl-box sl-box-beige" style="border-left: 5px solid var(--sl-navy);">
                <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 1rem; background: rgba(255,255,255,0.65); padding: 0.85rem; border-radius: 12px;">
                    <img src="<?php echo sl_get_asset_url( 'silouhette' ); ?>" alt="Jean-Claude MBEDE FOUDA" style="width: 82px; height: 82px; border-radius: 50%; object-fit: cover; border: 3px solid var(--sl-teal-lu); background: #fff; flex-shrink: 0;">
                    <div>
                        <span class="sl-eyebrow" style="margin: 0;">✍️ Directeur de la Publication</span>
                        <h2 class="sl-section-title" style="margin: 0.1rem 0; font-size: 1.35rem;">Jean-Claude MBEDE FOUDA</h2>
                        <span style="font-size: 0.8rem; font-weight: 600; color: var(--sl-teal-dark);">Giornalista Professionista • Reconnu par le Conseil de Presse du Luxembourg</span>
                    </div>
                </div>

                <p style="font-size: 0.92rem; line-height: 1.65;">
                    Directeur de la Publication de <strong>SozialLëtz.lu</strong>, <strong>Jean-Claude MBEDE FOUDA</strong> est un journaliste expérimenté inscrit à l’Ordre national des Journalistes italiens depuis mars 2013 dans la catégorie <em>Giornalista Professionista</em>, ce qui lui vaut d’être également reconnu comme journaliste professionnel par le Conseil de Presse du Luxembourg. Il a mené une riche carrière marquée par un engagement constant pour l’éthique et le respect de la déontologie journalistique.
                </p>
                <p style="font-size: 0.92rem; line-height: 1.65;">
                    À 23 ans, il s’était distingué en devenant pendant huit ans correspondant en Afrique centrale pour <em>Voice of America</em> – VoA et <em>Radio Vatican</em>, couvrant notamment des élections sensibles dans la région, des campagnes de vaccination, des coups d’État ainsi que de nombreuses missions d’institutions de Bretton Woods en négociation avec des gouvernements. Défenseur engagé de l’éthique, des droits des femmes et des enfants et de l’égalité des chances, il a ensuite élargi son parcours du journalisme vers la coopération internationale et la Diplomatie. De 2013 à 2025, il a travaillé — y compris au Pakistan, en Afghanistan, au Liban, en Syrie, en Éthiopie, en Tunisie et en République démocratique du Congo — pour l’Agence italienne de Coopération (AICS), l’Union européenne (gestion des projets de communication) et l’UNICEF, avant de réaliser son aspiration à la communication humanitaire en représentant en 2025 le Grand-Duché de Luxembourg comme responsable Communication Terrain en intersection pour le Pool international de Médecins Sans Frontières (MSF) en RD Congo.
                </p>
                <p style="font-size: 0.92rem; line-height: 1.65; margin-bottom: 0;">
                    Observateur attentif et réservé (qualités héritées de sa décennie dans les arcanes diplomatiques) des dynamiques internationales et engagé dans la promotion du dialogue et de la paix, cet enseignant occasionnel à l’Université de Parme (Italie) a été désigné courant 2025 comme médiateur lors des consultations pour la paix au Cameroun auprès du Pape Léon par la société civile. Citoyen du Monde résidant au Grand-Duché de Luxembourg depuis 2021, ancien réfugié politique qui considère le Luxembourg comme une <strong>« Terre Promise »</strong> pour sa famille, il entend partager son expérience internationale multisectorielle avec les plus jeunes.
                </p>
            </section>

            <!-- 3. NOS MISSIONS & NOS VALEURS (CARTES VISUELLES) -->
            <section id="missions" class="sl-box sl-box-cream">
                <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 0.9rem;">
                    <img src="<?php echo sl_get_asset_url( 'poignéeDeMainHousseSansBG' ); ?>" alt="Nos Missions et Valeurs" class="sl-icon-img">
                    <div>
                        <span class="sl-eyebrow" style="margin: 0;">Cap Éditorial &amp; Social</span>
                        <h2 class="sl-section-title" style="margin: 0;">Nos Missions &amp; Nos Valeurs</h2>
                    </div>
                </div>

                <div class="grid-x grid-margin-x" style="margin-bottom: 1rem;">
                    <div class="cell medium-4" style="margin-bottom: 0.6rem;">
                        <div class="sl-journal-pillar">
                            <div style="font-size: 1.4rem; margin-bottom: 0.3rem;">📢</div>
                            <h3 style="font-size: 0.98rem; color: var(--sl-teal-dark); margin-bottom: 0.3rem;">Informer librement</h3>
                            <p style="font-size: 0.83rem; line-height: 1.45; margin: 0;">Proposer des contenus fiables, pédagogiques et accessibles sur la solidarité, les droits, la vie associative et l’action internationale.</p>
                        </div>
                    </div>
                    <div class="cell medium-4" style="margin-bottom: 0.6rem;">
                        <div class="sl-journal-pillar">
                            <div style="font-size: 1.4rem; margin-bottom: 0.3rem;">🎓</div>
                            <h3 style="font-size: 0.98rem; color: var(--sl-teal-dark); margin-bottom: 0.3rem;">Engager la jeunesse</h3>
                            <p style="font-size: 0.83rem; line-height: 1.45; margin: 0;">Accompagner les jeunes (0–30 ans) dans l’acquisition de repères critiques, de compétences multimédia et d’un engagement solidaire.</p>
                        </div>
                    </div>
                    <div class="cell medium-4" style="margin-bottom: 0.6rem;">
                        <div class="sl-journal-pillar">
                            <div style="font-size: 1.4rem; margin-bottom: 0.3rem;">🤝</div>
                            <h3 style="font-size: 0.98rem; color: var(--sl-teal-dark); margin-bottom: 0.3rem;">Relier les acteurs</h3>
                            <p style="font-size: 0.83rem; line-height: 1.45; margin: 0;">Mettre en lumière les acteurs de terrain, croiser les regards avec la recherche et favoriser l’accès effectif aux droits.</p>
                        </div>
                    </div>
                </div>

                <h3 id="valeurs" class="sl-section-title" style="font-size: 1.15rem; border-bottom: 2px solid var(--sl-teal-lu); padding-bottom: 0.35rem;">
                    Nos 4 Valeurs Fondamentales
                </h3>
                <div class="grid-x grid-margin-x small-up-1 medium-up-2">
                    <div class="cell" style="margin-bottom: 0.5rem;">
                        <div class="sl-journal-value-item">
                            <span>⚖️</span>
                            <div><strong>Éthique et déontologie :</strong> respect strict des règles professionnelles, de la vérification des faits et de l’indépendance éditoriale.</div>
                        </div>
                    </div>
                    <div class="cell" style="margin-bottom: 0.5rem;">
                        <div class="sl-journal-value-item">
                            <span>🌍</span>
                            <div><strong>Inclusion et égalité des chances :</strong> parité femmes-hommes, accueil de la diversité et ouverture aux personnes vulnérables.</div>
                        </div>
                    </div>
                    <div class="cell" style="margin-bottom: 0.5rem;">
                        <div class="sl-journal-value-item">
                            <span>👁️</span>
                            <div><strong>Accessibilité universelle :</strong> conception attentive aux normes <strong>WCAG</strong> et à la clarté du propos pour le plus grand nombre.</div>
                        </div>
                    </div>
                    <div class="cell" style="margin-bottom: 0.5rem;">
                        <div class="sl-journal-value-item">
                            <span>🕊️</span>
                            <div><strong>Solidarité, dignité et dialogue :</strong> refus de la stigmatisation, défense des droits humains et promotion d’une société plus juste.</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 4. LA CHARTE ÉDITORIALE & LE CODE ÉTHIQUE -->
            <section id="code-ethique" class="sl-box sl-box-cream" style="border-left: 5px solid var(--sl-teal-lu);">
                <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 0.8rem;">
                    <img src="<?php echo sl_get_asset_url( 'pexelsDiagrame' ); ?>" alt="Charte éditoriale" class="sl-icon-img">
                    <div>
                        <span class="sl-eyebrow" style="margin: 0;">Rigueur &amp; Déontologie</span>
                        <h2 class="sl-section-title" style="margin: 0;">Charte éditoriale &amp; Code Éthique</h2>
                    </div>
                </div>

                <ul style="font-size: 0.9rem; line-height: 1.55; padding-left: 1.2rem; margin-bottom: 1.2rem;">
                    <li style="margin-bottom: 0.4rem;"><strong>🔍 Recherche de la vérité et vérification des faits :</strong> recoupement rigoureux des sources, refus des informations non vérifiées et du plagiat.</li>
                    <li style="margin-bottom: 0.4rem;"><strong>🛡️ Indépendance éditoriale :</strong> autonomie vis-à-vis des pouvoirs publics, des partis politiques, des intérêts commerciaux et des bailleurs de fonds.</li>
                    <li style="margin-bottom: 0.4rem;"><strong>🔒 Protection des sources et droit de réponse :</strong> confidentialité des sources protégées et garantie d’un droit de réponse équitable.</li>
                    <li style="margin-bottom: 0.4rem;"><strong>💙 Respect de la dignité humaine :</strong> traitement respectueux des personnes vulnérables et proscription de tout propos discriminatoire.</li>
                    <li style="margin-bottom: 0.4rem;"><strong>🧒 Protection des jeunes et mineurs :</strong> autorisation écrite préalable des représentants légaux pour tout mineur et relecture systématique.</li>
                    <li><strong>✏️ Transparence et correction :</strong> correction visible, rapide et datée de toute erreur factuelle constatée après publication.</li>
                </ul>

                <div class="sl-box sl-box-beige" style="margin-bottom: 0;">
                    <h3 style="font-size: 1.05rem; font-weight: 700; color: var(--sl-navy); margin-bottom: 0.4rem;">
                        📜 Code de déontologie du Conseil de Presse du Luxembourg
                    </h3>
                    <p style="font-size: 0.88rem; line-height: 1.55; margin-bottom: 0.6rem;">
                        <strong>SozialLëtz.lu</strong> s’inscrit dans le respect du <strong>Code de déontologie de la presse et des médias</strong>, adopté par le <strong>Conseil de Presse du Luxembourg</strong> (loi du 8 juin 2004 sur la liberté d'expression dans les médias).
                    </p>
                    <a href="https://www.press.lu/wp-content/uploads/2025/01/Code-de-deontologie.pdf" target="_blank" rel="noopener noreferrer" class="button sl-btn-rdv" style="font-size: 0.8rem !important; padding: 0.45rem 1.1rem !important;">
                        Télécharger le Code de déontologie (PDF) &rarr;
                    </a>
                </div>
            </section>

            <!-- 5. FORMULAIRE DE SOUMISSION DE TRIBUNE / ARTICLE CITOYEN -->
            <section id="soumission-citoyenne" class="sl-box sl-box-mint" style="border-left: 5px solid var(--sl-teal-lu);">
                <span class="sl-eyebrow">✍️ Participation Citoyenne &amp; Opinions</span>
                <h2 class="sl-section-title" style="border-bottom: 2px solid var(--sl-teal-lu); padding-bottom: 0.4rem;">
                    Proposer une tribune ou devenir Rédacteur Citoyen
                </h2>
                <p style="font-size: 0.86rem; margin-bottom: 1rem;">
                    Conformément au droit de la presse luxembourgeois, toute proposition de tribune ou d'article est relue et validée par la rédaction professionnelle avant publication.
                </p>

                <?php
                $journal_form_sent = false;
                if ( isset( $_POST['sl_journal_tribune_submit'] ) && isset( $_POST['sl_journal_nonce'] ) && wp_verify_nonce( $_POST['sl_journal_nonce'], 'sl_journal_tribune_action' ) ) {
                    $j_nom      = sanitize_text_field( $_POST['sl_nom'] ?? '' );
                    $j_prenom   = sanitize_text_field( $_POST['sl_prenom'] ?? '' );
                    $j_cp       = sanitize_text_field( $_POST['sl_cp'] ?? '' );
                    $j_email    = sanitize_email( $_POST['sl_email'] ?? '' );
                    $j_tel      = sanitize_text_field( $_POST['sl_tel'] ?? '' );
                    $j_rubrique = sanitize_text_field( $_POST['sl_rubrique'] ?? '' );
                    $j_contenu  = sanitize_textarea_field( $_POST['sl_contenu'] ?? '' );

                    if ( $j_nom && $j_prenom && is_email( $j_email ) && $j_contenu && ! empty( $_POST['sl_rgpd'] ) ) {
                        $to      = get_option( 'admin_email' );
                        $subject = '[SozialLëtz.lu - Tribune / Article] ' . $j_prenom . ' ' . $j_nom;
                        $message = "Auteur : $j_prenom $j_nom ($j_cp)\nEmail : $j_email\nTéléphone : $j_tel\nRubrique : $j_rubrique\n\nContenu :\n$j_contenu";
                        wp_mail( $to, $subject, $message );
                        $journal_form_sent = true;
                    }
                }
                ?>

                <?php if ( $journal_form_sent ) : ?>
                    <div class="sl-form-success">
                        Merci ! Votre tribune a bien été envoyée à la rédaction de <strong>SozialLëtz.lu</strong>.
                    </div>
                <?php endif; ?>

                <form action="#soumission-citoyenne" method="post">
                    <?php wp_nonce_field( 'sl_journal_tribune_action', 'sl_journal_nonce' ); ?>
                    <div class="grid-x grid-margin-x">
                        <div class="cell medium-6">
                            <label style="font-size: 0.85rem; font-weight: 700;">Nom *
                                <input type="text" name="sl_nom" required style="border-radius: 8px;">
                            </label>
                        </div>
                        <div class="cell medium-6">
                            <label style="font-size: 0.85rem; font-weight: 700;">Prénom *
                                <input type="text" name="sl_prenom" required style="border-radius: 8px;">
                            </label>
                        </div>
                        <div class="cell medium-4">
                            <label style="font-size: 0.85rem; font-weight: 700;">Code postal *
                                <input type="text" name="sl_cp" placeholder="Ex: L-2355" required style="border-radius: 8px;">
                            </label>
                        </div>
                        <div class="cell medium-4">
                            <label style="font-size: 0.85rem; font-weight: 700;">Email *
                                <input type="email" name="sl_email" required style="border-radius: 8px;">
                            </label>
                        </div>
                        <div class="cell medium-4">
                            <label style="font-size: 0.85rem; font-weight: 700;">Téléphone
                                <input type="tel" name="sl_tel" style="border-radius: 8px;">
                            </label>
                        </div>
                        <div class="cell small-12">
                            <label style="font-size: 0.85rem; font-weight: 700;">Rubrique concernée
                                <select name="sl_rubrique" style="border-radius: 8px;">
                                    <option value="opinions">Opinions (Tribune libre citoyenne)</option>
                                    <option value="focus-luxembourg">Focus Luxembourg (Associations, Social, FALC, Sport)</option>
                                    <option value="le-monde">Le Monde (Coopération, Humanitaire)</option>
                                    <option value="recherche">Recherche &amp; Science</option>
                                    <option value="jrs">Blog-Jeunes Reporters Sociaux « JRS »</option>
                                </select>
                            </label>
                        </div>
                        <div class="cell small-12">
                            <label style="font-size: 0.85rem; font-weight: 700;">Votre tribune, proposition d'article ou atelier *
                                <textarea name="sl_contenu" rows="5" placeholder="Rédigez votre tribune, vos sources ou votre proposition..." required style="border-radius: 8px;"></textarea>
                            </label>
                        </div>

                        <div class="cell small-12" style="margin-bottom: 1rem;">
                            <label style="font-size: 0.8rem; display: flex; align-items: flex-start; gap: 8px; line-height: 1.4;">
                                <input type="checkbox" name="sl_rgpd" value="1" required style="margin-top: 3px;">
                                <span>
                                    En soumettant ce formulaire, j'accepte que l'asbl OLICAS stocke et traite mes données personnelles afin de gérer ma participation au journal SozialLëtz.lu conformément au RGPD. *
                                </span>
                            </label>
                        </div>

                        <div class="cell small-12">
                            <button type="submit" name="sl_journal_tribune_submit" class="button sl-btn-submit-article">
                                Envoyer ma tribune à la rédaction &rarr;
                            </button>
                        </div>
                    </div>
                </form>
            </section>

        </div>

        <!-- =========================================================
             COLONNE DROITE (5 colonnes)
        ========================================================== -->
        <aside class="cell large-5">

            <!-- 1. LA RÉDACTION & L'ÉQUIPE -->
            <section id="la-redaction" class="sl-box sl-box-cream" style="border-top: 4px solid var(--sl-teal-lu);">
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 0.7rem;">
                    <img src="<?php echo sl_get_asset_url( 'pexelsCroixRouge' ); ?>" alt="La Rédaction" class="sl-icon-img">
                    <div>
                        <span class="sl-eyebrow" style="margin: 0;">Gouvernance &amp; Rédaction</span>
                        <h2 class="sl-section-title" style="margin: 0;">La Rédaction &amp; L'Équipe</h2>
                    </div>
                </div>
                <p style="font-size: 0.88rem; line-height: 1.55; margin-bottom: 1rem;">
                    La rédaction de <strong>SozialLëtz.lu</strong> réunit des journalistes professionnels, des contributeurs bénévoles, des experts thématiques et de jeunes reporters en formation (Voix &amp; Talent / JRS), placés sous l’encadrement d’<strong>OLICAS asbl</strong>.
                </p>

                <div style="font-size: 0.86rem; line-height: 1.55;">
                    <div class="sl-team-card">
                        <strong style="color: var(--sl-teal-dark); text-transform: uppercase; font-family: 'Oswald', sans-serif;">🏛️ Direction &amp; Administration</strong><br>
                        <strong>Président du CA / Directeur de Publication :</strong> Jean-Claude MBEDE FOUDA<br>
                        <strong>Directrice Générale :</strong> Cécile Marie Sonia MIMBOE ONGUENE<br>
                        <strong>Secrétaire Générale :</strong> Fatiha Rahmi
                    </div>

                    <div class="sl-team-card">
                        <strong style="color: var(--sl-teal-dark); text-transform: uppercase; font-family: 'Oswald', sans-serif;">🖋️ Rédaction &amp; Digital</strong><br>
                        <strong>Rédacteur-en-Chef :</strong> <em>À pourvoir</em><br>
                        <strong>Coordonnateur « JRS » :</strong> <em>À pourvoir</em><br>
                        <strong>Communication Digitale &amp; Technique :</strong> Hubert Mubake / Huzaifa Baloch
                    </div>

                    <div class="sl-team-card">
                        <strong style="color: var(--sl-teal-dark); text-transform: uppercase; font-family: 'Oswald', sans-serif;">🌐 Correspondants Internationaux</strong><br>
                        <strong>Kiram Tadesse</strong> (Addis-Abeba – Éthiopie)<br>
                        <span style="color: var(--sl-navy-soft);">Cotonou (Bénin), Malawi, Cap-Vert, Rwanda, Togo, Burkina Faso, Mali, Niger, Sénégal, Costa Rica, Salvador, Kosovo, Ukraine, RD Congo, Burundi, Kenya, Liban.</span>
                    </div>

                    <div class="sl-team-card" style="margin-bottom: 0;">
                        <strong style="color: var(--sl-teal-dark); text-transform: uppercase; font-family: 'Oswald', sans-serif;">💻 Partenaire Technique</strong><br>
                        <strong>Hugues Mubake — CREATIVDIA S.à r.l.-S</strong><br>
                        66, rue des Celtes, L-1318 – Luxembourg<br>
                        Tél : <a href="tel:+352661927952">+352 661 927 952</a> &bull; Email : <a href="mailto:contact@creativdia.com">contact@creativdia.com</a>
                    </div>
                </div>
            </section>

            <!-- 2. NOS PARTENAIRES (AVEC LOGOS EN BULLES) -->
            <section id="nos-partenaires" class="sl-box sl-box-beige" style="border-top: 4px solid var(--sl-teal-lu);">
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 0.7rem;">
                    <img src="<?php echo sl_get_asset_url( 'pexelsPoigneeDeMain' ); ?>" alt="Nos Partenaires" class="sl-icon-img">
                    <div>
                        <span class="sl-eyebrow" style="margin: 0;">Synergies &amp; Réseau</span>
                        <h2 class="sl-section-title" style="margin: 0;">Nos Partenaires</h2>
                    </div>
                </div>
                <p style="font-size: 0.88rem; line-height: 1.55; margin-bottom: 1rem;">
                    <strong>SozialLëtz.lu</strong> et <strong>OLICAS asbl</strong> développent des collaborations et synergies avec des acteurs associatifs, sociaux, éducatifs, scientifiques et institutionnels au Luxembourg et à l’international.
                </p>

                <div class="sl-partners-bubbles" style="margin-bottom: 0.5rem;">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sl-partner-bubble" title="SozialLëtz.lu">
                        <img src="<?php echo sl_get_asset_url( 'logoJournal' ); ?>" alt="SozialLëtz.lu">
                        <span>SozialLëtz.lu</span>
                    </a>
                    <?php
                    $journal_partners = new WP_Query( array(
                        'post_type'      => 'sl_partenaire',
                        'posts_per_page' => 20,
                        'orderby'        => 'menu_order date',
                        'order'          => 'ASC',
                    ) );
                    if ( $journal_partners->have_posts() ) :
                        while ( $journal_partners->have_posts() ) : $journal_partners->the_post();
                            $jp_url = get_post_meta( get_the_ID(), '_sl_partenaire_url', true ) ?: '#';
                            ?>
                            <a href="<?php echo esc_url( $jp_url ); ?>" target="_blank" rel="noopener noreferrer" class="sl-partner-bubble" title="<?php the_title_attribute(); ?>">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'thumbnail', array( 'alt' => get_the_title() ) ); ?>
                                <?php else : ?>
                                    <img src="<?php echo sl_get_asset_url( 'pexelsPoigneeDeMain' ); ?>" alt="<?php the_title_attribute(); ?>">
                                <?php endif; ?>
                                <span><?php the_title(); ?></span>
                            </a>
                        <?php endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <a href="https://luxdev.lu" target="_blank" rel="noopener noreferrer" class="sl-partner-bubble" title="LuxDev">
                            <img src="<?php echo sl_get_asset_url( 'luxdev' ); ?>" alt="LuxDev">
                            <span>LuxDev</span>
                        </a>
                        <a href="https://www.fnr.lu" target="_blank" rel="noopener noreferrer" class="sl-partner-bubble" title="FNR">
                            <img src="<?php echo sl_get_asset_url( 'FNRLOGOBlack' ); ?>" alt="FNR">
                            <span>FNR</span>
                        </a>
                    <?php endif; ?>
                </div>
            </section>

            <!-- 3. CONTACTS -->
            <section id="contacts-journal" class="sl-box sl-box-navy">
                <h2 class="sl-section-title" style="color: #ffffff; border-bottom: 1px solid rgba(255,255,255,0.2); padding-bottom: 0.5rem;">
                    📍 Contacts &amp; Siège Social
                </h2>
                <div style="font-size: 0.88rem; line-height: 1.6;">
                    <p style="margin-bottom: 0.65rem;">
                        <strong style="color: #5eead4;">Éditeur / Organisation porteuse :</strong><br>
                        OLICAS asbl — Observatoire Luxembourgeois pour l’Information, la Communication et l’Action Sociale<br>
                        Siège : 10A Rue du Puits – L-2355 Luxembourg<br>
                        N° RCS : R.C.S. Luxembourg F15947
                    </p>
                    <p style="margin-bottom: 0.65rem;">
                        <strong style="color: #5eead4;">📞 Téléphone :</strong><br>
                        <a href="tel:+35261110576" style="color: #ffffff; text-decoration: underline;">+352 61 110576</a>
                    </p>
                    <p style="margin-bottom: 0.65rem;">
                        <strong style="color: #5eead4;">✉️ Courriels :</strong><br>
                        Rédaction : <a href="mailto:redaction@sozialletz.lu" style="color: #ffffff;">redaction@sozialletz.lu</a><br>
                        OLICAS : <a href="mailto:olicas@olicas-luxembourg.eu" style="color: #ffffff;">olicas@olicas-luxembourg.eu</a><br>
                        Jeunes Reporters (JRS) : <a href="mailto:rjs@sozialletz.lu" style="color: #ffffff;">rjs@sozialletz.lu</a>
                    </p>
                    <p style="margin-bottom: 0;">
                        <a href="#soumission-citoyenne" class="footer-obs-pill">
                            Accéder au formulaire de proposition &darr;
                        </a>
                    </p>
                </div>
            </section>

        </aside>

    </div>

</main>

<?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>

<?php get_footer(); ?>