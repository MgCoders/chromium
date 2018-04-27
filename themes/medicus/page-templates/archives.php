<?php
/*
Template Name: Archives Page
*/
?>
<?php get_header(); ?>

<div id="content" class="clearfix">

	<div class="wrapper wrapper-main wrapper-main-inside clearfix">
	
		<?php get_template_part( 'include_breadcrumbs'); ?>
		
		<div id="main" class="clearfix">
			
			<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="page-meta">
				<?php the_title( '<h1 class="title-page">', '</h1>' ); ?>
			</div><!-- end .page-meta -->
			
            <div class="content-area">

                <?php get_template_part( 'content', 'page' ); ?>
                
            </div><!-- .content-area -->
            
            <?php endwhile; // end of the loop. ?>

			<?php query_posts("paged=$paged"); if (have_posts()) : ?> 
			
		    <section class="recent-posts">
		
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

<?php get_footer(); ?>