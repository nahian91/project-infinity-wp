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

// $teams =  get_field('teams');
// $team_page_link =  get_field('team_page_link');

?>

<section class="bannar bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero.jpg');">
   <div class="container">
      <div class="grid align-center">
         <div class="col-md-8">
            <div class="bannar__content">
               <span class="bannar__subtitle">custom software development</span>
               <h1 class="bannar__title">Connecting DOTS <br> Creating LOGICS</h1>
               <p class="bannar__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat error, ullam neque nobis delectus repellat fuga accusantium hic magnam quia.</p>
               <a href="" class="bannar__btn btn btn-primary">contact us</a>
               <a href="" class="bannar__btn btn btn-secondary">see projects</a>
            </div>
         </div>
         <div class="col-md-4">
            <form class="bannar__form">
               <h4 class="bannar__form-title">appoinment</h4>
               <div class="bannar__input">
                  <input type="text" placeholder="Name">
                  <i class="fa-regular fa-user"></i>
               </div>
               <div class="bannar__input">
                  <input type="email" placeholder="Email">
                  <i class="fa-regular fa-envelope"></i>
               </div>
               <div class="bannar__input">
                  <input type="text" placeholder="Phone">
                  <i class="fa-solid fa-phone"></i>
               </div>
               <div class="bannar__input">
                  <select>
                     <option value="">Select Subject</option>
                     <option value="">Web Design / Development</option>
                     <option value="">Software Development</option>
                     <option value="">Digital Marketing</option>
                     <option value="">IT Consultancy</option>
                  </select>
                  <i class="fa-solid fa-chevron-down"></i>
               </div>
               <div class="bannar__input">
                  <textarea placeholder="Message"></textarea>
               </div>
               <input class="bannar__input-btn" type="submit" value="make an appoinment">
            </form>
         </div>
      </div>
   </div>
</section>