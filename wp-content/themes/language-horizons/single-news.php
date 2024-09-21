<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package language_horizons
 */

$post_id = get_the_ID();

get_header();
?>

	<main class="main">
        <div class="single-news">
            <div class="single-news__img">
                <?php the_post_thumbnail( 'full' );;?>
                <h1 class="single-news__title"><?php the_title();;?></h1>
            </div>
            <div class="main__container main-container">
                <?php
                the_content();
                ?>
                <div class="single-news__share">
                    <p>Share this content, choose your platform!</p>
                    <?php echo do_shortcode('[addtoany url="' . get_the_permalink() . '" title="' . get_the_title() . '"]') ?>
                </div>
            </div>

        </div>

	</main>

<?php
get_footer();
