<?php
//add widgets option
add_theme_support('widgets');
add_theme_support('menus');
add_theme_support('post-thumbnails');

function my_theme_scripts() {
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/javascript/script.js', array(), '1.0.0', true );
 }
 add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

function my_jqtheme_scripts() {
    wp_enqueue_script( 'jquery-script', get_template_directory_uri() . '/javascript/jquery.js', array(), '1.0.0', true );
 }
 add_action( 'wp_enqueue_scripts', 'my_jqtheme_scripts' );


 function my_theme_style() {
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_style' );

function my_theme_boots() {
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_boots' );

function my_theme_font() {
    wp_enqueue_style( 'font-awesome-style', get_template_directory_uri() . '/css/font-awesome.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_font' );




function menu(){
    $menues = array(
        'headermenu'=>'Headermenu',
        'sidemenu' => 'Sidemenu'
    );
    register_nav_menus($menues);
}
add_action('init','menu');
  


//registera widgets

 function theme_widgets() {
   $widgets = array(
         array (
             'name' => 'rightWidget1',
            'id' => 'rightWidget1',
            'before_widget' => '',
             'after_widget' => ''
         ),
         array(
             'name' => 'rightWidget2',
             'id' => 'rightWidget2',
             'before_widget' => '',
             'after_widget' => ''
         ),
         array(
             'name' => 'rightWidget3',
             'id' => 'rightWidget3',
             'before_widget' => '',
             'after_widget' => ''
         ),
         array(
             'name' => 'footWidget1',
            'id' => 'footWidget1',
             'before_widget' => '',
             'after_widget' => ''
         ),
         array(
                 'name' => 'footWidget2',
             'id' => 'footWidget2',
             'before_widget' => '',
             'after_widget' => ''
         ),
         array(
             'name' => 'footWidget3',
             'id' => 'footWidget3',
             'before_widget' => '',
             'after_widget' => ''
            
         ),
         array(
             'name' => 'footWidget4',
             'id' => 'footWidget4',
             'before_widget' => '',
             'after_widget' => ''
            
),
     );
     foreach ($widgets as $widget) {
         register_sidebar($widget);
     }
 }
 add_action('init', 'theme_widgets');

?>

