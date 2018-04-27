<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="container">

	<?php if ( option::is_on( 'display_top_left_block' ) || option::is_on( 'display_top_right_block' ) ) { ?>
	
	<div id="pre-header">
		<div class="wrapper clearfix">
			
			<?php if ( option::is_on( 'display_top_left_block' ) ) : ?>
			
			<div class="wpzoom-column wpzoom-column-1">
				<div class="widget">
					<p><span class="fa <?php echo esc_attr(option::get( 'header_top_left_icon' ) ); ?>"></span><strong><?php echo esc_attr(option::get( 'header_top_left_label' ) ); ?></strong> <?php echo esc_attr(option::get( 'header_top_left_content' ) ); ?></p>
				</div><!-- .widget -->
			</div><!-- .wpzoom-column .wpzoom-column-1 -->
			
			<?php endif; ?>
			
			<?php if ( option::is_on( 'display_top_right_block' ) ) : ?>
			
			<div class="wpzoom-column wpzoom-column-2">
				<div class="widget">
					<p><span class="fa <?php echo esc_attr(option::get( 'header_top_right_icon' ) ); ?>"></span><strong><?php echo esc_attr(option::get( 'header_top_right_label' ) ); ?></strong> <?php echo esc_attr(option::get( 'header_top_right_content' ) ); ?></p>
				</div><!-- .widget -->
			</div><!-- .wpzoom-column .wpzoom-column-1 -->
			
			<?php endif; ?>
			
		</div><!-- .wrapper -->
	</div><!-- #pre-header -->
	
	<?php } ?>
	
	<header class="header-site">
		<div class="wrapper wrapper-header clearfix">

			<div id="logo">

                <?php if ( ! medicus_has_logo() ) echo '<span class="site-title">'; ?>

                <a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'description' ); ?>">

                    <?php
                    if ( medicus_has_logo() ) {
                        medicus_logo();
                    } else {
                        bloginfo( 'name' );
                    }
                    ?>

                </a>

                <?php if ( ! medicus_has_logo() ) echo '</span>'; ?>

                <?php
                $hide_tagline = (int) get_theme_mod( 'hide-tagline', medicus_get_default( 'hide-tagline' ) );
                ?>
                <?php if ( ! get_theme_mod( 'hide-tagline' ) ) : ?>
                    <span class="site-tagline"><?php bloginfo( 'description' ); ?></span>
                <?php endif; ?>

			</div><!-- end #logo -->

			<nav class="main-navbar" role="navigation">

                <?php if ( has_nav_menu( 'primary' ) ) { ?>
                <div class="navbar-header">

					<a class="navbar-toggle" href="#menu-main-slide">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a><!-- .navbar-toggle -->
					
					<?php wp_nav_menu( array(
						'container_id'   => 'menu-main-slide',
						'theme_location' => 'primary'
					) ); 
					?>

                </div><!-- .navbar-header -->
                <?php } ?>

                <div id="navbar-main">

                    <?php if (has_nav_menu( 'primary' )) {
                    
						wp_nav_menu( array(
							'menu_class'     => 'nav navbar-nav dropdown sf-menu',
                            'theme_location' => 'primary',
                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                        ) );
                    } ?>

                </div><!-- #navbar-main -->

	        </nav><!-- .main-navbar -->

		</div><!-- .wrapper .wrapper-header .clearfix -->
	</header><!-- .header-site -->