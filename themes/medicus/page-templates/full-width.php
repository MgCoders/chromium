<?php
/*
Template Name: Full-width Page
*/

get_header(); ?>

<div id="content" class="full-width clearfix">

	<div class="wrapper wrapper-main wrapper-main-inside clearfix">
	
		<?php get_template_part( 'include_breadcrumbs'); ?>
		
		<div id="main" class="clearfix">
			
			<div class="page-meta">
				<?php the_title( '<h1 class="title-page">', '</h1>' ); ?>
			</div><!-- end .page-meta -->

        <?php while ( have_posts() ) : the_post(); ?>

            <div class="content-area">

                <?php get_template_part( 'content', 'page' ); ?>

                <?php if (option::get('comments_page') == 'on') : ?>

                    <?php comments_template(); ?>

                <?php endif; ?>

            </div><!-- .content-area -->

        <?php endwhile; // end of the loop. ?>
			
		</div><!-- #main -->
		
	</div><!-- .wrapper .wrapper-main -->

</div><!-- #content -->

<?php get_footer(); ?>