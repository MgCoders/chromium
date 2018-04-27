<?php
/*
Template Name: Directory
*/
?>
<?php get_header(); ?>

<?php
$show_sidebar = get_post_meta($post->ID, 'wpzoom_dir_meta_sidebar', true);
?>

<div id="content" class="<?php if ( $show_sidebar != 1 ) { echo 'full-width '; } ?>clearfix">

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

			<?php get_template_part('loop','directory'); ?>

		</div><!-- #main -->
		
		<?php if ( $show_sidebar == 1 ) { ?>
		
		<aside class="content-aside clearfix">
		
			<div class="aside-wrapper">
			
				<?php get_sidebar(); ?>
				
			</div><!-- .aside-wrapper -->
		
		</aside><!-- .content-aside -->
		
		<?php } ?>
		
	</div><!-- .wrapper .wrapper-main -->

</div><!-- #content -->

<?php get_footer(); ?>