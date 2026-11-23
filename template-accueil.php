<?php
/*
Template Name: Accueil SozialLëtz (Cahier des charges)
*/
get_header(); 
?>

<main class="grid-container">

    <!-- =========================================================
         ZONE 2 : TÊTE DE PAGE (TOP STORIES - 3 BLOCS : 50% / 25% / 25%)
    ========================================================== -->
    <section class="grid-x grid-margin-x" style="margin-bottom: 1.5rem;">
        
        <!-- BLOC A (Large - 50% -> 6 colonnes Foundation) : L'Éditorial de la Semaine (DYNAMIQUE) -->
        <div class="cell large-6">
            <?php
            $edito_query = new WP_Query( array(
                'category_name'  => 'le-monde-du-directeur',
                'posts_per_page' => 1,
            ) );

            if ( $edito_query->have_posts() ) :
                while ( $edito_query->have_posts() ) : $edito_query->the_post(); ?>
                    <article class="sl-box sl-box-cream" style="border-left: 5px solid var(--sl-teal);">
                        <span class="label" style="background: var(--sl-teal); font-weight:700; margin-bottom:0.5rem;">LE MONDE DU DIRECTEUR</span>
                        <h2 class="sl-section-title" style="font-size: 1.35rem;">
                            <a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;"><?php the_title(); ?></a>
                        </h2>
                        
                        <div class="grid-x grid-margin-x align-middle">
                            <div class="cell small-4">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'medium', array( 'style' => 'border-radius: 8px; width:100%; height:140px; object-fit:cover;' ) ); ?>
                                <?php else : ?>
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/directeur.jpg' ); ?>" alt="Éditorial" style="border-radius: 8px; width:100%; height:140px; object-fit:cover;">
                                <?php endif; ?>
                            </div>
                            <div class="cell small-8" style="font-size: 0.9rem;">
                                <p><?php echo wp_trim_words( get_the_excerpt(), 22, '...' ); ?></p>
                                <a href="<?php the_permalink(); ?>" style="font-weight: 700; color: var(--sl-teal); text-decoration: underline;">
                                    Lire l'analyse du Directeur &rarr;
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <div class="sl-box sl-box-cream">
                    <p>Aucun éditorial publié dans « Le Monde du Directeur » pour le moment.</p>
                </div>
            <?php endif; ?>
        </div>

        <!-- BLOC B (Moyen - 25% -> 3 colonnes Foundation) : À la Une International -->
        <div class="cell medium-6 large-3">
            <article class="sl-box sl-box-beige">
                <span class="label secondary" style="font-weight:700; margin-bottom:0.5rem;">À LA UNE : INTERNATIONAL</span>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/pexelsOnTheWorldSansBG.jpg' ); ?>" alt="Coopération" style="border-radius: 6px; margin-bottom: 0.7rem; width:100%; height:130px; object-fit:contain;">
                <h3 style="font-size: 1rem; font-weight: 700; line-height: 1.3;">
                    <a href="#" style="color: var(--sl-text);">Appui aux ONG luxembourgeoises en Afrique de l'Ouest : bilan sur le terrain</a>
                </h3>
            </article>
        </div>

        <!-- BLOC C (Moyen - 25% -> 3 colonnes Foundation) : À la Une Luxembourg -->
        <div class="cell medium-6 large-3">
            <article class="sl-box sl-box-mint">
                <span class="label" style="background:#2e6f40; font-weight:700; margin-bottom:0.5rem;">À LA UNE : LUXEMBOURG</span>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/pexelsFamilyHousse2.jpg' ); ?>" alt="Action sociale Luxembourg" style="border-radius: 6px; margin-bottom: 0.7rem; width:100%; height:130px; object-fit:contain;">
                <h3 style="font-size: 1rem; font-weight: 700; line-height: 1.3;">
                    <a href="#" style="color: var(--sl-text);">Logement abordable et aides sociales : nouveau guide pratique en FALC</a>
                </h3>
            </article>
        </div>

    </section>

    <!-- =========================================================
         ZONE 3A : BANDEAU MULTIMÉDIA (SOZIALLËTZ STUDIO - VERSION SLIM)
    ========================================================== -->
    <section class="sl-box sl-box-navy studio-box" style="margin-bottom: 1.5rem;">
        <div class="studio-header">
            <div>
                <span class="sl-eyebrow" style="color: #8ecae6;">SozialLëtz Studio</span>
                <h2 class="sl-section-title" style="margin:0; font-size: 1.25rem; color: #ffffff;">ÉCOUTER, VOIR, COMPRENDRE</h2>
            </div>
            <a href="#" style="color: #8ecae6; font-size: 0.82rem; font-weight: 700; white-space: nowrap;">Tout le Studio &rarr;</a>
        </div>

        <div class="grid-x grid-margin-x">
            <!-- Vignette 1 : Podcast -->
            <div class="cell medium-4">
                <div class="studio-card">
                    <span class="label" style="background:#e76f51;">PODCAST AUDIO</span>
                    <h3>Les Voix du Terrain : L'inclusion par le sport</h3>
                    <audio controls src=""></audio>
                </div>
            </div>

            <!-- Vignette 2 : Vidéo -->
            <div class="cell medium-4">
                <div class="studio-card">
                    <span class="label" style="background:#2a9d8f;">DOCUMENTAIRE VIDÉO</span>
                    <h3>Immersion au cœur des Offices Sociaux</h3>
                    <video controls poster="https://placehold.co/400x160/1a202c/ffffff?text=Video+Reportage"></video>
                </div>
            </div>

            <!-- Vignette 3 : Grand Entretien -->
            <div class="cell medium-4">
                <div class="studio-card">
                    <span class="label" style="background:#e9c46a; color:#222;">LE GRAND ENTRETIEN</span>
                    <h3>Rencontre avec les chercheurs du FNR</h3>
                    <video controls poster="https://placehold.co/400x160/1a202c/ffffff?text=Interview"></video>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================
         ZONE 3B : GRILLE D'ACTUS (2 COLONNES STYLISÉES)
    ========================================================== -->
    <section class="grid-x grid-margin-x" style="margin-bottom: 1.5rem;">
        
        <!-- Colonne Gauche : Talents & Voix -->
        <div class="cell medium-6">
            <div class="sl-box" style="background: #ffffff; border: 1px solid var(--sl-border);">
                <div class="sl-rubrique-header" style="border-bottom-color: var(--sl-teal);">
                    <span class="sl-eyebrow" style="color: var(--sl-teal);">Talents &amp; Voix • Jeunes Reporters (JRS)</span>
                    <h2 class="sl-section-title" style="margin:0;">SUR LE TERRAIN AU LUXEMBOURG</h2>
                </div>
                
                <div class="rubrique-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/pexelsPoigneeDeMain.jpg' ); ?>" alt="" class="sl-icon-img">
                    <div>
                        <span class="sl-tag-pill" style="background: var(--sl-card-mint); color: var(--sl-teal);">ASSOCIATIONS-ACTIF</span>
                        <h4 class="sl-item-title"><a href="#">L'Agenda de l'Action Sociale ce mois-ci au Grand-Duché</a></h4>
                    </div>
                </div>
                <hr class="sl-divider">
                <div class="rubrique-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/pexelsCroixRouge.jpg' ); ?>" alt="" class="sl-icon-img">
                    <div>
                        <span class="sl-tag-pill" style="background: var(--sl-card-mint); color: var(--sl-teal);">REPORTAGE SOCIAL</span>
                        <h4 class="sl-item-title"><a href="#">Au quotidien avec les travailleurs sociaux de rue à Esch-sur-Alzette</a></h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Colonne Droite : Coopération & Recherche -->
        <div class="cell medium-6">
            <div class="sl-box" style="background: #ffffff; border: 1px solid var(--sl-border);">
                <div class="sl-rubrique-header" style="border-bottom-color: var(--sl-accent);">
                    <span class="sl-eyebrow" style="color: var(--sl-accent);">Le Monde &amp; Recherche</span>
                    <h2 class="sl-section-title" style="margin:0;">SOLIDARITÉ GLOBALE &amp; SAVOIRS</h2>
                </div>

                <div class="rubrique-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/pexelsTerreSurLesMainsSansBG.jpg' ); ?>" alt="" class="sl-icon-img">
                    <div>
                        <span class="sl-tag-pill" style="background: #fde8e2; color: #c84b2c;">AIDE D'URGENCE</span>
                        <h4 class="sl-item-title"><a href="#">Mobilisation humanitaire : comment l'aide luxembourgeoise s'organise</a></h4>
                    </div>
                </div>
                <hr class="sl-divider">
                <div class="rubrique-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/pexelsDiagrame.jpg' ); ?>" alt="" class="sl-icon-img">
                    <div>
                        <span class="sl-tag-pill" style="background: #fde8e2; color: #c84b2c;">SAVOIRS &amp; TERRITOIRES</span>
                        <h4 class="sl-item-title"><a href="#">Data sociale : les nouveaux chiffres de la précarité en Grande Région</a></h4>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- =========================================================
         ZONE 4 : LE COIN DES TALENTS (BLOC PLEINE LARGEUR)
    ========================================================== -->
    <section class="sl-box sl-box-cream" style="margin-bottom: 2rem;">
        <div class="grid-x grid-margin-x align-middle">
            <div class="cell medium-3 text-center">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/pexelsMainNoirDrapeau.jpg' ); ?>" alt="Portrait Sozial" style="max-height: 150px; border-radius: 10px;">
            </div>
            <div class="cell medium-9">
                <span class="label" style="background: var(--sl-navy); font-weight: 700; margin-bottom: 0.5rem;">LE PORTRAIT SOZIAL</span>
                <h2 class="sl-section-title" style="font-size: 1.4rem; margin-bottom: 0.5rem;">
                    Le parcours inspirant de Claire Weber, volontaire luxembourgeoise en mission éducative
                </h2>
                <p style="font-size: 0.95rem; margin-bottom: 0.8rem;">
                    Chaque semaine, découvrez le visage et l'engagement d'un acteur de terrain, d'un bénévole ou d'un jeune reporter de l'incubateur OLICAS.
                </p>
                <a href="#" class="button small" style="background-color: var(--sl-teal); border-radius: 6px; margin: 0;">Découvrir son portrait</a>
            </div>
        </div>
    </section>

    <!-- Permet d'ajouter des blocs Elementor supplémentaires en dessous si souhaité -->
    <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>

</main>

<?php get_footer(); ?>