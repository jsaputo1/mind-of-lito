<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>
    <header>
        <div class="header-container">
            <div class="header-logo">
                <a href="<?php echo get_home_url(); ?>">
                    <?php dynamic_sidebar ('header')?>
                </a>
            </div>
            <nav>
            <?php wp_nav_menu(array(
                'theme_location' => 'nav'
                )) ;?> 
            </nav>
        </div>
    </header>
<div id="page-container">
    <div id="content-wrap">
                

