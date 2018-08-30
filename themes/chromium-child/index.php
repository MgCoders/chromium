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

            <?php $my_query = new WP_Query('category_name=Home&showposts=1'); ?>
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <div class="row" style="margin-top: 5%;margin-bottom: 10%">
                <div class="col-5">
                    <?php  the_post_thumbnail(); ?>
                </div>
                <div class="col-1">

                </div>
                <div class="col-6">
                    <h3><?php the_title(); ?></h3>
                    <p class="text-justify">
                        <?php the_content(); ?>
                    </p>
                </div>
            </div>
            <?php endwhile; ?>




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
                                <source srcset=" <?php echo get_stylesheet_directory_uri(); ?>/img/partners/logo3.svg" type="image/svg+xml" >
                                <img src="'<?php echo get_stylesheet_directory_uri(); ?>'/img/partners/logo3.svg" class="img-fluid" alt="" style="height: 70px;width: auto; ">
                            </picture>
                        </div>
                        <div class="col-6">
                            <picture>
                                <source srcset=" <?php echo get_stylesheet_directory_uri(); ?>/img/partners/logo2.svg" type="image/svg+xml" >
                                <img src="'<?php echo get_stylesheet_directory_uri(); ?>'/img/partners/logo2.svg" class="img-fluid" alt="" style="height: 70px;width: auto; ">
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
                            <img src="'<?php echo get_stylesheet_directory_uri(); ?>'/img/partners/logo4.svg" class="img-fluid" alt="" style="height: 70px;width: auto; ">
                        </picture>
                    </div>
                    <div class="col-6">
                        <div class="row justify-content-center">
                            <div class="col-6 text-center">
                                <h6 class="letter-spacing-title text-bold margin-bottom-60">FINANCIA</h6>
                            </div>
                        </div>
                        <picture>
                            <source srcset=" <?php echo get_stylesheet_directory_uri(); ?>/img/partners/logo5.svg" type="image/svg+xml" >
                            <img src="'<?php echo get_stylesheet_directory_uri(); ?>'/img/partners/logo5.svg" class="img-fluid" alt="" style="  height: 40px;width: auto; ">
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


                        <div id="fcien" class="col-3">
                            <picture>
                                <source srcset=" <?php echo get_stylesheet_directory_uri(); ?>/img/partners/logo1.svg" type="image/svg+xml" >
                                <img src="'<?php echo get_stylesheet_directory_uri(); ?>'/img/partners/logo2.svg" class="img-fluid" alt="" style="height: 70px;width: auto; ">
                            </picture>
                            <div class="margin-top-5porc">
                                <p class=" margin-bottom-0">Dr. H&eacute;ctor Romero</p>
                                <p class=" margin-bottom-0"><small>Facultad de Ciencias | Udelar</small></p>
                            </div>
                        </div>
                        <div id="lund" class="col-3">
                            <picture>
                                <source srcset=" <?php echo get_stylesheet_directory_uri(); ?>/img/partners/logo6.svg" type="image/svg+xml" >
                                <img src="'<?php echo get_stylesheet_directory_uri(); ?>'/img/partners/logo6.svg" class="img-fluid" alt="" style="height: 70px;width: auto; ">
                            </picture>
                            <div class="margin-top-5porc">
                                <p class=" margin-bottom-0">Dr. Carlos Rovira</p>
                                <p class=" margin-bottom-0"><small>Univesidad de Lund | Suecia</small></p>
                            </div>
                        </div>


                        <div id="wisconsin" class="col-3">
                            <picture>
                                <source srcset=" <?php echo get_stylesheet_directory_uri(); ?>/img/partners/logo8.svg" type="image/svg+xml" >
                                <img src="'<?php echo get_stylesheet_directory_uri(); ?>'/img/partners/logo8.svg" class="img-fluid" alt="" style="height: 70px;width: auto; ">
                            </picture>
                            <div class="margin-top-5porc">
                                <p class=" margin-bottom-0">Dr. Daniel Gianola</p>
                                <p class=" margin-bottom-0"><small>Univesidad de Wisconsin | Madison</small></p>
                            </div>
                        </div>


                        <div id="humanidades" class="col-3">
                            <picture>
                                <source srcset=" <?php echo get_stylesheet_directory_uri(); ?>/img/partners/logo7.svg" type="image/svg+xml" >
                                <img src="'<?php echo get_stylesheet_directory_uri(); ?>'/img/partners/logo7.svg" class="img-fluid" alt="" style="height: 70px;width: auto; ">
                            </picture>
                            <div class="margin-top-5porc">
                                <p class=" margin-bottom-0">Dra. M&oacute;nica Sans</p>
                                <p class=" margin-bottom-0"><small>Facultad de Humanidades y</small></p>
                                <p><small>Ciencias de la Educaci&oacute;n | Udelar</small></p>
                            </div>
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
                        <div class="col-lg-4">
                            <p class=" margin-bottom-0">Dr. Hugo Naya | <small>Institut Pasteur de Montevideo</small></p>

                        </div><!-- /.col-lg-4 -->

                    </div>
                </div>
            </div>






        </div> <!-- .container -->
    </div>


<?php

get_footer();
