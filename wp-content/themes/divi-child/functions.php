<?php
function my_theme_enqueue_styles() {

    $parent_style = 'Divi-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( 'Divi', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'Divi' ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function wptuts_scripts_with_jquery()
{
    wp_register_script( 'child-custom', get_template_directory_uri() . '/js/child-custom.js', array( 'jquery' ) , true );
    wp_enqueue_script( 'child-custom' );
}
add_action( 'wp_enqueue_scripts', 'wptuts_scripts_with_jquery' );



add_action( 'admin_head', 'add_my_admin_styles' );
function add_my_admin_styles() {
	echo '<style>.et_pb_page_layout_settings { display: block!important;}</style>';
};

/**
 *	This will hide the Divi "Project" post type.
 *	Thanks to georgiee (https://gist.github.com/EngageWP/062edef103469b1177bc#gistcomment-1801080) for his improved solution.
 */
add_filter( 'et_project_posttype_args', 'mytheme_et_project_posttype_args', 10, 1 );
function mytheme_et_project_posttype_args( $args ) {
	return array_merge( $args, array(
		'public'              => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => false,
		'show_in_nav_menus'   => false,
		'show_ui'             => false
	));
}
?>
