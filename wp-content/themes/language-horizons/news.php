<?php
/**
Template Name: Страница новостей
 */

$post_id = get_the_ID();
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
            <section class="news-page">
                <h1 class="news-page__title">
                   <?php the_title();?>
                </h1>
                <div class="portfolio-all__filter">
                    <?php echo do_shortcode( '[searchandfilter id="543"]' ); ?>
                </div>
                <div class="news-page__result" id="result">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'posts_per_page' => 12,
                        'order' 	 => 'DESC',
                        'post_type' 	 => 'news',
                        'search_filter_id' => 543,
                        'orderby' => "menu_order",
                        'paged'	         => $paged
                    );

                    $MY_QUERY = new WP_Query( $args );
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post();
                            $img = get_field('kartinka_dlya_bloka');
                            $imgmob = get_field('kartinka_v_popap_mobajl');
                            $imgpc = get_field('kartinka_v_popap_pk');
                            $videopc = get_field('video_v_popap_pk');
                            $videomob = get_field('video_v_popap_mobajl');
                            ?>
                            <div class="news__slide">
                                <div class="news__slide-img" title="<?php the_title();?>">
                                    <a href="<?php the_permalink();?>">
                                        <?php the_post_thumbnail( 'news-image-prev' );;?>
                                    </a>
                                </div>
                                <div class="news__slide-content">
                                    <div class="news__slide-date">
                                        <?php the_date('d F y');?>
                                    </div>
                                    <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                                        <h3 class="news__slide-title">
                                            <?php the_title();?>
                                        </h3>
                                    </a>
                                    <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                                        <div class="news__slide-desc">
                                            <?php the_excerpt();?>
                                        </div>
                                    </a>

                                </div>
                            </div>
                            <?php
                        endwhile;;
                    endif;
                    ?>
                    <div class="pagination">
                        <?php
                        $GLOBALS['wp_query']->max_num_pages = $MY_QUERY->max_num_pages;
                        the_posts_pagination(array(
                            'type'=>'inline',
                            'screen_reader_text' => __( '' ),
                            'end_size'     => 1,
                            'mid_size'     => 1,
                            'prev_next'    => True,
                            'prev_text'    => __('<'),
                            'next_text'    => __('>'),
                            'add_args'     => False
                        ));
                        ?>
                    </div>
                    <?php
                    wp_reset_postdata();
                    ?>
                    <div class="or__buttons">
                        <a href="<?php echo get_permalink('16') ?>" class="button button__blue">
                                <span>
                                    See plans
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.3555 2.84079L0.721197 2.83867L0.720703 0.128906L16.9812 0.131871L16.9842 16.3924L14.2744 16.3919L14.2723 4.75752L3.09032 15.9395L1.17359 14.0227L12.3555 2.84079Z" fill="white"/>
                                    </svg>
                                </span>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>
<?php

get_footer();