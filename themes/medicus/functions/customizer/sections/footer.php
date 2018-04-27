<?php

function medicus_customizer_define_footer_sections( $sections ) {
    $panel           = WPZOOM::$theme_raw_name . '_footer';
    $footer_sections = array();

    $theme_prefix = WPZOOM::$theme_raw_name . '_';

    $footer_sections['footer'] = array(
        'title'   => __( 'Footer', 'wpzoom' ),
        'options' => array(

            'footer-text' => array(
                'setting' => array(
                    'sanitize_callback' => 'medicus_sanitize_text',
                ),
                'control' => array(
                    'label'             => __( 'Footer Text', 'wpzoom' ),
                    'type'              => 'text',
                ),
            ),

        )
    );

    return array_merge( $sections, $footer_sections );
}

add_filter( 'zoom_customizer_sections', 'medicus_customizer_define_footer_sections' );
