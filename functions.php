<?php

	if(!function_exists('css_js_agency_theme')){
		function css_js_agency_theme(){

			//CSS Enqueue
			wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css');
			wp_enqueue_style('nice-css', get_template_directory_uri().'/css/nice-select.css');
			wp_enqueue_style('icofont-css', get_template_directory_uri().'/css/icofont.css');
			wp_enqueue_style('slicknav-css', get_template_directory_uri().'/css/slicknav.min.css');
			wp_enqueue_style('owl-css', get_template_directory_uri().'/css/owl-carousel.css');
			wp_enqueue_style('datepicker-css', get_template_directory_uri().'/css/datepicker.css');
			wp_enqueue_style('animate-css', get_template_directory_uri().'/css/animate.min.css');
			wp_enqueue_style('magnific-css', get_template_directory_uri().'/css/magnific-popup.css');
			wp_enqueue_style('normalize-css', get_template_directory_uri().'/css/normalize.css');
			wp_enqueue_style('style-css', get_template_directory_uri().'/style.css');
			wp_enqueue_style('responsive-css', get_template_directory_uri().'/css/responsive.css');

			//JS Enqueue
			wp_enqueue_script('jquery-js', get_template_directory_uri().'/js/jquery.min.js');
			wp_enqueue_script('migrate-js', get_template_directory_uri().'/js/jquery-migrate-3.0.0.js');
			wp_enqueue_script('ui-js', get_template_directory_uri().'/js/jquery-ui.min.js');
			wp_enqueue_script('easing-js', get_template_directory_uri().'js/easing.js');
			wp_enqueue_script('colors-js', get_template_directory_uri().'/js/colors.js');
			wp_enqueue_script('popper-js', get_template_directory_uri().'/js/popper.min.js');
			wp_enqueue_script('datepicker-js', get_template_directory_uri().'/js/bootstrap-datepicker.js');
			wp_enqueue_script('nav-js', get_template_directory_uri().'/js/jquery.nav.js');
			wp_enqueue_script('slicknav-js', get_template_directory_uri().'/js/slicknav.min.js');
			wp_enqueue_script('scrollUp-js', get_template_directory_uri().'/js/jquery.scrollUp.min.js');
			wp_enqueue_script('niceselect-js', get_template_directory_uri().'/js/niceselect.js');
			wp_enqueue_script('tilt-js', get_template_directory_uri().'/js/tilt.jquery.min.js');
			wp_enqueue_script('owl-js', get_template_directory_uri().'/js/owl-carousel.js');
			wp_enqueue_script('counterup-js', get_template_directory_uri().'/js/jquery.counterup.min.js');
			wp_enqueue_script('steller-js', get_template_directory_uri().'/js/steller.js');
			wp_enqueue_script('wow-js', get_template_directory_uri().'/js/wow.min.js');
			wp_enqueue_script('popup-js', get_template_directory_uri().'/js/jquery.magnific-popup.min.js');
			wp_enqueue_script('popup-js', get_template_directory_uri().'/http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js');
			wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js');
			wp_enqueue_script('main-js', get_template_directory_uri().'/js/main.js');
		}
	}
	add_action('wp_enqueue_scripts','css_js_agency_theme');
?>
