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

    <?php 
        $footer_clients = get_field('footer_clients', 'option');
        
    ?>
    <section class="clients-area pt-30 pb-30">
        <div class="container">
            <div class="grid">
                <div class="col-md-12">
                    <div class="clients">
                        <?php 
                            if($footer_clients) {
                                foreach($footer_clients as $client){
                                    ?>
                                        <div class="single-clients">
                                            <img src="<?php echo $client['client_image']['sizes']['medium'];?>" alt="">
                                        </div>
                                    <?php 
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer bg" style="background-image: url('assets/img/footer.jpg');">
        <div class="container">
            <div class="grid">
                <div class="col-md-4 col-sm-6">
                    <?php
                        $footer_1 = get_field('footer_1', 'option');
                        $footer_2_3 = get_field('footer_2_3', 'option');
                        $footer_4 = get_field('footer_4', 'option');
                    ?>
                    <div class="footer__single">
                        <h4 class="footer__title"><?php echo $footer_1['footer_1_label']; ?></h4>
                        <p class="footer__desc"><?php echo $footer_1['footer_1_description']; ?></p>
                        <div class="footer__social">
                            <?php 
                                if($footer_1['footer_1_socials']) {
                                    foreach($footer_1['footer_1_socials'] as $social) {
                                        ?>
                                            <a href="<?php echo $social['footer_1_social_url'];?>" target="_blank" class="footer__social-link"><i class="<?php echo $social['footer_1_social_icon'];?>"></i></a>
                                        <?php
                                    }
                                }                                
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="footer__single">
                        <h4 class="footer__title"><?php echo $footer_2_3['footer_2_label'];?></h4>
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-2',
                                )
                            );
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer__single">
                        <h4 class="footer__title"><?php echo $footer_2_3['footer_3_label'];?></h4>
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-3',
                                )
                            );
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer__single footer__single--contact">
                        <h4 class="footer__title"><?php echo $footer_4['footer_4_label'];?></h4>
                        <ul>
                            <?php
                                foreach($footer_4['footer_4_list'] as $single) {
                                    ?>
                                        <li class="footer__list"><i class="<?php echo $single['footer_4_icon']; ?>"></i> <?php echo $single['footer_4_info']; ?></li>
                                    <?php
                                }
                            ?>
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
                        <p>&copy; 2023. All Rights Reserved.</p>
                    </div>
                </div>
                <!--
                <div class="col-sm-8 text-right">
                    <?php
                        // wp_nav_menu(
                        //     array(
                        //         'theme_location' => 'menu-4',
                        //         'menu_class'     => 'footer-bottom__menu',
                        //     )
                        // );
                    ?>
                </div>
                -->
            </div>
        </div>
    </section>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
