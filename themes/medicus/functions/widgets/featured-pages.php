<?php

/*------------------------------------------*/
/* WPZOOM: Featured Pages				*/
/*------------------------------------------*/

class wpzoom_widget_feat_items extends WP_Widget {

	/* Widget setup. */
	function __construct() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'wpzoom-widget-pages', 'description' => __('Custom WPZOOM widget. Displays 3-4 static pages of choice in a grid layout.', 'wpzoom') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 250, 'height' => 350, 'id_base' => 'wpzoom-widget-feat-items' );

		/* Create the widget. */
		parent::__construct( 'wpzoom-widget-feat-items', __('WPZOOM: Featured Pages', 'wpzoom'), $widget_ops, $control_ops );
	}

	/* How to display the widget on the screen. */
	function widget( $args, $instance ) {

		extract( $args );
		
		// Find out in which widgetized area the widget is displayed
		$sidebar_id = $args['id'];
		
		/* Our variables from the widget settings. */

		$title = apply_filters('widget_title', $instance['title'] );
		$description = sanitize_text_field( $instance['description'] );
		$page1_id = $instance['page1'];
		$page2_id = $instance['page2'];
		$page3_id = $instance['page3'];
		$page4_id = $instance['page4'];
		$page1_title = sanitize_text_field( $instance['page1_title'] );
		$page2_title = sanitize_text_field( $instance['page2_title'] );
		$page3_title = sanitize_text_field( $instance['page3_title'] );
		$page4_title = sanitize_text_field( $instance['page4_title'] );

		$show_num = $instance['show_num'];
		$show_thumb = $instance['page_thumb'];
		$show_title = $instance['page_title'];
		$show_excerpt = $instance['page_excerpt'];
		$show_align = $instance['show_align'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Title of widget (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;

		if ( $description )
			echo '<p class="widget-desc">' . $description . '</p>';

		?>
		<ul class="wpzoom-list wpzoom-list-<?php echo $show_num; ?>cols wpzoom-feat-pages wpzoom-align-<?php echo $show_align; ?> clearfix">
		<?php
		$i = 0;
		$z = 0;
		
		if ( $show_num == 2 ) {
			$thumb_class = 'thumb-loop-big';
			$width = 555;
			$height = 340;
		}

		if ( $show_num == 3 || ( $show_num == 2 && ( $sidebar_id == 'home_content' || $sidebar_id == 'home_content_col_1' || $sidebar_id == 'home_content_col_2' || $sidebar_id == 'home_content_col_3' ) ) ) {
			$thumb_class = 'thumb-loop-medium';
			$width = 360;
			$height = 360;
		}
		
		if ( ( $show_num == 4 || ( $show_num == 3 && $sidebar_id == 'home_content' ) ) ) {
			$thumb_class = 'thumb-loop';
			$width = 230;
			$height = 230;
		}

		if ( $show_num == 4 && ( $sidebar_id == 'home_content_full_1' || $sidebar_id == 'home_content_full_2' || $sidebar_id == 'sidebar-main' || $sidebar_id == 'home_content_col_1' || $sidebar_id == 'home_content_col_2' || $sidebar_id == 'home_content_col_3' ) ) {
			$thumb_class = 'thumb-loop-medium';
			$width = 360;
			$height = 360;
		}

		while ($i < $show_num) {

			$i++;
			$pageid = 'page' . $i . '_id';
			$pagetitle = 'page' . $i . '_title';

			if ($$pageid > 0) {
				$loop = new WP_Query( array( 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC', 'page_id' => $$pageid ) );
				$z++;

				while ( $loop->have_posts() ) : $loop->the_post(); global $post; unset($featured_tagline);
				$featured_tagline = get_post_meta( $post->ID, 'wpzoom_page_tagline', 1);
				$featured_tagline = !empty( $featured_tagline ) ? $featured_tagline : get_the_excerpt();
				?>

				<li class="wpzoom-list-item list-item-<?php echo $i; ?>">

					<div class="post-wrapper clearfix">
						<?php if ($show_thumb == 'on') {
						get_the_image( array( 'size' => $thumb_class, 'width' => $width, 'height' => $height, 'before' => '<div class="post-cover">', 'after' => '</div>' ) );
						} ?>
						
						<div class="post-content">
							<?php if ($show_title == 'on') { ?>
							<h2 class="title-post"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php if (isset($$pagetitle) && strlen($$pagetitle) > 0) { echo $$pagetitle; } else { the_title(); } ?></a></h2>
							<?php } ?>
							<?php if ($show_excerpt == 'on') { ?>
							<p class="post-excerpt"><?php echo esc_html($featured_tagline); ?></p>
							<?php } ?>
						</div><!-- .post-content -->
					</div><!-- .post-wrapper -->

				</li><!-- .wpzoom-list-item .list-item-<?php echo $i; ?> -->

			<?php endwhile;
			}
		} // while ?>

		<?php if ($z == 0) {
			echo '<p class="title">Please configure the widget on the <strong>Appearance > Widgets</strong> page.</p>';
		} ?>

		</ul><!-- .wpzoom-list .wpzoom-list-<?php echo $show_num; ?>cols .wpzoom-feat-pages .clearfix -->

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
			$instance['title'] = $new_instance['title'];
			$instance['description'] = $new_instance['description'];
			$instance['page1'] = $new_instance['page1'];
			$instance['page2'] = $new_instance['page2'];
			$instance['page3'] = $new_instance['page3'];
			$instance['page4'] = $new_instance['page4'];
			$instance['page1_title'] = $new_instance['page1_title'];
			$instance['page2_title'] = $new_instance['page2_title'];
			$instance['page3_title'] = $new_instance['page3_title'];
			$instance['page4_title'] = $new_instance['page4_title'];
			$instance['show_num'] = $new_instance['show_num'];
			$instance['page_thumb'] = $new_instance['page_thumb'];
			$instance['page_title'] = $new_instance['page_title'];
			$instance['page_excerpt'] = $new_instance['page_excerpt'];
			$instance['show_align'] = $new_instance['show_align'];

			return $instance;
		}

		/** Displays the widget settings controls on the widget panel.
		 * Make use of the get_field_id() and get_field_name() function when creating your form elements. This handles the confusing stuff. */
		function form( $instance ) {

			/* Set up some default widget settings. */
			$defaults = array('title' => 'Widget Title', 'page1' => '0','page2' => '0','page3' => '0','page4' => '0', 'show_num' => 3, 'page_thumb' => 'on', 'page_title' => 'on', 'page_excerpt' => 'on', 'show_align' => 'center');
			$instance = wp_parse_args( (array) $instance, $defaults );
	    ?>

			<p>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>">Widget Title:</label><br />
				<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" type="text" class="widefat" />
			</p>

			<p>
				<label for="<?php echo $this->get_field_id( 'description' ); ?>">Widget Description:</label><br />
				<input id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>" value="<?php echo $instance['description']; ?>" type="text" class="widefat" />
			</p>

			<p style="text-transform: uppercase;"><strong>Page 1 Options</strong></p>

			<p>
				<label for="<?php echo $this->get_field_id( 'page1' ); ?>"><?php _e('Select page:', 'wpzoom'); ?></label>
				<select id="<?php echo $this->get_field_id('page1'); ?>" name="<?php echo $this->get_field_name('page1'); ?>" style="width:90%;">
					<option value="0">Choose page:</option>
					<?php
					$pages = get_pages();

					foreach ($pages as $pag) {
					$option = '<option value="'.$pag->ID;
					if ($pag->ID == $instance['page1']) { $option .='" selected="selected';}
					$option .= '">';
					$option .= $pag->post_title;
					$option .= '</option>';
					echo $option;
					}
				?>
				</select>
			</p>

			<p>
				<label for="<?php echo $this->get_field_id( 'page1_title' ); ?>"><?php _e('Custom title:', 'wpzoom'); ?></label><br />
				<input id="<?php echo $this->get_field_id( 'page1_title' ); ?>" name="<?php echo $this->get_field_name( 'page1_title' ); ?>" value="<?php echo $instance['page1_title']; ?>" type="text" class="widefat" />
			</p>

			<hr style="height: 1px; line-height: 1px; font-size: 1px; border: none; border-top: solid 1px #aaa; margin: 10px 0;" />

			<p style="text-transform: uppercase;"><strong>Page 2 Options</strong></p>

			<p>
				<label for="<?php echo $this->get_field_id( 'page2' ); ?>"><?php _e('Select page:', 'wpzoom'); ?></label>
				<select id="<?php echo $this->get_field_id('page2'); ?>" name="<?php echo $this->get_field_name('page2'); ?>" style="width:90%;">
					<option value="0">Choose page:</option>
					<?php
					$pages = get_pages();

					foreach ($pages as $pag) {
					$option = '<option value="'.$pag->ID;
					if ($pag->ID == $instance['page2']) { $option .='" selected="selected';}
					$option .= '">';
					$option .= $pag->post_title;
					$option .= '</option>';
					echo $option;
					}
				?>
				</select>
			</p>

			<p>
				<label for="<?php echo $this->get_field_id( 'page2_title' ); ?>"><?php _e('Custom title:', 'wpzoom'); ?></label><br />
				<input id="<?php echo $this->get_field_id( 'page2_title' ); ?>" name="<?php echo $this->get_field_name( 'page2_title' ); ?>" value="<?php echo $instance['page2_title']; ?>" type="text" class="widefat" />
			</p>

			<hr style="height: 1px; line-height: 1px; font-size: 1px; border: none; border-top: solid 1px #aaa; margin: 10px 0;" />

			<p style="text-transform: uppercase;"><strong>Page 3 Options</strong></p>

			<p>
				<label for="<?php echo $this->get_field_id( 'page3' ); ?>"><?php _e('Select page:', 'wpzoom'); ?></label>
				<select id="<?php echo $this->get_field_id('page3'); ?>" name="<?php echo $this->get_field_name('page3'); ?>" style="width:90%;">
					<option value="0">Choose page:</option>
					<?php
					$pages = get_pages();

					foreach ($pages as $pag) {
					$option = '<option value="'.$pag->ID;
					if ($pag->ID == $instance['page3']) { $option .='" selected="selected';}
					$option .= '">';
					$option .= $pag->post_title;
					$option .= '</option>';
					echo $option;
					}
				?>
				</select>
			</p>

			<p>
				<label for="<?php echo $this->get_field_id( 'page3_title' ); ?>"><?php _e('Custom title:', 'wpzoom'); ?></label><br />
				<input id="<?php echo $this->get_field_id( 'page3_title' ); ?>" name="<?php echo $this->get_field_name( 'page3_title' ); ?>" value="<?php echo $instance['page3_title']; ?>" type="text" class="widefat" />
			</p>

			<hr style="height: 1px; line-height: 1px; font-size: 1px; border: none; border-top: solid 1px #aaa; margin: 10px 0;" />

			<p style="text-transform: uppercase;"><strong>Page 4 Options</strong></p>

			<p>
				<label for="<?php echo $this->get_field_id( 'page4' ); ?>"><?php _e('Select page:', 'wpzoom'); ?></label>
				<select id="<?php echo $this->get_field_id('page4'); ?>" name="<?php echo $this->get_field_name('page4'); ?>" style="width:90%;">
					<option value="0">Choose page:</option>
					<?php
					$pages = get_pages();

					foreach ($pages as $pag) {
					$option = '<option value="'.$pag->ID;
					if ($pag->ID == $instance['page4']) { $option .='" selected="selected';}
					$option .= '">';
					$option .= $pag->post_title;
					$option .= '</option>';
					echo $option;
					}
				?>
				</select>
			</p>

			<p>
				<label for="<?php echo $this->get_field_id( 'page4_title' ); ?>"><?php _e('Custom title:', 'wpzoom'); ?></label><br />
				<input id="<?php echo $this->get_field_id( 'page4_title' ); ?>" name="<?php echo $this->get_field_name( 'page4_title' ); ?>" value="<?php echo $instance['page4_title']; ?>" type="text" class="widefat" />
			</p>

			<hr style="height: 1px; line-height: 1px; font-size: 1px; border: none; border-top: solid 1px #aaa; margin: 10px 0;" />

			<p><strong>Common Widget Options:</strong></p>

	 		<p>
				<label for="<?php echo $this->get_field_id('show_num'); ?>"><?php _e('Pages to Display', 'wpzoom'); ?></label>
				<select id="<?php echo $this->get_field_id('show_num'); ?>" name="<?php echo $this->get_field_name('show_num'); ?>" style="width:90%;">
					<option value="2"<?php if ($instance['show_num'] == 2) { echo ' selected="selected"';} ?>>2</option>
					<option value="3"<?php if ($instance['show_num'] == 3) { echo ' selected="selected"';} ?>>3</option>
					<option value="4"<?php if ($instance['show_num'] == 4) { echo ' selected="selected"';} ?>>4</option>
				</select>
			</p>

			<p>
				<input class="checkbox" type="checkbox" id="<?php echo $this->get_field_id('page_thumb'); ?>" name="<?php echo $this->get_field_name('page_thumb'); ?>" <?php if ($instance['page_thumb'] == 'on') { echo ' checked="checked"';  } ?> />
				<label for="<?php echo $this->get_field_id('page_thumb'); ?>"><?php _e('Display page thumbnail', 'wpzoom'); ?></label>
			</p>
			<p>
				<input class="checkbox" type="checkbox" id="<?php echo $this->get_field_id('page_title'); ?>" name="<?php echo $this->get_field_name('page_title'); ?>" <?php if ($instance['page_title'] == 'on') { echo ' checked="checked"';  } ?> />
				<label for="<?php echo $this->get_field_id('page_title'); ?>"><?php _e('Display page title', 'wpzoom'); ?></label>
			</p>
			<p>
				<input class="checkbox" type="checkbox" id="<?php echo $this->get_field_id('page_excerpt'); ?>" name="<?php echo $this->get_field_name('page_excerpt'); ?>" <?php if ($instance['page_excerpt'] == 'on') { echo ' checked="checked"';  } ?> />
				<label for="<?php echo $this->get_field_id('page_excerpt'); ?>"><?php _e('Display page excerpt', 'wpzoom'); ?></label>
			</p>

	 		<p>
				<label for="<?php echo $this->get_field_id('show_align'); ?>"><?php _e('Content Alignment', 'wpzoom'); ?></label>
				<select id="<?php echo $this->get_field_id('show_align'); ?>" name="<?php echo $this->get_field_name('show_align'); ?>" style="width:90%;">
					<option value="left"<?php if ($instance['show_align'] == 'left') { echo ' selected="selected"';} ?>>Left</option>
					<option value="center"<?php if ($instance['show_align'] == 'center') { echo ' selected="selected"';} ?>>Center</option>
					<option value="right"<?php if ($instance['show_align'] == 'right') { echo ' selected="selected"';} ?>>Right</option>
				</select>
			</p>

		<?php
		}
}

function wpzoom_register_feat_items_widget() {
	register_widget('wpzoom_widget_feat_items');
}
add_action('widgets_init', 'wpzoom_register_feat_items_widget');
?>