<?php
$post_id = get_the_ID();
?>
<section class="news">
    <div class="news__container main-container">
        <h2 class="news__title section-title"><?php the_field('zagolovok_bloka_novosti', 204 )?></h2>
        <div class="news__swiper swiper">
            <div class="news__wrapper  swiper-wrapper">
                <?php
                $result = wp_get_recent_posts( [
                    'numberposts'      => 12,
                    'offset'           => 0,
                    'category'         => 0,
                    'orderby' => 'rand',
                    'order'    => 'ASC',
                    'include'          => '',
                    'exclude'          => '',
                    'meta_key'         => '',
                    'meta_value'       => '',
                    'post_type'        => 'news',
                    'post_status'      => 'publish',
                    'suppress_filters' => true,
                ], OBJECT );
                foreach( $result as $post ){
                    ?>
                    <div class="news__slide swiper-slide">
                        <div class="news__slide-img">
                            <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                                <?php the_post_thumbnail( 'news-image-prev' );;?>
                            </a>
                        </div>
                        <div class="news__slide-content">
                            <div class="news__slide-date">
                                <?php echo get_the_date('d F y');?>
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
                }
                wp_reset_postdata();
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>