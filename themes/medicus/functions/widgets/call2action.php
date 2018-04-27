<?php

/*------------------------------------------*/
/* WPZOOM: Call to Action					*/
/*------------------------------------------*/
 
/**
 * Text widget class
 *
 * @since 2.8.0
 */
class WPZOOM_Widget_Text extends WP_Widget {

	function __construct() {
		$widget_ops = array('classname' => 'wpzoom-text', 'description' => __('Display a call to action block.'));
		$control_ops = array('id_base' => 'wpzoom-text-widget', 'width' => 400, 'height' => 350);
		parent::__construct('wpzoom-text-widget', __('WPZOOM: Call to Action'), $widget_ops, $control_ops);
	}

	function widget( $args, $instance ) {
		extract($args);

		/* User-selected settings. */
		$line1 = apply_filters( 'widget_text', empty( $instance['call2action_line1'] ) ? '' : $instance['call2action_line1'], $instance );
		$line2 = apply_filters( 'widget_text', empty( $instance['call2action_line2'] ) ? '' : $instance['call2action_line2'], $instance );
		$call2action_background = $instance['call2action_background'];
		
		echo $before_widget;
		?>
		<div class="wpzoom-widget-c2a"<?php if (strlen($call2action_background) == 7) { echo ' style="background-color: ' . $call2action_background . ';"'; } ?>>

			<p class="call2action-title"><?php echo html_entity_decode($line1); ?></p>
			<p class="call2action-description"><?php echo html_entity_decode($line2); ?></p>
		
			<div class="cleaner">&nbsp;</div>
		
		</div><!-- .wpzoom-widget-c2a -->
		<?php
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags (if needed) and update the widget settings. */
		$instance['call2action_line1'] = htmlentities(trim( $new_instance['call2action_line1'] ));
		$instance['call2action_line2'] = htmlentities(trim( $new_instance['call2action_line2'] ));
		$instance['call2action_background'] = trim( strtolower($new_instance['call2action_background']) );

		// Check for a hex color string '#123456'
		if (preg_match('/^#[a-f0-9]{6}$/i', $instance['call2action_background'])) {
			// Hex color is valid
		} elseif (preg_match('/^[a-f0-9]{6}$/i', $instance['call2action_background'])) {
			// Append # to hex color
			$instance['call2action_background'] = '#' . trim(strtolower($new_instance['call2action_background']));
		}

		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'call2action_line1' => '', 'call2action_line2' => '') );
?>
		<p>
			<label for="<?php echo $this->get_field_id( 'call2action_line1' ); ?>"><?php _e('Text Line 1 (HTML allowed)', 'wpzoom'); ?>:</label>
			<input id="<?php echo $this->get_field_id( 'call2action_line1' ); ?>" name="<?php echo $this->get_field_name( 'call2action_line1' ); ?>" value="<?php echo esc_attr($instance['call2action_line1']); ?>" type="text" class="widefat" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'call2action_line2' ); ?>"><?php _e('Text Line 2 (HTML allowed)', 'wpzoom'); ?>:</label>
			<input id="<?php echo $this->get_field_id( 'call2action_line2' ); ?>" name="<?php echo $this->get_field_name( 'call2action_line2' ); ?>" value="<?php echo esc_attr($instance['call2action_line2']); ?>" type="text" class="widefat" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'call2action_background' ); ?>"><?php _e('Custom Background HEX Color (optional)', 'wpzoom'); ?>:</label>
			<input id="<?php echo $this->get_field_id( 'call2action_background' ); ?>" name="<?php echo $this->get_field_name( 'call2action_background' ); ?>" value="<?php echo esc_attr($instance['call2action_background']); ?>" type="text" class="widefat" />
			<span style="display: block; margin: 8px 0 0; ">Example: <strong>#ff0000</strong></span>
		</p>
<?php
	}
}

add_action('widgets_init', create_function('', 'return register_widget("WPZOOM_Widget_Text");'));
// add_action('widgets_init', create_function('', 'return unregister_widget("WP_Widget_Text");'));