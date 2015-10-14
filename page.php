<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			
<style type="text/css" media="screen">
	#page-header {
		background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>) no-repeat top left fixed; 
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

<section class="page-content">

	<div class="row">
		<article class="small-12 columns">
			<?php the_content(); ?>
		</article>
	</div>
	
</section>	

<?php endwhile; endif; ?>	

<?php get_footer(); ?>