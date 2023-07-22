<?php

/**
 * Testimonial Block Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonial-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonial';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.

$testimonials =  get_field('testimonials');

?>

<!-- Teams Start --->
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">	
    <div class="grid">
        <div class="col-12">
            <div class="testimonial__slider">
                <?php 
                    if($testimonials) {
                        foreach($testimonials as $testimonial) {
                            ?>
                            <div class="testimonial__single">
                                <i class="fa-solid fa-quote-left"></i>
                                <p><?php echo $testimonial['testimonial_content']; ?></p>
                                <div class="testimonial__single-info">
                                    <h4 class="testimonial__single-author"><?php echo $testimonial['testimonial_name']; ?> <span><?php echo $testimonial['testimonial_designation']; ?></span></h4>
                                </div>
                            </div>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- Teams Section End -->	

