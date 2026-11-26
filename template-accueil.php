<?php
/*
Template Name: Accueil SozialLëtz (Cahier des charges)
*/
get_header(); 
?>

<main id="sl-main-content" class="grid-container">

    <!-- BANDEAU DYNAMIQUE "EN CONTINU" -->
    <div class="sl-breaking-bar">
        <span class="sl-breaking-badge">EN CONTINU</span>
        <div class="sl-breaking-track">
            <div class="sl-breaking-items">
                <span><strong>Solidarité :</strong> Ouverture des permanences du samedi matin au Centre d'écoute OLICAS</span>
                <span>&bull;</span>
                <span><strong>Jeunes Reporters (JRS) :</strong> Appel à candidatures ouvert pour la nouvelle promotion au Luxembourg</span>
                <span>&bull;</span>
                <span><strong>Recherche &amp; Société :</strong> Découvrez les dernières tribunes des chercheurs de la Grande Région</span>
                <span>&bull;</span>
                <span><strong>Solidarité :</strong> Ouverture des permanences du samedi matin au Centre d'écoute OLICAS</span>
            </div>
        </div>
    </div>

    <!-- =================================================================
         RANGÉE 1 :
         GAUCHE : Centre d'écoute OLICAS + Le Portrait de la Semaine
         DROITE : Expression Jeunesse & Terrain « JRS »
         (Alignés en haut et en bas)
    ================================================================== -->
    <div class="grid-x grid-margin-x sl-aligned-row">
        
        <div class="cell large-8 sl-row-col">
            <!-- Centre d'écoute OLICAS -->
            <section class="sl-box sl-box-cream sl-ecoute-banner" style="border-left: 5px solid var(--sl-teal-lu); margin-bottom: 0.95rem;">
                <div class="grid-x grid-margin-x align-middle">
                    <div class="cell medium-6">
                        <span class="sl-eyebrow">Accompagnement &amp; Solidarité • OLICAS asbl</span>
                        <h2 class="sl-section-title" style="font-size: 1.38rem; margin-bottom: 0.4rem;">
                            Centre d'écoute OLICAS
                        </h2>
                        <p style="font-size: 0.86rem; line-height: 1.4; margin-bottom: 0.7rem; color: var(--sl-navy);">
                            Un espace confidentiel et bienveillant d'accueil, d'orientation sociale et de soutien au Luxembourg. Découvrez notre présentation vidéo et réservez votre créneau.
                        </p>
                        <button type="button" class="button sl-btn-rdv" id="sl-rdv-toggle" aria-expanded="false" aria-controls="sl-rdv-modal">
                            Prendre RDV &rarr;
                        </button>
                    </div>
                    <div class="cell medium-6">
                        <div class="sl-ecoute-video-wrap">
                            <video controls poster="https://placehold.co/480x260/162632/fdf5d7?text=Presentation+Centre+d'ecoute+OLICAS" style="width: 100%; max-height: 185px; object-fit: cover; border-radius: 10px; display: block;"></video>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Le Portrait de la Semaine -->
            <section class="sl-box sl-box-cream sl-grow-box" style="margin-bottom: 0; padding: 0.95rem 1.15rem;">
                <div class="grid-x grid-margin-x align-middle" style="height: 100%;">
                    <div class="cell medium-4 text-center">
                        <h2 class="sl-section-title" style="font-size: 1.12rem; margin-bottom: 0.4rem;">Le Portrait de la Semaine</h2>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/pexelsMainNoirDrapeau.jpg' ); ?>" alt="Le Portrait de la Semaine" style="max-height: 108px; width: 100%; object-fit: cover; border-radius: 10px;">
                    </div>
                    <div class="cell medium-8">
                        <span class="sl-eyebrow">À la Une • Portrait Social</span>
                        <div class="grid-x grid-margin-x align-middle">
                            <div class="cell small-3">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/silouhette.png' ); ?>" alt="Portrait de la semaine" style="border-radius: 8px; width: 100%; height: 90px; object-fit: cover; background: #fff;">
                            </div>
                            <div class="cell small-9">
                                <h3 style="font-size: 0.96rem; font-weight: 700; margin-bottom: 0.25rem; color: var(--sl-navy);">
                                    CLAIRE WEBER : VOLONTAIRE LUXEMBOURGEOISE EN MISSION ÉDUCATIVE
                                </h3>
                                <p style="font-size: 0.81rem; line-height: 1.32; margin-bottom: 0.35rem;">
                                    Chaque semaine, découvrez le visage et l'engagement d'un acteur de terrain ou d'un jeune reporter OLICAS.
                                </p>
                                <a href="#" class="sl-read-link" style="font-size: 0.78rem;">Lire l'article &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="cell large-4 sl-row-col">
            <section class="sl-box sl-box-mint sl-grow-box" style="border-left: 5px solid var(--sl-teal-lu); margin-bottom: 0;">
                <div>
                    <div class="studio-header" style="border-bottom-color: rgba(22, 38, 50, 0.14); margin-bottom: 0.55rem;">
                        <div>
                            <span class="sl-eyebrow" style="margin-bottom: 0.1rem;">Expression Jeunesse &amp; Terrain</span>
                            <h2 class="sl-section-title" style="margin: 0; font-size: 1.12rem; color: var(--sl-navy);">
                                BLOG-JEUNES REPORTERS SOCIAUX « JRS »
                            </h2>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/category/blog-jeunes-reporters-sociaux-jrs/' ) ); ?>" class="sl-read-link" style="font-size: 0.76rem; white-space: nowrap;">
                            Rubrique &rarr;
                        </a>
                    </div>
                    <p style="font-size: 0.82rem; line-height: 1.38; color: var(--sl-navy); margin-bottom: 0.65rem;">
                        La rédaction citoyenne des jeunes au Luxembourg : enquêtes de terrain, ateliers médias, podcasts engagés et candidatures.
                    </p>
                </div>

                <div class="grid-x grid-margin-x small-up-1">
                    <div class="cell" style="margin-bottom: 0.45rem;">
                        <a href="<?php echo esc_url( home_url( '/category/info-ateliers/' ) ); ?>" class="sl-mini-card" style="text-align: left; align-items: flex-start; padding: 0.55rem;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 0.15rem;">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/pexelsDiagrame.jpg' ); ?>" alt="" style="width: 22px; height: 22px; margin: 0;">
                                <span style="font-family: 'Oswald', sans-serif; font-size: 0.82rem; text-transform: uppercase; color: var(--sl-navy);">Info &amp; Agenda Ateliers</span>
                            </div>
                            <p style="font-size: 0.75rem; font-weight: 400; color: var(--sl-navy-soft); margin: 0; line-height: 1.25;">
                                Calendrier des formations au journalisme citoyen et sessions pratiques.
                            </p>
                        </a>
                    </div>
                    <div class="cell" style="margin-bottom: 0.45rem;">
                        <a href="<?php echo esc_url( home_url( '/category/le-podcast-jrs/' ) ); ?>" class="sl-mini-card" style="text-align: left; align-items: flex-start; padding: 0.55rem;">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 0.15rem;">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/pexelsCroixRouge.jpg' ); ?>" alt="" style="width: 22px; height: 22px; margin: 0;">
                                <span style="font-family: 'Oswald', sans-serif; font-size: 0.82rem; text-transform: uppercase; color: var(--sl-navy);">Le Podcast « JRS »</span>
                            </div>
                            <p style="font-size: 0.75rem; font-weight: 400; color: var(--sl-navy-soft); margin: 0; line-height: 1.25;">
                                Micro-trottoirs et regards croisés réalisés par les jeunes reporters.
                            </p>
                        </a>
                    </div>
                    <div class="cell">
                        <a href="<?php echo esc_url( home_url( '/category/devenir-jrs/' ) ); ?>" class="sl-mini-card" style="text-align: left; align-items: flex-start; padding: 0.55rem; border-color: var(--sl-teal-lu);">
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 0.15rem;">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/pexelsPoigneeDeMain.jpg' ); ?>" alt="" style="width: 22px; height: 22px; margin: 0;">
                                <span style="font-family: 'Oswald', sans-serif; font-size: 0.82rem; text-transform: uppercase; color: var(--sl-teal-dark);">Devenir « JRS »</span>
                            </div>
                            <p style="font-size: 0.75rem; font-weight: 400; color: var(--sl-navy-soft); margin: 0; line-height: 1.25;">
                                Rejoins la rédaction OLICAS et publie tes premiers reportages sociaux.
                            </p>
                        </a>
                    </div>
                </div>
            </section>
        </div>

    </div>

    <!-- =================================================================
         RANGÉE 2 :
         GAUCHE : Associ-Actif, Dépêches Sociales, Interview, Sport Social
         DROITE : À la Une • Le Monde du Directeur
         (Même niveau en haut et en bas)
    ================================================================== -->
    <div class="grid-x grid-margin-x sl-aligned-row">
        
        <div class="cell large-8 sl-row-col">
            <?php
            $left_rubriques = array(
                array(
                    'title'    => 'Associ-Actif',
                    'slug'     => 'associ-actif',
                    'eyebrow'  => 'Vie Associative',
                    'box_cls'  => 'sl-box-beige',
                    'icon'     => 'pexelsPoigneeDeMain.jpg',
                    'fallback' => 'Initiatives citoyennes et projets portés par les associations luxembourgeoises.',
                    'mb'       => '0.95rem',
                ),
                array(
                    'title'    => 'Dépêches Sociales',
                    'slug'     => 'depeche-sociale',
                    'eyebrow'  => 'Actualité Sociale',
                    'box_cls'  => 'sl-box-mint',
                    'icon'     => 'pexelsFamilyHousse2.jpg',
                    'fallback' => 'Brèves sociales, mesures publiques et informations pratiques au Grand-Duché.',
                    'mb'       => '0.95rem',
                ),
                array(
                    'title'    => 'Interview',
                    'slug'     => 'interview',
                    'eyebrow'  => 'Rencontres',
                    'box_cls'  => 'sl-box-mint',
                    'icon'     => 'pexelsCroixRouge.jpg',
                    'fallback' => 'Entretiens exclusifs avec les acteurs de terrain, responsables associatifs et experts.',
                    'mb'       => '0',
                ),
                array(
                    'title'    => 'Sport Social',
                    'slug'     => 'sport-social',
                    'eyebrow'  => 'Inclusion & Santé',
                    'box_cls'  => 'sl-box-beige',
                    'icon'     => 'pexelsDiagrame.jpg',
                    'fallback' => 'Le sport comme levier de cohésion sociale, d’intégration et d’accessibilité.',
                    'mb'       => '0',
                ),
            );
            ?>
            <div class="grid-x grid-margin-x" style="height: 100%;">
                <?php foreach ( $left_rubriques as $rub ) :
                    $rub_query = new WP_Query( array(
                        'category_name'  => $rub['slug'],
                        'posts_per_page' => 1,
                    ) );
                ?>
                <div class="cell medium-6" style="display: flex; margin-bottom: <?php echo esc_attr( $rub['mb'] ); ?>;">
                    <section class="sl-box <?php echo esc_attr( $rub['box_cls'] ); ?> sl-rubrique-preview-box" style="width: 100%; margin-bottom: 0; border-left: 4px solid var(--sl-teal-lu);">
                        <div class="sl-rubrique-preview-head">
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/' . $rub['icon'] ); ?>" alt="<?php echo esc_attr( $rub['title'] ); ?>" class="sl-icon-img" style="width: 32px !important; height: 32px !important;">
                                <div>
                                    <span class="sl-eyebrow" style="margin: 0;"><?php echo esc_html( $rub['eyebrow'] ); ?></span>
                                    <h3 class="sl-section-title" style="font-size: 1.08rem; margin: 0;"><?php echo esc_html( $rub['title'] ); ?></h3>
                                </div>
                            </div>
                            <a href="<?php echo esc_url( home_url( '/category/' . $rub['slug'] . '/' ) ); ?>" class="sl-read-link" style="font-size: 0.75rem; white-space: nowrap;">
                                Voir tout &rarr;
                            </a>
                        </div>

                        <?php if ( $rub_query->have_posts() ) :
                            while ( $rub_query->have_posts() ) : $rub_query->the_post(); ?>
                                <article class="sl-latest-article-preview">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <a href="<?php the_permalink(); ?>" class="sl-preview-thumb-link">
                                            <?php the_post_thumbnail( 'medium', array( 'class' => 'sl-preview-thumb', 'style' => 'height: 80px;' ) ); ?>
                                        </a>
                                    <?php endif; ?>
                                    <h4 class="sl-preview-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                    <p class="sl-preview-excerpt">
                                        <?php echo wp_trim_words( get_the_excerpt(), 14, '...' ); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>" class="sl-read-link" style="font-size: 0.76rem;">Lire l'aperçu &rarr;</a>
                                </article>
                            <?php endwhile;
                            wp_reset_postdata();
                        else : ?>
                            <div class="sl-latest-article-preview">
                                <div class="sl-preview-placeholder" style="padding: 0.5rem;">
                                    <span>Dernier article • <?php echo esc_html( $rub['title'] ); ?></span>
                                </div>
                                <p class="sl-preview-excerpt" style="margin-top: 0.4rem;">
                                    <?php echo esc_html( $rub['fallback'] ); ?>
                                </p>
                                <a href="<?php echo esc_url( home_url( '/category/' . $rub['slug'] . '/' ) ); ?>" class="sl-read-link" style="font-size: 0.76rem;">Explorer la rubrique &rarr;</a>
                            </div>
                        <?php endif; ?>
                    </section>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="cell large-4 sl-row-col">
            <section class="sl-box sl-box-cream sl-grow-box" style="border-top: 4px solid var(--sl-navy); margin-bottom: 0;">
                <?php
                $edito_query = new WP_Query( array(
                    'category_name'  => 'le-monde-du-directeur',
                    'posts_per_page' => 1,
                ) );

                if ( $edito_query->have_posts() ) :
                    while ( $edito_query->have_posts() ) : $edito_query->the_post(); ?>
                        <article style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                            <div>
                                <div class="sl-director-eyebrow-row">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/silouhette.png' ); ?>" alt="Directeur de la publication" class="sl-director-avatar">
                                    <span class="sl-eyebrow" style="margin: 0;">À la Une • Le Monde du Directeur</span>
                                </div>
                                <div style="margin: 0.5rem 0 0.75rem 0;">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail( 'medium_large', array( 'style' => 'border-radius: 10px; width: 100%; height: 145px; object-fit: cover;' ) ); ?>
                                    <?php else : ?>
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/onTheWorldSansBG.png' ); ?>" alt="Le Monde du Directeur" style="border-radius: 10px; width: 100%; height: 145px; object-fit: contain; background: #fff; padding: 6px;">
                                    <?php endif; ?>
                                </div>
                                <h2 class="sl-section-title" style="font-size: 1.18rem; margin-bottom: 0.45rem;">
                                    <a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;"><?php the_title(); ?></a>
                                </h2>
                                <p style="font-size: 0.85rem; line-height: 1.42; margin-bottom: 0.6rem;">
                                    <?php echo wp_trim_words( get_the_excerpt(), 22, '...' ); ?>
                                </p>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="sl-read-link" style="font-size: 0.82rem;">
                                Lire l'éditorial complet &rarr;
                            </a>
                        </article>
                    <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                    <div>
                        <div class="sl-director-eyebrow-row">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/silouhette.png' ); ?>" alt="Directeur de la publication" class="sl-director-avatar">
                            <span class="sl-eyebrow" style="margin: 0;">À la Une • Le Monde du Directeur</span>
                        </div>
                        <p style="font-size: 0.86rem; margin: 0;">Regards hebdomadaires sur la solidarité, l’humanitaire et la coopération internationale.</p>
                    </div>
                <?php endif; ?>
            </section>
        </div>

    </div>

    <!-- =================================================================
         RANGÉE 3 :
         GAUCHE : Recherche & Science + Opinions
         DROITE : Solidarité Luxembourgeoise
    ================================================================== -->
    <div class="grid-x grid-margin-x sl-aligned-row">
        
        <div class="cell large-8 sl-row-col">
            <section class="sl-box sl-box-cream sl-science-opinions-box sl-grow-box" style="margin-bottom: 0; border-top: 4px solid var(--sl-teal-lu);">
                <div class="grid-x grid-margin-x align-middle" style="height: 100%;">
                    
                    <div class="cell medium-6 sl-science-col">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 0.6rem;">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/pexelsDiagrame.jpg' ); ?>" alt="Recherche et Science" class="sl-icon-img">
                            <div>
                                <span class="sl-eyebrow" style="margin: 0;">Observatoire &amp; Savoirs</span>
                                <h2 class="sl-section-title" style="font-size: 1.25rem; margin: 0;">RECHERCHE &amp; SCIENCE</h2>
                            </div>
                        </div>
                        <p style="font-size: 0.88rem; line-height: 1.48; color: var(--sl-navy); margin-bottom: 0.8rem;">
                            Tribunes des Chercheurs et actualités de la Recherche Scientifique au Luxembourg et en Grande Région.
                        </p>
                        <a href="<?php echo esc_url( home_url( '/category/recherche-science/' ) ); ?>" class="sl-read-link" style="font-size: 0.82rem;">
                            Consulter les travaux &rarr;
                        </a>
                    </div>

                    <div class="cell medium-6 sl-opinions-col">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 0.6rem;">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/terreSurLesMainsSansBG.png' ); ?>" alt="Opinions" class="sl-icon-img">
                            <div>
                                <span class="sl-eyebrow" style="margin: 0;">Expression Citoyenne</span>
                                <h2 class="sl-section-title" style="font-size: 1.25rem; margin: 0;">OPINIONS</h2>
                            </div>
                        </div>
                        <p style="font-size: 0.88rem; line-height: 1.48; color: var(--sl-navy); margin-bottom: 0.8rem;">
                            Tribune libre des résidents, usagers et acteurs sociaux : partagez vos analyses, vécus et propositions de terrain.
                        </p>
                        <a href="<?php echo esc_url( home_url( '/le-journal/#soumission-citoyenne' ) ); ?>" class="sl-read-link" style="font-size: 0.82rem;">
                            Proposer une tribune &rarr;
                        </a>
                    </div>

                </div>
            </section>
        </div>

        <div class="cell large-4 sl-row-col">
            <section class="sl-box sl-box-mint sl-cat-card sl-grow-box" style="margin-bottom: 0; border-top: 4px solid var(--sl-teal-lu);">
                <h3 class="sl-cat-title">SOLIDARITÉ LUXEMBOURGEOISE</h3>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/onTheWorldSansBG.png' ); ?>" alt="Solidarité Luxembourgeoise" class="sl-cat-thumb" style="max-height: 95px;">
                <ul class="sl-cat-list">
                    <li><a href="#">Agence LuxDev dans le Monde</a></li>
                    <li><a href="#">ONG Luxembourgeoise sur le Terrain</a></li>
                </ul>
            </section>
        </div>

    </div>

    <!-- =================================================================
         RANGÉE 4 :
         GAUCHE : Studio SozialLëtz • Vidéos
         DROITE : Studio SozialLëtz • Podcasts
    ================================================================== -->
    <div class="grid-x grid-margin-x sl-aligned-row" style="margin-bottom: 0;">
        
        <div class="cell large-8 sl-row-col">
            <section class="sl-box sl-box-navy studio-box sl-grow-box" style="margin-bottom: 0;">
                <div class="studio-header">
                    <h2 class="sl-section-title" style="margin:0; font-size: 1.15rem; color: #ffffff;">STUDIO <span class="sl-title-lu">SOZIALLËTZ</span> • VIDÉOS &amp; REPORTAGES</h2>
                    <a href="#" style="color: var(--sl-sand); font-size: 0.8rem; font-weight: 700;">Toutes les vidéos &rarr;</a>
                </div>
                <div class="grid-x grid-margin-x">
                    <div class="cell medium-6">
                        <div class="studio-dark-item" style="margin-bottom: 0;">
                            <div style="font-weight: 700; font-size: 0.86rem; color: #ffffff;">Documentaire : Coopération</div>
                            <div style="font-size: 0.76rem; color: #cbd2d9; margin-bottom: 0.4rem;">Immersion Offices Sociaux au Luxembourg</div>
                            <video controls poster="https://placehold.co/360x180/223848/fdf5d7?text=Documentaire+OLICAS" style="max-height: 110px; object-fit: cover;"></video>
                        </div>
                    </div>
                    <div class="cell medium-6">
                        <div class="studio-dark-item" style="margin-bottom: 0;">
                            <div style="font-weight: 700; font-size: 0.86rem; color: #ffffff;">Interview d'expert</div>
                            <div style="font-size: 0.76rem; color: #cbd2d9; margin-bottom: 0.4rem;">Rencontre avec les chercheurs FNR</div>
                            <video controls poster="https://placehold.co/360x180/223848/fdf5d7?text=Interview+Chercheurs" style="max-height: 110px; object-fit: cover;"></video>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="cell large-4 sl-row-col">
            <section class="sl-box sl-box-navy studio-box sl-grow-box" style="margin-bottom: 0;">
                <div class="studio-header">
                    <h2 class="sl-section-title" style="margin:0; font-size: 1.15rem; color: #ffffff;">STUDIO <span class="sl-title-lu">SOZIALLËTZ</span> • PODCASTS</h2>
                    <a href="#" style="color: var(--sl-sand); font-size: 0.8rem; font-weight: 700;">Tous &rarr;</a>
                </div>
                <div class="studio-dark-item">
                    <div style="font-weight: 700; font-size: 0.85rem; color: #ffffff;">Les Voix du Terrain</div>
                    <div style="font-size: 0.75rem; color: #cbd2d9; margin-bottom: 0.35rem;">L'inclusion par le sport au Luxembourg</div>
                    <audio controls src="" style="height: 30px;"></audio>
                </div>
                <div class="studio-dark-item" style="margin-bottom: 0;">
                    <div style="font-weight: 700; font-size: 0.85rem; color: #ffffff;">Explique-moi mes Droits</div>
                    <div style="font-size: 0.75rem; color: #cbd2d9; margin-bottom: 0.35rem;">Comprendre les aides sociales en FALC</div>
                    <audio controls src="" style="height: 30px;"></audio>
                </div>
            </section>
        </div>

    </div>

    <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>

</main>

<!-- FENÊTRE MODALE CONTEXTUELLE RDV -->
<div id="sl-rdv-modal" class="sl-rdv-modal-backdrop" style="display: none;" role="dialog" aria-modal="true" aria-labelledby="sl-rdv-modal-title">
    <div class="sl-rdv-modal-dialog">
        <div class="sl-rdv-modal-header">
            <h2 id="sl-rdv-modal-title" class="sl-section-title" style="margin: 0; font-size: 1.25rem;">
                Prendre RDV — Centre d'écoute OLICAS
            </h2>
            <button type="button" id="sl-rdv-modal-close" class="sl-rdv-modal-close" aria-label="Fermer la fenêtre">&times;</button>
        </div>
        <?php if ( function_exists( 'sozialletz_rdv_render_panel' ) ) { sozialletz_rdv_render_panel(); } ?>
    </div>
</div>

<?php get_footer(); ?>