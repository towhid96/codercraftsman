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

	if(!function_exists('custom_service')){
		function custom_service(){
			register_post_type('service',
				array(
					'labels'=>array(
						'name'=>('Services'),
						'singular_name'=>('Service'),
						'add_new'=>('Add new Service'),
						'add_new_item'=>('Add new Service'),
						'edit_item'=>('Edit Service'),
						'new_item'=>('New item'),
						'view_item'=>('View Service'),
						'not_found'=>('Sorry, we could\'n find the service you are looking for.'),
					),

					'menu_icon'=>'dashicons-networking',
					'public'=>true,
					'publicly_queryable'=>true,
					'exclude_from_search'=>true,
					'menu_position'=>5,
					'has_archive'=>true,
					'hierarchial'=>true,
					'show_ui'=>true,
					'capability_type'=>'post',
					'rewrite'=>array('slag'=>'servie'),
					'support'=>array('title','thumbnail','editor',),
				)
				);
	
		}
	}
	add_action('init','custom_service');

	if(!function_exists('mythemefunction')){
		function mythemefunction(){
			add_theme_support('post-thumbnails');
			add_theme_support('post-formats',array('aside','image','video'));
			add_theme_support('widgets');
			add_theme_support('title-tag');
			// add_theme_support('menus');
			add_theme_support('html5');
			add_theme_support('editor-color-palette');
			// add_theme_support('admin-bar');
			// add_theme_support('align-wide');
			load_theme_textdomain('mythemefunction'.get_template_directory().'/languages');
			register_nav_menus(array(
				'top_menu' =>__("Top menu","mythemefunction"),));

		} 
	}
	add_action('after_setup_theme','mythemefunction');
?>
