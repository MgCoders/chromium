<?php get_header(); ?>

<div id="content" class="clearfix">

	<div class="wrapper wrapper-main wrapper-main-inside clearfix">
	
		<?php get_template_part( 'include_breadcrumbs'); ?>
		
		<div id="main" class="clearfix">
			
			<div class="page-meta">
				<h1 class="title-page"><?php _e('Search Results for','wpzoom');?> <strong>"<?php the_search_query(); ?>"</strong></h1>
			</div><!-- end .page-meta -->

			<?php get_search_form(); ?>

		    <section class="recent-posts">
		
				<?php if ( have_posts() ) : ?>
				<ul class="wpzoom-posts posts-archive">
				
		            <?php while ( have_posts() ) : the_post(); ?>
		
		                <?php get_template_part( 'content', get_post_format() ); ?>
		
		            <?php endwhile; ?>
	
				</ul><!-- .wpzoom-posts -->
				
				<?php get_template_part( 'pagination' ); ?>
				
		        <?php else: ?>
		
		            <?php get_template_part( 'content', 'none' ); ?>
		
		        <?php endif; ?>
		
		    </section><!-- .recent-posts -->
			
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
