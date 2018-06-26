<?php
/**
 * User: goja288
 * Date: 12/06/18
 * Time: 07:11 PM
 */

get_header();

echo 'hola';



    ?>

<script>
    scream();
</script>




            <div class="container">
                <div class="row-menu-home">
                <div class="row  justify-content-md-center text-center ">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <a href="<?php echo get_home_url() ?>/nosotros">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/01-about-us.svg" type="image/svg+xml" >
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/01-about-us.svg" class="img-fluid" alt="Nosotros">
                        </picture>
                        <div class="menu-home-text ">NOSOTROS</div>
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <a href="<?php echo get_home_url() ?>/el-proyecto">
                        <picture>
                            <source  srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/02-the-project.svg" type="image/svg+xml" >
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/02-the-project.svg" class="img-fluid" alt="El proyecto">
                        </picture>
                            <div class="menu-home-text  ">EL PROYECTO</div>
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <a href="<?php echo get_home_url() ?>/publicaciones">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/03-publications.svg" type="image/svg+xml" >
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/03-publications.svg" class="img-fluid" alt="Publicaciones" >
                        </picture>
                            <div class="menu-home-text ">PUBLICACIONES</div>
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <a href="<?php echo get_home_url() ?>/prensa">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/04-press.svg" type="image/svg+xml" >
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/04-press.svg" class="img-fluid" alt="Prensa">
                        </picture>
                            <div class="menu-home-text  ">PRENSA</div>
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-12">
                        <a href="<?php echo get_home_url() ?>/base-de-datos">
                        <picture>
                            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/05-databases.svg" type="image/svg+xml" >
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/05-databases.svg" class="img-fluid" alt="Bases de datos">
                        </picture>
                            <div class="menu-home-text ">DATABASES</div>
                        </a>
                    </div>
                </div>
                </div>
            </div>
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

<?php

get_footer();
