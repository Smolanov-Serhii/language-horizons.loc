<?php
/**
Template Name: Страница предложения
 */

$post_id = get_the_ID();
$data = get_field('zagolovok_v_baner', $post_id );
get_header();
?>
    <main class="main">
        <div class="main-wrapper">
            <section class="seo">
                <div class="seo__container main-container">
                    <?php
                    the_content();
                    ?>
                </div>
            </section>
            <section class="single-offer">
                <div class="single-offer__container main-container">
                    <div class="single-offer__img">
                        <img src="<?php echo get_field('kartinka_v_baner', $post_id )?>" alt="<?php echo wp_filter_nohtml_kses( $data );?>">
                    </div>
                    <div class="single-offer__content">
                        <h1 class="single-offer__title section-title"><?php echo get_field('zagolovok_v_baner', $post_id )?></h1>
                        <div class="single-offer__desc">
                            <p><?php echo get_field('podzagolovok_v_baner', $post_id )?></p>
                        </div>
                        <div class="single-offer__unprice">
                            <?php echo get_field('nadpis_czena', $post_id )?>
                        </div>
                        <div class="single-offer__price">
                            <?php echo get_field('czena', $post_id )?>
                        </div>
                        <div class="banner__btn">
                            <div class="button js-form">
                                <span><?php the_field('nadpis_na_knopke', 2 )?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            get_template_part( 'template-parts/content', 'text' );
//            get_template_part( 'template-parts/content', 'news' );
            get_template_part( 'template-parts/content', 'contacts' );
            ?>
        </div>
    </main>
<?php

get_footer();