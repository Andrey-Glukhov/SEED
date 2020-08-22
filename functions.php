<?php
function sid_script_enqueue(){
//css
	wp_enqueue_style( 'sid-stylesheet', get_template_directory_uri() . '/css/seed.css', array(), '1.0.0', 'all' );
//js
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'sid-js', get_template_directory_uri() . '/js/seed.js', array(), '1.0.0', true );
  wp_enqueue_script( 'scrollmagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'scrollindicator', 'https:////cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'scrollanimation', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js', array('jquery'), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'sid_script_enqueue' );

function sid_theme_setup(){
  add_theme_support('menus');
  register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
}
/*
	==========================================
	 Sidebar function
	==========================================
*/
function sid_widget_setup() {

	register_sidebar(
		array(
			'name' => 'Footer Area 1',
			'id' => 'footer-1',
			'description' => 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);
	register_sidebar( array(
			'name' => 'Footer Area 2',
			'id' => 'footer-2',
			'description' => 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
) );
	register_sidebar( array(
			'name' => 'Footer Area 3',
			'id' => 'footer-3',
			'description' => 'Appears in the footer area',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
) );
} add_action('widgets_init','sid_widget_setup');

/*
	==========================================
	 Theme support function
	==========================================
*/

add_filter( 'gglcptch_add_custom_form', 'add_custom_recaptcha_forms' );
add_filter( 'gglcptch_add_custom_form', 'add_custom_recaptcha_forms' );
add_action('init', 'sid_theme_setup');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-formats', array('aside', 'chat', 'gallery','link','image','quote','status','video'));
add_theme_support('post-thumbnails');
