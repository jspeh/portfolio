<!DOCTYPE html>
<html class="no-js">
    <head>
        <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        
        
        <div class="menu-wrapper">
            <div class="menu menu--adsila">
                <a href="<?php echo home_url('/'); ?>"><img class="nav-menu-logo" src="<?php echo get_template_directory_uri() ?>/img/logo-dark.svg" alt=""></a>
                <a id="nav-menu-close" href="#"><img class="nav-menu-close" src="<?php echo get_template_directory_uri() ?>/img/icon-menu-close.svg" alt=""></a>
                <a class="menu__item" href="<?php echo get_site_url() ?>/work"><span class="menu__item-label">Work</span></a>
                <a class="menu__item" href="<?php echo get_site_url() ?>/about"><span class="menu__item-label">About</span></a>
                <a class="menu__item" href="<?php echo get_site_url() ?>/blog"><span class="menu__item-label">Blog</span></a>
                <a class="menu__item" href="mailto:hello@jonathanspeh.com"><span class="menu__item-label">Contact</span></a>
                
                
            </div>
        </div>
        <div class="menu-overlay"></div>

        <div class="nav">
            <div class="left">
            <a href="<?php echo get_site_url() ?>">
             <?php

            if (strpos($_SERVER['REQUEST_URI'], 'blog') !== false) {
                echo '<img class="nav-logo" alt="BrainFutures" src="' . get_template_directory_uri() . '/img/logo-dark.svg">';
            } else {
                if (get_field('navbar_style') == 'dark') {
                    echo '<img class="nav-logo" alt="Jonathan Speh" src="' . get_template_directory_uri() . '/img/logo-dark.svg">';
                } else {
                    echo '<img class="nav-logo" alt="Jonathan Speh" src="' . get_template_directory_uri() . '/img/logo.svg">';
                }
            }
            ?>
            </a>
            
            
            
            </div>
            <div class="right">
                <!-- <a class="hidden-xs hidden-sm" href="#"><div class="nav-menu">Connect</div></a> 
                <a id="btn-menu" href="#"><img class="nav-menu-mobile" src="<?php echo get_template_directory_uri() ?>/img/menu-mobile.svg" alt=""></a>-->
                <a id="btn-menu" href="#">
             <?php

            if (strpos($_SERVER['REQUEST_URI'], 'blog') !== false) {
                echo '<img class="nav-menu-mobile" alt="BrainFutures" src="' . get_template_directory_uri() . '/img/menu-mobile-dark.svg">';
            } else {
                if (get_field('navbar_style') == 'dark') {
                    echo '<img class="nav-menu-mobile" alt="Jonathan Speh" src="' . get_template_directory_uri() . '/img/menu-mobile-dark.svg">';
                } else {
                    echo '<img class="nav-menu-mobile" alt="Jonathan Speh" src="' . get_template_directory_uri() . '/img/menu-mobile.svg">';
                }
            }
            ?>
            </a>
                
            </div>
        </div>