<?php get_header(); ?>
<?php 
/**
 *
 * Variables from CMB2
 *
 */
$prefix = "_plumber_";
$header_slider_shortcode = get_post_meta( $post->ID, $prefix.'header-slides', true );
$frontpage_form_shortcode = get_post_meta( $post->ID, $prefix.'frontpage-cta-form', true );

?>

<style type="text/css" media="screen">

.front-pro-plumber {
	background: url('http://plumberpress/wp-content/uploads/2015/10/frontpage-pro-plumber-bg-img.jpg') no-repeat center center fixed; 
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
}

</style>


<header id="front-page-header" class="front-page-header">

<?php echo do_shortcode( $header_slider_shortcode );  ?>
  
</header><!-- /header -->

<section class="front-services row">
  <div class="medium-4 large-4 columns wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s">
   

			<?php if ( is_active_sidebar( 'frontpage-service-widget-1' ) ) : ?>

				<?php dynamic_sidebar( 'frontpage-service-widget-1' ); ?>

			<?php else : ?>

			<!-- This content shows up if there are no widgets defined in the backend. -->
								
			<div class="alert help">
				<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
			</div>

			<?php endif; ?>


  </div>

  <div class="medium-4 large-4 columns">
    
			<?php if ( is_active_sidebar( 'frontpage-service-widget-2' ) ) : ?>

				<?php dynamic_sidebar( 'frontpage-service-widget-2' ); ?>

			<?php else : ?>

			<!-- This content shows up if there are no widgets defined in the backend. -->
								
			<div class="alert help">
				<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
			</div>

			<?php endif; ?>

  </div>

  <div class="medium-4 large-4 columns wow slideInRight" data-wow-duration="1s" data-wow-delay="0s">

  			<?php if ( is_active_sidebar( 'frontpage-service-widget-3' ) ) : ?>

				<?php dynamic_sidebar( 'frontpage-service-widget-3' ); ?>

			<?php else : ?>

			<!-- This content shows up if there are no widgets defined in the backend. -->
								
			<div class="alert help">
				<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
			</div>

			<?php endif; ?>
    
  </div>
  
</section>

<section class="front-top-callout">
  <div class="row wow zoomIn" data-wow-duration="1s" data-wow-delay="1s">
   
	<?php if ( is_active_sidebar( 'frontpage-callout-widget' ) ) : ?>

	<?php dynamic_sidebar( 'frontpage-callout-widget' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
	</div>

	<?php endif; ?>

  </div>
</section>

<section class="front-pro-plumber">
  <div class="cover" >
    <article class="row  wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">
      <div class="small-12 columns">
      
      	<?php if ( is_active_sidebar( 'frontpage-pro-widget' ) ) : ?>

		<?php dynamic_sidebar( 'frontpage-pro-widget' ); ?>

		<?php else : ?>

		<!-- This content shows up if there are no widgets defined in the backend. -->
							
		<div class="alert help">
			<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
		</div>

		<?php endif; ?>

      </div>

    </article>
  </div>
</section>

<section class="front-testimonials">
  
 <div class="row">

<?php
 
	$args = array(
	    // Arguments for your query.
	    'post_type' => 'post',
	    'category_name' => 'testimonials',
	    'posts_per_page' => 3,
	    'orderby' => 'rand'
	);
	 
	// Custom query.
	$query = new WP_Query( $args );
?>


    <ul class="the-orbit" data-orbit data-options="animation:slide;
                  timer_speed: 3000;
                  slide_number: false;
                  pause_on_hover:true;
                  animation_speed:1000;
                  navigation_arrows:true;
                  swipe: true;
                  bullets:true;">

	<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

		<?php $testimonial_pro = get_post_meta( get_the_ID(), $prefix.'testimonial-pro', true ); ?>

	    <li class="small-12 columns">
	    
			<?php the_post_thumbnail('thumbnail', array('class' => 'th')); ?>

		      <h3><?php the_title(); ?></h3>
		      <h5><?php echo $testimonial_pro;  ?></h5>
		      <p>
			     <?php the_content(); ?>
		      </p>
	    </li>  

    <?php endwhile; ?>	
			
		<?php wp_reset_postdata(); ?>			

	<?php else : ?>
		<?php get_template_part( 'parts/content', 'missing' ); ?>
	<?php endif; ?>
 
  </ul>


 </div>

</section>

<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
 <h3>Enquiry Form</h3>
        <p>
        	<?php echo do_shortcode( $frontpage_form_shortcode );  ?>
        </p>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
	</div>



	<?php get_footer(); ?>