<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Infinity_Flame_Soft
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="course-single pt-80 pb-80">
			<div class="container">
				<div class="grid">
					<?php
						while ( have_posts() ) :
							the_post();
							$course_instructor_name =  get_field('course_instructor_name', get_the_ID());
							$course_instructor_image =  get_field('course_instructor_image', get_the_ID());
							$course_instructor_description =  get_field('course_instructor_description', get_the_ID());
							$course_price =  get_field('course_price', get_the_ID());
							$course_classes =  get_field('course_classes', get_the_ID());
							$course_duration =  get_field('course_duration', get_the_ID());
							$course_week =  get_field('course_week', get_the_ID());
							$course_enroll_link =  get_field('course_enroll_link', get_the_ID());
							$course_description =  get_field('course_description', get_the_ID());
							$course_syllabus =  get_field('course_syllabus', get_the_ID());
							$course_includes =  get_field('course_includes', get_the_ID());
							$course_requirements =  get_field('course_requirements', get_the_ID());
							?>
							<div class="col-md-8">
								<div class="course__content">
									<h4 class="course__heading"><?php the_title();?></h4>
									<p><?php echo $course_description;?></p>
									<br>
									<ul class="course__sum">
										<li><?php echo $course_classes;?></li>
										<li><?php echo $course_duration;?></li>
										<li><?php echo $course_week;?></li>
									</ul>
									<h5 class="course__heading">Course Syllabus</h5>
									<ul>
										<?php 
											if($course_syllabus) {
												foreach($course_syllabus as $syllabus) {
													?>
														<li><?php echo $syllabus['course_syllabus_title'];?></li>
													<?php
												}
											}
										?>
									</ul>
								</div>
								<div class="course__instructor">
									<h5 class="course__heading">About Instructor</h5>
									<img src="<?php echo $course_instructor_image;?>" alt="">
									<h4><?php echo $course_instructor_name;?></h4>
									<p><?php echo $course_instructor_description;?></p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="course__top">
									<img src="<?php the_post_thumbnail_url();?>" alt="">
									<span><?php echo $course_price;?><i>৳</i></span>
									<a href="<?php echo $course_enroll_link;?>" class="" target="_blank">Enroll Now</a>
								</div>
								<div class="course__list">
									<h5 class="course__heading">Course Includes</h5>
									<ul>
										<?php 
											if($course_includes) {
												foreach($course_includes as $include) {
													?>
														<li><span><i class="fa-solid fa-check"></i> <?php echo $include['course_includes_title'];?> </span><?php echo $include['course_includes_value'];?> </li>
													<?php
												}
											}
										?>
									</ul>
								</div>
								<div class="course__requirements">
									<h5 class="course__heading">Requirements</h5>
									<ul>										
										<?php 
											if($course_requirements) {
												foreach($course_requirements as $requirement) {
													?>
														<li><i class="fa-solid fa-check"></i> <?php echo $requirement['course_requirements_title'];?></li>
													<?php
												}
											}
										?>
									</ul>
								</div>
							</div>
						<?php
							

						endwhile; // End of the loop.
					?>
					
				</div>
			</div>
		</div>

	</main><!-- #main -->

<?php
get_footer();
