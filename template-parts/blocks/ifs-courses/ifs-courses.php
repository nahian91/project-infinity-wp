<?php

/**
 * Courses Block Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'course-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'course';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.

// $contact_icon =  get_field('contact_icon');
// $contact_title =  get_field('contact_title');
// $contact_info =  get_field('contact_info');

?>

<!-- Courses Start --->
<div id="<?php echo esc_attr($id); ?>" class="container <?php echo esc_attr($className); ?>">	
    <div class="grid">
        <?php 
            $args = array(
                'post_type' => 'course'
            );
            $the_query  = new WP_Query($args);

            if ( $the_query->have_posts() ) :
            
            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-md-4">
            <div class="course__single">
                <div class="course__img" style="background-image: url('<?php the_post_thumbnail_url();?>');"></div>
                <span class="course__price">5,500</span>
                <h4 class="course__title"><a href=""><?php the_title();?></a></h4>
                <div class="course__author">
                    <img src="https://localhost/ifs/wp-content/uploads/2023/07/nahian.png" alt="">
                    <p><span>Teacher</span> Abdullah Nahian</p>
                </div>
                <div class="course__info">
                    <span><i class="fa-brands fa-facebook-f"></i> 30 Class</span>
                    <span><i class="fa-brands fa-facebook-f"></i> 3 Months</span>
                    <span><a href="<?php the_permalink();?>">View Details</a></span>
                </div>
            </div>
        </div>
                <?php endwhile; ?>
                <!-- end of the loop -->
                
                <?php
             
                wp_reset_postdata(); else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
    </div>
</div>

<!-- Courses Section End -->	