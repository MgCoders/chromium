<?php


/* Registering metaboxes
============================================*/

add_action( 'admin_menu', 'wpzoom_options_box' );

function wpzoom_options_box() {

	if (option::get('featured_type') == 'Posts') {

		$FeaturedSource = 'post';

	} else {

		$FeaturedSource = 'page';
	}
	
	global $post;

    add_meta_box('wpzoom_post_layout', 'Post Layout', 'wpzoom_post_layout_options', 'post', 'normal', 'high');
    add_meta_box('wpzoom_post_info', 'Post Options', 'wpzoom_post_info', $FeaturedSource, 'side', 'high');
    add_meta_box('wpzoom_page_info', 'Page Options', 'wpzoom_page_info', 'page', 'side', 'high');
  
	$template_file = '';
	// get the id of current post/page
	if ( isset($_GET['post']) ) {
		$post_id = $_GET['post'];
	} elseif ( isset($_POST['post_ID']) ) {
		$post_id = $_POST['post_ID'];
	}

	// get the template file used (if a page)
	if (isset($post_id)) {
		$template_file = get_post_meta($post_id,'_wp_page_template',TRUE);
	}
	
	// if we are using the dir-list.php page template, add an additional meta boxe
	if ( isset($template_file) && ($template_file == 'page-templates/dir.php') ) {
		add_meta_box('wpzoom_dir_list_meta', 'Directory List Options', 'wpzoom_dir_list_meta', 'page', 'side', 'high');
	}

}


/* Custom Post Layouts
==================================== */

