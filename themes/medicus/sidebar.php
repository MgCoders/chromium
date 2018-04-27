<?php
/**
 * The sidebar.
 */
?>

<?php if (option::get('ad_side') == 'on' && option::get('ad_side_pos') == 'Before widgets') { ?>
    <div class="adv_side">

        <?php if ( option::get('ad_side_imgpath') <> "") {
            echo stripslashes(option::get('ad_side_imgpath'));
        } else { ?>
            <a href="<?php echo option::get('banner_sidebar_url'); ?>"><img src="<?php echo option::get('banner_sidebar'); ?>" alt="<?php echo option::get('banner_sidebar_alt'); ?>" /></a>
        <?php } ?>

    </div><!-- /.banner -->
<?php } ?>

<?php if (is_active_sidebar('sidebar-main')) { ?>
	<?php
	if ( !dynamic_sidebar('sidebar-main') ) : ?> <?php endif;
	?>
<?php } ?>

<?php if (option::get('ad_side') == 'on' && option::get('ad_side_pos') == 'After widgets') { ?>
    <div class="adv_side">

        <?php if ( option::get('ad_side_imgpath') <> "") {
            echo stripslashes(option::get('ad_side_imgpath'));
        } else { ?>
            <a href="<?php echo option::get('banner_sidebar_url'); ?>"><img src="<?php echo option::get('banner_sidebar'); ?>" alt="<?php echo option::get('banner_sidebar_alt'); ?>" /></a>
        <?php } ?>

    </div><!-- /.banner -->
<?php } ?>

<div class="clear">&nbsp;</div>