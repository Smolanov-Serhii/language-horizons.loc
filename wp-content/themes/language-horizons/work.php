<?php
/**
Template Name: Страница поиска учителей
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
                    </div>
                </div>
            </section>
            <section class="workpluses">
                <div class="workpluses__container main-container">
                    <div class="workpluses__title section-title">
                        <?php echo get_field('zagolovok_bloka_predlagaem', $post_id )?>
                    </div>
                    <?php
                    if( have_rows('predlozheniya', $post_id) ):
                        echo '<div class="workpluses__list">';
                        while( have_rows('predlozheniya', $post_id) ) : the_row();
                            $icon = get_sub_field('ikonka');
                            $title = get_sub_field('zagolovok');
                            $desc = get_sub_field('opisanie');
                            ?>
                            <div class="workpluses__item">
                                <div class="workpluses__item-img">
                                    <img src="<?php echo $icon;?>" alt="<?php echo $title;?>">
                                </div>
                                <h3 class="workpluses__item-title">
                                    <?php echo $title;?>
                                </h3>
                                <div class="workpluses__item-desc">
                                    <p><?php echo $desc;?></p>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        echo '</div>';
                    endif;
                    ?>
                </div>
            </section>
            <?php
//            get_template_part( 'template-parts/content', 'news' );
            get_template_part( 'template-parts/content', 'work' );
            ?>
        </div>
    </main>
<?php

get_footer();