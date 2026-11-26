<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function sozialletz_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );

    register_nav_menus( array(
        'primary' => __( 'Menu Principal', 'sozialletz' ),
    ) );
}
add_action( 'after_setup_theme', 'sozialletz_setup' );

function sozialletz_enqueue_assets() {
    wp_enqueue_style(
        'sozialletz-fonts',
        'https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=Source+Sans+3:ital,wght@0,400;0,600;0,700;1,400&display=swap',
        array(),
        null
    );

    wp_enqueue_style( 
        'foundation-css', 
        'https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/css/foundation.min.css', 
        array(), 
        '6.8.1' 
    );

    wp_enqueue_style( 
        'sozialletz-style', 
        get_stylesheet_uri(), 
        array( 'foundation-css', 'sozialletz-fonts' ), 
        '1.5.0' 
    );

    wp_enqueue_script( 
        'foundation-js', 
        'https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/js/foundation.min.js', 
        array( 'jquery' ), 
        '6.8.1', 
        true 
    );

    $menu_js = "
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof jQuery !== 'undefined' && jQuery.fn.foundation) {
            jQuery(document).foundation();
        }

        // Menu mobile
        var toggleBtn = document.getElementById('sl-mobile-toggle');
        var mainMenu = document.getElementById('sl-main-menu');
        if (toggleBtn && mainMenu) {
            toggleBtn.addEventListener('click', function() {
                mainMenu.classList.toggle('is-open');
            });
        }

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

       // Sélecteur direct des 4 drapeaux (LB / DE / FR / EN)
        var flagBtns = document.querySelectorAll('.sl-flag-btn');
        if (flagBtns.length) {
            var savedLang = localStorage.getItem('sl_selected_lang') || 'fr';
            flagBtns.forEach(function(btn) {
                btn.classList.toggle('is-selected', btn.getAttribute('data-lang') === savedLang);
                btn.addEventListener('click', function(e) {
                    if (this.getAttribute('href').indexOf('?lang=') === 0) {
                        e.preventDefault();
                    }
                    var lang = this.getAttribute('data-lang');
                    localStorage.setItem('sl_selected_lang', lang);
                    flagBtns.forEach(function(b) { b.classList.remove('is-selected'); });
                    this.classList.add('is-selected');
                });
            });
        }
    });
    ";
    wp_add_inline_script( 'foundation-js', $menu_js );
}
add_action( 'wp_enqueue_scripts', 'sozialletz_enqueue_assets' );

function sozialletz_foundation_submenu_class( $classes ) {
    $classes[] = 'menu vertical';
    return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'sozialletz_foundation_submenu_class' );

// =========================================================
// GESTION DYNAMIQUE DES PARTENAIRES (BULLES CLICABLES)
// =========================================================
function sozialletz_register_partenaires_cpt() {
    register_post_type( 'sl_partenaire', array(
        'labels' => array(
            'name'          => 'Partenaires',
            'singular_name' => 'Partenaire',
            'add_new'       => 'Ajouter un partenaire',
            'add_new_item'  => 'Ajouter un nouveau partenaire',
            'edit_item'     => 'Modifier le partenaire',
        ),
        'public'        => false,
        'show_ui'       => true,
        'menu_icon'     => 'dashicons-groups',
        'supports'      => array( 'title', 'thumbnail', 'page-attributes' ),
    ) );
}
add_action( 'init', 'sozialletz_register_partenaires_cpt' );

// Champ URL du partenaire (site web ou réseau social)
function sozialletz_partenaire_meta_box() {
    add_meta_box( 'sl_partenaire_url_box', 'Lien du partenaire (Site web ou réseau social)', 'sozialletz_partenaire_url_callback', 'sl_partenaire', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'sozialletz_partenaire_meta_box' );

function sozialletz_partenaire_url_callback( $post ) {
    wp_nonce_field( 'sl_save_partenaire_url', 'sl_partenaire_url_nonce' );
    $url = get_post_meta( $post->ID, '_sl_partenaire_url', true );
    echo '<input type="url" name="sl_partenaire_url" value="' . esc_attr( $url ) . '" placeholder="https://www.exemple.lu" style="width:100%; padding:8px;">';
}

function sozialletz_save_partenaire_url( $post_id ) {
    if ( ! isset( $_POST['sl_partenaire_url_nonce'] ) || ! wp_verify_nonce( $_POST['sl_partenaire_url_nonce'], 'sl_save_partenaire_url' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( isset( $_POST['sl_partenaire_url'] ) ) {
        update_post_meta( $post_id, '_sl_partenaire_url', esc_url_raw( $_POST['sl_partenaire_url'] ) );
    }
}
add_action( 'save_post_sl_partenaire', 'sozialletz_save_partenaire_url' );

// Prise de rendez-vous (calendrier du samedi matin)
if ( file_exists( get_template_directory() . '/inc/rdv.php' ) ) {
    require_once get_template_directory() . '/inc/rdv.php';
}