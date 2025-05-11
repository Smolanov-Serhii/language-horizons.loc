<?php
/**
Template Name: Страница новостей архив
 */

$post_id = get_the_ID();
get_header();
?>
    <main class="main">
        <div class="main-wrapper">
            <section class="news-page">
                <h1 class="news-page__title section-title">
                    <?php echo the_field('zagolovok_straniczy', 262) ?>
                </h1>
                <div class="news-page__filter main-container">
                    <?php echo do_shortcode( '[searchandfilter id="543"]' ); ?>
                </div>
                <div class="news-page__result">
                    <div class="main-container ">
                        <div class="news-page__list" id="result">
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
                                    ?>
                                    <div class="news-page__item">
                                        <div class="news__slide-img" title="<?php the_title();?>">
                                            <a href="<?php the_permalink();?>">
                                                <?php the_post_thumbnail( 'news-image-prev' );;?>
                                            </a>
                                        </div>
                                        <div class="news-page__item-content">
                                            <div class="news-page__item-date">
                                                <?php the_date('d F y');?>
                                            </div>
                                            <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                                                <h2 class="news-page__item-title">
                                                    <?php the_title();?>
                                                </h2>
                                            </a>
                                            <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                                                <div class="news-page__item-desc">
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
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

<?php

get_footer();