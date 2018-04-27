<?php
/*-----------------------------------------------------------------------------------*/
/* Initializing Widgetized Areas (Sidebars)				 							 */
/*-----------------------------------------------------------------------------------*/

register_sidebar(array('name'=>'Sidebar',
   'id' => 'sidebar-main',
   'before_widget' => '<div class="widget %2$s" id="%1$s">',
   'after_widget' => '<div class="clear"></div></div>',
   'before_title'  => '<p class="title-widget">',
   'after_title'   => '</p>',
));


/*----------------------------------*/
/* Homepage widgetized areas		*/
/*----------------------------------*/

register_sidebar(array('name'=>'Homepage: Full Width Top',
    'description' => 'Homepage Full Width widgetized area below the slider.',
    'id' => 'home_content_full_1',
    'before_widget' => '<div class="widget %2$s" id="%1$s">',
    'after_widget' => '<div class="clear"></div></div>',
    'before_title'  => '<p class="title-widget">',
    'after_title'   => '</p>',
));

register_sidebar(array('name'=>'Homepage: Column 1',
    'description' => 'Homepage widgetized area (column 1). The widget title will be wrapped in a H1 tag.',
    'id' => 'home_content_col_1',
    'before_widget' => '<div class="widget %2$s" id="%1$s">',
    'after_widget' => '<div class="clear"></div></div>',
    'before_title'  => '<h1 class="title-home">',
    'after_title'   => '</h1>',
));

register_sidebar(array('name'=>'Homepage: Column 2',
    'description' => 'Homepage widgetized area (column 2)',
    'id' => 'home_content_col_2',
    'before_widget' => '<div class="widget %2$s" id="%1$s">',
    'after_widget' => '<div class="clear"></div></div>',
    'before_title'  => '<p class="title-widget">',
    'after_title'   => '</p>',
));

register_sidebar(array('name'=>'Homepage: Column 3',
    'description' => 'Homepage widgetized area (column 3)',
    'id' => 'home_content_col_3',
    'before_widget' => '<div class="widget %2$s" id="%1$s">',
    'after_widget' => '<div class="clear"></div></div>',
    'before_title'  => '<p class="title-widget">',
    'after_title'   => '</p>',
));

register_sidebar(array('name'=>'Homepage: Full Width Bottom',
    'description' => 'Homepage Full Width widgetized area below the 3 columns.',
    'id' => 'home_content_full_2',
    'before_widget' => '<div class="widget %2$s" id="%1$s">',
    'after_widget' => '<div class="clear"></div></div>',
    'before_title'  => '<p class="title-widget">',
    'after_title'   => '</p>',
));

register_sidebar(array('name'=>'Homepage: Content Area',
    'description' => 'Homepage widgetized area next to the main sidebar.',
    'id' => 'home_content',
    'before_widget' => '<div class="widget %2$s" id="%1$s">',
    'after_widget' => '<div class="clear"></div></div>',
    'before_title'  => '<p class="title-widget">',
    'after_title'   => '</p>',
));

/*----------------------------------*/
/* Footer widgetized areas		    */
/*----------------------------------*/

register_sidebar(array('name'=>'Footer (Full-width Area)',
    'description' => 'Full Width widgetized area.',
    'id' => 'footer_full',
    'before_widget' => '<div class="widget %2$s" id="%1$s">',
    'after_widget' => '<div class="clear"></div></div>',
    'before_title'  => '<p class="title-widget">',
    'after_title'   => '</p>',
));

register_sidebar( array(
    'name'          => 'Footer: Column 1',
    'id'            => 'footer_1',
    'before_widget' => '<div class="widget %2$s" id="%1$s">',
    'after_widget'  => '<div class="clear"></div></div>',
    'before_title'  => '<p class="title-widget">',
    'after_title'   => '</p>',
) );

register_sidebar( array(
    'name'          => 'Footer: Column 2',
    'id'            => 'footer_2',
    'before_widget' => '<div class="widget %2$s" id="%1$s">',
    'after_widget'  => '<div class="clear"></div></div>',
    'before_title'  => '<p class="title-widget">',
    'after_title'   => '</p>',
) );

register_sidebar( array(
    'name'          => 'Footer: Column 3',
    'id'            => 'footer_3',
    'before_widget' => '<div class="widget %2$s" id="%1$s">',
    'after_widget'  => '<div class="clear"></div></div>',
    'before_title'  => '<p class="title-widget">',
    'after_title'   => '</p>',
) );

register_sidebar( array(
    'name'          => 'Footer: Column 4',
    'id'            => 'footer_4',
    'before_widget' => '<div class="widget %2$s" id="%1$s">',
    'after_widget'  => '<div class="clear"></div></div>',
    'before_title'  => '<p class="title-widget">',
    'after_title'   => '</p>',
) );
