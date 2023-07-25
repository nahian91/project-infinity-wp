<?php

/**
 * Section Title Block Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'section-title-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'section-title';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.

$section_subtitle =  get_field('section_subtitle');
$section_title =  get_field('section_title');
$section_description =  get_field('section_description');

?>

<!-- Section Title Start --->
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">	
    <div class="grid">
         <div class="col-12">
            <span class="section-title__sub"><?php echo $section_subtitle;?></span>
            <h4 class="section-title__title"><?php echo $section_title;?></h4>
            <p class="section-title__desc"><?php echo $section_description;?></p>
         </div>
      </div>
</div>

<!-- Section Title Section End -->	