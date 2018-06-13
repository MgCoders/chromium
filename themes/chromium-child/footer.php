<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>

    <div id="pre-footer">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0">
                <div class="navbar-brand">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img id="logo-footer" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-min-blanco.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> ">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                    <?php endif; ?>

                </div>
                <div class="contact-info">
                    <span class="mail">info@urugenomes.org</span> <span class="sep"> |</span> <span class="tel">(+598) 2522 0910</span>
                </div>

                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'footer',
                    'container'       => 'div',
                    'container_id'    => 'footer-nav',
                    'container_class' => 'collapse navbar-collapse justify-content-end',
                    'menu_id'         => false,
                    'menu_class'      => 'navbar-nav',
                    'depth'           => 3,
                    'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                    'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

            </nav>
        </div>

    </div>

	<footer id="colophon" class="site-footer " role="contentinfo">

		<!--<div class="container pt-3 pb-3">
            <div class="site-info">
                &copy; <?php /*echo date('Y'); */?> <?php /*echo '<a href="'.home_url().'">Magnesium</a>'; */?>
                <span class="sep"> | </span>
                <a class="credits" href="http://magnesium.coop" target="_blank" title="Wordpress Technical Support" alt="Credits">magnesium.coop</a>

            </div><!-- close .site-info -->
		</div>
-->
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->



<?php wp_footer(); ?>


</body>
</html>