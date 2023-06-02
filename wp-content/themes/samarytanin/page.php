<?php
/**
 * The template for displaying all pages
 * Template Name: Podstawowy szablon
 *
 * @package samarytanin
 */

get_header(); ?>

	<main id="primary" class="site-main">
		<?php
			the_content();
		?>

	</main>

<?php
get_footer();
