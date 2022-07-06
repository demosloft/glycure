<section class="loft_footer_sec">
	<div class="container">
		<div class="row">
			<div class="col-2">
				<div class="cust_footer_logo"><a href="<?php bloginfo('url'); ?>">
				<!--<?php dynamic_sidebar('footer-logo'); ?>-->
				<img src="<?php echo get_template_directory_uri(); ?>/images/white Logo.svg"/>
				</a></div>
			</div>
			<div class="col-10">
				<?php dynamic_sidebar('footer-content'); ?>
			</div>
		</div>
	</div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/slick.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/slick.js'></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
<script>
jQuery('.home_slider').slick({
 dots: true,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll:1,
  arrows: false,
  autoplay: false,
  autoplaySpeed: 2000
});
</script>
<script>
	jQuery(document).ready(function() {
		jQuery('.loft_Technology_select .content').hide();
		jQuery('.loft_SCIENCE_tabs .contents, .loft_SCIENCE_tabs .contentss, .loft_SCIENCE_tabs .contentsss, .loft_Partnership_select .contentssss').hide();
		
jQuery(".set > a").on("click", function() {
    if (jQuery(this).hasClass("active")) {
      jQuery(this).removeClass("active");
      jQuery(this).siblings(".content").slideUp(200);
      jQuery(".set > a i").removeClass("fa-angle-right").addClass("fa-angle-down");
    } else {
      jQuery(".set > a i").removeClass("fa-angle-right").addClass("fa-angle-down");
      jQuery(this).find("i").removeClass("fa-angle-down").addClass("fa-angle-right");
      jQuery(".set > a").removeClass("active");
      jQuery(this).addClass("active");
      jQuery(".content").slideUp(200);
      jQuery(this).siblings(".content").slideDown(200);
    }
  });
  jQuery(".sets > a").on("click", function() {
    if (jQuery(this).hasClass("active")) {
      jQuery(this).removeClass("active");
      jQuery(this).siblings(".contents").slideUp(200);
      jQuery(".sets > a i").removeClass("fa-angle-right").addClass("fa-angle-down");
    } else {
      jQuery(".sets > a i").removeClass("fa-angle-right").addClass("fa-angle-down");
      jQuery(this).find("i").removeClass("fa-angle-down").addClass("fa-angle-right");
      jQuery(".sets > a").removeClass("active");
      jQuery(this).addClass("active");
      jQuery(".contents").slideUp(200);
      jQuery(this).siblings(".contents").slideDown(200);
    }
  });
  
  jQuery(".setss > a").on("click", function() {
    if (jQuery(this).hasClass("active")) {
      jQuery(this).removeClass("active");
      jQuery(this).siblings(".contentss").slideUp(200);
      jQuery(".setss > a i").removeClass("fa-angle-right").addClass("fa-angle-down");
    } else {
      jQuery(".setss > a i").removeClass("fa-angle-right").addClass("fa-angle-down");
      jQuery(this).find("i").removeClass("fa-angle-down").addClass("fa-angle-right");
      jQuery(".setss > a").removeClass("active");
      jQuery(this).addClass("active");
      jQuery(".contentss").slideUp(200);
      jQuery(this).siblings(".contentss").slideDown(200);
    }
  });
  
  jQuery(".setsss > a").on("click", function() {
    if (jQuery(this).hasClass("active")) {
      jQuery(this).removeClass("active");
      jQuery(this).siblings(".contentsss").slideUp(200);
      jQuery(".setsss > a i").removeClass("fa-angle-right").addClass("fa-angle-down");
    } else {
      jQuery(".setsss > a i").removeClass("fa-angle-right").addClass("fa-angle-down");
      jQuery(this).find("i").removeClass("fa-plus").addClass("fa-angle-right");
      jQuery(".setsss > a").removeClass("active");
      jQuery(this).addClass("active");
      jQuery(".contentsss").slideUp(200);
      jQuery(this).siblings(".contentsss").slideDown(200);
    }
  });
    jQuery(".setssss > a").on("click", function() {
    if (jQuery(this).hasClass("active")) {
      jQuery(this).removeClass("active");
      jQuery(this).siblings(".contentssss").slideUp(200);
      jQuery(".setssss > a i").removeClass("fa-angle-right").addClass("fa-angle-down");
    } else {
      jQuery(".setssss > a i").removeClass("fa-angle-right").addClass("fa-angle-down");
      jQuery(this).find("i").removeClass("fa-plus").addClass("fa-angle-right");
      jQuery(".setssss > a").removeClass("active");
      jQuery(this).addClass("active");
      jQuery(".contentssss").slideUp(200);
      jQuery(this).siblings(".contentssss").slideDown(200);
    }
  });
  
  
		
});
$(".mobile_nav").click(function(){
  $(".btn-main-nav").toggleClass("active");
   $(".cust_nav").toggleClass("active");
});
$(".cust_nav li a").click(function(){
  $(".btn-main-nav").removeClass("active");
   $(".cust_nav").removeClass("active");
});
</script>


<?php wp_footer(); ?>
</body>
</html>