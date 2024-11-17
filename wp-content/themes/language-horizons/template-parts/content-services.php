<?php
$post_id = get_the_ID();
?>
<section class="services">
    <div class="services__container main-container">
        <h2 class="services__title section-title"><?php the_field('zagolovok_bloka_nashi_uslugi', $post_id )?></h2>
        <div class="services__list">
            <?php
            if( have_rows('povtoritel_nashi_uslugi') ):
                while( have_rows('povtoritel_nashi_uslugi') ) : the_row();
                    $img = get_sub_field('kartinka_dlya_uslugi');
                    $title = get_sub_field('zagolovok_dlya_uslugi');
                    $desc = get_sub_field('opisanie_dlya_uslugi');
                    $price = get_sub_field('czena_dlya_uslugi');
                    $lnk = get_sub_field('ssylka_na_uslugu');
                    ?>
                    <div class="services__item">
                        <div class="services__item-img">
                            <a href="<?php echo $lnk;?>" title="<?php echo $title;?>">
                                <img src="<?php echo $img;?>" alt="<?php echo $title;?>">
                            </a>
                        </div>
                        <div class="services__item-content">
                            <a href="<?php echo $lnk;?>" title="<?php echo $title;?>" target="_blank">
                                <h3 class="services__item-title">
                                    <?php echo $title;?>
                                </h3>
                            </a>
                            <div class="services__item-desc">
                                <?php echo $desc;?>
                            </div>
                            <div class="services__item-bottom">
                                <div class="services__item-price">
                                    <?php echo $price;?>
                                </div>
                                <a class="services__item-lnk" href="<?php echo $lnk;?>" title="<?php echo $title;?>" target="_blank"><?php echo get_field('nadpis_podrobnee', $post_id)?>
                                    <svg width="21" height="8" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.3536 4.35355C20.5488 4.15829 20.5488 3.84171 20.3536 3.64645L17.1716 0.464466C16.9763 0.269204 16.6597 0.269204 16.4645 0.464466C16.2692 0.659728 16.2692 0.976311 16.4645 1.17157L19.2929 4L16.4645 6.82843C16.2692 7.02369 16.2692 7.34027 16.4645 7.53553C16.6597 7.7308 16.9763 7.7308 17.1716 7.53553L20.3536 4.35355ZM0 4.5H20V3.5H0V4.5Z" fill="#C4B39B"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>

    </div>
</section>