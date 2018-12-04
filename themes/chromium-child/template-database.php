<?php

/**
 * Template Name: Database
 */

get_header(); ?>


    </div><!-- .row -->
    </div><!-- .container -->


    <div class="container-fluid bg-title-page margin-bottom-40">
        <div class="row justify-content-md-center align-items-center no-gutters padding-top-2 padding-bottom-2">
            <div class="col-2 limit-width">
                <picture>
                    <source  srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/05-databases.svg" type="image/svg+xml" >
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/05-databases.svg" class="img-fluid" alt="Database">
                </picture>
            </div>
            <div class="col-2">
                <h4 class="align-middle margin-bottom-0 "><?php echo strtoupper(get_the_title()) ?></h4>
            </div>

        </div>

    </div>

    <div class="container">

        <div class="row">

            <section id="primary" class="content-area col-sm-12">
                <main id="main" class="site-main" role="main">



            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content-notitle', 'page' );

            endwhile; // End of the loop.
            ?>

            </main><!-- #main -->
            </section><!-- #primary -->



<?php
get_footer();
