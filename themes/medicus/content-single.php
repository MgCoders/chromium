<article id="post-<?php the_ID(); ?>">

    <header class="entry-header">

        <div class="entry-meta">
            <?php if ( option::is_on( 'post_author' ) )   { printf( '<span class="entry-author">%s ', __( 'Written by', 'wpzoom' ) ); the_author_posts_link(); print('</span>'); } ?>
            <?php if ( option::is_on( 'post_date' ) )     : ?><span class="entry-date"><?php _e( 'on', 'wpzoom' ); ?> <?php printf( '<time class="entry-date" datetime="%1$s">%2$s</time> ', esc_attr( get_the_date( 'c' ) ), esc_html( get_the_date() ) ); ?></span> <?php endif; ?>
            <?php if ( option::is_on( 'post_category' ) ) : ?><span class="entry-category"><?php _e( 'in', 'wpzoom' ); ?> <?php the_category( ', ' ); ?></span><?php endif; ?>
            <?php edit_post_link( __( 'Edit', 'wpzoom' ), '<span class="edit-link">', '</span>' ); ?>
        </div><!-- .entry-meta -->

    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>

        <div class="clear"></div>

    </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->