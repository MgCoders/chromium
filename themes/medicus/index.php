<?php
/**
 * The main template file.
 */

get_header(); ?>

<?php if ( option::is_on( 'featured_posts_show' ) && is_front_page() && $paged < 2) : ?>

    <?php get_template_part( 'wpzoom-slider' ); ?>

<?php endif; ?>

<div id="content" class="clearfix">

	<div class="wrapper wrapper-main wrapper-main-inside clearfix">
	
		<div id="main" class="clearfix">
			
			<?php if ( is_active_sidebar('home_content') && is_front_page() && $paged < 2 ) { ?>
			
				<?php
				if ( !dynamic_sidebar('home_content') ) : ?> <?php endif;
				?>
			
			<?php } ?>

			<?php query_posts("paged=$paged"); if (have_posts()) : ?> 
			
		    <section class="recent-posts">
		
				<p class="title-widget"><?php _e('Recent Posts', 'wpzoom'); ?></p>
				
				<ul class="wpzoom-posts posts-archive">
				
		            <?php while ( have_posts() ) : the_post(); ?>
		
		                <?php get_template_part( 'content', get_post_format() ); ?>
		
		            <?php endwhile; ?>
	
				</ul><!-- .wpzoom-posts .posts-archive -->
				
				<?php get_template_part( 'pagination' ); ?>
		
		    </section><!-- .recent-posts -->

			<?php endif; ?>			
			
		</div><!-- #main -->

		<aside class="content-aside clearfix">
		
			<div class="aside-wrapper">
			
				<?php get_sidebar(); ?>
				
			</div><!-- .aside-wrapper -->
		
		</aside><!-- .content-aside -->
	
	</div><!-- .wrapper .wrapper-main -->

</div><!-- #content -->

<?php
get_footer();
