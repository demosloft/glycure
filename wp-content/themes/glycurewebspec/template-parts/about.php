<?php 
/* Template Name: About */
get_header();
?>
<section class="loft_banner_sec about_page_banner">
	<div class="home_banner_text_main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="loft_bann_text">
						<h2><?php the_field('about_banner_heading'); ?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="about_us_main">
	<div class="container">
		<div class="row">
			<div class="col-md-6 homepage_banner_desktop">
				<div class="about_us_img">
					<img src="<?php the_field('section_image'); ?>">
					<div class="about_us_img_content">
					<?php the_field('image_content'); ?>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="about_us_main_text">
					<!--<h2><?php the_field('heading'); ?></h2>-->
					<div class="about_us_img homepage_banner_mobile">
					<img class="has-retina" src="<?php the_field('section_image'); ?>">
					<div class="about_us_img_content">
					<?php the_field('image_content'); ?>
					</div>
					</div>
					<?php the_field('about_content'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about_glycure_difference">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
			<img class="has-retina homepage_banner_mobile img_about_mobile" src="<?php the_field('glycure_difference_img_mobile'); ?>">
			<h2><?php the_field('glycure_difference_heading'); ?></h2>
			</div>
			<div class="col-md-5">
			<?php the_field('glycure_difference_content'); ?>
			</div>
			<div class="col-md-4 homepage_banner_desktop">
			<img class="has-retina" src="<?php the_field('glycure_difference_img'); ?>">
			</div>
		</div>
	</div>
</section>
<section class="about_last_section">
<img class="has-retina about_last_img1" src="<?php echo get_template_directory_uri(); ?>/images/glican_about1.png">
<img class="has-retina about_last_img2" src="<?php echo get_template_directory_uri(); ?>/images/glican_about2.png">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<?php the_field('about_last_section_content'); ?>
			</div>
			<div class="col-md-6">
			<div class="about_last_right_box">
			<img class="has-retina about_last_img3 homepage_banner_desktop" src="<?php echo get_template_directory_uri(); ?>/images/glican_about3.png">
			<img class="has-retina about_last_img3 homepage_banner_mobile" src="<?php echo get_template_directory_uri(); ?>/images/glican_about3_mobile.png">
			<h2><?php the_field('about_last_section_heading'); ?></h2>
			<img class="has-retina about_last_img4" src="<?php echo get_template_directory_uri(); ?>/images/glican_about4.png">
			</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>