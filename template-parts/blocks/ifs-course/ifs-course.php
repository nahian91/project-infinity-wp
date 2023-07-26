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
$course_number = get_field('course_number');
$course_url = get_field('course_url');
?>

<!-- Courses Start --->
<div id="<?php echo esc_attr($id); ?>" class="container <?php echo esc_attr($className); ?>">	
    <div class="grid">
        <?php 
            $args = array(
                'post_type' => 'course',
                'orderby' => 'rand',
                'posts_per_page' => $course_number
            );
            $the_query  = new WP_Query($args);

            if ( $the_query->have_posts() ) :
            
            while ( $the_query->have_posts() ) : $the_query->the_post();             
                global $post;
                $course_price =  get_field('course_price', get_the_ID());
                $course_instructor_name =  get_field('course_instructor_name', get_the_ID());
                $course_instructor_image =  get_field('course_instructor_image', get_the_ID());
            ?>
                <div class="col-md-3">
                    <div class="course__single">
                        <div class="course__img" style="background-image: url('<?php the_post_thumbnail_url();?>');"></div>
                        <span class="course__price"><?php echo $course_price;?>৳</span>
                        <h4 class="course__title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                        <div class="course__author">
                            <img src="<?php echo $course_instructor_image;?>" alt="">
                            <p><span>Teacher</span> <?php echo $course_instructor_name;?></p>
                        </div>
                        <div class="course__info">
                            <span><a href="<?php the_permalink();?>">View Details</a></span>
                        </div>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
    <?php 
        if($course_url) {
            ?>
                <div class="grid">
                    <div class="col-12 text-center mt-30">
                        <a href="<?php echo $course_url;?>" class="btn btn-primary">
                        View All Courses</a>
                    </div>
                </div>
            <?php 
        }
    ?>
</div>

<!-- Courses Section End -->	