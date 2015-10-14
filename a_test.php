<?php get_header(); ?>
			
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
	 
	// Check that we have query results.
	if ( $query->have_posts() ) {
	 
	    // Start looping over the query results.
	    while ( $query->have_posts() ) {
	 
	        $query->the_post();
	 
	        // Contents of the queried post results go here.
	 
	    }
	 
	}
	 
	// Restore original post data.
	wp_reset_postdata();
	 
?>

<?php get_footer(); ?>