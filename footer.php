<?php 
// $prefix = "_plumber_";
// global $footer_btn_lnk;
// global $footer_cta_txt;
// global $footer_btn_txt;
// $footer_cta_txt = get_post_meta( $post->ID, $prefix.'footer-cta-txt', true );
// $footer_btn_txt = get_post_meta( $post->ID, $prefix.'footer-btn-txt', true );
// $footer_btn_lnk = get_post_meta( $post->ID, $prefix.'footer-btn-lnk', true );

?>

    <section class="footer-callout">
        <div class="row">
           
			<?php if ( is_active_sidebar( 'footer-cta' ) ) : ?>

			<?php dynamic_sidebar( 'footer-cta' ); ?>

			<?php else : ?>

			<!-- This content shows up if there are no widgets defined in the backend. -->
								
			<div class="alert help">
				<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
			</div>

			<?php endif; ?>

        </div>
    </section>

    <footer class="the-footer">

    <div class="row">
	    <section class="medium-4 columns">

	    <?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>

		<?php dynamic_sidebar( 'footer-widget-1' ); ?>

		<?php else : ?>

		<!-- This content shows up if there are no widgets defined in the backend. -->
							
		<div class="alert help">
			<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
		</div>

		<?php endif; ?>
	    	
	    </section>
        
        <section class="medium-4 columns">

        <?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>

		<?php dynamic_sidebar( 'footer-widget-2' ); ?>

		<?php else : ?>

		<!-- This content shows up if there are no widgets defined in the backend. -->
							
		<div class="alert help">
			<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
		</div>

		<?php endif; ?>
            
        </section>
        <section class="medium-4 columns">
        
        <?php if ( is_active_sidebar( 'footer-widget-3' ) ) : ?>

		<?php dynamic_sidebar( 'footer-widget-3' ); ?>

		<?php else : ?>

		<!-- This content shows up if there are no widgets defined in the backend. -->
							
		<div class="alert help">
			<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
		</div>

		<?php endif; ?>
        </section>
    </div>
 
    </footer>

<div class="copyright">
    <p class="text-center">Copyright &copy; 2015 DCI Plumbing & Gas Pty. Ltd. All Right Reserved.</p>
</div>
				</div> <!-- end #container -->
			</div> <!-- end .inner-wrap -->
		</div> <!-- end .off-canvas-wrap -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->