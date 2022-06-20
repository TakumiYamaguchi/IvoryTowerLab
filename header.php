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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="masthead" class="site-header">
        <div class="header-inner">
            <h1 class="header-inner__title">
                <a href="<?php echo home_url(); ?>/" class="header-logo__link">
                    <img class="header-logo"
                        src="<?php echo get_template_directory_uri(); ?>/img/ivory_tower_lab_logo.png" />
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
                    <li class="header-list-item">
                        <a class="header-list-item__link" href="#contact">Contact</a>
                    </li>
            </nav>
            <button type="button" class="sp-menu__btn">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <nav class="sp-menu">
                <ul id="sp-menu__list" class="sp-menu__list">
                    <li class="sp-menu__item">
                        <a class="sp-menu__item-link" href="#about-this-site">About This Site</a>
                    </li>
                    <li class="sp-menu__item">
                        <a class="sp-menu__item-link" href="#about-me">About Me</a>
                    </li>
                    <li class="sp-menu__item">
                        <a class="sp-menu__item-link" href="#works">Works</a>
                    </li>
                    <li class="sp-menu__item">
                        <a class="sp-menu__item-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </nav>
</body>
</div>
</header>