<?php get_header(); ?>
<?php 
/**
 *
 * Variables from CMB2
 *
 */
$prefix = "_plumber_";
$header_slider_shortcode = get_post_meta( $post->ID, $prefix.'header-slides', true );

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
    <ul class="the-orbit" data-orbit data-options="animation:slide;
                  timer_speed: 3000;
                  slide_number: false;
                  pause_on_hover:true;
                  animation_speed:1000;
                  navigation_arrows:true;
                  swipe: true;
                  bullets:true;">
    <li class="small-12 columns">
      <img class="th" src="http://lorempixel.com/100/100/people/9" alt="">
      <h3>Jini Dow</h3>
      <h5>Teacher</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      
    </li>
    <li class="small-12 columns">
      <img class="th" src="http://lorempixel.com/100/100/people/1" alt="">
      <h3>Jane Dow</h3>
      <h5>Home Maker</h5>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </li>
    <li class="small-12 columns">
      <img class="th" src="http://lorempixel.com/100/100/people/3" alt="">
      <h3>Bin Laden</h3>
      <h5>Small Business Owner</h5>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </li>
  </ul>
 </div>

</section>

<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
 <h3>Enquiry Form</h3>
        <p>
          <form data-abide>

                  <div>
                    <label>Name:</label>
                      <input type="text" name="" value="" placeholder="Name" required>
                    
                    <small class="error animated tada">Oops This is Boo Boo</small>
                  </div>
                  <div>
                    <label>Subject:</label>
                      <input type="text" name="" value="" placeholder="Subject" required>
                    
                    <small class="error animated tada">Oops This is Boo Boo</small>
                  </div>
                  <div>
                    <label>Email:</label>
                      <input type="email" name="" value="" placeholder="Email" required>
                    
                    <small class="error animated tada">Oops This is Boo Boo</small>
                  </div>
                  <div> 
                    <label>Your Message:</label>
                      <textarea name="" rows="20" placeholder="Message" required></textarea>
                    
                    <small class="error animated tada">Oops This is Boo Boo</small>
                  </div>
                  <div>
                    <input class="button round" type="submit" name="" value="Send Email">
                  </div>

              </form>
        </p>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>



<?php get_footer(); ?>