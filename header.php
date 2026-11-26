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
    <!-- BANDEAU SUPÉRIEUR CRÈME -->
    <div class="sl-top-banner">
        <div class="grid-container">
            <div class="sl-brand-row">
                
                <!-- Partie Gauche : Logo + Titre SozialLëtz.lu + "Un média d'OLICAS asbl" -->
                <div class="sl-brand-left">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sl-logo-wrap">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logoJournal.png' ); ?>" alt="Logo SozialLëtz.lu">
                    </a>
                    <div class="sl-title-stack">
                        <h1 class="brand-title">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <span class="sl-title-navy">SozialLëtz</span><span class="sl-title-lu">.lu</span>
                            </a>
                        </h1>
                        <div class="olicas-mention-top">
                            Un média d'<strong>OLICAS asbl</strong>
                        </div>
                    </div>
                </div>

                <!-- Trait séparateur vertical -->
                <div class="sl-brand-divider" aria-hidden="true"></div>

                <!-- Partie Droite : Baseline -->
                <div class="sl-brand-right">
                    <p class="brand-tagline">
                        Le média citoyen de la solidarité, des droits, de la recherche<br class="hide-for-small-only"> et de l'action internationale du Luxembourg
                    </p>
                </div>

            </div>
        </div>
    </div>

    <!-- BARRE DE NAVIGATION GRIS PIERRE -->
    <nav class="main-nav" aria-label="Navigation principale">
    <div class="grid-container">
        <div class="sl-mobile-bar">
            <button type="button" id="sl-mobile-toggle" aria-expanded="false" aria-controls="sl-main-menu">
                &#9776; MENU
            </button>
        </div>
        <div id="sl-main-menu" class="sl-nav-with-home">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sl-home-icon-link" title="Retour à l'accueil" aria-label="Accueil SozialLëtz.lu">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"/>
                </svg>
            </a>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'menu',
                'fallback_cb'    => false,
            ) );
            ?>
        </div>
    </div>
</nav>

    <!-- SOUS-BARRE SABLE DORÉ : Réseaux (gauche) | Bienvenue (centre) | 4 Drapeaux directs (droite) -->
    <div class="sl-sub-banner">
        <div class="grid-container">
            <div class="sl-sub-banner-inner">
                
                <!-- Gauche : Icônes réseaux sociaux -->
                <div class="sl-social-header">
                    <a href="https://www.linkedin.com/posts/protect-your-future-whilst-reducing-your-ugcPost-7524106151576203264-oOgN" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn SozialLëtz" title="Suivez-nous sur LinkedIn" class="sl-social-icon">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/>
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61596085613753" target="_blank" rel="noopener noreferrer" aria-label="Facebook SozialLëtz" title="Suivez-nous sur Facebook" class="sl-social-icon">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 2.04c-5.5 0-10 4.49-10 10.02 0 5 3.66 9.15 8.44 9.9v-7H7.9v-2.9h2.54V9.85c0-2.51 1.49-3.89 3.78-3.89 1.09 0 2.23.19 2.23.19v2.47h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.45 2.9h-2.33v7a10 10 0 0 0 8.44-9.9c0-5.53-4.5-10.02-10-10.02z"/>
                        </svg>
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Instagram SozialLëtz" title="Suivez-nous sur Instagram" class="sl-social-icon">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8 1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5 5 5 0 0 1-5 5 5 5 0 0 1-5-5 5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3z"/>
                        </svg>
                    </a>
                </div>

                <!-- Centre : Message de bienvenue animé -->
                <div class="sl-welcome-ticker">
                    <span class="sl-welcome-dot" aria-hidden="true"></span>
                    <span class="sl-welcome-text">Bienvenue sur le journal</span>
                </div>

                <!-- Droite : 4 Drapeaux directs (1. Luxembourg, 2. Allemand, 3. Français, 4. Anglais) -->
                <div class="sl-lang-flags-bar" id="sl-lang-switcher" role="group" aria-label="Choix de la langue">
                    <a href="?lang=lb" class="sl-flag-btn" data-lang="lb" title="Lëtzebuergesch (LB)" aria-label="Lëtzebuergesch">
                        <svg width="22" height="14" viewBox="0 0 5 3" aria-hidden="true"><rect width="5" height="1" y="0" fill="#EA141D"/><rect width="5" height="1" y="1" fill="#ffffff"/><rect width="5" height="1" y="2" fill="#51ADDA"/></svg>
                    </a>
                    <a href="?lang=de" class="sl-flag-btn" data-lang="de" title="Deutsch (DE)" aria-label="Deutsch">
                        <svg width="22" height="14" viewBox="0 0 5 3" aria-hidden="true"><rect width="5" height="1" y="0" fill="#000000"/><rect width="5" height="1" y="1" fill="#DD0000"/><rect width="5" height="1" y="2" fill="#FFCE00"/></svg>
                    </a>
                    <a href="?lang=fr" class="sl-flag-btn is-selected" data-lang="fr" title="Français (FR)" aria-label="Français">
                        <svg width="22" height="14" viewBox="0 0 3 2" aria-hidden="true"><rect width="1" height="2" x="0" fill="#002395"/><rect width="1" height="2" x="1" fill="#ffffff"/><rect width="1" height="2" x="2" fill="#ED2939"/></svg>
                    </a>
                    <a href="?lang=en" class="sl-flag-btn" data-lang="en" title="English (EN)" aria-label="English">
                        <svg width="22" height="14" viewBox="0 0 60 30" aria-hidden="true"><rect width="60" height="30" fill="#012169"/><path d="M0,0 L60,30 M60,0 L0,30" stroke="#ffffff" stroke-width="6"/><path d="M30,0 v30 M0,15 h60" stroke="#ffffff" stroke-width="10"/><path d="M30,0 v30 M0,15 h60" stroke="#C8102E" stroke-width="6"/></svg>
                    </a>
                </div>

            </div>
        </div>
    </div>
</header>