<?php 
/* Template Name: Home */
get_header();
?>

<section class="home_page_banner_new">

	<video width="100%" class="home_slider_desktop" height="auto" autoplay="autoplay" muted loop >
	  <source src="<?php echo get_template_directory_uri(); ?>/images/home_banner.mp4" type="video/mp4">
	</video>
	<video width="100%" height="auto" class="home_slider_mobile" autoplay="autoplay" muted loop playsinline>
	  <source src="<?php echo get_template_directory_uri(); ?>/images/home_banner_mobile_video.mp4" type="video/mp4">
	</video>
	<div class="home_new_banner_text">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="loft_bann_text_new">
						<img class="has-retina home_banner_icon" src="<?php echo get_template_directory_uri(); ?>/images/home_page_banner_text_img.png"> <h2><?php the_field('main_heading'); ?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="home_slider_section home_slider_desktop">
	<div class="container">
		<div class="row">
			<div class="col-md-6 home_slider_section_left">
				<div class="home_slider_section_inner">
					<img src="<?php the_field('home_slider_section_left_img'); ?>">
					<div class="home_slider_content">
					<?php the_field('section_left_content');?>
					<a href="<?php the_field('section_left_button_url');?>"><?php the_field('section_left_button_text'); ?></a>
					</div>
				</div>
			</div>
			<div class="col-md-6 home_slider_section_right">
				<div class="home_slider_section_inner">
					<img src="<?php the_field('home_slider_section_right_img'); ?>">
					<div class="home_slider_content">
					<?php the_field('section_right_content'); ?>
					<a href="<?php the_field('section_right_button_url');?>"><?php the_field('section_right_button_text'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="home_slider_section home_slider_mobile">
	<div class="container">
		<div class="row home_slider">
			<div class="col-md-6 home_slider_section_left">
				<div class="home_slider_section_inner">
					<img class="has-retina" src="<?php the_field('home_slider_section_left_img'); ?>">
					<div class="home_slider_content">
					<?php the_field('section_left_content');?>
					<a href="<?php the_field('section_left_button_url');?>"><?php the_field('section_left_button_text'); ?></a>
					</div>
				</div>
			</div>
			<div class="col-md-6 home_slider_section_right">
				<div class="home_slider_section_inner">
					<img class="has-retina" src="<?php the_field('home_slider_section_right_img'); ?>">
					<div class="home_slider_content">
					<?php the_field('section_right_content'); ?>
					<a href="<?php the_field('section_right_button_url');?>"><?php the_field('section_right_button_text'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="home_explore_section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 home_explore_section_left">
			<div class="home_explore_section_left_inner">
					<h3><?php the_field('explore_heading');?></h3>
					<img class="homepage_banner_mobile has-retina" src="<?php the_field('explore_img_right'); ?>">
					<?php the_field('explore_content');?>
					<div class="loftban-btn">
							<a href="<?php the_field('explore_button_text_url'); ?>" class="ban_btn"><?php the_field('explore_button_text'); ?></a>
						</div>
						</div>
			</div>
			<div class="col-md-6 home_explore_section_right homepage_banner_desktop">
				<img src="<?php the_field('explore_img_right'); ?>">
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>