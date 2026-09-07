<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Infinity_Flame_Soft
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ifs' ); ?></a>

  <section class="header-top">
        <div class="container">
            <div class="grid">
                <div class="col-12 col-sm-6">
                    <div class="header-top__left">
                                                                <a href="#"><i class="fa-regular fa-envelope"></i> faisal.lu.ac@gmail.com</a>
                                                                            <a href="#"><i class="fa fa-phone"></i> +8801710903032</a>
                                                        </div>
                </div>
                <div class="col-12 col-sm-6 text-right">
                    <div class="header-top__social">        
                                                                <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                                                                            <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                                                                            <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                                                            <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                                                                            <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                                                        </div>
                </div>
            </div>
        </div>
   </section>

   <header class="header">
    <div class="container">
        <div class="grid align-center">
            <div class="col-sm-2 col-6 col-bleed-y">
                <a href="https://infinityflamesoft.com" class="header__logo">
                    <img src="https://infinityflamesoft.com/wp-content/uploads/2026/01/logo.png" alt="">
                </a>
            </div>
            <div class="col-sm-10 col-bleed-y">
                <div class="menu-main-menu-container"><ul id="menu" class="header__nav">
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
    <li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a></li>
    <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li>
    <li><a href="<?php echo esc_url( home_url( '/teams/' ) ); ?>">Teams</a></li>
    <li><a href="<?php echo esc_url( home_url( '/courses/' ) ); ?>">Courses</a></li>
    <li><a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact Us</a></li>
</ul></div>            </div>
        </div>
    </div>
   </header>