function wpzoom_post_layout_options() {
    global $post;
    $postLayouts = array('side-right' => 'Sidebar on the right', 'side-left' => 'Sidebar on the left', 'full' => 'Full Width');
    ?>

    <style>
    .RadioClass { display: none !important; }
    .RadioLabelClass { margin-right: 10px; }
    img.layout-select { border: solid 4px #c0cdd6; border-radius: 5px; }
    .RadioSelected img.layout-select { border: solid 4px #3173b2; }
    #wpzoom_post_embed_code { color: #444444; font-size: 11px; margin: 3px 0 10px; padding: 5px; height:135px; font-family: Consolas,Monaco,Courier,monospace; }

    </style>

    <script type="text/javascript">
    jQuery(document).ready( function($) {
        $(".RadioClass").change(function(){
            if($(this).is(":checked")){
                $(".RadioSelected:not(:checked)").removeClass("RadioSelected");
                $(this).next("label").addClass("RadioSelected");
            }
        });
    });
    </script>

    <fieldset>
        <div>
            <p>
            <?php
            foreach ($postLayouts as $key => $value)
            {
                ?>
                <input id="<?php echo $key; ?>" type="radio" class="RadioClass" name="wpzoom_post_template" value="<?php echo $key; ?>"<?php if (get_post_meta($post->ID, 'wpzoom_post_template', true) == $key) { echo' checked="checked"'; } ?> />
                <label for="<?php echo $key; ?>" class="RadioLabelClass<?php if (get_post_meta($post->ID, 'wpzoom_post_template', true) == $key) { echo' RadioSelected"'; } ?>">
                <img src="<?php echo wpzoom::$wpzoomPath; ?>/assets/images/layout-<?php echo $key; ?>.png" alt="<?php echo $value; ?>" title="<?php echo $value; ?>" class="layout-select" /></label>
            <?php
            }
            ?>
            </p>
        </div>
    </fieldset>
    <?php
}

/* Options for regular posts */

function wpzoom_post_info() {
	global $post;
	wp_nonce_field( 'wpzoom_meta_box', 'wpzoom_meta_box_nonce' );

    ?>
    <fieldset>
        <p class="wpz_border">
            <?php $isChecked = ( get_post_meta($post->ID, 'wpzoom_is_featured', true) == 1 ? 'checked="checked"' : '' ); // we store checked checkboxes as 1 ?>
            <input type="checkbox" name="wpzoom_is_featured" id="wpzoom_is_featured" value="1" <?php echo esc_attr($isChecked); ?> /> <label for="wpzoom_is_featured"><?php _e('Feature in Homepage Slider', 'wpzoom'); ?></label>
        </p>

		<p>
			<label for="wpzoom_slide_tagline"><?php _e('Slide Tagline (optional)', 'wpzoom'); ?>:</label><br />
			<input type="text" style="width:90%;" name="wpzoom_slide_tagline" id="wpzoom_slide_tagline" value="<?php echo esc_attr( get_post_meta($post->ID, 'wpzoom_slide_tagline', true)); ?>"><br />
		</p>

		<p>
			<label for="wpzoom_slide_title"><?php _e('Slide Title (optional)', 'wpzoom'); ?>:</label><br />
			<input type="text" style="width:90%;" name="wpzoom_slide_title" id="wpzoom_slide_title" value="<?php echo esc_attr( get_post_meta($post->ID, 'wpzoom_slide_title', true)); ?>"><br />
		</p>
		
		<p>
			<label for="wpzoom_slide_description"><?php _e('Slide Description (optional)', 'wpzoom'); ?>:</label><br />
			<textarea style="width:90%;" name="wpzoom_slide_description" id="wpzoom_slide_description"><?php echo esc_attr( get_post_meta($post->ID, 'wpzoom_slide_description', true)); ?></textarea><br />
		</p>

		<p>
			<label for="wpzoom_slide_button"><?php _e('Slide Button Text (optional)', 'wpzoom'); ?>:</label><br />
			<input type="text" style="width:90%;" name="wpzoom_slide_button" id="wpzoom_slide_button" value="<?php echo esc_attr( get_post_meta($post->ID, 'wpzoom_slide_button', true)); ?>"><br />
		</p>

		<p>
			<label for="wpzoom_slide_url"><?php _e('Slide Button URL (optional)', 'wpzoom'); ?>:</label><br />
			<input type="text" style="width:90%;" name="wpzoom_slide_url" id="wpzoom_slide_url" value="<?php echo esc_url_raw( get_post_meta($post->ID, 'wpzoom_slide_url', true)); ?>"><br />
		</p>

		<p class="wpz_border">
			<label for="wpzoom_slide_layout"><?php _e('Content Position in Slide', 'wpzoom'); ?>:</label><br />

			<select name="wpzoom_slide_layout" id="wpzoom_slide_layout">
				<option<?php selected( get_post_meta($post->ID, 'wpzoom_slide_layout', true), 'Left' ); ?>>Left</option>
				<option<?php selected( get_post_meta($post->ID, 'wpzoom_slide_layout', true), 'Right' ); ?>>Right</option>
			</select><br />

		</p>

		<p class="wpz_border">
			<label for="wpzoom_slide_style"><?php _e('Slider Color Style', 'wpzoom'); ?>:</label><br />

			<select name="wpzoom_slide_style" id="wpzoom_slide_style">
				<option<?php selected( get_post_meta($post->ID, 'wpzoom_slide_style', true), 'White' ); ?>>White</option>
				<option<?php selected( get_post_meta($post->ID, 'wpzoom_slide_style', true), 'Black' ); ?>>Black</option>
			</select><br />

		</p>

    </fieldset>
    <?php
}

/* Options for static pages */

function wpzoom_page_info() {
	global $post;
	wp_nonce_field( 'wpzoom_meta_box', 'wpzoom_meta_box_nonce' );

    ?>
    <fieldset>

		<p>
			<label for="wpzoom_page_tagline"><?php _e('Page Tagline', 'wpzoom'); ?>:</label><br />
			<input type="text" style="width:90%;" name="wpzoom_page_tagline" id="wpzoom_page_tagline" value="<?php echo esc_attr( get_post_meta($post->ID, 'wpzoom_page_tagline', true)); ?>"><br />
			<p class="description"><?php _e('This tagline is used by the custom WPZOOM widget that displays static pages and by the Directory page.', 'wpzoom'); ?></p>
		</p>

    </fieldset>
    <?php
}


// Directory Options
function wpzoom_dir_list_meta() {
	global $post;
	wp_nonce_field( 'wpzoom_meta_box', 'wpzoom_meta_box_nonce' );
	?>
	<fieldset>
		<input type="hidden" name="saveDirList" id="saveDirList" value="1" />
		<div>

			<p class="wpz_border">
				<label for="wpzoom_dir_meta_align"><?php _e('Content Alignment', 'wpzoom'); ?>:</label><br />

				<select name="wpzoom_dir_meta_align" id="wpzoom_dir_meta_align">
					<option<?php selected( get_post_meta($post->ID, 'wpzoom_dir_meta_align', true), 'Left' ); ?>>Left</option>
					<option<?php selected( get_post_meta($post->ID, 'wpzoom_dir_meta_align', true), 'Center' ); ?>>Center</option>
					<option<?php selected( get_post_meta($post->ID, 'wpzoom_dir_meta_align', true), 'Right' ); ?>>Right</option>
				</select><br />

			</p>

			<p class="wpz_border">
				<label for="wpzoom_dir_meta_ppp"><?php _e('Entries per Page', 'wpzoom'); ?>:</label><br />
				<input type="text" style="width:90%;" name="wpzoom_dir_meta_ppp" id="wpzoom_dir_meta_ppp" value="<?php echo get_post_meta($post->ID, 'wpzoom_dir_meta_ppp', true); ?>"><br />
				<span class="description"><?php _e('Default: 9', 'wpzoom'); ?></span>
			</p>

			<p class="wpz_border">
				<label for="wpzoom_dir_meta_ppr"><?php _e('Entries per Row', 'wpzoom'); ?>:</label><br />

				<select name="wpzoom_dir_meta_ppr" id="wpzoom_dir_meta_ppr">
					<option<?php selected( get_post_meta($post->ID, 'wpzoom_dir_meta_ppr', true), '2' ); ?>>2</option>
					<option<?php selected( get_post_meta($post->ID, 'wpzoom_dir_meta_ppr', true), '3' ); ?>>3</option>
					<option<?php selected( get_post_meta($post->ID, 'wpzoom_dir_meta_ppr', true), '4' ); ?>>4</option>
				</select><br />

				<span class="description"><?php _e('Default: 3', 'wpzoom'); ?></span>
			</p>

			<p class="wpz_border">
				<?php $isChecked = ( get_post_meta($post->ID, 'wpzoom_dir_meta_sidebar', true) == 1 ? 'checked="checked"' : '' ); // we store checked checkboxes as 1 ?>
				<input type="checkbox" name="wpzoom_dir_meta_sidebar" id="wpzoom_dir_meta_sidebar" value="1" <?php echo $isChecked; ?> /> <label for="wpzoom_dir_meta_sidebar"><?php _e('Display the sidebar', 'wpzoom'); ?></label> 
			</p>

			<p class="wpz_border">
				<?php $isChecked = ( get_post_meta($post->ID, 'wpzoom_dir_meta_thumb', true) == 1 ? 'checked="checked"' : '' ); // we store checked checkboxes as 1 ?>
				<input type="checkbox" name="wpzoom_dir_meta_thumb" id="wpzoom_dir_meta_thumb" value="1" <?php echo $isChecked; ?> /> <label for="wpzoom_dir_meta_thumb"><?php _e('Display thumbnail', 'wpzoom'); ?></label> 
			</p>
			
			<p class="wpz_border">
				<?php $isChecked = ( get_post_meta($post->ID, 'wpzoom_dir_meta_excerpt', true) == 1 ? 'checked="checked"' : '' ); // we store checked checkboxes as 1 ?>
				<input type="checkbox" name="wpzoom_dir_meta_excerpt" id="wpzoom_dir_meta_excerpt" value="1" <?php echo $isChecked; ?> /> <label for="wpzoom_dir_meta_excerpt"><?php _e('Display excerpts', 'wpzoom'); ?></label> 
			</p>
			
  		</div>
	</fieldset>
	<?php
	}

add_action( 'save_post', 'custom_add_save' );

function custom_add_save( $postID ) {

    // called after a post or page is saved
    if ( $parent_id = wp_is_post_revision( $postID ) ) {
        $postID = $parent_id;
    }

	// Check if our nonce is set.
	if ( ! isset( $_POST['wpzoom_meta_box_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['wpzoom_meta_box_nonce'], 'wpzoom_meta_box' ) ) {
		return;
	}

    if ( isset( $_POST['save'] ) || isset( $_POST['publish'] ) ) {

		if (isset($_POST['wpzoom_post_template'])) {
			update_custom_meta($postID, $_POST['wpzoom_post_template'], 'wpzoom_post_template');
		}            

		/* Featured Posts (Slides) on Homepage */
		update_custom_meta( $postID, ( isset( $_POST['wpzoom_is_featured'] ) ? 1 : 0 ), 'wpzoom_is_featured' );
        
        if ( isset( $_POST['wpzoom_slide_layout'] ) )
		update_custom_meta( $postID, esc_attr($_POST['wpzoom_slide_layout']), 'wpzoom_slide_layout' );
		if ( isset( $_POST['wpzoom_slide_style'] ) )
		update_custom_meta( $postID, esc_attr($_POST['wpzoom_slide_style']), 'wpzoom_slide_style' );

        if ( isset( $_POST['wpzoom_slide_tagline'] ) )
            update_custom_meta( $postID, esc_attr($_POST['wpzoom_slide_tagline']), 'wpzoom_slide_tagline' );
        if ( isset( $_POST['wpzoom_slide_title'] ) )
            update_custom_meta( $postID, esc_attr($_POST['wpzoom_slide_title']), 'wpzoom_slide_title' );
        if ( isset( $_POST['wpzoom_slide_description'] ) )
            update_custom_meta( $postID, esc_attr($_POST['wpzoom_slide_description']), 'wpzoom_slide_description' );
        if ( isset( $_POST['wpzoom_slide_url'] ) )
            update_custom_meta( $postID, esc_attr($_POST['wpzoom_slide_url']), 'wpzoom_slide_url' );
        if ( isset( $_POST['wpzoom_slide_button'] ) )
            update_custom_meta( $postID, esc_attr($_POST['wpzoom_slide_button']), 'wpzoom_slide_button' );
        
		/* Page Tagline for Widgets and Directory Template */
		if ( isset( $_POST['wpzoom_page_tagline'] ) )
            update_custom_meta( $postID, esc_attr($_POST['wpzoom_page_tagline']), 'wpzoom_page_tagline' );
            
		if (isset($_POST['saveDirList'])) {
			
			if (isset($_POST['wpzoom_dir_meta_align'])) { update_custom_meta($postID, $_POST['wpzoom_dir_meta_align'], 'wpzoom_dir_meta_align'); }
			
			if (ctype_digit($_POST['wpzoom_dir_meta_ppp'])) {
				update_custom_meta($postID, $_POST['wpzoom_dir_meta_ppp'], 'wpzoom_dir_meta_ppp');
			} else {
				update_custom_meta($postID, 9, 'wpzoom_dir_meta_ppp');
			}
			
			if (isset($_POST['wpzoom_dir_meta_ppr'])) { update_custom_meta($postID, $_POST['wpzoom_dir_meta_ppr'], 'wpzoom_dir_meta_ppr'); }
			update_custom_meta($postID, $_POST['wpzoom_dir_meta_excerpt'], 'wpzoom_dir_meta_excerpt');
			update_custom_meta($postID, $_POST['wpzoom_dir_meta_thumb'], 'wpzoom_dir_meta_thumb');
			update_custom_meta($postID, $_POST['wpzoom_dir_meta_sidebar'], 'wpzoom_dir_meta_sidebar');
		}
        
    }
}


function update_custom_meta( $postID, $value, $field ) {
    // To create new meta
    if ( ! get_post_meta( $postID, $field ) ) {
        add_post_meta( $postID, $field, $value );
    } else {
        // or to update existing meta
        update_post_meta( $postID, $field, $value );
    }
}