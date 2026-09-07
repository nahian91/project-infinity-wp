<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Infinity_Flame_Soft
 */

?>

    <footer class="footer bg" style="background-image: url('<?php echo esc_url( get_theme_file_uri( 'assets/img/footer.jpg' ) ); ?>');">
        <div class="container">
            <div class="grid">
                <!-- Column 1: About -->
                <div class="col-md-4 col-sm-6">
                    <div class="footer__single">
                        <h4 class="footer__title"><?php esc_html_e( 'About Company', 'ifs' ); ?></h4>
                        <p class="footer__desc"><?php esc_html_e( 'Only one door to knock for every software, website, and e-commerce solution for your business', 'ifs' ); ?></p>
                        <div class="footer__social">
                            <!-- Add social icons or dynamic widget here -->
                        </div>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div class="col-md-2 col-sm-6">
                    <div class="footer__single">
                        <h4 class="footer__title"><?php esc_html_e( 'Quick Links', 'ifs' ); ?></h4>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-2',
                                'menu_id'        => 'menu-footer-1',
                                'container'      => 'div',
                                'container_class'=> 'menu-footer-1-container',
                                'fallback_cb'    => function() {
                                    ?>
                                    <ul id="menu-footer-1" class="menu">
                                        <li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>"><?php esc_html_e( 'About Us', 'ifs' ); ?></a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/courses/' ) ); ?>"><?php esc_html_e( 'Courses', 'ifs' ); ?></a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>"><?php esc_html_e( 'Projects', 'ifs' ); ?></a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/teams/' ) ); ?>"><?php esc_html_e( 'Teams', 'ifs' ); ?></a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Services', 'ifs' ); ?></a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php esc_html_e( 'Contact', 'ifs' ); ?></a></li>
                                    </ul>
                                    <?php
                                },
                            )
                        );
                        ?>
                    </div>
                </div>

                <!-- Column 3: Our Services -->
                <div class="col-md-3 col-sm-6">
                    <div class="footer__single">
                        <h4 class="footer__title"><?php esc_html_e( 'Our Services', 'ifs' ); ?></h4>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-3',
                                'menu_id'        => 'menu-footer-2',
                                'container'      => 'div',
                                'container_class'=> 'menu-footer-2-container',
                                'fallback_cb'    => function() {
                                    ?>
                                    <ul id="menu-footer-2" class="menu">
                                        <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Web Development', 'ifs' ); ?></a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Software Solutions', 'ifs' ); ?></a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Mobile Apps', 'ifs' ); ?></a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/courses/' ) ); ?>"><?php esc_html_e( 'IT Training', 'ifs' ); ?></a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php esc_html_e( 'Support', 'ifs' ); ?></a></li>
                                    </ul>
                                    <?php
                                },
                            )
                        );
                        ?>
                    </div>
                </div>

                <!-- Column 4: Contact Us -->
                <div class="col-md-3 col-sm-6">
                    <div class="footer__single footer__single--contact">
                        <h4 class="footer__title"><?php esc_html_e( 'Contact Us', 'ifs' ); ?></h4>
                        <ul>
                            <li class="footer__list">
                                <i class="fa fa-map-marker-alt"></i> 
                                <?php esc_html_e( '513, Rangmohol Tower,', 'ifs' ); ?><br>
                                <?php esc_html_e( 'Bandor Bazar, Sylhet', 'ifs' ); ?>
                            </li>
                            <li class="footer__list">
                                <i class="fa-regular fa-envelope"></i> 
                                <a href="mailto:faisal.lu.ac@gmail.com">faisal.lu.ac@gmail.com</a><br>
                                <a href="mailto:nahiansylhet@gmail.com">nahiansylhet@gmail.com</a>
                            </li>
                            <li class="footer__list">
                                <i class="fa fa-mobile-alt"></i> 
                                <a href="tel:+8801710903032">+880 171 09 03 032</a><br>
                                <a href="tel:+8801686195607">+880 168 61 95 607</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <section class="footer-bottom">
        <div class="container">
            <div class="grid align-center">
                <div class="col-sm-12">
                    <div class="footer-bottom__copy">
                        <p>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All Rights Reserved.', 'ifs' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>