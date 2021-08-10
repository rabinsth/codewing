<?php
	
function codewing_script_enqueue() {

	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/codewing.css', array(), '1.0.0', 'all');
	//js
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/codewing.js', array(), '1.0.0', true);
	
	
	
	
	
}

add_action( 'wp_enqueue_scripts', 'codewing_script_enqueue');

function codewing_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}

add_action('after_setup_theme', 'codewing_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));
add_action('after_setup_theme', 'codewing_theme_setup');


function codewing_widget_setup(){
	register_sidebar(
		array(
			'name' => 'sidebar',
			'id' => 'sidebar-1',
			'class' =>'custom',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
		);
}
add_action('widgets_init','codewing_widget_setup');