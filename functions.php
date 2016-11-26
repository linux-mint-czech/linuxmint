<?php

if ( function_exists('register_sidebars') ) {
	register_sidebars(1,array(
		'name' => 'Left Sidebar',
		'id' => 'left_sidebar',
		'before_widget' => '<div class="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
        'after_title' => '</h5>',
	));
	
	register_sidebars(1,array(
		'name' => 'Right Sidebar',
		'id' => 'right_sidebar',
		'before_widget' => '<div class="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
        'after_title' => '</h5>',
	));
	
	register_sidebars(1, array(
		'name' => 'Menu under Header',
		'id' => 'header_menu',
		'before_widget' => '<div class="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5>',
        'after_title' => '</h5>',
	));
	

// Area 3, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'First Footer Widget Area', 'linuxmint' ),
		'id' => 'first-footer-widget-area',
		'description' => __( 'The first footer widget area', 'linuxmint' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 4, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Second Footer Widget Area', 'linuxmint' ),
		'id' => 'second-footer-widget-area',
		'description' => __( 'The second footer widget area', 'linuxmint' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 5, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Third Footer Widget Area', 'limuxmint' ),
		'id' => 'third-footer-widget-area',
		'description' => __( 'The third footer widget area', 'linuxmint' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}

/* Disable the Admin Bar. */
add_filter( 'show_admin_bar', '__return_false' );

function yoast_hide_admin_bar_settings() {
?>
	<style type="text/css">
		.show-admin-bar {
			display: none;
		}
	</style>
<?php
}

function yoast_disable_admin_bar() {
    add_filter( 'show_admin_bar', '__return_false' );
    add_action( 'admin_print_scripts-profile.php', 
         'yoast_hide_admin_bar_settings' );
}
add_action( 'init', 'yoast_disable_admin_bar' , 9 );



/* odstranění informace o verzi */
remove_action('wp_head', 'wp_generator');

// Remove WP version info
function hide_wp_vers()
{
    return '';
} // end hide_wp_vers function

add_filter('the_generator','hide_wp_vers');

/* zapíná xhtml režim */
/*function wps_set_content_type(){
    return "application/xhtml+xml";
}*/
//add_filter( 'option_html_type','wps_set_content_type' );


/* nastavuje vlastní title v administraci */
/*function my_admin_title($admin_title, $title)
{
    return htmlspecialchars(str_replace("&lsaquo","",$title)).' - '.get_bloginfo('name');
}
add_filter('admin_title', 'my_admin_title', 10, 2);*/

?>
