<?php
include 'functions.php';
/**
 * Cabacera de la Página
 *
 * Nuestra todo el contenido hasta <body>
 *
 * @package		rimisp
 * @author		Jairo Burbano <jairo.aburbano@gmail.com>
 * @version		1.0.0
 */
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" id="mh-google-fonts-css" href="//fonts.googleapis.com/css?family=Oswald:400,700,300|PT+Serif:400,400italic,700,700italic" type="text/css" media="all">
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body <?php body_class(); ?>>
        <?php include('svg-defs.svg'); ?>
        <div class="full-height">
            <header class="header">
                <div class="wrap">
                    <a href="index.php" title="Territorial Inequality and Development" class="logo">
                        <img src="img/logo.png" alt="Logo">
                    </a>
                    <div class="menu">
                        <div class="menu--top">
                            <a href="index.php" title="Territorial Inequality and Development" class="menu--top__left clearfix">
                                <img src="img/conference.png" alt="Territorial Inequality and Development">
                                <img src="img/conference-date.png" alt="Conference date">
                            </a>
                            <a href="http://rimisp.orp" target="_blank" title="Rimisp" class="menu--top__right">
                                <img src="img/rimisp-header.jpg" alt="Rimisp">
                            </a>
                        </div>
                        <nav class="menu--nav">
                            <div class="menu-mobile">Menu</div>
                            <div class="content-mobile">
                                <a href="index.php" title="Home" class="menu-item<?php if ( $page == 'home' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Home</a>
                                <a href="page-overview.php" title="Overview" class="menu-item<?php if ( $page == 'overview' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Overview</a>
                                <div class="menu-item<?php if ( $page == 'program' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                    <div class="dropdown">
                                        <span>Program</span>
                                    </div>
                                    <div class="dropdown--list">
                                        <a href="page-at-a-glance.php" title="At a glance" class="menu-item <?php if ( $subpage == 'at-a-glance' ) { echo 'current_page_item'; } ?>">At a glance</a>
                                        <a href="page-in-detail.php" title="In detail" class="menu-item <?php if ( $subpage == 'in-detail' ) { echo 'current_page_item'; } ?>">In detail</a>
                                    </div>
                                </div>
                                <a href="page-resources.php" title="Resources" class="menu-item<?php if ( $page == 'resources' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Resources</a>
                                <div class="menu-item<?php if ( $page == 'press-room' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                    <div class="dropdown">
                                        <span>Press Room</span>
                                    </div>
                                    <div class="dropdown--list">
                                        <a href="page-news.php" title="News" class="menu-item <?php if ( $subpage == 'news' ) { echo 'current_page_item'; } ?>">News</a>
                                    </div>
                                </div>
                                <div class="menu-item<?php if ( $page == 'travel' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                    <div class="dropdown">
                                        <span>Travel</span>
                                    </div>
                                    <div class="dropdown--list">
                                        <a href="page-flight-and-visa.php" title="Flight and visa" class="menu-item <?php if ( $subpage == 'travel' ) { echo 'current_page_item'; } ?>">Flight and visa</a>
                                        <a href="page-practical-information.php" title="Practical information" class="menu-item <?php if ( $subpage == 'travel' ) { echo 'current_page_item'; } ?>">Practical information</a>
                                    </div>
                                </div>
                                <a href="page-committee.php" title="Committee" class="menu-item<?php if ( $page == 'committee' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Committee</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>