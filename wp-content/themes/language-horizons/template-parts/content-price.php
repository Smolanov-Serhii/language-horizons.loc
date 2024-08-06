<?php
$post_id = get_the_ID();
?>
<section class="price" id="price">
    <div class="price__container main-container">
        <h2 class="price__title section-title"><?php the_field('zagolovok_bloka_czeny', $post_id )?></h2>
        <?php
        if( have_rows('perechen_czen', $post_id) ):
            echo '<div class="price__list">';
            while( have_rows('perechen_czen', $post_id) ) : the_row();
                $icon = get_sub_field('ikonka');
                $title = get_sub_field('nazvanie');
                $desc = get_sub_field('opisanie');
                $price = get_sub_field('czena');
                $btn = get_sub_field('nadpis_na_knopke');
                ?>
                <div class="price__item">
                    <img src="<?php echo $icon;?>" alt="<?php echo $title;?>">
                    <h3 class="why__item-title price__item-title">
                        <?php echo $title;?>
                    </h3>
                    <div class="price__item-desc">
                        <p><?php echo $desc;?></p>
                    </div>
                    <div class="price__item-price">
                        <?php echo $price;?>
                    </div>
                    <div class="price__item-btn">
                        <div class="button js-form">
                            <span><?php echo $btn;?></span>
                        </div>
                    </div>

                </div>
            <?php
            endwhile;
            echo '</div>';
        endif;
        ?>
    </div>
</section>