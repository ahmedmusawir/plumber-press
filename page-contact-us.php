<?php get_header(); ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			
<style type="text/css" media="screen">
	#page-header {
		background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
	}
</style>

<header id="page-header" class="page-header">
  
  <section class="page-header-text">

  	<h1><?php the_title(); ?></h1>
  	<h4><?php echo get_post_meta($post->ID, 'header_description', true ); ?></h4>
  		
  </section>

</header><!-- /header -->
<section id="contact-content" class="page-content">

	<div class="row">
	
		<article class="small-12 medium-6 large-6 columns">

			<?php if ( is_active_sidebar( 'contact-widget-1' ) ) : ?>

				<?php dynamic_sidebar( 'contact-widget-1' ); ?>

			<?php else : ?>

			<!-- This content shows up if there are no widgets defined in the backend. -->
								
			<div class="alert help">
				<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
			</div>

			<?php endif; ?>

			<?php if ( is_active_sidebar( 'contact-widget-2' ) ) : ?>

				<?php dynamic_sidebar( 'contact-widget-2' ); ?>

			<?php else : ?>

			<!-- This content shows up if there are no widgets defined in the backend. -->
								
			<div class="alert help">
				<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
			</div>

			<?php endif; ?>
		

		</article>
		<article class="small-12 medium-6 large-6 columns">


		  	<?php the_content(); ?>
		

		</article>


	</div>
	
</section>


<?php endwhile; endif; ?>	

<?php get_footer(); ?>