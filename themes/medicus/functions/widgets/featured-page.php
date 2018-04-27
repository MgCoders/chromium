<?php

/*------------------------------------------*/
/* WPZOOM: Featured Page					*/
/*------------------------------------------*/

class wpzoom_widget_feat_page extends WP_Widget {

	/* Widget setup. */
	function __construct() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'wpzoom-widget-page', 'description' => __('Custom WPZOOM widget. Displays the content of a page. Best used in the Homepage: Content Area widgetized area.', 'wpzoom') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 250, 'height' => 350, 'id_base' => 'wpzoom-widget-feat-page' );

		/* Create the widget. */
		parent::__construct( 'wpzoom-widget-feat-page', __('WPZOOM: Featured Page', 'wpzoom'), $widget_ops, $control_ops );
	}

	/* How to display the widget on the screen. */
	function widget( $args, $instance ) {

		extract( $args );

		/* Our variables from the widget settings. */

		$page_id = $instance['page_id'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		?>

		<?php
		if ($page_id > 0) {
			$loop = new WP_Query( array( 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC', 'page_id' => $page_id ) );
		}

		while ( $loop->have_posts() ) : $loop->the_post(); global $post;

		$page_title = sanitize_text_field( $instance['page_title'] );
		$page_title = !empty( $page_title ) ? $page_title : get_the_title();

		?>

			<div class="post-wrapper clearfix">
				<?php get_the_image( array( 'size' => 'thumb-loop', 'width' => 230, 'height' => 230, 'before' => '<div class="post-cover">', 'after' => '</div>' ) ); ?>
				
				<div class="post-content">
					<h2 class="title-post"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo $page_title; ?></a></h2>
					<p class="post-excerpt"><?php echo get_the_excerpt(); ?></p>
					<span class="read-more-span"><a class="read-more-anchor" href="<?php the_permalink(); ?>"><?php _e('Read More','wpzoom'); ?></a></span>
				</div><!-- .post-content -->
			</div><!-- .post-wrapper -->

		<?php endwhile; ?>

		<?php
		// echo $after_widget;
		wp_reset_query();

		/* After widget (defined by themes). */
		echo $after_widget;

		}

		/* Update the widget settings.*/
		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;

			/* Strip tags for title and name to remove HTML (important for text inputs). */
			$instance['page_id'] = $new_instance['page_id'];
			$instance['page_title'] = $new_instance['page_title'];

			return $instance;
		}

		/** Displays the widget settings controls on the widget panel.
		 * Make use of the get_field_id() and get_field_name() function when creating your form elements. This handles the confusing stuff. */
		function form( $instance ) {

			/* Set up some default widget settings. */
			$defaults = array('page_id' => '0');
			$instance = wp_parse_args( (array) $instance, $defaults );
	    ?>

			<p>
				<label for="<?php echo $this->get_field_id( 'page_id' ); ?>"><?php _e('Select page:', 'wpzoom'); ?></label>
				<select id="<?php echo $this->get_field_id('page_id'); ?>" name="<?php echo $this->get_field_name('page_id'); ?>" style="width:90%;">
					<option value="0">Choose page:</option>
					<?php
					$pages = get_pages();

					foreach ($pages as $pag) {
					$option = '<option value="'.$pag->ID;
					if ($pag->ID == $instance['page_id']) { $option .='" selected="selected';}
					$option .= '">';
					$option .= $pag->post_title;
					$option .= '</option>';
					echo $option;
					}
				?>
				</select>
			</p>

			<p>
				<label for="<?php echo $this->get_field_id( 'page_title' ); ?>"><?php _e('Custom title:', 'wpzoom'); ?></label><br />
				<input id="<?php echo $this->get_field_id( 'page_title' ); ?>" name="<?php echo $this->get_field_name( 'page_title' ); ?>" value="<?php echo $instance['page_title']; ?>" type="text" class="widefat" />
			</p>

		<?php
		}
}

function wpzoom_register_feat_page_widget() {
	register_widget('wpzoom_widget_feat_page');
}
add_action('widgets_init', 'wpzoom_register_feat_page_widget');
?>