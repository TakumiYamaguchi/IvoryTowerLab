<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="masthead" class="site-header">
        <div class="header-inner">
            <h1 class="header-inner__logo">
                <a href="<?php echo home_url(); ?>/" class="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ivory_tower_lab_logo.png" />
                </a>
            </h1>
            <nav class="header-inner__nav">
                <ul class="header-list__menu">
                    <li class="header-list-item">
                        <a class="header-list-item__link" href="#about-this-site">About This Site</a>
                    </li>
                    <li class="header-list-item">
                        <a class="header-list-item__link" href="#about-me">About Me</a>
                    </li>
                    <li class="header-list-item">
                        <a class="header-list-item__link" href="#works">Works</a>
                    </li>
            </nav>
        </div>
    </header>