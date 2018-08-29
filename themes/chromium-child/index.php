<?php
/**
 * User: goja288
 * Date: 12/06/18
 * Time: 07:11 PM
 */

get_header();




    ?>

<script>
    scream();
</script>

    <?php echo main_menu_html(); ?>


    <section id="primary" class="content-area col-sm-12 col-md-12 ">
        <main id="main" class="site-main" role="main">

            <?php
            if ( have_posts() ) :

                if ( is_home() && ! is_front_page() ) : ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>

                <?php
                endif;

                /* Start the Loop */
                while ( have_posts() ) : the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'template-parts/content', get_post_format() );

                endwhile;

                the_posts_navigation();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif; ?>

        </main><!-- #main -->
    </section><!-- #primary -->


</div>
</div>

    <div class="container-fluid bg-grey padding-bottom-2 padding-top-2">

        <div class="container">

            <div class="row  justify-content-center">
                <div id="partners-top-left" class="col-6">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h6 class="letter-spacing-title text-bold margin-bottom-40">SOCIOS</h6>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-6">
                        <picture>
                            <source srcset=" <?php echo get_stylesheet_directory_uri(); ?>/img/partners/logo2.svg" type="image/svg+xml" >
                            <img src="'<?php echo get_stylesheet_directory_uri(); ?>'/img/partners/logo2.svg" class="img-fluid" alt="" style="height: 80px;width: auto; ">
                        </picture>

                    </div>
                    <div class="col-6">
                        <picture>
                            <source srcset=" <?php echo get_stylesheet_directory_uri(); ?>/img/partners/logo3.svg" type="image/svg+xml" >
                            <img src="'<?php echo get_stylesheet_directory_uri(); ?>'/img/partners/logo3.svg" class="img-fluid" alt="" style="height: 80px;width: auto; ">
                        </picture>
                    </div>
                    </div>
                </div>

                <div id="partners-top-right" class="col-6">



                    <div class="row">
                    <div class="col-6">
                        <div class="row  justify-content-center">
                            <div class="col-6 text-center">
                                <h6 class="letter-spacing-title text-bold margin-bottom-40">APOYA</h6>
                            </div>
                        </div>
                        <picture>
                            <source srcset=" <?php echo get_stylesheet_directory_uri(); ?>/img/partners/logo4.svg" type="image/svg+xml" >
                            <img src="'<?php echo get_stylesheet_directory_uri(); ?>'/img/partners/logo4.svg" class="img-fluid" alt="" style="height: 80px;width: auto; ">
                        </picture>
                    </div>
                    <div class="col-6">
                        <div class="row justify-content-center">
                            <div class="col-6 text-center">
                                <h6 class="letter-spacing-title text-bold margin-bottom-40">FINANCIA</h6>
                            </div>
                        </div>
                        <picture>
                            <source srcset=" <?php echo get_stylesheet_directory_uri(); ?>/img/partners/logo5.svg" type="image/svg+xml" >
                            <img src="'<?php echo get_stylesheet_directory_uri(); ?>'/img/partners/logo5.svg" class="img-fluid" alt="" style="height: 80px;width: auto; ">
                        </picture>
                    </div>
                    </div>
                    </div>
            </div>
            <div class="row margin-top-5porc  justify-content-center">
                <div id="partners-bottom" class="col-12">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h6 class="letter-spacing-title text-bold margin-bottom-40">SOCIOS ESTRAT&Eacute;GICOS</h6>
                        </div>
                    </div>
                    <div class="row  justify-content-center">
                        <div class="col-3">
                            <picture>
                                <source srcset=" <?php echo get_stylesheet_directory_uri(); ?>/img/partners/logo1.svg" type="image/svg+xml" >
                                <img src="'<?php echo get_stylesheet_directory_uri(); ?>'/img/partners/logo2.svg" class="img-fluid" alt="" style="height: 80px;width: auto; ">
                            </picture>

                        </div>

                        <div class="col-3">
                            <picture>
                                <source srcset=" <?php echo get_stylesheet_directory_uri(); ?>/img/partners/logo7.svg" type="image/svg+xml" >
                                <img src="'<?php echo get_stylesheet_directory_uri(); ?>'/img/partners/logo7.svg" class="img-fluid" alt="" style="height: 80px;width: auto; ">
                            </picture>
                        </div>

                        <div class="col-3">
                            <picture>
                                <source srcset=" <?php echo get_stylesheet_directory_uri(); ?>/img/partners/logo8.svg" type="image/svg+xml" >
                                <img src="'<?php echo get_stylesheet_directory_uri(); ?>'/img/partners/logo8.svg" class="img-fluid" alt="" style="height: 80px;width: auto; ">
                            </picture>
                        </div>
                        <div class="col-3">
                            <picture>
                                <source srcset=" <?php echo get_stylesheet_directory_uri(); ?>/img/partners/logo6.svg" type="image/svg+xml" >
                                <img src="'<?php echo get_stylesheet_directory_uri(); ?>'/img/partners/logo6.svg" class="img-fluid" alt="" style="height: 80px;width: auto; ">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margin-top-5porc  justify-content-center">
                <div id="partners-bottom" class="col-12">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h6 class="letter-spacing-title text-bold margin-bottom-40">COORDINADOR</h6>
                        </div>
                    </div>
                    <div class="row  justify-content-center">
                        <div class="col-3">
                            <picture>
                                <source srcset=" <?php echo get_stylesheet_directory_uri(); ?>/img/partners/logo1.svg" type="image/svg+xml" >
                                <img src="'<?php echo get_stylesheet_directory_uri(); ?>'/img/partners/logo2.svg" class="img-fluid" alt="" style="height: 80px;width: auto; ">
                            </picture>

                        </div>

                    </div>
                </div>
            </div>






        </div> <!-- .container -->
    </div>


<?php

get_footer();
