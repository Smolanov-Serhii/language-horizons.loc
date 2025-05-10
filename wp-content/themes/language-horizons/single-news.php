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
        <div class="main-wrapper">
            <section class="seo single-news__seo">
                <div class="seo__container main-container">
                    <?php
                    the_content();
                    ?>
                </div>
                <div class="single-news__share main-container">
                    <p><?php echo the_field('tekst_podelitsya', 'option') ?></p>
                    <?php echo do_shortcode('[addtoany url="' . get_the_permalink() . '" title="' . get_the_title() . '"]') ?>
                </div>
            </section>
            <section class="single-news">
                <div class="single-news__container main-container">
                    <div class="single-news__img">
                        <img src="<?php echo the_field('kartinka_v_shapku', $post_id) ?>" alt="<?php the_title();;?>">
                    </div>
                    <div class="single-news__content">
                        <h1 class="single-news__title section-title"><?php the_title();;?></h1>
                    </div>
                </div>
            </section>
        </div>
        <?php
        get_template_part( 'template-parts/content', 'news' );
        get_template_part( 'template-parts/content', 'contacts' );
        ?>

	</main>

<?php
get_footer();
