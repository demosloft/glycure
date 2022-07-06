<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GlycureWebSpec
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>Glycure Web Spec</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/retina.min.js?ver=5.9.3' id='facesemen-theme-retina-js-js'></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/custom_style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/font_family/calibri.ttf">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<section class="loft_header_section">
	<div class="container">
		<div class="row">
			<div class="col-12"> 
				<div class="cust_logo">
					<!--<?php the_custom_logo(); ?>-->
					<a href="<?php bloginfo('url'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/color logo.svg"/>
					</a>
				</div>
				<div class="cust_nav">
				
					<?php wp_nav_menu(array('theme_location' => 'menu-1','menu_id' => 'primary-menu', 'items_wrap' => '<ul class="loft_navbar">%3$s</ul>', 'add_li_class'  => 'cust_nav_items',)); ?>
				</div>
				<div class="mobile_nav">
						<div class="btn-main-nav js-toggler-mobilenav"><span></span><span></span><span></span>
                    </div>  
					</div>
			</div>
		</div>
	</div>
</section>