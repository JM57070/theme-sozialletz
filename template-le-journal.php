<?php
/*
Template Name: Page 6 - Le Journal
*/
get_header(); 

// Petite fonction de secours pour trouver ton image dans /assets/images/ ou /assets/ (en .png ou .jpg)
function sl_get_asset_url( $name ) {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();
    $paths = array(
        '/assets/images/' . $name . '.png',
        '/assets/images/' . $name . '.jpg',
        '/assets/' . $name . '.png',
        '/assets/' . $name . '.jpg',
    );
    foreach ( $paths as $rel_path ) {
        if ( file_exists( $theme_dir . $rel_path ) ) {
            return esc_url( $theme_uri . $rel_path );
        }
    }
    return esc_url( $theme_uri . '/assets/images/' . $name . '.png' );
}
?>

<main class="grid-container" style="padding-top: 1rem; padding-bottom: 2.5rem;">

    <!-- EN-TÊTE INSTITUTIONNEL -->
    <header class="sl-box sl-box-cream" style="border-left: 5px solid var(--sl-teal); margin-bottom: 1.5rem;">
        <span class="label" style="background: var(--sl-teal); font-weight: 700; margin-bottom: 0.4rem;">PAGE 6 • LE JOURNAL</span>
        <h1 class="brand-title" style="font-size: 2.1rem; margin-bottom: 0.4rem;">À propos de SozialLëtz.lu & OLICAS asbl</h1>
        <p style="font-size: 0.95rem; margin: 0; color: #444;">
            Informations institutionnelles, ligne éditoriale, équipe de rédaction, partenaires et espace de soumission citoyenne.
        </p>
    </header>

    <div class="grid-x grid-margin-x">

        <!-- =========================================================
             COLONNE GAUCHE (7 colonnes) : À Propos & Formulaire Citoyen
        ========================================================== -->
        <div class="cell large-7">

            <!-- 1. RUBRIQUE : À PROPOS DE SOZIALLËTZ.LU -->
            <section id="a-propos" class="sl-box sl-box-cream">
                <h2 class="sl-section-title" style="border-bottom: 2px solid var(--sl-teal); padding-bottom: 0.4rem;">
                    1. À Propos de SozialLëtz.lu
                </h2>

                <!-- Sous-rubrique : Notre ligne éditoriale -->
                <div style="margin-bottom: 1.2rem;">
                    <h3 style="font-size: 1.05rem; font-weight: 700; color: var(--sl-teal);">
                        &rsaquo; Notre ligne éditoriale
                    </h3>
                    <p style="font-size: 0.9rem; line-height: 1.55;">
                        <strong>SozialLëtz.lu</strong> est le média citoyen de la solidarité, des droits, de la recherche et de l'action internationale du Luxembourg. Édité par <strong>OLICAS asbl</strong>, le journal donne la parole aux acteurs de terrain, vulgarise les travaux scientifiques en sciences humaines et sociales, et promeut l'éducation aux médias ainsi que l'accessibilité de l'information (notamment via le langage FALC).
                    </p>
                </div>

                <!-- Sous-rubrique : Direction et Ours -->
                <div class="sl-box sl-box-beige" style="margin-bottom: 0;">
                    <h3 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 0.6rem;">
                        &rsaquo; Direction et Ours (Mentions obligatoires)
                    </h3>
                    <div class="grid-x grid-margin-x" style="font-size: 0.85rem;">
                        <div class="cell medium-6">
                            <p style="margin-bottom: 0.4rem;"><strong>Éditeur :</strong> OLICAS asbl (Observatoire de communication)</p>
                            <p style="margin-bottom: 0.4rem;"><strong>Immatriculation :</strong> R.C.S. Luxembourg n° F15947</p>
                            <p style="margin-bottom: 0.4rem;"><strong>Siège social :</strong> 124, rue du Puits L-2355 Luxembourg</p>
                        </div>
                        <div class="cell medium-6">
                            <p style="margin-bottom: 0.4rem;"><strong>Directeur de la publication :</strong> Jean-Claude Mbede Fouda</p>
                            <p style="margin-bottom: 0.4rem;"><strong>Rédaction en chef / Éditorial :</strong> Jean-Claude Mbede Fouda</p>
                            <p style="margin-bottom: 0.4rem;"><strong>Hébergement :</strong> [Nom de l'hébergeur UE]</p>
                        </div>
                    </div>
                    <p style="font-size: 0.8rem; margin-top: 0.6rem; margin-bottom: 0;">
                        <a href="<?php echo esc_url( home_url( '/mentions-legales/' ) ); ?>" style="text-decoration: underline; font-weight: 700; color: var(--sl-teal);">
                            Consulter l'intégralité des Mentions Légales & Droit de réponse &rarr;
                        </a>
                    </p>
                </div>
            </section>

            <!-- 2. RUBRIQUE : FORMULAIRE DE SOUMISSION D'ARTICLE CITOYEN -->
            <section id="soumission-citoyenne" class="sl-box sl-box-mint">
                <h2 class="sl-section-title" style="border-bottom: 2px solid #2e6f40; padding-bottom: 0.4rem;">
                    Soumettre un article ou devenir Rédacteur Citoyen
                </h2>
                <p style="font-size: 0.85rem; margin-bottom: 1rem;">
                    Conformément au droit de la presse luxembourgeois, toute proposition d'article est relue et validée par la rédaction professionnelle avant publication.
                </p>

                <form action="#" method="post">
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
                                    <option value="focus-luxembourg">Focus Luxembourg (Associations, Social, FALC, Sport)</option>
                                    <option value="le-monde">Le Monde (Coopération, Humanitaire)</option>
                                    <option value="recherche">Recherche & Science</option>
                                    <option value="intersections">Les InterSections (Tribune libre citoyenne)</option>
                                </select>
                            </label>
                        </div>
                        <div class="cell small-12">
                            <label style="font-size: 0.85rem; font-weight: 700;">Votre proposition d'article / Vos motivations *
                                <textarea name="sl_contenu" rows="5" placeholder="Présentez votre sujet, vos sources (règle des 5W) ou votre texte..." required style="border-radius: 8px;"></textarea>
                            </label>
                        </div>

                        <!-- Case à cocher RGPD obligatoire (non pré-cochée) -->
                        <div class="cell small-12" style="margin-bottom: 1rem;">
                            <label style="font-size: 0.8rem; display: flex; align-items: flex-start; gap: 8px; line-height: 1.4;">
                                <input type="checkbox" name="sl_rgpd" required style="margin-top: 3px;">
                                <span>
                                    En soumettant ce formulaire, j'accepte que l'asbl OLICAS stocke et traite mes données personnelles afin de gérer ma participation au journal SozialLëtz.lu conformément à la <a href="<?php echo esc_url( home_url( '/politique-confidentialite/' ) ); ?>" style="text-decoration: underline; font-weight: 700;">Politique de Confidentialité</a>. *
                                </span>
                            </label>
                        </div>

                        <div class="cell small-12">
                            <button type="submit" class="button" style="background-color: var(--sl-teal); margin: 0;">
                                Envoyer ma contribution à la rédaction
                            </button>
                        </div>
                    </div>
                </form>
            </section>

        </div>

        <!-- =========================================================
             COLONNE DROITE (5 colonnes) : Équipe de rédaction + Contacts + Partenaires
        ========================================================== -->
        <aside class="cell large-5">

            <!-- BLOC DÉPLACÉ À DROITE : L'équipe de rédaction & Incubateur citoyen -->
            <div class="sl-box sl-box-cream" style="border-top: 4px solid var(--sl-teal);">
                <h3 class="rubrique-title" style="margin-bottom: 1rem;">
                    L'ÉQUIPE DE RÉDACTION & INCUBATEUR
                </h3>

                <div class="rubrique-item" style="background: #ffffff; padding: 0.7rem; border-radius: 12px; border: 1px solid var(--sl-border);">
                    <img src="<?php echo sl_get_asset_url( 'directeur' ); ?>" alt="Direction & Éditorial" style="width: 64px; height: 64px; object-fit: cover; border-radius: 10px; flex-shrink: 0;">
                    <div>
                        <div style="font-size: 0.9rem; font-weight: 800; color: var(--sl-teal);">Direction & Éditorial</div>
                        <div style="font-size: 0.8rem; color: #555;">Validation légale & ligne éditoriale</div>
                    </div>
                </div>

                <div class="rubrique-item" style="background: #ffffff; padding: 0.7rem; border-radius: 12px; border: 1px solid var(--sl-border);">
                    <img src="<?php echo sl_get_asset_url( 'equipe' ); ?>" alt="Rédaction Professionnelle" style="width: 64px; height: 64px; object-fit: cover; border-radius: 10px; flex-shrink: 0;">
                    <div>
                        <div style="font-size: 0.9rem; font-weight: 800; color: var(--sl-teal);">Rédaction Professionnelle</div>
                        <div style="font-size: 0.8rem; color: #555;">Enquêtes, reportages & Fact-Checking</div>
                    </div>
                </div>

                <div class="rubrique-item" style="background: #ffffff; padding: 0.7rem; border-radius: 12px; border: 1px solid var(--sl-border); margin-bottom: 0;">
                    <img src="<?php echo sl_get_asset_url( 'contributeur' ); ?>" alt="Rédacteurs Citoyens" style="width: 64px; height: 64px; object-fit: cover; border-radius: 10px; flex-shrink: 0;">
                    <div>
                        <div style="font-size: 0.9rem; font-weight: 800; color: var(--sl-teal);">Rédacteurs Citoyens</div>
                        <div style="font-size: 0.8rem; color: #555;">Jeunes Reporters & Bénévoles OLICAS</div>
                    </div>
                </div>
            </div>

            <!-- Carte 2 : Contactez-Nous & Service de Presse -->
            <div class="sl-box sl-box-navy">
                <h3 class="rubrique-title" style="color: #ffffff; border-bottom: 1px solid rgba(255,255,255,0.2); padding-bottom: 0.6rem;">
                    CONTACTEZ-NOUS & PRESSE
                </h3>
                <div style="font-size: 0.85rem; line-height: 1.6;">
                    <p style="margin-bottom: 0.6rem;">
                        <strong style="color: #8ecae6;">Rédaction & Service de presse :</strong><br>
                        redaction@sozialletz.lu
                    </p>
                    <p style="margin-bottom: 0.6rem;">
                        <strong style="color: #8ecae6;">Droit de réponse (Direction) :</strong><br>
                        direction@olicas-luxembourg.eu
                    </p>
                    <p style="margin-bottom: 0;">
                        <strong style="color: #8ecae6;">Adresse postale :</strong><br>
                        OLICAS asbl — R.C.S. F15947<br>
                        124, rue du Puits L-2355 Luxembourg
                    </p>
                </div>
            </div>

            <!-- Carte 3 : Partenaires & Réseaux -->
            <div class="sl-box sl-box-beige">
                <h3 class="rubrique-title">PARTENAIRES & RÉSEAUX</h3>

                <div class="rubrique-item">
                    <img src="<?php echo sl_get_asset_url( 'onTheWorldSansBG' ); ?>" alt="" class="sl-icon-img">
                    <span style="font-size: 0.85rem;"><strong>Observatoire OLICAS</strong><br>Recherche & Éducation aux médias</span>
                </div>

                <div class="rubrique-item">
                    <img src="<?php echo sl_get_asset_url( 'livre' ); ?>" alt="" class="sl-icon-img">
                    <span style="font-size: 0.85rem;"><strong>Acteurs Académiques</strong><br>Synergies FNR & MESR Luxembourg</span>
                </div>

                <div class="rubrique-item" style="margin-bottom: 0;">
                    <img src="<?php echo sl_get_asset_url( 'croixRougeSansBG' ); ?>" alt="" class="sl-icon-img">
                    <span style="font-size: 0.85rem;"><strong>Réseau Associatif & ASBL</strong><br>Acteurs sociaux de la Grande Région</span>
                </div>
            </div>

            <!-- Carte 4 : Charte de Fact-Checking -->
            <div class="sl-box sl-box-cream">
                <h3 class="rubrique-title">CHARTE ÉDITORIALE</h3>
                <p style="font-size: 0.82rem; line-height: 1.4; margin-bottom: 0.6rem;">
                    Chaque article publié sur SozialLëtz.lu respecte la règle des <strong>3 piliers de vérification</strong> :
                </p>
                <ul style="font-size: 0.8rem; margin-bottom: 0; padding-left: 1.1rem;">
                    <li>Double vérification des sources</li>
                    <li>Distinction stricte entre faits (5W) et commentaires</li>
                    <li>Droit à la contradiction systématique</li>
                </ul>
            </div>

        </aside>

    </div>

</main>
    <!-- Indispensable pour qu'Elementor puisse ouvrir la page -->
    <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>

<?php get_footer(); ?>
