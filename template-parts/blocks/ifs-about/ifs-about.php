<?php

/**
 * Teams Block Template.
*/

// Create id attribute allowing for custom "anchor" value.
$id = 'teams-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'teams';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.

$teams =  get_field('teams');
$team_page_link =  get_field('team_page_link');
$course_teacher_name =  get_field('course_teacher_name');

?>

<section class="about pt-80 pb-80">
   <div class="container">
      <div class="grid align-center">
         <div class="col-12 col-md-7">
            <span class="about__subtitle">about us</span>
            <h4 class="about__title">We are a Team of Experts to Take your Business to the next level</h4>
            <?php echo $course_teacher_name ;?>
            <p class="about__desc">We started our journey in 2016. Since then, we got the opportunity to work with thousands of clients and hundreds of companies and brands. We are a fast growing and innovative IT services agency. Our experienced team is made up of creative and technical minds with high expertise. </p>
            <span class="about__item"><i class="fa-solid fa-check-double"></i> Fusce consectetur purus ac aliquam aliquet.</span>
            <span class="about__item"><i class="fa-solid fa-check-double"></i> Pellentesque non arcu sollicitudin, pellentesque augue id.</span>
            <span class="about__item"><i class="fa-solid fa-check-double"></i> Vestibulum blandit justo felis dapibus varius more-or-less.</span>
            <span class="about__item"><i class="fa-solid fa-check-double"></i> Quisque varius tellus a pretium, ac facilisis massa placerat.</span>
            <span class="about__item"><i class="fa-solid fa-check-double"></i> Lorem consectetur purus ac aliquam aliquet.</span>
            <a href="" class="btn btn-primary about__btn">read more</a>
         </div>
         <div class="col-12 col-md-5">
            <div class="about__right">
               <img class="about__img" src="assets/img/about.png" alt="">
               <p class="about__text">since <br> 2016</p>
            </div>
         </div>
      </div>
   </div>
</section>