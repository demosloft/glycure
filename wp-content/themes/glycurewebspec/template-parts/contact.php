<?php 
/* Template Name: Contact */
get_header();
?>
<section class="loft_banner_sec contact_page_banner">
	<div class="home_banner_text_main">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="loft_bann_text">
						<h2><?php the_field('contact_banner_heading'); ?></h2>
			           <?php the_field('contact_banner_text'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="loft_Contact_Glycure" id="contact">
	<div class="container">
		<div class="loft_contact_form">
			<?php echo do_shortcode('[contact-form-7 id="16" title="Contact form"]'); ?>
		 </div>
	</div>
</section>
	
<?php get_footer(); ?>