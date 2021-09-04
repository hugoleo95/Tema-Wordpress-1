<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Prueba Tema1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  

   
</head>

<body>
 
    <header>
        <div class="header-area ">
           
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <a href="index.html">
                                <div class="logo" id="logo">
                                    <?php

                                    if( function_exists('the_custom_logo')){
                                        the_custom_logo();
                                    }

                                     ?>
                                         <!--<h3>Your Logo</h3>-->
                                         <!--<img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png">-->
                                    
                                </div>
                                </a>
                            </div>
                            <div class="col-xl-8 col-lg-9" id="navbar">
                           <!-- 
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li class="active"><a class="active2" href="index.html">home</a></li>
                                          
                                            <li><a href="#">Link</a></li>
                                            <li><a href="#">Link</a></li>
                                            <li><a href="#">Link</a></li>
                                            <li><a href="#">Link</a></li>
                                            <li><a href="#">Link</a></li>
                                           
                                        </ul>
                                    </nav>
                                </div>
                            </div>
-->
                            <?php wp_nav_menu(array(

                                'theme_location' =>'menu_principal',
                                'container' => 'div',
                                'container_class' =>'main-menu  d-none d-lg-block',
                                'items_wrap' => ' <ul id="navigation">%3$s</ul>',
                                'menu_class' => 'nav-item'
                                )); ?>
                            <!--
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a  href="#">Get a Quote</a>
                                    </div>
                                </div>
                            </div>

                        -->
                    </div>
                      <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                           
                        </div>
                    </div>

                </div>
            </div>
        </div>
       
    </header>
    
<!-- <?php $imagenes_destacadas= wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');

        $destacada= $imagenes_destacadas[0];
    //print_r($imagenes_destacadas);
     ?>
 -->
 <?php 

 ?>
     <div class="parallax-content baner-content" id="banner" style="background-image: url(<?php header_image(); ?>)">
        <div class="container">
            <div class="text-content">
                <?php dynamic_sidebar('header_widget') ?>
               
                <div class="primary-white-button">
                    <a href="#" class="scroll-link" data-id="about">Click me to find out more</a>
                </div>
            </div>
        </div>
    </div>
   