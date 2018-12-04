<?php
/**
 * Template Name: The Project
 */


get_header(); ?>


    </div><!-- .row -->
    </div><!-- .container -->

    <div class="container-fluid bg-title-page margin-bottom-40">
        <div class="row justify-content-sm-center align-items-center no-gutters padding-top-2 padding-bottom-2">
            <div class="col-2 limit-width">
                <picture>
                    <source  srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/02-the-project.svg" type="image/svg+xml" >
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/02-the-project.svg" class="img-fluid" alt="The project">
                </picture>
            </div>
            <div class=" col-4 col-sm-2">
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
        </div><!-- .row -->
    </div><!-- .container -->


    </div>


    <!-- stage 01 -->
    <div class="container-fluid stage-container">
        <div class="container">
            <div class="row">
                <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-6">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-4">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/stage01.svg" type="image/svg+xml">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/stage01.svg" class="img-fluid" alt="Etapa 1">
                            </picture>
                        </div>
                        <div class="col-6 align-self-center">
                            <h5 class="font-weight-bold margin-bottom-0"><? if (is_english()) echo get_field( "phase_1_title" ); else echo get_field( "titulo_etapa_1" ); ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-5 align-self-center">
                    <div class="arrow_box">
                        <p class="margin-bottom-0">
                            <? if (is_english()) echo get_field( "description_phase_1" ); else echo get_field( "descripcion_etapa_1"); ?>
                        </p>
                    </div>
                </div>
                <?php endwhile; // end of the loop. ?>
    </div>

            <div class="row stage-detail">
                <div class="col-6 ">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h4><? if (is_english()) echo "SPECIFIC OBJECTIVES"; else echo "OBJETIVOS ESPECÍFICOS"; ?></h4>
                            <div class="underline_middle"></div>
                        </div>
                    </div>
                    <div class="row more-space">

                        <div class="col-1"></div>
                        <div class="col-2">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/1dark.svg" type="image/svg+xml">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/1dark.svg" class="img-fluid" alt="01">
                            </picture>
                        </div>
                        <div class="col-9 align-self-center text-justify margin-left-neg-5">
                            <p class="margin-bottom-0"><? if (is_english()) echo get_field( "specific_objective_1_phase_1" ); else echo get_field( "objetivo_especifico_1_etapa_1"); ?></p>
                        </div>
                    </div>
                    <div class="row more-space">
                        <div class="col-1"></div>
                        <div class="col-2">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/2dark.svg" type="image/svg+xml">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/2dark.svg" class="img-fluid" alt="02">
                            </picture>
                        </div>
                        <div class="col-9 align-self-center text-justify margin-left-neg-5">
                            <p class="margin-bottom-0"><? if (is_english()) echo get_field( "specific_objective_2_phase_1" ); else echo get_field( "objetivo_especifico_2_etapa_1"); ?></p>
                        </div>
                    </div>
                    <div class="row more-space">
                        <div class="col-1"></div>
                        <div class="col-2">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/3dark.svg" type="image/svg+xml">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/3dark.svg" class="img-fluid" alt="03">
                            </picture>
                        </div>
                        <div class="col-9 align-self-center text-justify margin-left-neg-5">
                            <p class="margin-bottom-0"><? if (is_english()) echo get_field( "specific_objective_3_phase_1" ); else echo get_field( "objetivo_especifico_3_etapa_1"); ?></p>
                        </div>
                    </div>
                    <div class="row more-space">
                        <div class="col-1"></div>
                        <div class="col-2">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/4dark.svg" type="image/svg+xml">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/4dark.svg" class="img-fluid" alt="04">
                            </picture>
                        </div>
                        <div class="col-9 align-self-center text-justify margin-left-neg-5">
                            <p class="margin-bottom-0"><? if (is_english()) echo get_field( "specific_objective_4_phase_1" ); else echo get_field( "objetivo_especifico_4_etapa_1"); ?></p>
                        </div>
                    </div>
                    <div class="row more-space">
                        <div class="col-1"></div>
                        <div class="col-2">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/5dark.svg" type="image/svg+xml">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/5dark.svg" class="img-fluid" alt="05">
                            </picture>
                        </div>
                        <div class="col-9 align-self-center text-justify margin-left-neg-5">
                            <p class="margin-bottom-0"><? if (is_english()) echo get_field( "specific_objective_5_phase_1" ); else echo get_field( "objetivo_especifico_5_etapa_1"); ?></p>
                        </div>
                    </div>
                    <div class="row more-space">
                        <div class="col-1"></div>
                        <div class="col-2">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/6dark.svg" type="image/svg+xml">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/6dark.svg" class="img-fluid" alt="06">
                            </picture>
                        </div>
                        <div class="col-9 align-self-center text-justify margin-left-neg-5">
                            <p class="margin-bottom-0"><? if (is_english()) echo get_field( "specific_objective_6_phase_1" ); else echo get_field( "objetivo_especifico_6_etapa_1"); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h4 class="text-center"><? if (is_english()) echo "EXPECTED RESULTS"; else echo "RESULTADOS ESPERADOS"; ?></h4>
                            <div class="underline_middle"></div>
                        </div>
                    </div>

                    <p class="text-justify" style="margin-top: 4%;">
                        <? if (is_english()) echo get_field( "expected_results_1_phase_1" ); else echo get_field( "resultados_esperados_1_etapa_1"); ?>
                    </p>
                    <p class="text-justify">
                        <? if (is_english()) echo get_field( "expected_results_2_phase_1" ); else echo get_field( "resultados_esperados_2_etapa_1"); ?>
                    </p>
                    <p class="text-justify">
                        <? if (is_english()) echo get_field( "expected_results_3_phase_1" ); else echo get_field( "resultados_esperados_3_etapa_1"); ?>
                    </p>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col text-center arrow-dark">
                <a href="#stage2" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>
            </div>
        </div>



    </div>
    <!-- end stage 01 -->


    <!-- stage 02 -->
    <div id="stage2" class="container-fluid stage-container-dark">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-4">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/stage02.svg" type="image/svg+xml">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/stage02.svg" class="img-fluid" alt="Etapa 2">
                            </picture>
                        </div>
                        <div class="col-6 align-self-center">
                            <h5 class="font-weight-bold margin-bottom-0"><? if (is_english()) echo get_field( "phase_2_title" ); else echo get_field( "titulo_etapa_2" ); ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-5 align-self-center">
                    <div class="arrow_box-white">
                        <p class="margin-bottom-0">
                            <? if (is_english()) echo get_field( "description_phase_2" ); else echo get_field( "descripcion_etapa_2"); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row stage-detail">
                <div class="col-6 ">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h4><? if (is_english()) echo "SPECIFIC OBJECTIVES"; else echo "OBJETIVOS ESPECÍFICOS"; ?></h4>
                            <div class="underline_middle"></div>
                        </div>
                    </div>
                    <div class="row more-space">

                        <div class="col-1"></div>
                        <div class="col-2">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/1.svg" type="image/svg+xml">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/1.svg" class="img-fluid" alt="01">
                            </picture>
                        </div>
                        <div class="col-9 align-self-center text-justify margin-left-neg-5">
                            <p class="margin-bottom-0"><? if (is_english()) echo get_field( "specific_objective_1_phase_2" ); else echo get_field( "objetivo_especifico_1_etapa_2"); ?></p>
                        </div>
                    </div>
                    <div class="row more-space">
                        <div class="col-1"></div>
                        <div class="col-2">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/2.svg" type="image/svg+xml">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/2.svg" class="img-fluid" alt="02">
                            </picture>
                        </div>
                        <div class="col-9 align-self-center text-justify margin-left-neg-5">
                            <p class="margin-bottom-0"><? if (is_english()) echo get_field( "specific_objective_2_phase_2" ); else echo get_field( "objetivo_especifico_2_etapa_2"); ?></p>
                        </div>
                    </div>
                    <div class="row more-space">
                        <div class="col-1"></div>
                        <div class="col-2">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/3.svg" type="image/svg+xml">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/3.svg" class="img-fluid" alt="03">
                            </picture>
                        </div>
                        <div class="col-9 align-self-center text-justify margin-left-neg-5">
                            <p class="margin-bottom-0"><? if (is_english()) echo get_field( "specific_objective_3_phase_2" ); else echo get_field( "objetivo_especifico_3_etapa_2"); ?></p>
                        </div>
                    </div>
                    <div class="row more-space">
                        <div class="col-1"></div>
                        <div class="col-2">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/4.svg" type="image/svg+xml">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/4.svg" class="img-fluid" alt="04">
                            </picture>
                        </div>
                        <div class="col-9 align-self-center text-justify margin-left-neg-5">
                            <p class="margin-bottom-0"><? if (is_english()) echo get_field( "specific_objective_4_phase_2" ); else echo get_field( "objetivo_especifico_4_etapa_2"); ?></p>
                        </div>
                    </div>
                    <div class="row more-space">
                        <div class="col-1"></div>
                        <div class="col-2">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/5.svg" type="image/svg+xml">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/5.svg" class="img-fluid" alt="05">
                            </picture>
                        </div>
                        <div class="col-9 align-self-center text-justify margin-left-neg-5">
                            <p class="margin-bottom-0"><? if (is_english()) echo get_field( "specific_objective_5_phase_2" ); else echo get_field( "objetivo_especifico_5_etapa_2"); ?></p>
                        </div>
                    </div>
                    <div class="row more-space">
                        <div class="col-1"></div>
                        <div class="col-2">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/6.svg" type="image/svg+xml">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/6.svg" class="img-fluid" alt="06">
                            </picture>
                        </div>
                        <div class="col-9 align-self-center text-justify margin-left-neg-5">
                            <p class="margin-bottom-0"><? if (is_english()) echo get_field( "specific_objective_6_phase_2" ); else echo get_field( "objetivo_especifico_6_etapa_2"); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-5">

                    <div class="row">
                        <div class="col-12 text-center">
                            <h4 class="text-center"><? if (is_english()) echo "EXPECTED RESULTS"; else echo "RESULTADOS ESPERADOS"; ?></h4>
                            <div class="underline_middle"></div>
                        </div>
                    </div>

                    <p class="text-justify" style="margin-top: 4%;">
                        <? if (is_english()) echo get_field( "expected_results_1_phase_2" ); else echo get_field( "resultados_esperados_1_etapa_2"); ?>
                    </p>
                    <p class="text-justify">
                        <? if (is_english()) echo get_field( "expected_results_2_phase_2" ); else echo get_field( "resultados_esperados_2_etapa_2"); ?>
                    </p>
                    <p class="text-justify">
                        <? if (is_english()) echo get_field( "expected_results_3_phase_2" ); else echo get_field( "resultados_esperados_3_etapa_2"); ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col text-center arrow-white">
                <a href="#stage3" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>
            </div>
        </div>
    </div>

    <!-- end stage 02 -->


    <!-- stage 03 -->
    <div id="stage3" class="container-fluid stage-container">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-4">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/stage03.svg" type="image/svg+xml">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/stage03.svg" class="img-fluid" alt="Etapa 3">
                            </picture>
                        </div>
                        <div class="col-6 align-self-center">
                            <h5 class="font-weight-bold margin-bottom-0"><? if (is_english()) echo get_field( "phase_3_title" ); else echo get_field( "titulo_etapa_3" ); ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-5 align-self-center">
                    <div class="arrow_box">
                        <p class="margin-bottom-0">
                            <? if (is_english()) echo get_field( "description_phase_3" ); else echo get_field( "descripcion_etapa_3"); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row stage-detail">
                <div class="col-6 ">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h4><? if (is_english()) echo "SPECIFIC OBJECTIVES"; else echo "OBJETIVOS ESPECÍFICOS"; ?></h4>
                            <div class="underline_middle"></div>
                        </div>
                    </div>
                    <div class="row more-space">

                        <div class="col-1"></div>
                        <div class="col-2">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/1dark.svg" type="image/svg+xml">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/1dark.svg" class="img-fluid" alt="01">
                            </picture>
                        </div>
                        <div class="col-9 align-self-center text-justify margin-left-neg-5">
                            <p class="margin-bottom-0"><? if (is_english()) echo get_field( "specific_objective_1_phase_3" ); else echo get_field( "objetivo_especifico_1_etapa_3"); ?></p>
                        </div>
                    </div>
                    <div class="row more-space">
                        <div class="col-1"></div>
                        <div class="col-2">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/2dark.svg" type="image/svg+xml">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/2dark.svg" class="img-fluid" alt="02">
                            </picture>
                        </div>
                        <div class="col-9 align-self-center text-justify margin-left-neg-5">
                            <p class="margin-bottom-0"><? if (is_english()) echo get_field( "specific_objective_2_phase_3" ); else echo get_field( "objetivo_especifico_2_etapa_3"); ?></p>
                        </div>
                    </div>
                    <div class="row more-space">
                        <div class="col-1"></div>
                        <div class="col-2">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/3dark.svg" type="image/svg+xml">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/3dark.svg" class="img-fluid" alt="03">
                            </picture>
                        </div>
                        <div class="col-9 align-self-center text-justify margin-left-neg-5">
                            <p class="margin-bottom-0"><? if (is_english()) echo get_field( "specific_objective_3_phase_3" ); else echo get_field( "objetivo_especifico_3_etapa_3"); ?></p>
                        </div>
                    </div>
                    <div class="row more-space">
                        <div class="col-1"></div>
                        <div class="col-2">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/4dark.svg" type="image/svg+xml">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/4dark.svg" class="img-fluid" alt="04">
                            </picture>
                        </div>
                        <div class="col-9 align-self-center text-justify margin-left-neg-5">
                            <p class="margin-bottom-0"><? if (is_english()) echo get_field( "specific_objective_4_phase_3" ); else echo get_field( "objetivo_especifico_4_etapa_3"); ?></p>
                        </div>
                    </div>
                    <div class="row more-space">
                        <div class="col-1"></div>
                        <div class="col-2">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/5dark.svg" type="image/svg+xml">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/5dark.svg" class="img-fluid" alt="05">
                            </picture>
                        </div>
                        <div class="col-9 align-self-center text-justify margin-left-neg-5">
                            <p class="margin-bottom-0"><? if (is_english()) echo get_field( "specific_objective_5_phase_3" ); else echo get_field( "objetivo_especifico_5_etapa_3"); ?></p>
                        </div>
                    </div>
                    <div class="row more-space">
                        <div class="col-1"></div>
                        <div class="col-2">
                            <picture>
                                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/6dark.svg" type="image/svg+xml">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/numbers/6dark.svg" class="img-fluid" alt="06">
                            </picture>
                        </div>
                        <div class="col-9 align-self-center text-justify margin-left-neg-5">
                            <p class="margin-bottom-0"><? if (is_english()) echo get_field( "specific_objective_6_phase_3" ); else echo get_field( "objetivo_especifico_6_etapa_3"); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-5">

                    <div class="row">
                        <div class="col-12 text-center">
                            <h4 class="text-center"><? if (is_english()) echo "EXPECTED RESULTS"; else echo "RESULTADOS ESPERADOS"; ?></h4>
                            <div class="underline_middle"></div>
                        </div>
                    </div>

                    <p class="text-justify" style="margin-top: 4%;">
                        <? if (is_english()) echo get_field( "expected_results_1_phase_3" ); else echo get_field( "resultados_esperados_1_etapa_3"); ?>
                    </p>
                    <p class="text-justify">
                        <? if (is_english()) echo get_field( "expected_results_2_phase_3" ); else echo get_field( "resultados_esperados_2_etapa_3"); ?>
                    </p>
                    <p class="text-justify">
                        <? if (is_english()) echo get_field( "expected_results_3_phase_3" ); else echo get_field( "resultados_esperados_3_etapa_3"); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-right arrow-dark">
                <a href="#masthead" class="page-scroller"><i class="fa fa-fw fa-angle-up"></i></a>
            </div>
        </div>
    </div>
    <!-- end stage 03 -->

<?php
get_footer();
