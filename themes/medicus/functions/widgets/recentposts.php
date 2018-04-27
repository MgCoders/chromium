<?php

/*------------------------------------------*/
/* WPZOOM: Recent Posts           */
/*------------------------------------------*/

class Wpzoom_Feature_Posts extends WP_Widget {
	protected $defaults;

	function __construct() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'feature-posts', 'description' => 'A list of posts, optionally filter by category.' );

		/* Widget control settings. */
		$control_ops = array( 'id_base' => 'wpzoom-feature-posts' );

		/* Create the widget. */
		parent::__construct( 'wpzoom-feature-posts', __( 'WPZOOM: Recent Posts', 'wpzoom' ), $widget_ops, $control_ops );

		$this->defaults = array(
			'title'          => esc_html__( 'Recent Posts', 'wpzoom' ),
			'category'       => 0,
			'show_count'     => 5,
			'show_date'      => false,
			'show_thumb'     => true,
			'show_more'      => true,
			'show_excerpt'   => true
		);
	}

	function widget( $args, $instance ) {
		extract( $args );

		// Find out in which widgetized area the widget is displayed
		$sidebar_id = $args['id'];

		/* User-selected settings. */
		$title          = apply_filters('widget_title', $instance['title'] );
		$category       = $instance['category'];
		$show_count     = $instance['show_count'];
		$show_date      = $instance['show_date'];
		$show_thumb     = $instance['show_thumb'];
		$show_more      = $instance['show_more'];
		$show_excerpt   = $instance['show_excerpt'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Title of widget (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;

		echo '<section class="recent-posts"><ul class="wpzoom-posts posts-archive">';

		$query_opts = apply_filters('wpzoom_query', array(
			'posts_per_page' => $show_count,
			'post_type' => 'post',
			'post__not_in' => get_option( 'sticky_posts' )
		));
		if ( $category ) $query_opts['cat'] = $category;

		$query = new WP_Query( $query_opts );

		if ( $query->have_posts() ) : 

		$thumb_class = 'thumb-loop';
		$width = 230;
		$height = 230;

		if ( $sidebar_id == 'sidebar-main' || $sidebar_id == 'home_content_full_1' || $sidebar_id == 'home_content_full_2' || $sidebar_id == 'home_content_col_1' || $sidebar_id == 'home_content_col_2' || $sidebar_id == 'home_content_col_3' ) {
			$thumb_class = 'thumb-loop-medium';
			$width = 360;
			$height = 360;
		}

		while ( $query->have_posts() ) : $query->the_post();

		?>
		<li class="posts-archive-item">
		
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
				<div class="post-wrapper clearfix">
			
					<?php if ( $show_thumb == 'on' ) {
						get_the_image( array( 'size' => $thumb_class, 'width' => $width, 'height' => $height, 'before' => '<div class="post-cover">', 'after' => '</div>' ) );
					} ?>
					
					<div class="post-content">
						<?php the_title( sprintf( '<h2 class="title-post"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						<?php if ( $show_date == 'on' ) { ?>
						<div class="entry-meta">
							<?php printf( '<span class="entry-date"><time class="entry-date" datetime="%1$s">%2$s</time></span>', esc_attr( get_the_date( 'c' ) ), esc_html( get_the_date() ) ); ?>
						</div><!-- .entry-meta -->
						<?php } ?>
						<?php if ( $show_excerpt ) { ?>
						<p class="post-excerpt"><?php echo get_the_excerpt(); ?></p>
						<?php } ?>
						<?php if ( $show_more ) { ?>
						<span class="read-more-span"><a href="<?php the_permalink(); ?>" class="read-more-anchor"><?php _e('Read More', 'wpzoom'); ?></a></span>
						<?php } ?>
					</div><!-- .post-content -->
				</div><!-- .post-wrapper -->
			
			</article><!-- #post-<?php the_ID(); ?> -->
		
		</li><!-- .posts-archive-item -->
		<?php

			endwhile;
			endif;

			//Reset query_posts
			wp_reset_postdata();
		echo '</ul><!-- .wpzoom-posts .posts-archive --></section><!-- .recent-posts -->';

		/* After widget (defined by themes). */
		echo $after_widget;
	}


	function update( $new_instance, $old_instance ) {
		$instance['title']          = sanitize_text_field( $new_instance['title'] );
		$instance['category']       = ( 0 <= (int) $new_instance['category'] ) ? (int) $new_instance['category'] : null;
		$instance['show_count']     = ( 0 !== (int) $new_instance['show_count'] ) ? (int) $new_instance['show_count'] : null;
		$instance['show_date']      = (bool) $new_instance['show_date'];
		$instance['show_thumb']     = (bool) $new_instance['show_thumb'];
		$instance['show_more']      = (bool) $new_instance['show_more'];
		$instance['show_excerpt']   = (bool) $new_instance['show_excerpt'];

		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, $this->defaults ); ?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:', 'wpzoom' ); ?></label><br />
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" type="text" class="widefat" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'category' ); ?>"><?php esc_html_e( 'Category:', 'wpzoom' ); ?></label>
			<select id="<?php echo $this->get_field_id( 'category' ); ?>" name="<?php echo $this->get_field_name( 'category' ); ?>">
				<option value="0" <?php if ( !$instance['category'] ) echo 'selected="selected"'; ?>>All</option>
				<?php
				$categories = get_categories(array('type' => 'post'));

				foreach( $categories as $cat ) {
					echo '<option value="' . $cat->cat_ID . '"';

					if ( $cat->cat_ID == $instance['category'] ) echo  ' selected="selected"';

					echo '>' . esc_html( $cat->cat_name ) . ' (' . $cat->category_count . ')';

					echo '</option>';
				}
				?>
			</select>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'show_count' ); ?>"><?php esc_html_e( 'Show:', 'wpzoom' ); ?></label>
			<input id="<?php echo $this->get_field_id( 'show_count' ); ?>" name="<?php echo $this->get_field_name( 'show_count' ); ?>" value="<?php echo esc_attr( $instance['show_count'] ); ?>" type="text" size="2" /> posts
		</p>

		<p>
			<input class="checkbox" type="checkbox" <?php checked( $instance['show_date'] ); ?> id="<?php echo $this->get_field_id( 'show_date' ); ?>" name="<?php echo $this->get_field_name( 'show_date' ); ?>" />
			<label for="<?php echo $this->get_field_id( 'show_date' ); ?>"><?php esc_html_e( 'Display post date', 'wpzoom' ); ?></label>
		</p>

		<p>
			<input class="checkbox" type="checkbox" <?php checked( $instance['show_thumb'] ); ?> id="<?php echo $this->get_field_id( 'show_thumb' ); ?>" name="<?php echo $this->get_field_name( 'show_thumb' ); ?>" />
			<label for="<?php echo $this->get_field_id( 'show_thumb' ); ?>"><?php esc_html_e( 'Display post thumbnail', 'wpzoom' ); ?></label>
		</p>

		<p>
			<input class="checkbox" type="checkbox" <?php checked( $instance['show_excerpt'] ); ?> id="<?php echo $this->get_field_id( 'show_excerpt' ); ?>" name="<?php echo $this->get_field_name( 'show_excerpt' ); ?>" />
			<label for="<?php echo $this->get_field_id( 'show_excerpt' ); ?>"><?php esc_html_e( 'Display post excerpt', 'wpzoom' ); ?></label>
		</p>

		<p>
			<input class="checkbox" type="checkbox" <?php checked( $instance['show_more'] ); ?> id="<?php echo $this->get_field_id( 'show_more' ); ?>" name="<?php echo $this->get_field_name( 'show_more' ); ?>" />
			<label for="<?php echo $this->get_field_id( 'show_more' ); ?>"><?php esc_html_e( 'Display the Read More button', 'wpzoom' ); ?></label>
		</p>

		<?php
	}
}

function wpzoom_register_fp_widget() {
	register_widget('Wpzoom_Feature_Posts');
}
add_action('widgets_init', 'wpzoom_register_fp_widget');