<?php
$post_id = get_the_ID();
?>
<section class="process" id="process">
    <div class="process__container main-container">
        <div class="process__text">
            <h2 class="process__title section-title"><?php the_field('zagolovok_bloka_kak_prohodyat', $post_id )?></h2>
            <div class="process__desc">
                <?php the_field('opisanie_bloka_kak_prohodyat', $post_id )?>
            </div>
            <div class="process__btn">
                <div class="button js-form">
                    <span><?php the_field('nadpis_na_knopke_kak_prohodyat', $post_id )?></span>
                </div>
            </div>
        </div>
        <div class="process__img">
            <img src="<?php echo the_field('kartinka_bloka_kak_prohodyat', $post_id) ?>" alt="<?php the_field('zagolovok_bloka_kak_prohodyat', $post_id )?>">
        </div>
    </div>
</section>