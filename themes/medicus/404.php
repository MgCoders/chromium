<?php get_header(); ?>

<div id="content" class="<?php if ($template == 'full') { echo 'full-width '; } ?>clearfix">

	<div class="wrapper wrapper-main wrapper-main-inside clearfix">
	
		<?php get_template_part( 'include_breadcrumbs'); ?>
		
		<div id="main" class="clearfix">
			
			<div class="page-meta">
				<h1 class="title-page"><?php _e( 'Error 404', 'wpzoom' ); ?></h1>
			</div><!-- end .page-meta -->

            <div class="content-area">

				<?php get_template_part( 'content', 'none' ); ?>

            </div><!-- .content-area -->

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
