<?php
/**
 * Enqueue scripts and styles.
 */
function dsoft_denta_scripts() {
	wp_enqueue_style( 'dsoft-denta-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'dsoft-denta-animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'dsoft-denta-meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', array(), _S_VERSION );
	wp_enqueue_style( 'dsoft-denta-boxicons', get_template_directory_uri() . '/assets/css/boxicons.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'dsoft-denta-flaticon-two', get_template_directory_uri() . '/assets/css/flaticon-two.css', array(), _S_VERSION );
	wp_enqueue_style( 'dsoft-denta-flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), _S_VERSION );
	wp_enqueue_style( 'dsoft-denta-odometer', get_template_directory_uri() . '/assets/css/odometer.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'dsoft-denta-nice-select', get_template_directory_uri() . '/assets/css/nice-select.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'dsoft-denta-owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'dsoft-denta-owl.theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'dsoft-denta-magnific', get_template_directory_uri() . '/assets/css/magnific-popup.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'dsoft-denta-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'dsoft-denta-dark', get_template_directory_uri() . '/assets/css/dark.css', array(), _S_VERSION );
	wp_enqueue_style( 'dsoft-denta-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION );

	wp_enqueue_script( 'dsoft-denta-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'dsoft-denta-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'dsoft-denta-jquery.meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'dsoft-denta-owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'dsoft-denta-jquery.appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'dsoft-denta-odometer', get_template_directory_uri() . '/assets/js/odometer.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'dsoft-denta-nice-select', get_template_directory_uri() . '/assets/js/nice-select.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'dsoft-denta-jquery.magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'dsoft-denta-jquery.ajaxchimp', get_template_directory_uri() . '/assets/js/jquery.ajaxchimp.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'dsoft-denta-form-validator', get_template_directory_uri() . '/assets/js/form-validator.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'dsoft-denta-contact-form-script', get_template_directory_uri() . '/assets/js/contact-form-script.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'dsoft-denta-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'dsoft-denta-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'dsoft_denta_scripts' );