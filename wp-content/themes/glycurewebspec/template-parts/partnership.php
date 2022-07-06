<?php 
/* Template Name: Partnership */
get_header();
?>
<section class="loft_banner_sec partner_page_banner">
	<div class="home_banner_text_main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="loft_bann_text">
						<h2><?php the_field('partner_banner_heading'); ?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="loft_Partnership_sec">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="loft_Partnership_text">
					<h2><?php the_field('partnership_title'); ?></h2>
					<!--<div class="loft_Partnership_text_in">
						<p><?php the_field('partnership_small_content'); ?></p>
					</div>-->
					<img class="homepage_banner_mobile" src="<?php the_field('partnership_image'); ?>">
					<?php the_field('partnership_description'); ?>
				</div>
			</div>
			<div class="col-md-6 homepage_banner_desktop">
				<div class="loft_Partnership_img">
					<img src="<?php the_field('partnership_image'); ?>">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="partnership_second">
	<div class="container">
		<div class="row">
			<div class="col-md-6 partnership_second_image homepage_banner_desktop">
			<h2 ><?php the_field('partnership_second_title');?></h2>
				<div class="partnership_second_image_inner">
					<img class="has-retina" src="<?php the_field('partnership_second_image'); ?>">
					<div class="partnership_second_image_content">
					<?php the_field('partnership_second_image_text');?>
					</div>
				</div>
			</div>
			<div class="col-md-6 partnership_second_right ">
				<div class="partnership_second_right_content">
					<h2><?php the_field('partnership_second_title');?></h2>
					<div class="partnership_second_image_inner homepage_banner_mobile">
					<img class="has-retina" src="<?php the_field('partnership_second_image'); ?>">
					<div class="partnership_second_image_content">
					<?php the_field('partnership_second_image_text');?>
					</div>
				</div>
					<?php the_field('partnership_second_content');?>
					</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>