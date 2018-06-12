<?php



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
            'sort_order' => 'ASC',
            'hierarchical' => 0,
            'parent' => $post->ID
        ));


    foreach( $children as $post ) {
        setup_postdata( $post );
        $string = '<div class="section-container">' . the_content() . '</div>';
    }
    return $string;
}

add_shortcode('wp_childpages', 'wp_list_child_pages');

?>