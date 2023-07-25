<?php

/**
 * CTA Block Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'counter-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'counter';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.

$cta_title =  get_field('cta_title');
$cta_description =  get_field('cta_description');
$cta_button =  get_field('cta_button');
$counters =  get_field('counters');

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="background-image:url('../assets/img/cta-bg.png');">
   <div class="container">
      <div class="grid align-center">
         <div class="col-md-6">
            <h4><?php echo $cta_title;?></h4>
            <p><?php echo $cta_description;?></p>
            <a href="<?php echo esc_url($cta_button['cta_button_url']);?>" class="bannar__btn btn btn-secondary"><?php echo $cta_button['cta_button_title'];?></a>
         </div>
         <div class="col-md-6">
            <div class="grid">
               <?php 
                    if($counters) {
                        foreach($counters as $counter) {
                            ?>
                                <div class="col-6">
                                    <div class="counter__single">
                                        <h4><span class="counter__number"><?php echo $counter['cta_number']; ?></span> +</h4>
                                        <p class="counter__title"><?php echo $counter['cta_title']; ?></p>
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
</section>