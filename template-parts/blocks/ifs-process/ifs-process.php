<?php

/**
 * Process Block Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'process-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'process';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.

$process =  get_field('process');

?>

<!-- Process Start --->

<div id="<?php echo esc_attr($id); ?>" class="container <?php echo esc_attr($className); ?>">	
    <div class="grid">
         <div class="col-12">
            <div class="process__list">
                <?php 
                    if($process) {
                        foreach($process as $process) {
                            ?>
                            <div class="process__single">
                                <span class="process__number"><?php echo $process['process_number'];?></span>
                                <img src="<?php echo $process['process_image']['url'];?>" class="process__img" alt="">
                                <h4 class="process__title"><?php echo $process['process_title'];?></h4>
                                <p class="process__desc"><?php echo $process['process_description'];?></p>
                            </div>
                            <?php
                        }
                    }
                ?>
            </div>
         </div>
      </div>
</div>

<!-- Process Section End -->	