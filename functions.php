<?php
// Sécurité : empêche l'accès direct au fichier
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function sozialletz_setup() {
    // Support du titre dynamique et des images à la une
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );

    // Déclaration du menu principal
    register_nav_menus( array(
        'primary' => __( 'Menu Principal', 'sozialletz' ),
    ) );
}
add_action( 'after_setup_theme', 'sozialletz_setup' );

function sozialletz_enqueue_assets() {
    // 1. CSS de Foundation 6 (XY Grid)
    wp_enqueue_style( 
        'foundation-css', 
        'https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/css/foundation.min.css', 
        array(), 
        '6.8.1' 
    );

    // 2. Feuille de style principale du thème (chargée après Foundation)
    wp_enqueue_style( 
        'sozialletz-style', 
        get_stylesheet_uri(), 
        array('foundation-css'), 
        '1.0.0' 
    );

    // 3. JavaScript de Foundation (nécessite jQuery)
    wp_enqueue_script( 
        'foundation-js', 
        'https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/js/foundation.min.js', 
        array('jquery'), 
        '6.8.1', 
        true 
    );

    // 4. Gestion du menu mobile tactile + initialisation Foundation
    $menu_js = "
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof jQuery !== 'undefined' && jQuery.fn.foundation) {
            jQuery(document).foundation();
        }
        // Bouton hamburger mobile
        var toggleBtn = document.getElementById('sl-mobile-toggle');
        var mainMenu = document.getElementById('sl-main-menu');
        if (toggleBtn && mainMenu) {
            toggleBtn.addEventListener('click', function() {
                mainMenu.classList.toggle('is-open');
            });
        }
        // Ouverture des sous-menus au clic sur mobile
        var parents = document.querySelectorAll('#sl-main-menu li.menu-item-has-children > a');
        parents.forEach(function(link) {
            link.addEventListener('click', function(e) {
                if (window.innerWidth < 640) {
                    var parentLi = this.parentElement;
                    if (!parentLi.classList.contains('mobile-open')) {
                        e.preventDefault();
                        parentLi.classList.add('mobile-open');
                    }
                }
            });
        });
    });
    ";
    wp_add_inline_script( 'foundation-js', $menu_js );
}
add_action( 'wp_enqueue_scripts', 'sozialletz_enqueue_assets' );


// Adapte les sous-menus WordPress à la syntaxe Foundation Dropdown
function sozialletz_foundation_submenu_class( $classes ) {
    $classes[] = 'menu vertical';
    return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'sozialletz_foundation_submenu_class' );

