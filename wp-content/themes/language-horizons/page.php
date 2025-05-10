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
 * @package language_horizons
 */

get_header();
?>
	<main class="main">
        <?php
            get_template_part( 'template-parts/content', 'banner' );
            get_template_part( 'template-parts/content', 'why' );
            get_template_part( 'template-parts/content', 'need' );
            get_template_part( 'template-parts/content', 'price' );
            get_template_part( 'template-parts/content', 'text' );
            get_template_part( 'template-parts/content', 'reviews' );
            get_template_part( 'template-parts/content', 'process' );
        get_template_part( 'template-parts/content', 'news' );
            get_template_part( 'template-parts/content', 'faq' );
            get_template_part( 'template-parts/content', 'contacts' );
        ?>
	</main>
<?php
get_footer();
