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

        $header = '<div class="entry-header">' . the_title('<h1 class="entry-title">', '</h1><div class="underline"></div>' ) . '</div><!-- .entry-header -->';


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


?>