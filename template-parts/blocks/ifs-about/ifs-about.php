<?php

/**
 * About Block Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'about-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'about';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.

$about_subtitle =  get_field('about_subtitle');
$about_title =  get_field('about_title');
$about_description =  get_field('about_description');
$about_features =  get_field('about_features');
$about_button =  get_field('about_button');
$abouts =  get_field('abouts');

?>

<section class="about pb-100">
   <div class="container">
      <div class="grid align-center">
         <div class="col-md-12">
            <div class="about__top">
               <?php 
                  if($abouts) {
                     foreach($abouts as $about) {
                        ?>
                        <div class="single_about">
                           <i class="<?php echo $about['about_icon'];?>"></i>
                           <div class="single-about-content">
                              <h4><?php echo $about['about_title'];?></h4>
                              <p><?php echo $about['about_description'];?></p>
                           </div>
                        </div>
                        <?php 
                     }
                  }
               ?>
            </div>
         </div>
         <div class="col-12 col-md-7">
            <span class="about__subtitle"><?php echo $about_subtitle;?></span>
            <h4 class="about__title"><?php echo $about_title;?></h4>
            <p class="about__desc"><?php echo $about_description;?></p>
            <?php 
               if($about_features) {
                  foreach($about_features as $feature) {
                     ?>
                        <span class="about__item"><i class="fa-solid fa-check-double"></i> <?php echo $feature['about_feature_title']; ?></span>
                     <?php 
                  }
               }
            ?>
            <a href="<?php echo $about_button['about_button_link'];?>" class="btn btn-primary about__btn"><?php echo $about_button['about_button_label'];?></a>
         </div>
         <div class="col-12 col-md-5">
            <div class="about__right">
               <span>Since <br> 2016</span>
               <div class="about__right-img">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/about.jpg" alt="">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/about-1.jpg" alt="">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>