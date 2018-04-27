<?php

function medicus_option_defaults() {
    $defaults = array(
        /**
         * General
         */
        // Site Title & Tagline
        'hide-tagline'                        => 0,
        // Navbar
        'navbar-hide-search'                  => 0,
        // Logo
        'logo'                                => '',
        'logo-footer'                         => '',
        'logo-retina-ready'                   => 0,
        'logo-favicon'                        => 0,

        /**
         * Typography
         */
        // Body
        'font-family-site-body'               => 'Lato',
        'font-size-site-body'                 => 16,
        // Site Title & Tag Line
        'font-family-site-title'              => 'Lato',
        'font-size-site-title'                => 24,
        // Main Navigation
        'font-family-nav'                     => 'Lato',
        'font-size-nav'                       => 13,
        // Slider Title
        'font-family-slider-title'            => 'Lato',
        'font-size-slider-title'              => 32,
        // Widgets
        'font-family-widgets'                 => 'Open Sans Condensed',
        'font-size-widgets'                   => 18,
        // Single Post Title
        'font-family-single-post-title'       => 'Lato',
        'font-size-single-post-title'         => 32,

        /**
         * Color Scheme
         */
        // General
        'color-body-text'                     => '#444444',
        'color-logo'                          => '#ffffff',
        'color-link'                          => '#4893ba',
        'color-link-hover'                    => '#ce5762',
        'readmore-btn-background'             => '#278ec4',
        'readmore-btn-color'     	          => '#ffffff',
        // Menu
        'color-menu-background'               => '#2ca4e3',
		'color-menu-link'                     => '#ffffff',
        'color-menu-link-hover'               => '#b4d3e2',
        'color-menu-link-current'             => '#b4d3e2',
        // Widgets
        'color-widget-title'                  => '#151515',

        // Pre-Footer
		'prefooter-background-color'          => '#d53c4b',

        // Footer
		'footer-background-color'             => '#1e4061',
        'footer-color'          			  => '#d1d3d6',
        'footer-color-widget-title'           => '#ffffff',
		'color-footer-link'                   => '#ffffff',
        'color-footer-link-hover'             => '#f47857',

        /**
         * Footer
         */

        // Copyright
        'footer-text'                         => sprintf( __( 'Copyright &copy; %1$s %2$s', 'wpzoom' ), date( 'Y' ), get_bloginfo( 'name' ) ),
    );

    return $defaults;
}

function medicus_get_default( $option ) {
    $defaults = medicus_option_defaults();
    $default  = ( isset( $defaults[ $option ] ) ) ? $defaults[ $option ] : false;

    return $default;
}
