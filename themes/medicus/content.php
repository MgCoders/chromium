<li class="posts-archive-item">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="post-wrapper clearfix">
	
			<?php if ( option::is_on('display_thumb') ) {
				get_the_image( array( 'size' => 'thumb-loop', 'width' => 230, 'height' => 230, 'before' => '<div class="post-cover">', 'after' => '</div>' ) );
			} ?>
			
			<div class="post-content">
				<?php the_title( sprintf( '<h2 class="title-post"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				<div class="entry-meta">
					<?php if ( option::is_on( 'display_date' ) )  printf( '<span class="entry-date"><time class="entry-date" datetime="%1$s">%2$s</time></span>', esc_attr( get_the_date( 'c' ) ), esc_html( get_the_date() ) ); ?>
					<?php if ( option::is_on( 'display_author' ) ) { printf( '<span class="entry-author">%s ', __( 'by', 'wpzoom' ) ); the_author_posts_link(); print('</span>'); } ?>
					<?php if ( option::is_on( 'display_comments' ) ) { ?><span class="comments-link"><?php comments_popup_link( __('0 comments', 'wpzoom'), __('1 comment', 'wpzoom'), __('% comments', 'wpzoom'), '', __('Comments are Disabled', 'wpzoom')); ?></span><?php } ?>
					<?php edit_post_link( __( 'Edit', 'wpzoom' ), '<span class="edit-link"> / ', '</span>' ); ?>
				</div><!-- .entry-meta -->
				<p class="post-excerpt"><?php echo get_the_excerpt(); ?></p>
				<?php if ( option::is_on('display_more') ) { ?>
				<span class="read-more-span"><a href="<?php the_permalink(); ?>" class="read-more-anchor"><?php _e('Read More', 'wpzoom'); ?></a></span>
				<?php } ?>
			</div><!-- .post-content -->
		</div><!-- .post-wrapper -->
	
	</article><!-- #post-<?php the_ID(); ?> -->

</li><!-- .posts-archive-item -->