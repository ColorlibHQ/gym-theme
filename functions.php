<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'GYM_DIR_URI' ) ) {
	define( 'GYM_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'GYM_DIR_ASSETS_URI' ) ) {
	define( 'GYM_DIR_ASSETS_URI', GYM_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'GYM_DIR_CSS_URI' ) ) {
	define( 'GYM_DIR_CSS_URI', GYM_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'GYM_DIR_JS_URI' ) ) {
	define( 'GYM_DIR_JS_URI', GYM_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'GYM_DIR_IMGS_URI' ) ) {
	define( 'GYM_DIR_IMGS_URI', GYM_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'GYM_DIR_ICON_IMG_URI' ) ) {
	define( 'GYM_DIR_ICON_IMG_URI', GYM_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'GYM_DIR_PATH' ) ) {
	define( 'GYM_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'GYM_DIR_PATH_INC' ) ) {
	define( 'GYM_DIR_PATH_INC', GYM_DIR_PATH . 'inc/' );
}

//Gym Libraries Folder Directory
if ( ! defined( 'GYM_DIR_PATH_LIBS' ) ) {
	define( 'GYM_DIR_PATH_LIBS', GYM_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'GYM_DIR_PATH_CLASSES' ) ) {
	define( 'GYM_DIR_PATH_CLASSES', GYM_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'GYM_DIR_PATH_HOOKS' ) ) {
	define( 'GYM_DIR_PATH_HOOKS', GYM_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function gym_admin_script(){
    wp_enqueue_style( 'gym-admin', get_template_directory_uri().'/assets/css/gym-admin.css', false, '1.0.0' );
    // wp_enqueue_script( 'gym_admin', get_template_directory_uri().'/assets/js/gym-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'gym_admin_script' );



/**
 * Include File
 *
 */
require_once( GYM_DIR_PATH_INC . 'gym-breadcrumbs.php' );
require_once( GYM_DIR_PATH_INC . 'gym-widgets-reg.php' );
require_once( GYM_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( GYM_DIR_PATH_INC . 'post-like.php' );
require_once( GYM_DIR_PATH_INC . 'gym-functions.php' );
require_once( GYM_DIR_PATH_INC . 'gym-commoncss.php' );
require_once( GYM_DIR_PATH_INC . 'support-functions.php' );
require_once( GYM_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( GYM_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( GYM_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( GYM_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( GYM_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( GYM_DIR_PATH_HOOKS . 'hooks.php' );
require_once( GYM_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( GYM_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( GYM_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Gym object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Gym = new Gym();