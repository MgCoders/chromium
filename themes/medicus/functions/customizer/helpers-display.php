<?php

/**
 * Process user options to generate CSS needed to implement the choices.
 *
 * This function reads in the options from theme mods and determines whether a CSS rule is needed to implement an
 * option. CSS is only written for choices that are non-default in order to avoid adding unnecessary CSS. All options
 * are also filterable allowing for more precise control via a child theme or plugin.
 *
 * Note that all CSS for options is present in this function except for the CSS for fonts and the logo, which require
 * a lot more code to implement.
 *
 * @return void
 */
function medicus_css_add_rules() {
    /**
     * Colors section
     */
    medicus_css_add_simple_color_rule( 'color-body-text', 'body', 'color' );

    medicus_css_add_simple_color_rule( 'color-logo', '.navbar-brand a, .navbar-brand a:hover', 'color' );
    medicus_css_add_simple_color_rule( 'color-link', 'a', 'color' );
    medicus_css_add_simple_color_rule( 'color-link-hover', 'a:hover', 'color' );
    medicus_css_add_simple_color_rule( 'readmore-btn-background', '.read-more-span .read-more-anchor', 'background-color' );
    medicus_css_add_simple_color_rule( 'readmore-btn-color', '.read-more-span .read-more-anchor', 'color' );

    // Menu
    medicus_css_add_simple_color_rule( 'color-menu-background', '.header-site', 'background-color' );
	medicus_css_add_simple_color_rule( 'color-menu-link', '.navbar-nav a', 'color' );
    medicus_css_add_simple_color_rule( 'color-menu-link-hover', '.navbar-nav a:hover', 'color' );
    medicus_css_add_simple_color_rule( 'color-menu-link-current', '.navbar-nav .current-menu-item a, .navbar-nav .current_page_item a, .navbar-nav .current-menu-parent a', 'color' );

    // Widgets
    medicus_css_add_simple_color_rule( 'color-widget-title', '#content .title-widget', 'color' );

    // Pre-Footer
	medicus_css_add_simple_color_rule( 'prefooter-background-color', '#pre-footer', 'background-color' );

    // Footer
	medicus_css_add_simple_color_rule( 'footer-background-color', '.site-footer', 'background-color' );
    medicus_css_add_simple_color_rule( 'footer-color', '.site-footer', 'color' );
	medicus_css_add_simple_color_rule( 'footer-color-widget-title', '.site-footer .title-widget', 'color' );
	medicus_css_add_simple_color_rule( 'color-footer-link', '.site-footer a', 'color' );
    medicus_css_add_simple_color_rule( 'color-footer-link-hover', '.site-footer a:hover, .site-footer a:focus', 'color' );


    /**
     * Footer Background
     */
    medicus_css_add_simple_color_rule( 'footer-background-color', '.site-footer', 'background-color' );

}

add_action( 'medicus_css', 'medicus_css_add_rules' );

function medicus_css_add_simple_color_rule( $setting_id, $selectors, $declarations ) {
    $value = maybe_hash_hex_color( get_theme_mod( $setting_id, medicus_get_default( $setting_id ) ) );

    if ( $value === medicus_get_default( $setting_id ) ) {
        return;
    }

    if ( strtolower( $value ) === strtolower( medicus_get_default( $setting_id ) ) ) {
        return;
    }

    if ( is_string( $selectors ) ) {
        $selectors = array( $selectors );
    }

    if ( is_string( $declarations ) ) {
        $declarations = array(
            $declarations => $value
        );
    }

    medicus_get_css()->add( array(
        'selectors'    => $selectors,
        'declarations' => $declarations
    ) );
}
