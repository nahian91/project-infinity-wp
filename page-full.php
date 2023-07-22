<?php
/**
 * Template Name: Full page
 * Template Post Type: page
 *
 *
 * The template for displaying homepage
 *
 * This is the template that displays homepage which only contains widgets.
 *
 * Todo: need to check if the Homepage can be presented in better ways after final development
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ewa-paymentprocess-theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
						
			
				<?php
					the_content();
				?>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
