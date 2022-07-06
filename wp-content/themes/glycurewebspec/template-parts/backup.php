<?php 
/* Template Name: Backup */
get_header();
?>
<section class="loft_banner_sec" id="home">
	<div class="home_banner_text_main homepage_banner_desktop">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="loft_bann_text">
						<p><?php the_field('main_heading'); ?></p>
						<h2><?php the_field('sub_heading'); ?></h2>
						<div class="loftban-btn">
							<a href="<?php the_field('section_button_text_url'); ?>" class="ban_btn"><?php the_field('section_button_text'); ?></a>
						</div>
					</div>
				</div>
				<div class="col-md-6 home_banner_empty">
					<div class="loft_bann_img">
						<!--<img src="<?php the_field('main_image'); ?>">-->
					</div>
				 </div>
			</div>
		</div>
	</div>
	<div class="container-fluid home_banner_right_img homepage_banner_desktop">
		<div class="row">
			<div class="col-md-6 home_banner_empty">
			</div>
			<div class="col-md-6">
				<div class="loft_bann_img">
					<img src="<?php the_field('main_image'); ?>">
				</div>
			 </div>
		</div>
	</div>
	<div class="home_banner_text_main homepage_banner_mobile">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<div class="homepage_banner_desktop_imgtop">
				<img src="<?php the_field('mobile_banner_top_image'); ?>">
				</div>
					<div class="loft_bann_text">
						<p><?php the_field('main_heading'); ?></p>
						<h2><?php the_field('sub_heading'); ?></h2>
						<div class="loftban-btn">
							<a href="<?php the_field('section_button_text_url'); ?>" class="ban_btn"><?php the_field('section_button_text'); ?></a>
						</div>
					</div>
					<div class="homepage_banner_desktop_imgbottom">
				<img src="<?php the_field('mobile_banner_bottom_image'); ?>">
				</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="banner_section_after">
</section>
<section class="loft_we_are_sec" id="about-us">
	<div class="container">
		<div class="row">
			<div class="col-md-6 homepage_banner_desktop">
				<div class="loft_we_are_img">
					<img src="<?php the_field('section_image'); ?>">
				</div>
			</div>
			<div class="col-md-6">
				<div class="loft_we_are_text">
					<?php the_field('heading'); ?>
					<?php the_field('about_sub_heading'); ?>
					<img class="homepage_banner_mobile has-retina" src="<?php the_field('section_image'); ?>">
					<?php the_field('section_content'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="loft_SCIENCE_AND_APPROACH" id="science">
	<div class="container">
		<div class="loft_SCIENCE_heading">
			<h2><?php the_field('section_title'); ?></h2>
			<p><?php the_field('section_descriptions'); ?></p>
			</div>
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

<section class="loft_Technology_sec" id="technology">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="loft_Technology_text">
					<h2><?php the_field('technology_title'); ?></h2>
					<img class="homepage_banner_mobile" src="<?php the_field('technology_image'); ?>">
					<?php the_field('technology_description'); ?>
					<div class="loft_Technology_select">
						<?php
							$arg = array(
								'offset' => 0,
								'faqcategories' => 'technology',
								'orderby' => 'post_date',
								'order' => 'ASC',
								'post_type' => 'faq'
							);
							$events = new WP_Query( $arg );
							if ($events->have_posts()) : while ($events->have_posts()) : $events->the_post();  
						?>
						<div class="set question_faq">
							<a href="javascript:void(0)"><?php the_title(); ?>  <i class="fa fa-angle-down"></i>	</a>
							<div class="content">
								  <?php the_content(); ?>
							</div>
						</div>
						<?php endwhile; endif; wp_reset_postdata(); ?>						
					</div>
				</div>
			</div>
			<div class="col-md-6 homepage_banner_desktop">
				<div class="loft_Technology_img">
					<img src="<?php the_field('technology_image'); ?>">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="loft_Technology_sec loft_Partnership_sec" id="partner">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="loft_Technology_text loft_Partnership_text">
					<h2><?php the_field('partnership_title'); ?></h2>
					<div class="loft_Partnership_text_in">
						<p><?php the_field('partnership_small_content'); ?></p>
					</div>
					<img class="homepage_banner_mobile" src="<?php the_field('partnership_image'); ?>">
					<?php the_field('partnership_description'); ?>
					<div class="loft_Technology_select loft_Partnership_select">
						<?php
							$arg = array(
								'offset' => 0,
								'faqcategories' => 'partnership',
								'orderby' => 'post_date',
								'order' => 'ASC',
								'post_type' => 'faq'
							);
							$events = new WP_Query( $arg );
							if ($events->have_posts()) : while ($events->have_posts()) : $events->the_post();  
						?>
						<div class="setssss question_faq blue_section">
							<a href="javascript:void(0)"><?php the_title(); ?>  <i class="fa fa-angle-down"></i>	</a>
							<div class="contentssss">
								  <?php the_content(); ?>
							</div>
						</div>
						<?php endwhile; endif; wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
			<div class="col-md-6 homepage_banner_desktop">
				<div class="loft_Technology_img loft_Partnership_img">
					<img src="<?php the_field('partnership_image'); ?>">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="loft_Contact_Glycure" id="contact">
	<div class="container">
		<div class="loft_Contact_Glycure_heading">
			<h2><?php the_field('contact_glycure_title'); ?></h2>
			<p><?php the_field('contact_glycure_content'); ?></p>
		</div>
		<div class="loft_contact_form">
			<?php echo do_shortcode('[contact-form-7 id="16" title="Contact form"]'); ?>
		 </div>
	</div>
</section>
	
<?php get_footer(); ?>