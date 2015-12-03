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
        <title><?php wp_title(''); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" id="mh-google-fonts-css" href="//fonts.googleapis.com/css?family=Oswald:400,700,300|PT+Serif:400,400italic,700,700italic" type="text/css" media="all">
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.min.css?random=<?php echo rand(1,100000); ?>">
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr.js"></script>
        <style>
            .btn--download {
                width: 130px;
                height: 40px;
                line-height: 36px;
                border: 2px solid #333;
                text-align: center;
                color: #333;
                -webkit-transition: all 300ms;
                -o-transition: all 300ms;
                transition: all 300ms;
                display: block;
                position: absolute;
                top: 50%;
                right: 0;
                transform: translate(0, -50%);
            }
            .btn--download:hover {
                background: #333;
                color: #fff;
            }
            .relative {
                position: relative;
            }
        </style>
    </head>
    <body style="color: #000 !important;" <?php body_class(); ?>>
        <div class="full-height">
            <header class="header">
                <div class="wrap">
                    <div class="menu">
                        <div class="menu--top">
                            <a href="<?php bloginfo('url'); ?>" title="Territorial Inequality and Development" class="logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-new.png" alt="Logo">
                            </a>
                            <a href="http://rimisp.org" target="_blank" title="Rimisp" class="menu--top__right" style="margin-top: 5px;height: 110px;text-align: right; width: 200px;">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo_30_header_04.png" alt="Rimisp">
                            </a>
                        </div>
                        <nav class="menu--nav">
                            <div class="menu-mobile">Menu</div>
                            <div class="content-mobile">
                                <a href="<?php bloginfo('url'); ?>" title="Home" class="menu-item<?php if ( $page == 'home' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Home</a>
                                <a href="<?php bloginfo('url'); ?>/overview" title="Overview" class="menu-item<?php if ( $page == 'overview' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Overview</a>
                                <a href="<?php bloginfo('url'); ?>/committee" title="Committee" class="menu-item<?php if ( $page == 'committee' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Committee</a>
                                <a href="<?php bloginfo('url'); ?>/themes" title="Themes" class="menu-item<?php if ( $page == 'themes' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Themes</a>
                                <div class="small-one menu-item<?php if ( $page == 'program' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                    <div class="dropdown">
                                        <span>Program</span>
                                    </div>
                                    <div class="dropdown--list">
                                        <a href="<?php bloginfo('url'); ?>/program/at-a-glance" title="At a glance" class="menu-item <?php if ( $subpage == 'at-a-glance' ) { echo 'current_page_item'; } ?>">At a glance</a>
                                        <a href="<?php bloginfo('url'); ?>/program/in-detail/detail-day-one" title="In detail" class="menu-item <?php if ( $subpage == 'in-detail' ) { echo 'current_page_item'; } ?>">In detail</a>
                                    </div>
                                </div>
                                <div class="menu-item<?php if ( $page == 'press-room' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                    <div class="dropdown">
                                        <span>Press Room</span>
                                    </div>
                                    <div class="dropdown--list">
                                        <a href="<?php bloginfo('url'); ?>/news" title="News" class="menu-item <?php if ( $subpage == 'news' ) { echo 'current_page_item'; } ?>">News</a>
                                        <a href="<?php bloginfo('url'); ?>/in-the-media" title="In the media" class="menu-item <?php if ( $subpage == 'in-the-media' ) { echo 'current_page_item'; } ?>">In the media</a>
                                        <a href="<?php bloginfo('url'); ?>/videos" title="videos" class="menu-item <?php if ( $subpage == 'videos' ) { echo 'current_page_item'; } ?>">Videos and Photos</a>
                                    </div>
                                </div>
                                <div class="menu-item<?php if ( $page == 'travel' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                                    <div class="dropdown">
                                        <span>Travel</span>
                                    </div>
                                    <div class="dropdown--list">
                                        <a href="<?php bloginfo('url'); ?>/flight-and-visa" title="Flight and visa" class="menu-item <?php if ( $subpage == 'flight-and-visa' ) { echo 'current_page_item'; } ?>">Flight and visa</a>
                                        <a href="<?php bloginfo('url'); ?>/practical-information" title="Practical information" class="menu-item <?php if ( $subpage == 'practical-information' ) { echo 'current_page_item'; } ?>">Practical information</a>
                                        <a href="<?php bloginfo('url'); ?>/accommodation" title="Practical information" class="menu-item <?php if ( $subpage == 'accommodation' ) { echo 'current_page_item'; } ?>">Accommodation</a>
                                    </div>
                                </div>
                                <a href="<?php bloginfo('url'); ?>/contact" title="Contact" class="menu-item<?php if ( $page == 'contact' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Contact</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>