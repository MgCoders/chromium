<?php
/**
 * Template Name: The Project
 */


get_header(); ?>


    </div><!-- .row -->
    </div><!-- .container -->

    <div class="container-fluid bg-title-page margin-bottom-40">
        <div class="row justify-content-md-center align-items-center no-gutters padding-top-2 padding-bottom-2">
            <div class="col-2 limit-width">
                <picture>
                    <source  srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/02-the-project.svg" type="image/svg+xml" >
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/02-the-project.svg" class="img-fluid" alt="The project">
                </picture>
            </div>
            <div class="col-2">
                <h4 class="align-middle margin-bottom-0 "><? echo strtoupper(get_the_title()) ?></h4>
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

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

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
                            <h5 class="font-weight-bold margin-bottom-0">Estudios de ancestría en dos grupos étnicos de Uruguay</h5>
                        </div>
                    </div>
                </div>
                <div class="col-5 align-self-center">
                    <div class="arrow_box">
                        <p class="margin-bottom-0">
                            La primera fase del proyecto se centró en determinar y
                            caracterizar la variabilidad genética en dos grupos étnicos en
                            nuestro país: los descendientes indígenas y africanos.
                            Para determinar esto, se utilizó la secuenciación del
                            genoma completo.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row stage-detail">
                <div class="col-6 ">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h4>OBJETIVOS ESPECÍFICOS</h4>
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
                            <p class="margin-bottom-0">Secuenciar 10 individuos de cada grupo étnico, con un “coverage” esperado de 30x.</p>
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
                            <p class="margin-bottom-0">Realizar un análisis de variación en cada grupo y comparar los datos con los resultados de otros proyectos internacionales, como el “1000 genomes”.</p>
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
                            <p class="margin-bottom-0">Identificar los patrones de variabilidad genética de los
                                grupos y relacionarla con los datos históricos existentes y estudios antropológicos previos.</p>
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
                            <p class="margin-bottom-0">Comparar los resultados obtenidos en términos de
                                ancestría a través del estudio del genoma completo
                                con los resultados previos a partir de marcadores
                                mitocondriales y del cromosoma Y.</p>
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
                            <p class="margin-bottom-0">En el caso del grupo étnico descendientes de indígenas
                                se procurará la reconstrucción del mayor número posible de haplotipos a nivel genómico, procurando identificar aquellos que no hayan sido previamente reportados.</p>
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
                            <p class="margin-bottom-0">Desarrollo de una base de datos con la información genómica, accesible públicamente y una serie de herramientas para facilitar el análisis de la información contenida.</p>
                        </div>
                    </div>
                </div>
                <div class="col-5">

                    <div class="row">
                        <div class="col-12 text-center">
                            <h4 class="text-center">RESULTADOS ESPERADOS</h4>
                            <div class="underline_middle"></div>
                        </div>
                    </div>

                    <p class="text-justify" style="margin-top: 4%;">
                        Tener la caracterización de la variabilidad genética observada en ambos grupos étnicos y su
                        comparación con el conocimiento histórico y antropológico previo. También se espera
                        constribuir al conocimiento del proceso de mestizaje observado en nuestro país,
                        así como también reconstruir información genética no observada previamente en otros grupos
                        participantes del proyecto “1000 Genomes” u otros proyectos antropológicos relevantes.
                    </p>
                    <p class="text-justify">
                        Poder realizar una comparación de los resultados obtenidos con otras técnicas genéticas y sugerir un
                        conjunto de marcadores que podrían representar mejor la ancestría de los grupos considerados.
                    </p>
                    <p class="text-justify">
                        Desarrollar una base de datos para almacenar la información genómica ya procesada, al tiempo que se
                        desarrollarán una serie de herramientas para facilitar el análisis de la información por parte de
                        otros investigadores y la visualización de la misma por parte del público en general.
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
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/stage02.svg" class="img-fluid" alt="Etapa 1">
                            </picture>
                        </div>
                        <div class="col-6 align-self-center">
                            <h5 class="font-weight-bold margin-bottom-0">Estudios de ancestría en dos grupos étnicos de Uruguay</h5>
                        </div>
                    </div>
                </div>
                <div class="col-5 align-self-center">
                    <div class="arrow_box-white">
                        <p class="margin-bottom-0">
                            La primera fase del proyecto se centró en determinar y
                            caracterizar la variabilidad genética en dos grupos étnicos en
                            nuestro país: los descendientes indígenas y africanos.
                            Para determinar esto, se utilizó la secuenciación del
                            genoma completo.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row stage-detail">
                <div class="col-6 ">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h4>OBJETIVOS ESPECÍFICOS</h4>
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
                            <p class="margin-bottom-0">Secuenciar 10 individuos de cada grupo étnico, con un “coverage” esperado de 30x.</p>
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
                            <p class="margin-bottom-0">Realizar un análisis de variación en cada grupo y comparar los datos con los resultados de otros proyectos internacionales, como el “1000 genomes”.</p>
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
                            <p class="margin-bottom-0">Identificar los patrones de variabilidad genética de los
                                grupos y relacionarla con los datos históricos existentes y estudios antropológicos previos.</p>
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
                            <p class="margin-bottom-0">Comparar los resultados obtenidos en términos de
                                ancestría a través del estudio del genoma completo
                                con los resultados previos a partir de marcadores
                                mitocondriales y del cromosoma Y.</p>
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
                            <p class="margin-bottom-0">En el caso del grupo étnico descendientes de indígenas
                                se procurará la reconstrucción del mayor número posible de haplotipos a nivel genómico, procurando identificar aquellos que no hayan sido previamente reportados.</p>
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
                            <p class="margin-bottom-0">Desarrollo de una base de datos con la información genómica, accesible públicamente y una serie de herramientas para facilitar el análisis de la información contenida.</p>
                        </div>
                    </div>
                </div>
                <div class="col-5">

                    <div class="row">
                        <div class="col-12 text-center">
                            <h4 class="text-center">RESULTADOS ESPERADOS</h4>
                            <div class="underline_middle"></div>
                        </div>
                    </div>

                    <p class="text-justify" style="margin-top: 4%;">
                        Tener la caracterización de la variabilidad genética observada en ambos grupos étnicos y su
                        comparación con el conocimiento histórico y antropológico previo. También se espera
                        constribuir al conocimiento del proceso de mestizaje observado en nuestro país,
                        así como también reconstruir información genética no observada previamente en otros grupos
                        participantes del proyecto “1000 Genomes” u otros proyectos antropológicos relevantes.
                    </p>
                    <p class="text-justify">
                        Poder realizar una comparación de los resultados obtenidos con otras técnicas genéticas y sugerir un
                        conjunto de marcadores que podrían representar mejor la ancestría de los grupos considerados.
                    </p>
                    <p class="text-justify">
                        Desarrollar una base de datos para almacenar la información genómica ya procesada, al tiempo que se
                        desarrollarán una serie de herramientas para facilitar el análisis de la información por parte de
                        otros investigadores y la visualización de la misma por parte del público en general.
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
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/stages/stage03.svg" class="img-fluid" alt="Etapa 1">
                            </picture>
                        </div>
                        <div class="col-6 align-self-center">
                            <h5 class="font-weight-bold margin-bottom-0">Estudios de ancestría en dos grupos étnicos de Uruguay</h5>
                        </div>
                    </div>
                </div>
                <div class="col-5 align-self-center">
                    <div class="arrow_box">
                        <p class="margin-bottom-0">
                            La primera fase del proyecto se centró en determinar y
                            caracterizar la variabilidad genética en dos grupos étnicos en
                            nuestro país: los descendientes indígenas y africanos.
                            Para determinar esto, se utilizó la secuenciación del
                            genoma completo.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row stage-detail">
                <div class="col-6 ">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h4>OBJETIVOS ESPECÍFICOS</h4>
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
                            <p class="margin-bottom-0">Secuenciar 10 individuos de cada grupo étnico, con un “coverage” esperado de 30x.</p>
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
                            <p class="margin-bottom-0">Realizar un análisis de variación en cada grupo y comparar los datos con los resultados de otros proyectos internacionales, como el “1000 genomes”.</p>
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
                            <p class="margin-bottom-0">Identificar los patrones de variabilidad genética de los
                                grupos y relacionarla con los datos históricos existentes y estudios antropológicos previos.</p>
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
                            <p class="margin-bottom-0">Comparar los resultados obtenidos en términos de
                                ancestría a través del estudio del genoma completo
                                con los resultados previos a partir de marcadores
                                mitocondriales y del cromosoma Y.</p>
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
                            <p class="margin-bottom-0">En el caso del grupo étnico descendientes de indígenas
                                se procurará la reconstrucción del mayor número posible de haplotipos a nivel genómico, procurando identificar aquellos que no hayan sido previamente reportados.</p>
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
                            <p class="margin-bottom-0">Desarrollo de una base de datos con la información genómica, accesible públicamente y una serie de herramientas para facilitar el análisis de la información contenida.</p>
                        </div>
                    </div>
                </div>
                <div class="col-5">

                    <div class="row">
                        <div class="col-12 text-center">
                            <h4 class="text-center">RESULTADOS ESPERADOS</h4>
                            <div class="underline_middle"></div>
                        </div>
                    </div>

                    <p class="text-justify" style="margin-top: 4%;">
                        Tener la caracterización de la variabilidad genética observada en ambos grupos étnicos y su
                        comparación con el conocimiento histórico y antropológico previo. También se espera
                        constribuir al conocimiento del proceso de mestizaje observado en nuestro país,
                        así como también reconstruir información genética no observada previamente en otros grupos
                        participantes del proyecto “1000 Genomes” u otros proyectos antropológicos relevantes.
                    </p>
                    <p class="text-justify">
                        Poder realizar una comparación de los resultados obtenidos con otras técnicas genéticas y sugerir un
                        conjunto de marcadores que podrían representar mejor la ancestría de los grupos considerados.
                    </p>
                    <p class="text-justify">
                        Desarrollar una base de datos para almacenar la información genómica ya procesada, al tiempo que se
                        desarrollarán una serie de herramientas para facilitar el análisis de la información por parte de
                        otros investigadores y la visualización de la misma por parte del público en general.
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
