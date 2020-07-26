<?php 

define('TEMPLATE_DIRECTORY_URI' , get_template_directory_uri());


function load_stylesheets()
{

    wp_register_style('bootstrap' , get_template_directory_uri() . '/css/bootstrap.min.css', 
    array(), false , 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style' , get_template_directory_uri() . '/style.css', 
    array('bootstrap'), false , 'all');
    wp_enqueue_style('style');

}

add_action('wp_enqueue_scripts' , 'load_stylesheets');

function include_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery' , get_template_directory_uri() . '/js/jquery-3.1.3.min.js', '', 1 , false);

    add_action('wp_enqueue_scripts' , 'jquery');


}

//add_action('wp_enqueue_scripts' , 'include_jquery');




function loadjs()
{

    wp_register_script('customjs' , get_template_directory_uri() . '/js/scripts.js', '', 1 , false);
    wp_enqueue_script('customjs');

}

add_action('wp_enqueue_scripts' , 'loadjs');


add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');

function gnl_register_nav_menu(){
register_nav_menu(
'primary' , 'Header NavBar');
}
add_action('after_setup_theme' , 'gnl_register_nav_menu');



add_image_size('smallest' , 300 , 300 , true);
add_image_size('largest' , 800 , 800 , true);



