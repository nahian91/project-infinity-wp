<?php

/**
 * Hero Block Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'hero-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.

$hero_subtitle =  get_field('hero_subtitle');
$hero_title =  get_field('hero_title');
$hero_description =  get_field('hero_description');
$hero_button_1 =  get_field('hero_button_1');
$hero_button_2 =  get_field('hero_button_2');
$hero_form =  get_field('hero_form');
?>

<section class="bannar bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero.jpg');">
   <div class="container">
      <div class="grid align-center">
         <div class="col-md-8">
            <div class="bannar__content">
               <span class="bannar__subtitle"><?php echo $hero_subtitle; ?></span>
               <h1 class="bannar__title"><?php echo $hero_title; ?></h1>
               <p class="bannar__desc"><?php echo $hero_description; ?></p>
               <a href="<?php echo $hero_button_1['hero_button_1_url']; ?>" class="bannar__btn btn btn-primary"><?php echo $hero_button_1['hero_button_1_label']; ?></a>
               <a href="<?php echo $hero_button_2['hero_button_2_url']; ?>" class="bannar__btn btn btn-secondary"><?php echo $hero_button_2['hero_button_2_label']; ?></a>
            </div>
         </div>
         <div class="col-md-4">
            <?php echo do_shortcode('[contact-form-7 id="511" title="Home Form"]'); ?>
         </div>
      </div>
   </div>
</section>