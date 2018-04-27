<?php
if ( option::get( 'featured_type' ) == 'Posts' ) {
	$FeaturedSource = 'post';
} else {
	$FeaturedSource = 'page';
}

$featured = new WP_Query( array(
    'showposts'    => option::get( 'slideshow_posts' ),
    'post__not_in' => get_option( 'sticky_posts' ),
    'meta_key'     => 'wpzoom_is_featured',
    'meta_value'   => 1,
    'post_type' => $FeaturedSource
) );

?>

<div id="wpzoom-featured-posts">

	<?php if ( $featured->have_posts() ) : ?>

		<ul class="wpzoom-featured-posts slides clearfix">

			<?php while ( $featured->have_posts() ) : $featured->the_post(); ?>

                <?php
                $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumb-loop-full');
                $style = ' style="background-image:url(\'' . $large_image_url[0] . '\')"';
				$featured_tagline = get_post_meta( $post->ID, 'wpzoom_slide_tagline', 1);
				$featured_tagline = !empty( $featured_tagline ) ? $featured_tagline : '';
				$featured_title = get_post_meta( $post->ID, 'wpzoom_slide_title', 1);
				$featured_title = !empty( $featured_title ) ? $featured_title : get_the_title();
				$featured_description = get_post_meta( $post->ID, 'wpzoom_slide_description', 1);
				$featured_description = !empty( $featured_description ) ? $featured_description : get_the_excerpt();
				$featured_url = get_post_meta( $post->ID, 'wpzoom_slide_url', 1);
				$featured_url = !empty( $featured_url ) ? $featured_url : get_the_permalink();
				$featured_button = get_post_meta( $post->ID, 'wpzoom_slide_button', 1);
				$featured_button = !empty( $featured_button ) ? $featured_button : __('Read More', 'wpzoom');
				$featured_style = strtolower( get_post_meta( $post->ID, 'wpzoom_slide_style', 1) );
				$featured_style = !empty( $featured_style ) ? $featured_style : 'light';
				$featured_layout = strtolower( get_post_meta( $post->ID, 'wpzoom_slide_layout', 1) );
				$featured_layout = !empty( $featured_layout ) ? $featured_layout : 'left';

                ?>

                <li class="slide<?php echo ' slide-' . $featured_layout; echo ' slide-' . $featured_style; ?>" <?php echo $style; ?>>

					<div class="slide-hero">
						<div class="slide-wrapper">
							<div class="slide-content">
								<span class="slide-tagline"><?php echo $featured_tagline; ?></span>
								<h2 class="slide-title"><a href="<?php echo esc_url_raw($featured_url); ?>" title="<?php the_title(); ?>"><?php echo esc_attr($featured_title); ?></a></h2>
								<p><?php echo $featured_description; ?></p>
	                            <?php if ( $featured_button ) { ?>
	                                <span class="read-more-span">
	                                    <a class="read-more-anchor" href="<?php echo esc_url_raw($featured_url); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'wpzoom' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php echo esc_attr($featured_button); ?></a>
	                                </span>
	                            <?php } ?>
							</div><!-- .slide-content -->
						</div><!-- .slide-wrapper -->
					</div><!-- .slide-hero  -->
					
                </li><!-- .slide -->
            <?php endwhile; ?>

		</ul><!-- .wpzoom-featured-posts .slides .clearfix-->

	<?php else: ?>

		<div class="empty-slider">
			
			<?php if ( current_user_can('edit_theme_options') ) { ?>
			
			<p><strong><?php _e( 'You are now ready to set-up your Slideshow content.', 'wpzoom' ); ?></strong></p>

			<p>
				<?php
				printf(
					__( 'For more information about adding posts to the slider, please <a href="%1$s">read the documentation</a>', 'wpzoom' ),
					'http://www.wpzoom.com/documentation/medicus/'
				);
				?>
			</p>
			
			<?php } ?>
			
		</div><!-- .empty-slider -->

	<?php endif; ?>

</div><!-- #wpzoom-featured-posts -->