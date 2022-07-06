<?php 
/* Template Name: Science & Approach */
get_header();
?>
<section class="loft_banner_sec science_banner">
	<div class="home_banner_text_main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="loft_bann_text">
						<h2><?php the_field('science_banner_title'); ?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="science_right_image_main">
	<div class="container">
		<div class="row">
			<div class="col-md-6 science_left_text">
				<div class="science_left_content">
					<?php the_field('science_left_content');?>
					<div class="science_left_sub_text">
					<?php the_field('science_left_sub_content');?>
					</div>
					</div>
			</div>
			<div class="col-md-6 science_right_image">
				<div class="science_right_image_inner">
					<img class="has-retina" src="<?php the_field('science_right_image'); ?>">
					<div class="science_right_image_content">
					<img class="has-retina science_right_image_icon" src="<?php echo get_template_directory_uri(); ?>/images/science_icon.png">
					<?php the_field('science_right_image_content');?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="loft_SCIENCE_AND_APPROACH" id="science">
	<div class="container">
		<!--<div class="loft_SCIENCE_heading">
			<h2><?php the_field('section_title'); ?></h2>
			<p><?php the_field('section_descriptions'); ?></p>
			</div>-->
		<div class="row">
			<div class="col-md-6 homepage_banner_desktop">
				<div class="loft_SCIENCE_img">
					<img src="<?php the_field('carbohydrate_metabolism_image'); ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="loft_SCIENCE_text">
					<h2><?php the_field('carbohydrate_metabolism_heading'); ?></h2>
					<img class="homepage_banner_mobile has-retina" src="<?php the_field('carbohydrate_metabolism_image'); ?>">
					<p><?php the_field('carbohydrate_metabolism_content'); ?></p>
				</div>
				<div class="loft_SCIENCE_tabs">
					<?php
						$arg = array(
							'offset' => 0,
							'faqcategories' => 'carbohydrate-metabolism',
							'orderby' => 'post_date',
							'order' => 'ASC',
							'post_type' => 'faq'
						);
						$events = new WP_Query( $arg );
						if ($events->have_posts()) : while ($events->have_posts()) : $events->the_post();  
					?>
					<div class="sets question_faq">
						<a href="javascript:void(0)"><?php the_title(); ?>  <i class="fa fa-angle-down"></i>	</a>
						<div class="contents">
							  <?php the_content(); ?>
						</div>
					</div>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>	
		<div class="row">
			<div class="col-md-6 homepage_banner_desktop">
				<div class="loft_SCIENCE_img">
					<img src="<?php the_field('glycosylation_image'); ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="loft_SCIENCE_text">
					<h2><?php the_field('glycosylation_heading'); ?></h2>
					<img class="homepage_banner_mobile has-retina" src="<?php the_field('glycosylation_image'); ?>">
					<p><?php the_field('glycosylation_content'); ?></p>
				</div>
				<div class="loft_SCIENCE_tabs">
					<?php
						$arg = array(
							'offset' => 0,
							'faqcategories' => 'glycosylation',
							'orderby' => 'post_date',
							'order' => 'ASC',
							'post_type' => 'faq'
						);
						$events = new WP_Query( $arg );
						if ($events->have_posts()) : while ($events->have_posts()) : $events->the_post();  
					?>
					<div class="setsss question_faq">
						<a href="javascript:void(0)"> <?php the_title(); ?>  <i class="fa fa-angle-down"></i></a>
						<div class="contentsss">
							  <?php the_content(); ?>
						</div>
					</div>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 homepage_banner_desktop">
				<div class="loft_SCIENCE_img">
					<img src="<?php the_field('carbohydrate_protein_image'); ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="loft_SCIENCE_text">
					<h2><?php the_field('carbohydrate-protein_heading'); ?></h2>
					<img class="homepage_banner_mobile" src="<?php the_field('carbohydrate_protein_image'); ?>">
					<p><?php the_field('carbohydrate_protein_content'); ?> </p>
				</div>
				<div class="loft_SCIENCE_tabs">
					<?php
						$arg = array(
							'offset' => 0,
							'faqcategories' => 'carbohydrate-protein-interachon',
							'orderby' => 'post_date',
							'order' => 'ASC',
							'post_type' => 'faq'
						);
						$events = new WP_Query( $arg );
						if ($events->have_posts()) : while ($events->have_posts()) : $events->the_post();  
					?>
					<div class="setss question_faq">
						<a href="javascript:void(0)"><?php the_title(); ?>  <i class="fa fa-angle-down"></i>	</a>
						<div class="contentss">
							 <?php the_content(); ?>
						</div>
					</div>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
		
		
	</div>
</section>

<?php get_footer(); ?>