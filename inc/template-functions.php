<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package zizy-theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function zizy_theme_body_classes($classes)
{
	// Adds a class of hfeed to non-singular pages.
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter('body_class', 'zizy_theme_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function zizy_theme_pingback_header()
{
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'zizy_theme_pingback_header');

/**
 * Add a custom sidebar
 */
function mytheme_widgets_init() {
    register_sidebar( array(
		'name'          => __( 'My Custom Widget', 'text_domain' ),
        'id'            => 'my_custom_widget',
        'description'   => __( 'Custom widget for the sidebar-1 area', 'text_domain' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'mytheme_widgets_init' );

function my_search_form_placeholder($form)
{
	$form = str_replace('type="search"', 'type="search" placeholder="Tìm kiếm ở đây nè ~~~"', $form);
	$form = str_replace( '<input type="submit" class="search-submit">', '', $form );
	$form = str_replace( '</input>', '', $form );
	$form = str_replace( 'search-form', 'search-form my-custom-class', $form );
	return $form;
}
add_filter('get_search_form', 'my_search_form_placeholder');


// Add widget recent post
include get_template_directory() . '/template-parts/recent-posts-widget.php';