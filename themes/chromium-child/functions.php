<?php

if ( ! function_exists( 'chromium_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function chromium_setup() {


        register_nav_menus( array(
            'footer' => esc_html__( 'Footer', 'wp-bootstrap-starter' ),
        ));

        register_nav_menus( array(
            'home' => esc_html__( 'Home','wp-boostrap-starter' ),
        ));




    }
endif;
add_action( 'after_setup_theme', 'chromium_setup' );


function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function theme_enqueue_styles() {

    wp_enqueue_style( 'magnesium-style' , get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'chromium-child'  ,
       // get_template_directory_uri().'/css/bootstrap.min.css', // @FIXME por que tengo que incluirlo asi, si esta en el padre
        get_stylesheet_directory_uri() . '/style.css',
        array('magnesium-style'));



}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function my_custom_script_load(){
    wp_enqueue_script( 'my-custom-script', get_stylesheet_directory_uri() . '/custom.js', array ( 'jquery' ), 1.1, true);

//    wp_enqueue_script( 'my-custom-script', get_stylesheet_directory_uri() . '/custom-scripts', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'my_custom_script_load' );


        // Llamo
        add_action( 'wp_footer', function() { ?>
            <script>
                ( function( $ ) {
                    'use strict';
                    $( document ).on( 'ready', function() {
                            console.log(">>> ready <<<");
//                            scream()
                    } );
                } ( jQuery ) );
            </script>
        <?php } );


function callit() {
            ?>
<script> scream(); </script>
        <?php
}
add_action( 'test','callit');

function wp_list_child_pages() {

  /*  global $post;
    if ( is_page() && $post->post_parent ) {
        $childpages = wp_list_pages('sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0');
    }
    else {
        $childpages = wp_list_pages('sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0');
    }
    if ( $childpages ) {
        $string = '<div>' . $childpages->post_content . '</div>';
    }
    return $string;
*/

    global $post;
    $children = get_pages(
        array(
            'sort_column' => 'menu_order',
            'sort_order' => 'asc',
            'hierarchical' => 0,
            'parent' => $post->ID
        ));


    foreach( $children as $post ) {
        setup_postdata( $post );


        $header = '';
        if (strtoupper(get_the_title()) != 'EQUIPO') {

            $header = '<div class="entry-header">' . the_title('<h1 class="entry-title">', '</h1><div class="underline"></div>') . '</div><!-- .entry-header -->';
        }


 
        $string = $header . '<div class="section-container">' . the_content() . '</div>';
    }
    return $string;
}

add_shortcode('wp_childpages', 'wp_list_child_pages');

/**
 * !!!! TODO hacerlo bien con widget y que se pueda modifcar desde el admin
 */
function wp_print_objetivos() {

    $obj = '<div class="row  justify-content-md-center margin-top-40">
            <div class="col-2">
                <div class="ribbon"><span class="msg-ribbon">MEJORAR</span></div>
            </div>
            <div class="col-1">
            </div>
            <div class="col-2">
                <div class="ribbon"><span class="msg-ribbon">PRODUCIR</span></div>
            </div>
            <div class="col-1">
            </div>
            <div class="col-2">
                <div class="ribbon"><span class="msg-ribbon">PROMOVER</span></div>
            </div>
        </div>

        <div class="row  justify-content-md-center">
            <div class="col-3">
                <div class="small text-justify">el nivel de capacitación de los investigadores que trabajan en genómica en Uruguay, a través de la creación de un programa con Corea del Sur.</div>
            </div>
            <div class="col-3">
                <div class="small text-justify">avances científicos y técnicos en la secuenciación y análisis de genomas humanos en Uruguay.</div>
            </div>
            <div class="col-3">
                <div class="small text-justify">la creación de empresas y laboratorios que puedan exportar servicios en el campo de la genómica.</div>
            </div>
        </div>



        <div class="row justify-content-md-center margin-top-40">
            <div class="col-2">
                <div class="ribbon"><span class="msg-ribbon">INCENTIVAR</span></div>
            </div>
            <div class="col-1">
            </div>
            <div class="col-2">
                <div class="ribbon"><span class="msg-ribbon">DIFUNDIR</span></div>
                </div>

            </div>
        </div>

        <div class="row justify-content-md-center">
            <div class="col-3">
                <div class="small text-justify">la integración en el campo de la genómica con América Latina.</div>
            </div>
            <div class="col-3">
                <div class="small text-justify">los avances de la investigación genómica humana a comunidades científicas y académicas, relacionadas con el sector farmacéutico y social.
                </div>

            </div>
        </div>';

    return $obj;
}
add_shortcode('wp_objetivos', 'wp_print_objetivos');

function wp_print_team() {

    $start_esc = '</div><!-- .row --></div><!-- .container --> </div>'  ;


    $row1 = ' <div class="container-fluid team-container  ">
    <div class="container text-center  margin-bottom-40">
        <div class="entry-header text-left "><h1 class="entry-title text-white">Equipo</h1><div class="underline" style="border-bottom: 2px solid #FFFFFF;"></div></div>
        <div class="row"><div class="col-12 text-center"><h6 class="text-white letter-spacing-title text-bold margin-bottom-40">COORDINACIÓN</h6></div> </div>

        <div class="row">
            <div class="col-lg-3">
                <img class="margin-bottom-20" src="' .  get_stylesheet_directory_uri() . '/img/team/01b.png" alt="Image Hugo" width="120" height="120">
                <p class="small text-bold  margin-bottom-0">COORDINADOR GENERAL</p>
                <p class="text-bold margin-bottom-0">Dr. Hugo Naya</p>
                <p class="small">Institut Pasteur de Montevideo</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img  class="margin-bottom-20" src="' . get_stylesheet_directory_uri() . '/img/team/02b.png" alt="Image Lucia" width="120" height="120">
                <p class="small text-bold margin-bottom-0">RESPONSABLE TÉCNICA</p>
                <p class="text-bold margin-bottom-0">Dra. Lucía Spangenberg</p>
                <p class="small">Institut Pasteur de Montevideo</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img class="margin-bottom-20" src="'.  get_stylesheet_directory_uri() . '/img/team/03b.png" alt="Image Monica" width="120" height="120">
                <p class="small text-bold  margin-bottom-0">CO-RESPONSABLE FASES I Y II</p>
                <p class="text-bold margin-bottom-0">Dra. Mónica Sans</p>
                <p class="small margin-bottom-0">Facultad de Humanidades y</p>
                <p class="small">Ciencias de la Educación | Udelar</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img class="small margin-bottom-20" src="' .  get_stylesheet_directory_uri() . '/img/team/04b.png" alt="Generic placeholder image" width="120" height="120">
                <p class="small text-bold  margin-bottom-0">CO-RESPONSABLE FASE III</p>
                <p class="text-bold margin-bottom-0">Dr.(MD) Víctor Raggio</p>
                <p class="small">Facultad de Medicina | Udelar</p>
            </div><!-- /.col-lg-4 -->
        </div>
    </div>';


    $row2 = '<div class="container text-center  margin-bottom-40">

            <div class="row"><div class="col-12 text-center"><h6 class="text-white letter-spacing-title  text-bold  margin-bottom-40">INVESTIGADORES ASOCIADOS</h6></div> </div>

            <div class="row justify-content-md-center">
                <div class="col-lg-3">
                    <p class="small text-bold margin-bottom-0">Dra. María Inés Fariello</p>
                    <p class="small">Facultad de Ingeniería | Udelar</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3">
                    <p class="small text-bold margin-bottom-0">Dra. Luisa Berná</p>
                    <p class="small">Institut Pasteur de Montevideo</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3">
                    <p class="small text-bold margin-bottom-0">MSc. Natalia Rego</p>
                    <p class="small">Institut Pasteur de Montevideo</p>
                </div><!-- /.col-lg-4 -->
            </div>

            <div class="row justify-content-md-center ">
                <div class="col-lg-3">
                    <p class="small text-bold margin-bottom-0">Dr. Héctor Romero</p>
                    <p class="small">Facultad de Ciencias | Udelar</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3">
                    <p class="small text-bold margin-bottom-0">MSc. Diego Simón</p>
                    <p class="small">Facultad de Ciencias | Udelar</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3">
                    <p class="small text-bold margin-bottom-0">Dr.(MD) Nicolás Dell\'Oca</p>
                    <p class="small">Facultad de Medicina | Udelar</p>
                </div><!-- /.col-lg-4 -->
            </div>

        </div>';


    $row3 = ' <div class="container text-center">

            <div class="row">
                <div class="col-12 text-center"><h6 class="text-white letter-spacing-title  text-bold  margin-bottom-40">ADMINISTRACIÓN Y EJECUCIÓN FINANCIERA</h6></div>
            </div>

            <div class="row">
                <div class="col-12">
                    <p class="small text-bold margin-bottom-0">Cr. Juan Pablo Texo</p>
                    <p class="small">Institut Pasteur de Montevideo</p>
                </div><!-- /.col-lg-4 -->
            </div>
        </div>';
    $end_esc = '<div><div><div>';






    return $start_esc . $row1 .  $row2 . $row3 . $end_esc;
}
add_shortcode('wp_team', 'wp_print_team');


?>