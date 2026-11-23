<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-middle">
            
            <!-- Colonne gauche (3 colonnes) : Logo -->
            <div class="cell small-12 medium-3 text-center medium-text-left" style="margin-bottom: 0.5rem;">
                <?php if ( has_custom_logo() ) : the_custom_logo(); else : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo-sozialletz.png' ); ?>" alt="SozialLëtz.lu" style="max-height: 85px;">
                    </a>
                <?php endif; ?>
            </div>

            <!-- Colonne centre (6 colonnes) : Titre & Baseline -->
            <div class="cell small-12 medium-6 text-center" style="margin-bottom: 0.5rem;">
                <h1 class="brand-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color:inherit; text-decoration:none;">SozialLëtz.lu</a>
                </h1>
                <p class="brand-tagline">Le média citoyen de la solidarité, des droits, de la recherche et de l'action internationale du Luxembourg</p>
            </div>

            <!-- Colonne droite (3 colonnes : 3 + 6 + 3 = 12 !) : Réseaux + OLICAS + Bouton CTA -->
            <div class="cell small-12 medium-3 text-center medium-text-right">
                
                <!-- Icônes Réseaux Sociaux (LinkedIn, Facebook, Instagram) -->
                <div class="sl-social-header" style="display: inline-flex; align-items: center; gap: 8px; margin-bottom: 0.45rem;">
                    
                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/posts/protect-your-future-whilst-reducing-your-ugcPost-7524106151576203264-oOgN" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn SozialLëtz" title="Suivez-nous sur LinkedIn" class="sl-social-icon">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/>
                        </svg>
                    </a>

                    <!-- Facebook -->
                    <a href="https://www.facebook.com/profile.php?id=61596085613753" target="_blank" rel="noopener noreferrer" aria-label="Facebook SozialLëtz" title="Suivez-nous sur Facebook" class="sl-social-icon">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 2.04c-5.5 0-10 4.49-10 10.02 0 5 3.66 9.15 8.44 9.9v-7H7.9v-2.9h2.54V9.85c0-2.51 1.49-3.89 3.78-3.89 1.09 0 2.23.19 2.23.19v2.47h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.45 2.9h-2.33v7a10 10 0 0 0 8.44-9.9c0-5.53-4.5-10.02-10-10.02z"/>
                        </svg>
                    </a>

                    <!-- Instagram -->
                    <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Instagram SozialLëtz" title="Suivez-nous sur Instagram" class="sl-social-icon">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8 1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5 5 5 0 0 1-5 5 5 5 0 0 1-5-5 5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3z"/>
                        </svg>
                    </a>

                </div>

                <div style="font-size: 0.75rem; color: #555; margin-bottom: 0.35rem;">
                    Un média d'<strong>OLICAS asbl</strong>
                </div>
                <a href="<?php echo esc_url( home_url( '/le-journal/#soumission-citoyenne' ) ); ?>" class="button small" style="background-color: var(--sl-teal); border-radius: 20px; font-weight: 700; margin: 0;">
                    SOUMETTRE UNE INFO
                </a>
            </div>

        </div>
    </div>

    <!-- MENU PRINCIPAL (Les 6 grandes pages mères) -->
    <nav class="main-nav">
        <div class="grid-container">
            <!-- Bouton Hamburger visible uniquement sur mobile (< 640px) -->
            <div class="sl-mobile-bar">
                <button type="button" id="sl-mobile-toggle" aria-expanded="false" aria-controls="sl-main-menu">
                    &#9776; MENU
                </button>
            </div>

            <div id="sl-main-menu">
                <?php
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'dropdown menu align-justify',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    ) );
                }
                ?>
            </div>
        </div>
    </nav>
</header>