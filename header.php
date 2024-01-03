<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 
        <?php bloginfo('name'); ?>  
        <?php wp_title(); ?>
        <?php 
            if(is_front_page()){
                echo "| ";
                bloginfo('description');
            } 
        ?>
    </title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/index.css" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php 
        $logoImg = get_header_image();
    ?>

    <div class="logo-container"><a href="<?php echo site_url();?>"><img src="<?php echo $logoImg ?>"></a></div>

    <div>header...</div>

    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary-menu',
        'menu_class' => 'nav'
    ));
    ?>