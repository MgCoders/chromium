<?php
/**
 * The template for displaying the footer
 *
 */

?>

	<?php if ( is_active_sidebar('footer_full') ) { ?>
	
	<div id="pre-footer">
		<div class="wrapper wrapper-prefooter clearfix">
			<?php
			if ( !dynamic_sidebar('footer_full') ) : ?> <?php endif;
			?>
		</div><!-- .wrapper .wrapper-prefooter -->
	</div><!-- #pre-footer -->
	
	<?php } ?>
	
	<footer class="site-footer" role="contentinfo">
	
		<div class="wrapper wrapper-footer">
		
			<?php if ( is_active_sidebar('footer_1') || is_active_sidebar('footer_2') || is_active_sidebar('footer_3') || is_active_sidebar('footer_4') ) { ?>
			
			<div class="footer-columns clearfix">
			
				<div class="footer-column footer-column-1">
					
					<?php $logo_footer = get_theme_mod( 'logo-footer', medicus_get_default( 'logo-footer' ) ); ?>
					
					<?php if ( strlen( esc_url( $logo_footer ) ) > 1 ) { ?>
					
					<a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'description' ); ?>"><img src="<?php echo esc_url( $logo_footer ); ?>" width="" height="" alt="<?php bloginfo( 'name' ); ?>" class="logo-footer" /></a>
					
					<?php } ?>
					
					<?php
					if ( !dynamic_sidebar('footer_1') ) : ?> <?php endif;
					?>
					
					<div class="cleaner">&nbsp;</div>

				</div><!-- .footer-column .footer-column-1 -->
				
				<div class="footer-column footer-column-2">
					
					<?php
					if ( !dynamic_sidebar('footer_2') ) : ?> <?php endif;
					?>
					
					<div class="cleaner">&nbsp;</div>

				</div><!-- .footer-column .footer-column-2 -->
				
				<div class="footer-column footer-column-3">
					
					<?php
					if ( !dynamic_sidebar('footer_3') ) : ?> <?php endif;
					?>
					
					<div class="cleaner">&nbsp;</div>

				</div><!-- .footer-column .footer-column-3 -->
				
				<div class="footer-column footer-column-4">
					
					<?php
					if ( !dynamic_sidebar('footer_4') ) : ?> <?php endif;
					?>
					
					<div class="cleaner">&nbsp;</div>

				</div><!-- .footer-column .footer-column-4 -->
			
			</div><!-- .footer-widgets .clearfix -->
			
			<?php } ?>
			
			<div id="footer-copy">
		
				<p class="wpzoom"><?php printf( __( 'Designed by %s', 'wpzoom' ), '<a href="http://www.wpzoom.com/" target="_blank" rel="designer">WPZOOM</a>' ); ?></p>
				<p class="copyright"><?php echo get_theme_mod( 'footer-text', medicus_get_default( 'footer-text' ) ); ?></p>
				<div class="cleaner">&nbsp;</div>
		
			</div><!-- #footer-copy -->

		</div><!-- .wrapper .wrapper-footer -->
	
	</footer><!-- .site-footer -->

</div><!-- end #container -->

<?php wp_footer(); ?>

</body>
</html>