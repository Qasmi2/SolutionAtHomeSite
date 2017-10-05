<!Doctype html>
<html <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewpoint" content="width=device-width" initial-scale="1.0">
            
        <title>
            <?php bloginfo('name');?>
        </title>
        <!--  adding style-Sheet -->
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet"/>
           
        <?php wp_head(); ?>
    </head>
    
    <body>
        <!-- Menu bar show on front page -->
    <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
