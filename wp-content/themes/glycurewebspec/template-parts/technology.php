<?php 
/* Template Name: Technoplogy */
get_header();
?>
<section class="loft_banner_sec technology_banner">
<div class="home_banner_text_main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="loft_bann_text">
						<h2><?php the_field('technology_banner_text'); ?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="technology_first">
	<div class="container">
		<div class="row">
			<div class="col-md-6 technology_first_left">
				<div class="technology_first_left_content">
					<h2><?php the_field('technology_left_heading');?></h2>
						<div class="technology_first_image_inner home_slider_mobile">
						<img class="has-retina" src="<?php the_field('technology_first_image'); ?>">
						<div class="technology_first_image_content">
						<?php the_field('technology_first_image_content');?>
						</div>
					</div>
					<?php the_field('technology_left_content');?>
					</div>
			</div>
			<div class="col-md-6 technology_first_image home_slider_desktop">
				<div class="technology_first_image_inner">
					<img class="has-retina" src="<?php the_field('technology_first_image'); ?>">
					<div class="technology_first_image_content">
					<?php the_field('technology_first_image_content');?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="technology_second">
	<div class="container">
		<div class="row">
			<div class="col-md-6 technology_second_left">
				<div class="technology_second_left_content">
					<h2><?php the_field('technology_second_heading');?></h2>
					<div class="technology_second_image_inner home_slider_mobile">
					<img class="has-retina" src="<?php the_field('technology_second_image'); ?>">
				</div>
					<?php the_field('technology_second_content');?>
					</div>
			</div>
			<div class="col-md-6 technology_second_image home_slider_desktop">
				<div class="technology_second_image_inner">
					<img class="has-retina" src="<?php the_field('technology_second_image'); ?>">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="technology_last_section">
	<div class="container">
		<div class="row">
		<div class="col-md-4 technology_last_image home_slider_desktop">
				<div class="technology_last_image_inner">
					<img class="has-retina" src="<?php the_field('technology_last_image'); ?>">
				</div>
			</div>
			<div class="col-md-8 technology_last_right">
				<div class="technology_last_right_content">
					<h2><?php the_field('technology_last_heading');?></h2>
					<div class="technology_last_image_inner home_slider_mobile">
					<img class="has-retina" src="<?php the_field('technology_last_image'); ?>">
				</div>
					<?php the_field('technology_last_content');?>
					</div>
			</div>
			
		</div>
	</div>
</section>
	
<?php get_footer(); ?>