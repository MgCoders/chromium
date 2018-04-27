<?php return array(


/* Theme Admin Menu */
"menu" => array(
    array("id"    => "1",
          "name"  => "General"),

    array("id"    => "2",
          "name"  => "Homepage"),


    array("id"    => "7",
          "name"  => "Banners"),
),

/* Theme Admin Options */
"id1" => array(
    array("type"  => "preheader",
          "name"  => "Theme Settings"),

    array("type" => "startsub",
           "name" => "Top Left Text Block"),

      array("name"  => "Display Top Left Text Block",
            "id"    => "display_top_left_block",
            "std"   => "on",
            "type"  => "checkbox"),

	array(
		"name"  => "Top Left Text Label",
		"desc"  => "Default: <strong>Schedule</strong>",
		"id"    => "header_top_left_label",
		"std"   => "Schedule:",
		"type"  => "text"),

	array(
		"name"  => "Top Left Text Content",
		"desc"  => "Default: <strong>Monday - Friday 09:00 - 17:00</strong>",
		"id"    => "header_top_left_content",
		"std"   => "Monday - Friday 09:00 - 17:00",
		"type"  => "text"),

	array(
		"name"  => "Font Awesome Icon Code",
		"desc"  => "Default: <strong>fa-clock-o</strong><br />View the full <a href=\"http://fortawesome.github.io/Font-Awesome/cheatsheet/\" target=\"_blank\">Font Awesome Icons Cheatsheet</a> for more icons.",
		"id"    => "header_top_left_icon",
		"std"   => "fa-clock-o",
		"type"  => "text"),

    array("type"  => "endsub"),

    array("type" => "startsub",
           "name" => "Top Right Text Block"),

      array("name"  => "Display Top Right Text Block",
            "id"    => "display_top_right_block",
            "std"   => "on",
            "type"  => "checkbox"),

	array(
		"name"  => "Top Right Text Label",
		"desc"  => "Default: <strong>For Appointments</strong>",
		"id"    => "header_top_right_label",
		"std"   => "For Appointments:",
		"type"  => "text"),

	array(
		"name"  => "Top Right Text Content",
		"desc"  => "Default: <strong>1-800-1234-5678</strong>",
		"id"    => "header_top_right_content",
		"std"   => "1-800-1234-5678",
		"type"  => "text"),

	array(
		"name"  => "Font Awesome Icon Code",
		"desc"  => "Default: <strong>fa-phone</strong><br />View the full <a href=\"http://fortawesome.github.io/Font-Awesome/cheatsheet/\" target=\"_blank\">Font Awesome Icons Cheatsheet</a> for more icons.",
		"id"    => "header_top_right_icon",
		"std"   => "fa-phone",
		"type"  => "text"),

    array("type"  => "endsub"),

    array("name"  => "Custom Feed URL",
          "desc"  => "Example: <strong>http://feeds.feedburner.com/wpzoom</strong>",
          "id"    => "misc_feedburner",
          "std"   => "",
          "type"  => "text"),

	array("name"  => "Enable comments for static pages",
          "id"    => "comments_page",
          "std"   => "off",
          "type"  => "checkbox"),

      array(
            "type" => "preheader",
            "name" => "Global Posts Options"
        ),

        array(
            "name" => "Excerpt length",
            "desc" => "Default: <strong>50</strong> (words)",
            "id" => "excerpt_length",
            "std" => "50",
            "type" => "text"
        ),


        array(
            "name" => "Display Featured Image",
            "id" => "display_thumb",
            "std" => "on",
            "type" => "checkbox"
        ),

        array(
            "name" => "Display Category",
            "id" => "display_category",
            "std" => "on",
            "type" => "checkbox"
        ),

        array(
            "name" => "Display Author",
            "id" => "display_author",
            "std" => "on",
            "type" => "checkbox"
        ),


        array(
            "name" => "Display Date/Time",
            "desc" => "<strong>Date/Time format</strong> can be changed <a href='options-general.php' target='_blank'>here</a>.",
            "id" => "display_date",
            "std" => "on",
            "type" => "checkbox"
        ),

        array(
            "name" => "Display Comments Count",
            "id" => "display_comments",
            "std" => "on",
            "type" => "checkbox"
        ),


        array(
            "name" => "Display Read More Button on All Posts",
            "id" => "display_more",
            "std" => "on",
            "type" => "checkbox"
        ),


        array(
            "type" => "preheader",
            "name" => "Single Post Options"
        ),

        array(
            "name" => "Display Author",
            "desc" => "You can edit your profile on this <a href='profile.php' target='_blank'>page</a>.",
            "id" => "post_author",
            "std" => "on",
            "type" => "checkbox"
        ),

        array(
            "name" => "Display Date/Time",
            "desc" => "<strong>Date/Time format</strong> can be changed <a href='options-general.php' target='_blank'>here</a>.",
            "id" => "post_date",
            "std" => "on",
            "type" => "checkbox"
        ),


        array(
            "name" => "Display Category",
            "id" => "post_category",
            "std" => "on",
            "type" => "checkbox"
        ),

        array(
            "name" => "Display Tags",
            "id" => "post_tags",
            "std" => "on",
            "type" => "checkbox"
        ),

        array(
            "name" => "Display Comments",
            "id" => "post_comments",
            "std" => "on",
            "type" => "checkbox"
        ),

    ),


"id2" => array(

    array("type"  => "preheader",
          "name"  => "Homepage Slideshow"),

    array("name"  => "Display Slideshow on homepage?",
          "desc"  => "Do you want to show a featured slider on the homepage? To add posts in slider just check the option <strong>Featured in Homepage Slider</strong> in the post.",
          "id"    => "featured_posts_show",
          "std"   => "on",
          "type"  => "checkbox"),

    array("name"  => "Content Source",
          "desc"  => "Select the type of content that should be displayed in the slider.",
          "options" => array('Posts', 'Pages'),
          "id"   => "featured_type",
          "std"   => "Posts",
          "type"  => "select"),

    array("name"  => "Autoplay Slideshow?",
          "desc"  => "Do you want to auto-scroll the slides?",
          "id"    => "slideshow_auto",
          "std"   => "on",
          "type"  => "checkbox",
          "js"    => true),

    array("name"  => "Slider Autoplay Interval",
          "desc"  => "Select the interval (in miliseconds) at which the Slider should change posts (<strong>if autoplay is enabled</strong>). Default: 3000 (3 seconds).",
          "id"    => "slideshow_speed",
          "std"   => "3000",
          "type"  => "text",
          "js"    => true),

    array("name"  => "Number of Posts in Slider",
          "desc"  => "How many posts should appear in  Slider on the homepage? Default: 5.",
          "id"    => "slideshow_posts",
          "std"   => "5",
          "type"  => "text"),

),


"id7" => array(

    array("type"  => "preheader",
          "name"  => "Sidebar Ad"),

    array("name"  => "Enable ad space in sidebar?",
          "id"    => "ad_side",
          "std"   => "off",
          "type"  => "checkbox"),

    array("name"  => "Ad Position",
          "desc"  => "Do you want to place the banner before the widgets or after the widgets?",
          "id"    => "ad_side_pos",
          "options" => array('Before widgets', 'After widgets'),
          "std"   => "Before widgets",
          "type"  => "select"),

    array("name"  => "HTML Code (Adsense)",
          "desc"  => "Enter complete HTML code for your banner (or Adsense code) or upload an image below.",
          "id"    => "ad_side_imgpath",
          "std"   => "",
          "type"  => "textarea"),

    array("name"  => "Upload your image",
          "desc"  => "Upload a banner image or enter the URL of an existing image.<br/>Recommended size: <strong>300 × 300px</strong>",
          "id"    => "banner_sidebar",
          "std"   => "",
          "type"  => "upload"),

    array("name"  => "Destination URL",
          "desc"  => "Enter the URL where this banner ad points to.",
          "id"    => "banner_sidebar_url",
          "type"  => "text"),

    array("name"  => "Banner Title",
          "desc"  => "Enter the title for this banner which will be used for ALT tag.",
          "id"    => "banner_sidebar_alt",
          "type"  => "text"),

)

/* end return */);