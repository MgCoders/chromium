<?php
/**
 * The template used for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>">

    <header class="entry-header">

        <div class="entry-meta">
            <?php edit_post_link( __( 'Edit', 'wpzoom' ), '<span class="edit-link">', '</span>' ); ?>
        </div><!-- .entry-meta -->

    </header><!-- .entry-header -->


    <div class="entry-content">
        <?php the_content(); ?>

        <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'wpzoom' ),
                'after'  => '</div>',
            ) );
        ?>

        <div class="clear"></div>

    </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->