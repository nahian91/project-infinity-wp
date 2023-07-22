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
	<!-- Header -->

    <?php 
        $header_logo = get_field('header_logo', 'option');
        $header_infos = get_field('header_infos', 'option');
        $header_socials = get_field('header_socials', 'option');
    ?>

    <section class="header-top">
        <div class="container">
            <div class="grid">
                <div class="col-12 col-sm-6">
                    <div class="header-top__left">
                        <?php 
                            if($header_infos) {
                                foreach($header_infos as $info) {
                                    ?>
                                        <a href="#"><i class="<?php echo $info['header_info_icon'];?>"></i> <?php echo $info['header_info_label'];?></a>
                                    <?php
                                }
                            }                            
                        ?>
                    </div>
                </div>
                <div class="col-12 col-sm-6 text-right">
                    <div class="header-top__social">        
                        <?php 
                            if($header_socials) {
                                foreach($header_socials as $social) {
                                    ?>
                                        <a href="<?php echo esc_url($social['header_social_url']);?>" target="_blank"><i class="<?php echo esc_attr($social['header_social_icon']);?>"></i></a>
                                    <?php
                                }
                            }                            
                        ?>
                    </div>
                </div>
            </div>
        </div>
   </section>

   <!-- Header -->
   <header class="header">
    <div class="container">
        <div class="grid align-center">
            <div class="col-sm-2 col-6 col-bleed-y">
                <a href="<?php echo site_url();?>" class="header__logo">
                    <img src="<?php echo $header_logo['url']; ?>" alt="<?php esc_attr($header_logo['alt']); ?>">
                </a>
            </div>
            <div class="col-sm-10 col-bleed-y">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_class'        => 'header__nav',
                            'menu_id'        => 'menu',
                        )
                    );
                ?>
            </div>
        </div>
    </div>
   </header>
