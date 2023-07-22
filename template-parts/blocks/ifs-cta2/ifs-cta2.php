<?php

/**
 * CTA Block Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'cta-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'cta';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.

$cta_2_title =  get_field('cta_2_title');
$cta_2_description =  get_field('cta_2_description');
$cta_btn_1 =  get_field('cta_btn_1');
$cta_btn_2 =  get_field('cta_btn_2');

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
   <div class="container">
      <div class="grid align-center">
         <div class="col-12 col-sm-6">
            <h4><?php echo $cta_2_title; ?></h4>
            <p><?php echo $cta_2_description; ?></p>
         </div>
         <div class="col-12 col-sm-6 text-center">
            <a href="<?php echo $cta_btn_1['cta_btn_1_url'];?>" class="btn btn-primary"><?php echo $cta_btn_1['cta_btn_1_title'];?></a>
            <a href="<?php echo $cta_btn_2['cta_btn_2_url'];?>" class="btn btn-secondary"><?php echo $cta_btn_2['cta_btn_2_title'];?></a>
         </div>
      </div>
   </div>
</section>