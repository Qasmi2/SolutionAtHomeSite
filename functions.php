<?php
/*
============================================
           CSS and JS Script Enqueue 
============================================
*/

function script_enqueue(){
    // enqueue style sheet we need 5 arguments , unique name, path , dependance array , version no. and all css
    wp_enqueue_style('style', get_stylesheet_directory_uri().'/css/bootstrap.min.css', array(), '1.0.0', 'all');
    // enqueue script we need same arguments as sytle sheet 
    // last agrument is boolen ( true /false ) to show script into header-> false  or footer -> true
    wp_enqueue_script('bootsraptScript', get_template_directory_uri().'/js/bootstrap.min.js', array(), '1.0.0', true);
    
}
// invoke hook  wp_enqueue_scripts arguments enqueue both style and script both 
add_action('wp_enqueue_scripts', 'script_enqueue');

/*
 * ===========================================
 *          create Theme Menues 
 * ===========================================
 */
function create_menu(){
    //add_theme_support function is use for creating the theme meneu f
    add_theme_support('menu');
    register_nav_menu('primary', "this is the Primary menue ");
    register_nav_menu('secondary',"this is the footer menue");
}
// invok the hook 
add_action('init', 'create_menu');




