<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zizy-theme
 */

get_header();
?>

<main id="primary" class="site-main">
	<!-- <div class="cover-image-container w-100 pb-5">
		<div id="cover-image" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/cover-img.jpg' ?>');"></div>
	</div> -->
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
