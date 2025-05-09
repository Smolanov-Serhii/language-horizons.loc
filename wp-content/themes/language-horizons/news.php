<?php
/**
Template Name: Страница новостей
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
            <section class="news">
                <div class="portfolio-all__filter">
                    <?php echo do_shortcode( '[searchandfilter id="111"]' ); ?>
                </div>
                <div class="portfolio-all__result" id="result">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'posts_per_page' => 12,
                        'order' 	 => 'DESC',
                        'post_type' 	 => 'portfolio',
                        'search_filter_id' => 111,
                        'orderby' => "menu_order",
                        'paged'	         => $paged
                    );

                    $MY_QUERY = new WP_Query( $args );
                    $counter = 1;
                    $pair = 1;
                    $paitrigger = false;
                    $trigger = false;
                    if ( $MY_QUERY->have_posts() ) :
                        while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post();
                            $img = get_field('kartinka_dlya_bloka');
                            $imgmob = get_field('kartinka_v_popap_mobajl');
                            $imgpc = get_field('kartinka_v_popap_pk');
                            $videopc = get_field('video_v_popap_pk');
                            $videomob = get_field('video_v_popap_mobajl');
                            if ($counter == 1){
                                $trigger = false;
                                ?>
                                <div class='or__group'>
                                <?php
                            };
                        if ($pair == 1){
                            $paitrigger = true;
                            ?>
                            <div class='or__pair <?php echo 'pair' . $counter;?>'>
                            <?php
                        };
                            ?>
                            <div class="or__item <?php echo 'or__item-div' . $counter;?>">
                                <?php
                                if (wp_is_mobile()){
                                    if ($videomob){
                                        ?>
                                        <div class="or__item-full video-popup-file" data-video="<?php echo $videomob?>"></div>
                                        <?php
                                    } else {
                                        ?>
                                        <div class="or__item-full fresco" href="<?php echo $imgmob?>"></div>
                                        <?php
                                    }
                                } else {
                                    if ($videopc){
                                        ?>
                                        <div class="or__item-full video-popup-file" data-video="<?php echo $videopc?>"></div>
                                        <?php
                                    } else {
                                        ?>
                                        <div class="or__item-full fresco" href="<?php echo $imgpc?>"></div>
                                        <?php
                                    }
                                }
                                ?>

                                <div class="or__item-img">
                                    <img src="<?php echo $img?>" alt="<?php echo the_title()?>">
                                </div>
                                <h3 class="or__item-title">
                                    <?php echo the_title()?>
                                </h3>
                                <!--                                <span class="or__item-lnk" href="--><?php //echo the_permalink();?><!--" title="--><?php //echo the_title()?><!--">See examples</span>-->
                            </div>
                            <?php
                        if ($pair == 2){
                            $paitrigger = false;
                            ?>
                            </div>
                            <?php
                            $pair = 0;
                        };
                            if ($counter == 6) {
                                $counter = 0;
                                $trigger = true;
                                ?>
                                </div>
                                <?php
                            }
                            $counter ++;
                            $pair++;
                        endwhile;
                        if ($paitrigger == true){
                            echo '</div>';
                        }
                        if ($trigger == false){
                            echo '</div>';
                        }
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