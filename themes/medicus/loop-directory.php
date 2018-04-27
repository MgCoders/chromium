<?php 
$child_of = $post->ID;

$dir_ppp = get_post_meta($post->ID, 'wpzoom_dir_meta_ppp', true);
$dir_ppr = get_post_meta($post->ID, 'wpzoom_dir_meta_ppr', true);
$show_thumb = get_post_meta($post->ID, 'wpzoom_dir_meta_thumb', true);
$show_excerpt = get_post_meta($post->ID, 'wpzoom_dir_meta_excerpt', true);
$show_sidebar = get_post_meta($post->ID, 'wpzoom_dir_meta_sidebar', true);
$show_align = strtolower(get_post_meta($post->ID, 'wpzoom_dir_meta_align', true));

if (!$dir_ppr) {
	$dir_ppr = 3;
}

if ( $dir_ppr == 2 && $show_sidebar != 1 ) {
	$thumb_class = 'thumb-loop-big';
	$width = 555;
	$height = 340;
}

if ( ( $dir_ppr == 2 && $show_sidebar == 1 ) || ( $dir_ppr == 3 && $show_sidebar != 1 ) ) {
	$thumb_class = 'thumb-loop-medium';
	$width = 360;
	$height = 360;
}

if ( ( $dir_ppr == 3 && $show_sidebar == 1 ) || $dir_ppr == 4 ) {
	$thumb_class = 'thumb-loop';
	$width = 230;
	$height = 230;
}

$loop = new WP_Query( array( 'post_parent' => $child_of, 'post_type' => 'page', 'posts_per_page' => $dir_ppp, 'paged' => $paged, 'nopaging' => false, 'orderby' => 'menu_order', 'order' => 'ASC' ) );
$wp_query = $loop;

if ($loop->have_posts()) {
	$i = 0;
	?>

	<section class="directory-list wpzoom-widget-pages">
	
		<ul class="wpzoom-list wpzoom-list-<?php echo $dir_ppr; ?>cols wpzoom-feat-pages wpzoom-align-<?php echo $show_align; ?> clearfix">
		
		<?php while ( $loop->have_posts() ) : $loop->the_post(); global $post; 

			$featured_tagline = get_post_meta( $post->ID, 'wpzoom_page_tagline', 1);
			$featured_tagline = !empty( $featured_tagline ) ? $featured_tagline : get_the_excerpt();
	
			$i++;  
			?>
	
			<li class="wpzoom-list-item list-item-<?php echo $i; ?>">
			
				<div class="post-wrapper clearfix">
					<?php if ($show_thumb == 1) {
					get_the_image( array( 'size' => $thumb_class, 'width' => $width, 'height' => $height, 'before' => '<div class="post-cover">', 'after' => '</div>' ) );
					} ?>
					
					<div class="post-content">
						<h2 class="title-post"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php if (isset($$pagetitle) && strlen($$pagetitle) > 0) { echo $$pagetitle; } else { the_title(); } ?></a></h2>
						<?php if ($show_excerpt == 1) { ?>
						<p class="post-excerpt"><?php echo esc_html($featured_tagline); ?></p>
						<?php } ?>
					</div><!-- .post-content -->
				</div><!-- .post-wrapper -->
	
			</li><!-- .wpzoom-list-item .list-item-<?php echo $i; ?> -->
			<?php if ($i == $dir_ppr) { $i = 0; } ?>
	
		<?php endwhile; ?>
		
		</ul><!-- .wpzoom-list .wpzoom-list-<?php echo $dir_ppr; ?>cols .wpzoom-feat-pages .wpzoom-align-<?php echo $show_align; ?> .clearfix -->
	
	</section><!-- .directory-list -->
	
	<div class="cleaner">&nbsp;</div>
	
<?php 
} // if there are pages

get_template_part( 'pagination');

wp_reset_query();
?>