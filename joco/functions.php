<?php

//
//  Custom Child Theme Functions
//

// I've included a "commented out" sample function below that'll add a home link to your menu
// More ideas can be found on "A Guide To Customizing The Thematic Theme Framework" 
// http://themeshaper.com/thematic-for-wordpress/guide-customizing-thematic-theme-framework/

// Adds a home link to your menu
// http://codex.wordpress.org/Template_Tags/wp_page_menu
//function childtheme_menu_args($args) {
//    $args = array(
//        'show_home' => 'Home',
//        'sort_column' => 'menu_order',
//        'menu_class' => 'menu',
//        'echo' => true
//    );
//	return $args;
//}
//add_filter('wp_page_menu_args','childtheme_menu_args');

// Unleash the power of Thematic's dynamic classes
// 
// define('THEMATIC_COMPATIBLE_BODY_CLASS', true);
// define('THEMATIC_COMPATIBLE_POST_CLASS', true);

// Unleash the power of Thematic's comment form
//
// define('THEMATIC_COMPATIBLE_COMMENT_FORM', true);

// Unleash the power of Thematic's feed link functions
//
define('THEMATIC_COMPATIBLE_FEEDLINKS', true);

// This will create your widget area
function my_widgets_init() {
	
	    register_sidebar(array(
       	'name' => 'Special Announcement',
       	'id' => 'special-announcement',
       	'before_widget' => '<li id="%1$s" class="widgetcontainer %2$s">',
       	'after_widget' => "",
		'before_title' => "<h3 class=\"widgettitle\">",
		'after_title' => "</h3>\n",
    ));

}
add_action( 'init', 'my_widgets_init' );


// adding the widget area to your child theme
function my_aboveheader_widgets() {
if ( function_exists('dynamic_sidebar') && is_active_sidebar('special-announcement') ) {
    echo '<div id="special-announcement">'. "\n" . '<ul class="xoxo">' . "\n";
    dynamic_sidebar('special-announcement');
    echo '' . "\n" . '</div><!-- #special-announcement -->'. "\n";
}
}
add_action('thematic_aboveheader', 'my_aboveheader_widgets', 8);

function remove_menu() {
    remove_action('thematic_header','thematic_access',9);
}
add_action('init', 'remove_menu');

function my_doctitle($doctitle) {
   return array_merge($doctitle, array('suffix' => '| JoCo Cruise Crazy'));
}
add_filter('thematic_doctitle','my_doctitle');

?>