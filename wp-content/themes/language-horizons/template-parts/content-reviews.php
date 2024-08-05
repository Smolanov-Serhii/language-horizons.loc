<?php
$post_id = get_the_ID();
?>
<section class="reviews" id="reviews">
    <div class="reviews__container main-container">
        <p class="reviews__subtitle section-subtitletitle"><?php the_field('nadzagolovok_bloka_otzyvy', $post_id )?></p>
        <h2 class="reviews__title section-title"><?php the_field('zagolovok_bloka_otzyvy', $post_id )?></h2>
        <?php
        if( have_rows('otzyvy', $post_id) ):
            echo '<div class="reviews__list swiper"><div class="swiper-wrapper">';
            while( have_rows('otzyvy', $post_id) ) : the_row();
                $img = get_sub_field('fotografiya');
                $name = get_sub_field('imya');
                $desc = get_sub_field('otzyv');
                ?>
                <div class="reviews__item swiper-slide">
                    <div class="reviews__item-wrapper">
                        <svg width="51" height="41" viewBox="0 0 51 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.4179 41L-3.48075e-06 37.1801C2.82977 34.7467 5.13979 32.3982 6.93005 30.1346C8.66256 27.9275 9.75982 26.2581 10.2218 25.1263C10.6838 23.9945 11.117 22.6363 11.5212 21.0518L11.1747 20.5424C7.30543 20.5424 4.47565 19.7219 2.68539 18.0807C0.895125 16.4396 -1.44493e-06 13.893 -1.14314e-06 10.441C-9.1062e-07 7.78123 0.981757 5.37612 2.94527 3.22567C4.85104 1.07523 7.24768 -1.02526e-08 10.1352 2.42182e-07C13.427 5.29958e-07 16.1701 0.905453 18.3646 2.71636C20.5592 4.52726 21.6564 7.44169 21.6564 11.4596C21.6564 16.7792 19.9816 22.2685 16.6321 27.9275C13.2248 33.6432 9.15344 38.0007 4.4179 41ZM33.7615 41L29.3436 37.1801C32.1734 34.7467 34.4545 32.4265 36.187 30.2195C37.9195 28.0124 39.0457 26.3147 39.5654 25.1263C40.0274 23.9379 40.4605 22.5797 40.8648 21.0518L40.5183 20.5424C36.649 20.5424 33.8192 19.7219 32.029 18.0807C30.2387 16.4396 29.3436 13.893 29.3436 10.441C29.3436 7.78123 30.3253 5.37612 32.2889 3.22568C34.1946 1.07523 36.5913 2.55505e-06 39.4788 2.80748e-06C42.7706 3.09526e-06 45.5137 0.905456 47.7082 2.71636C49.9027 4.52727 51 7.44169 51 11.4596C51 16.7792 49.3252 22.2685 45.9757 27.9275C42.5684 33.6432 38.497 38.0007 33.7615 41Z" fill="#F1EEE9"/>
                        </svg>
                        <p><?php echo $desc;?></p>
                    </div>
                    <div class="reviews__item-img">
                        <img src="<?php echo $img;?>" alt="<?php echo $name;?>">
                    </div>
                    <p class="reviews__item-name">
                        <?php echo $name;?>
                    </p>
                </div>
            <?php
            endwhile;
            echo '</div><div class="swiper-pagination"></div></div>';
        endif;
        ?>
    </div>
</section>