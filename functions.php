<?php


add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version'));
    wp_enqueue_script( 'act-js', get_stylesheet_directory_uri().'/dist/js/main.js', false, wp_get_theme()->get('Version') , true);

}

//Love, love, love, love all you functions
require_once get_theme_file_path() . '/lib/functions--ac-sidebars.php';
require_once get_theme_file_path() . '/lib/functions--ac-menus.php';
require_once get_theme_file_path() . '/lib/functions--ac-settings.php';

require_once get_theme_file_path() . '/lib/functions--timber.php';
require_once get_theme_file_path() . '/lib/functions--theme-setup.php';

require_once get_theme_file_path() . '/lib/functions--ac-shortcode.php';
require_once get_theme_file_path() . '/lib/functions--widget-areas.php';
require_once get_theme_file_path() . '/lib/functions--widgets.php';


require_once get_theme_file_path() . '/lib/functions--acf.php';
require_once get_theme_file_path() . '/lib/acf/functions--acf-options.php';
require_once get_theme_file_path() . '/lib/acf/functions--acf-video-settings.php';
require_once get_theme_file_path() . '/lib/acf/functions--acf-page-settings.php';
require_once get_theme_file_path() . '/lib/acf/functions--acf-service-settings.php';
require_once get_theme_file_path() . '/lib/acf/functions--acf-page-content.php';
require_once get_theme_file_path() . '/lib/acf/functions--acf-page-additional-content.php';
require_once get_theme_file_path() . '/lib/acf/functions-acf-ambercouch-servics.php';

require_once get_theme_file_path() . '/lib/functions--template-tags.php';
require_once get_theme_file_path() . '/lib/functions--ac-menu-filters.php';
require_once get_theme_file_path() . '/lib/functions--cpt.php';

require_once get_theme_file_path() . '/lib/admin/functions--admin-clean.php';
require_once get_theme_file_path() . '/lib/admin/functions--admin-widgets.php';
require_once get_theme_file_path() . '/lib/functions--walkers.php';