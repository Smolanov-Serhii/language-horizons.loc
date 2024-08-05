<?php
$post_id = get_the_ID();
?>
<section class="need" id="need">
    <div class="need__container main-container">
        <div class="need__img">
            <img src="<?php echo the_field('kartinka_bloka_tebe_podojdyot', $post_id) ?>" alt="<?php the_field('zagolovok_tebe_podojdyot', $post_id )?>">
        </div>
        <div class="need__text">
            <div class="need__subtitle section-subtitle"><?php the_field('nadzagolovok_tebe_podojdyot', $post_id )?></div>
            <h2 class="need__title section-title"><?php the_field('zagolovok_tebe_podojdyot', $post_id )?></h2>
            <?php
            if( have_rows('perechen_prichin_tebe_podojdyot', $post_id) ):
                echo '<div class="need__list">';
                while( have_rows('perechen_prichin_tebe_podojdyot', $post_id) ) : the_row();
                    $title = get_sub_field('opisanie_prichiny');
                    ?>
                    <div class="need__item">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.79289 17.1642L0.292888 10.6642C-0.0976193 10.2737 -0.0976193 9.64055 0.292888 9.25001L1.70707 7.83579C2.09758 7.44524 2.73078 7.44524 3.12129 7.83579L7.5 12.2145L16.8787 2.83579C17.2692 2.44528 17.9024 2.44528 18.2929 2.83579L19.7071 4.25001C20.0976 4.64052 20.0976 5.27368 19.7071 5.66423L8.20711 17.1643C7.81656 17.5548 7.1834 17.5548 6.79289 17.1642Z" fill="#D291DE"/>
                        </svg>
                        <p class="need__item-title">
                            <?php echo $title;?>
                        </p>
                    </div>
                <?php
                endwhile;
                echo '</div>';
            endif;
            ?>
        </div>
    </div>
</section>