<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

<?php if ( option::is_on( 'featured_posts_show' ) ) : ?>

    <?php get_template_part( 'wpzoom-slider' ); ?>

<?php endif; ?>

<div id="content" class="clearfix">

	<div class="wrapper wrapper-main wrapper-main-inside clearfix">
	
		<div id="pre-main">
					
			<?php if ( is_active_sidebar('home_content_full_1') ) { ?>
			
				<?php
				if ( !dynamic_sidebar('home_content_full_1') ) : ?> <?php endif;
				?>
			
			<?php } ?>

			<?php if ( is_active_sidebar('home_content_col_1') || is_active_sidebar('home_content_col_3') || is_active_sidebar('home_content_col_3') ) { ?>
			
			<div class="wpzoom-home-columns">
				<ul class="wpzoom-list wpzoom-list-3cols clearfix">
					<li class="wpzoom-list-item list-item-1">
						<?php
						if ( !dynamic_sidebar('home_content_col_1') ) : ?> <?php endif;
						?>
					</li>
					<li class="wpzoom-list-item list-item-2">
						<?php
						if ( !dynamic_sidebar('home_content_col_2') ) : ?> <?php endif;
						?>
					</li>
					<li class="wpzoom-list-item list-item-3">
						<?php
						if ( !dynamic_sidebar('home_content_col_3') ) : ?> <?php endif;
						?>
					</li>
				</ul><!-- .wpzoom-list .wpzoom-list-3cols .clearfix -->
			</div><!-- .wpzoom-home-columns -->
			
			<?php } ?>

			<?php if ( is_active_sidebar('home_content_full_2') ) { ?>
			
				<?php
				if ( !dynamic_sidebar('home_content_full_2') ) : ?> <?php endif;
				?>
			
			<?php } ?>
				
		</div><!-- #pre-main -->

		<div id="main" class="clearfix">
			
			<?php if ( is_active_sidebar('home_content') ) { ?>
			
				<?php
				if ( !dynamic_sidebar('home_content') ) : ?> <?php endif;
				?>
			
			<?php } else { ?>
			
			<div class="home-nocontent">
			
				<?php if ( current_user_can('edit_theme_options') ) { ?>
				
				<div class="entry-content">
				
					<h2><?php _e( 'You are now ready to set-up your Homepage widgets.', 'wpzoom' ); ?></h2>
					
					<p><?php _e( 'These messages are visibile only to you, the Administrator, and they will disappear after you add at least one widget to the <strong>Homepage: Content Area</strong> sidebar.', 'wpzoom' ); ?></p>

					<?php
					printf(
						__( 'For more information about our custom widgets and the available widgetized areas, please <strong><a href="%1$s">read the documentation</a></strong>', 'wpzoom' ),
						'http://www.wpzoom.com/documentation/medicus/'
					);
					?>
				
				</div><!-- .entry-content -->
				
				<?php } ?>
			
			</div><!-- .home-nocontent -->
			
			<?php } ?>
			
		</div><!-- #main -->

		<aside class="content-aside clearfix">
		
			<div class="aside-wrapper">
			
				<?php get_sidebar(); ?>
				
			</div><!-- .aside-wrapper -->
		
		</aside><!-- .content-aside -->
	
	</div><!-- .wrapper .wrapper-main -->

</div><!-- #content -->

<?php get_footer(); ?>