<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>

<?php $template = get_post_meta($post->ID, 'wpzoom_post_template', true); ?>

<div id="content" class="<?php if ($template == 'full') { echo 'full-width '; } elseif ($template == 'side-left') { echo 'wrapper-reversed '; } ?>clearfix">

	<div class="wrapper wrapper-main wrapper-main-inside clearfix">
	
		<?php get_template_part( 'include_breadcrumbs'); ?>
		
		<div id="main" class="clearfix">
			
			<div class="page-meta">
				<?php the_title( '<h1 class="title-page">', '</h1>' ); ?>
			</div><!-- end .page-meta -->

        <?php while ( have_posts() ) : the_post(); ?>

            <div class="content-area">

                <?php get_template_part( 'content', 'single' ); ?>

                <?php if (option::get('post_comments') == 'on') : ?>

                    <?php comments_template(); ?>

                <?php endif; ?>

            </div><!-- .content-area -->

        <?php endwhile; // end of the loop. ?>
			
		</div><!-- #main -->
		
		<?php if ($template != 'full') { ?>
		<aside class="content-aside clearfix">
		
			<div class="aside-wrapper">
			
				<?php get_sidebar(); ?>
				
			</div><!-- .aside-wrapper -->
		
		</aside><!-- .content-aside -->
		
		<?php } ?>
	
	</div><!-- .wrapper .wrapper-main -->

</div><!-- #content -->

<?php
get_footer();