<?php

function medicus_customizer_define_color_scheme_sections( $sections ) {
    $colors_sections = array();

    $colors_sections['color'] = array(
        'title'   => __( 'Colors', 'wpzoom' ),
        'priority' => 1150,
        'options' => array(
            /**
             * General
             */

            'color-body-text' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Body Text', 'wpzoom' ),
                ),
            ),

            'color-logo' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Logo', 'wpzoom' ),
                ),
            ),

            'color-link' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Link', 'wpzoom' ),
                ),
            ),

            'color-link-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Link Hover', 'wpzoom' ),
                ),
            ),

            'readmore-btn-background' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Read More Button Background', 'wpzoom' ),
                ),
            ),

            'readmore-btn-color' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Read More Button Color', 'wpzoom' ),
                ),
            ),

            /**
             * Menu
             */

            'color-menu-background' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Header Background', 'wpzoom' ),
                ),
            ),

            'color-menu-link' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Menu Item', 'wpzoom' ),
                ),
            ),

            'color-menu-link-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Menu Item Hover', 'wpzoom' ),
                ),
            ),

            'color-menu-link-current' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Menu Current Item', 'wpzoom' ),
                ),
            ),


            /**
             * Widgets
             */

            'color-widget-title' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Widget Title', 'wpzoom' ),
                ),
            ),


            /**
             * Footer
             */

            'prefooter-background-color' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Footer (Full-width Area) Sidebar Background Color', 'wpzoom' ),
                ),
            ),

            'footer-background-color' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Footer Background Color', 'wpzoom' ),
                ),
            ),

            'footer-color' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Footer Text Color', 'wpzoom' ),
                ),
            ),
            
            'footer-color-widget-title' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Footer Widget Title', 'wpzoom' ),
                ),
            ),

            'color-footer-link' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Footer Menu Link', 'wpzoom' ),
                ),
            ),

            'color-footer-link-hover' => array(
                'setting' => array(
                    'sanitize_callback' => 'maybe_hash_hex_color',
                ),
                'control' => array(
                    'control_type' => 'WP_Customize_Color_Control',
                    'label'        => __( 'Footer Menu Link Hover', 'wpzoom' ),
                ),
            ),

        )
    );

    return array_merge( $sections, $colors_sections );
}

add_filter( 'zoom_customizer_sections', 'medicus_customizer_define_color_scheme_sections' );
