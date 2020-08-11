<?php 


function blogJavascript(){
    wp_enqueue_style('normalize' , get_stylesheet_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );

    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style('oswald' , "https://fonts.googleapis.com/css?family=Oswald&display=swap");
    wp_enqueue_style('Source Code Pro', "https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap");
    wp_enqueue_style('Alfa Slab One', "https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap");
    wp_enqueue_style('Cuprum', "https://fonts.googleapis.com/css2?family=Cuprum&display=swap");

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs' , get_stylesheet_directory_uri() . '/js/bootstrap.min.js' , array('jquery') , '4.4.1' , true );
}
add_action( 'wp_enqueue_scripts' , 'blogJavascript' );

add_action("wp_enqueue_scripts", "dcms_insertar_js");

function dcms_insertar_js(){
    
    wp_register_script('miscript', get_stylesheet_directory_uri(). '/js/script.js', array('jquery'), '1', true );
    wp_enqueue_script('miscript');
    
}

add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
}

function change_excerpt( $text )
{
    $pos = strrpos( $text, '[');
    if ($pos === false)
    {
        return $text;
    }

    return rtrim (substr($text, 0, $pos) );
}
add_filter('get_the_excerpt', 'change_excerpt');

function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function mi_excerpt_leermas() {
    global $post;
 return '<a href="'. get_permalink($post->ID) . '" class="leer-mas" > Leer más...</a>';
}
add_filter('excerpt_more', 'mi_excerpt_leermas');

register_nav_menus(array(
    'menu_principal' => __('Menu pricipal' , 'blogJavascript')
));


require_once('bs4navwalker.php');

register_nav_menu('top', 'Top menu');

add_theme_support('post-thumbnails');


add_image_size('entradas', 450 , 240 , true);
add_image_size('entradas-sm', 450 , 240 , true);


?>