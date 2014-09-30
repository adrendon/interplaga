<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico"/>
        <link href='http://fonts.googleapis.com/css?family=Rosario:400,700,700italic|Open+Sans|Volkhov:400,700' rel='stylesheet' type='text/css'>
        <title><?php bloginfo('name'); ?></title>
        <!-- ======= CSS Principales ======= -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <!-- ======= Javascript ======= -->
        <?php wp_head(); ?>
        <!-- <script type="text/javascript" src="<?php bloginfo('template_directory');  ?>/js/tinynav.min.js"></script>
        <script type="text/javascript">
          jQuery(function() {
            jQuery('#menu-menu-principal').tinyNav({
                active: 'selected',
                header: ' '
            });
          });
        </script> -->
    </head>
    <body>
        <header class="header">
            <div class="headerBlock">
                <div class="headerBlock__top">
                    <div class="headerBlock__top--left">
                        <h1><?php $thisPost = $post -> ID; if  (get_post_meta($thisPost, h1, true) !=null) { echo (get_post_meta($thisPost, h1, true)); } else { the_title(); } ?></h1>
                    </div>
                    <div class="headerBlock__top--right">
                        <div class="headerBlock__top--rightBuscador">
                          <?php get_search_form(); ?>
                        </div>
                    </div>
                </div>
                <div class="headerBlock__bottom">
                    <figure class="headerBlock__bottom--figure">
                        <a href="<?php echo home_url(); ?>" title="<?php bloginfo('description'); ?> - Ir al inicio">
                            <img class="img-responsive"src="<?php bloginfo('template_directory'); ?>/img/header/logo.jpg" alt="<?php bloginfo('description'); ?> - Ir al inicio" title="<?php bloginfo('description'); ?> - Ir al inicio" width="151" height="77">
                        </a>
                        <figcaption class="headerBlock__bottom--figureFigcaption">
                            <a href="tel:985 243 002" title="Interplaga">985 243 002</a> / <a href="tel:985 254 705" title="Interplaga">985 254 705</a>
                        </figcaption>
                    </figure>
                    <nav class="navBlock">
                        <?php
                            wp_nav_menu(array(
                                'menu' => 'menu-principal',
                                'container' => 'false',
                                'container_class' => 'menu',
                                'menu_class' => 'navBlock__main'
                            ));
                        ?>
                        <!-- <ul class="navBlock__main">
                            <li class="navBlock__mainItem"><a class="navBlock__main--link" href="#" title="Interplaga">Empresa de control de plagas</a></li>
                            <li class="navBlock__mainItem"><a class="navBlock__main--link" href="#" title="Interplaga">Laboratorio análisis microbiológicos</a></li>
                            <li class="navBlock__mainItem"><a class="navBlock__main--link" href="#" title="Interplaga">Servios para el tratamiento de plagas</a></li>
                            <li class="navBlock__mainItem"><a class="navBlock__main--link" href="#" title="Interplaga">Appcc seguridad alimentaria</a></li>
                            <li class="navBlock__mainItem"><a class="navBlock__main--link" href="#" title="Interplaga">Información sobre plagas</a></li>
                            <li class="navBlock__mainItem"><a class="navBlock__main--link" href="#" title="Interplaga">Ubicación contacto</a></li>
                        </ul> -->
                        <?php //wp_nav_menu(array('menu' => 'menu-principal')); ?>
                    </nav>
                </div>
            </div>
            <div class="slider__block">
              <?php echo do_shortcode("[numixslider id='1']"); ?>
                <figure class="slider__block--figure">
                    <!-- <img class="img-responsive" src="img/header/slider/slider-1.jpg" alt="Interplaga" title="Interplaga" width="1100" height="627"> -->
                        <figcaption class="slider__block--figureFigcaption">
                            <div class="slider__block--figureFigcaptionContent">
                                <div class="slider__block--figureFigcaptionContentCenter">
                                    <small class="slider__block--figureFigcaptionContentCenterSmall">servicio para</small>
                                    <strong class="slider__block--figureFigcaptionContentCenterStrong">particulares</strong>
                                    <span class="slider__block--figureFigcaptionContentCenterSpan">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                </div>
                            </div>
                        </figcaption>
                </figure>
            </div>
        </header>