<?php
$post_id = get_the_ID();
?>
<section class="banner">
    <div class="banner__container">
        <div class="banner__text">
            <h1 class="banner__title"><?php the_field('zagolovok_v_baner', $post_id )?></h1>
            <div class="banner__desc">
                <?php the_field('opisanie_v_baner', $post_id )?>
            </div>
            <div class="banner__btn">
                <div class="button">
                    <span><?php the_field('nadpis_na_knopke', $post_id )?></span>
                </div>
            </div>
        </div>
        <div class="banner__img">
            <img src="<?php echo the_field('kartinka_v_banner', $post_id) ?>" alt="<?php the_field('zagolovok_v_baner', $post_id )?>">
        </div>
    </div>
</section>