
    <section class="footer-callout">
        <div class="row">
            <div class="footer-callout-text medium-8 column">
                CALL US TODAY ON 0409 097 095 OR (08) 8248 6122 FOR MORE INFORMATION ABOUT OUR PROFESSIONAL PLUMBING AND GASFITTING SERVICES!
            </div>
            <div class="footer-callout-btn medium-4 column">
                <a href="#" class="button" title="">CONTACT US</a>
            </div>
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