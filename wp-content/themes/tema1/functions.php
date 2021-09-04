<?php

//estilos

function prueba_styles(){
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', get_theme_file_uri() . "/js/bootstrap.min.js", array('jquery'), '1.12.4', true);
	wp_enqueue_script('slicknav', get_theme_file_uri() . "/js/jquery.slicknav.min.js", array('jquery'), '', true);
	wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery'), '1.0.0', true );
	wp_enqueue_script( 'main' );
}
add_action('wp_enqueue_scripts', 'prueba_styles');
	
//menu
if (function_exists('register_nav_menus')) {
	register_nav_menus(array('menu_principal' => __('Menu Principal', 'tema1')
));
}

//menu footer
if (function_exists('register_nav_menus')) {
	register_nav_menus(array('menu_footer' => __('Menu Footer', 'tema1')
));
}

// Agregando imagenes destacadas
/*
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
   
 }
*/


 function prueba(){
 	 register_sidebar(
 	 array(
 	 	'name' => __('Blog Widget'),
 	 	'id' => 'blog_widget',
 	 	'description' =>'Widget para el blog',
 	 	'before_widget' => '<div id="%1$s" class="col-md-6 col-lg-6 titulo-destacado %2$s">',
 	 	'after_widget' => '</div>',
 	 	'before_title' => '<h2>',
 	 	'after_title' => '</h2>'
 	 )
 	 );
 }
 add_action('widgets_init', 'prueba');


  function prueba2(){
 	 register_sidebar(
 	 array(
 	 	'name' => __('Header Widget'),
 	 	'id' => 'header_widget',
 	 	'description' =>'Widget para el header',
 	 	'before_widget' => '<div id="%1$s" class="text-content %2$s">',
 	 	'after_widget' => '</div>',
 	 	'before_title' => '<h2>',
 	 	'after_title' => '</h2>'
 	 )
 	 );
 }
 add_action('widgets_init', 'prueba2');


remove_filter ('the_content',  'wpautop');
remove_filter ('the_exceprt',  'wpautop');


// se implementan imagenes, logo del header, y imagen principal del header
add_theme_support('post-thumbnails');
add_theme_support( 'custom-logo' );
add_theme_support( 'custom-header' );

 ?>