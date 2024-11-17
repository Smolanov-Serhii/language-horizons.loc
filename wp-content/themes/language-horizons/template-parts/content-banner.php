<?php
$post_id = get_the_ID();
?>
<section class="banner">
    <div class="banner__container main-container">
        <div class="banner__text">
            <?php
                if ($post_id == 2){
                    ?>
                        <h1 class="banner__title"><?php the_field('zagolovok_v_baner', $post_id )?></h1>
                    <?php
                } else {
                    ?>
                        <h2 class="banner__title"><?php the_field('zagolovok_v_baner', $post_id )?></h2>
                    <?php
                }
            ?>
            <div class="banner__desc <?php if (!get_field('nadpis_na_knopke', $post_id)){ echo "no-btn"; } ?>">
                <?php the_field('opisanie_v_baner', $post_id )?>
            </div>
            <?php
                if (get_field('nadpis_na_knopke', $post_id)){
                    ?>
                        <div class="banner__btn">
                            <div class="button js-form">
                                <span><?php the_field('nadpis_na_knopke', $post_id )?></span>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
        <div class="banner__img">
            <img src="<?php echo the_field('kartinka_v_banner', $post_id) ?>" alt="<?php the_field('zagolovok_v_baner', $post_id )?>">
        </div>
    </div>
</section>