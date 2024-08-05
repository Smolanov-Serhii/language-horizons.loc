<?php
$post_id = get_the_ID();
?>
<section class="why">
    <div class="why__container main-container">
        <div class="why__subtitle section-subtitle"><?php the_field('nadzagolovok_bloka_pochemu_my', $post_id )?></div>
        <h2 class="why__title section-title"><?php the_field('zagolovok_bloka_pochemu_my', $post_id )?></h2>
        <?php
        if( have_rows('perechen_prichin', $post_id) ):
            echo '<div class="why__list">';
            while( have_rows('perechen_prichin', $post_id) ) : the_row();
                $icon = get_sub_field('ikonka');
                $title = get_sub_field('zagolovok');
                $desc = get_sub_field('opisanie');
                ?>
                <div class="why__item">
                    <img src="<?php echo $icon;?>" alt="<?php echo $title;?>">
                    <h3 class="why__item-title">
                        <?php echo $title;?>
                    </h3>
                    <div class="why__item-desc">
                        <p><?php echo $desc;?></p>
                    </div>
                </div>
            <?php
            endwhile;
            echo '</div>';
        endif;
        ?>
        <div class="why__bottom main-container">
            <div class="why__bottom-block">
                <h3 class="why__item-title why__bottom-title">
                    <?php the_field('nizhnij_blok_zagolovok', $post_id )?>
                </h3>
                <div class="why__bottom-wrapper">
                    <svg width="73" height="59" viewBox="0 0 73 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.32367 59L4.80554e-07 53.5031C4.05045 50.0014 7.35696 46.6218 9.91949 43.3644C12.3994 40.1884 13.9699 37.7861 14.6312 36.1573C15.2925 34.5286 15.9125 32.5742 16.4911 30.294L15.9952 29.5611C10.4568 29.5611 6.40633 28.3803 3.8438 26.0186C1.28127 23.657 3.41015e-06 19.9924 3.84443e-06 15.0248C4.17904e-06 11.1974 1.40526 7.73636 4.21579 4.64182C6.94365 1.54727 10.3741 -5.47493e-06 14.5072 -5.1136e-06C19.219 -4.70168e-06 23.1455 1.30297 26.2866 3.9089C29.4278 6.51484 30.9984 10.7088 30.9984 16.4907C30.9984 24.1456 28.6012 32.0449 23.8068 40.1884C18.9297 48.4134 13.102 54.6839 6.32367 59ZM48.3253 59L42.0016 53.5031C46.0521 50.0014 49.3172 46.6625 51.7971 43.4865C54.277 40.3106 55.8889 37.8675 56.6329 36.1573C57.2942 34.4472 57.9141 32.4928 58.4928 30.294L57.9968 29.5611C52.4584 29.5611 48.4079 28.3803 45.8454 26.0186C43.2829 23.657 42.0016 19.9924 42.0016 15.0248C42.0016 11.1974 43.4069 7.73637 46.2174 4.64182C48.9453 1.54727 52.3757 -1.80303e-06 56.5089 -1.4417e-06C61.2206 -1.02979e-06 65.1471 1.30297 68.2882 3.9089C71.4294 6.51484 73 10.7088 73 16.4907C73 24.1456 70.6028 32.0449 65.8084 40.1884C60.9313 48.4134 55.1036 54.6839 48.3253 59Z" fill="white" fill-opacity="0.29"/>
                    </svg>
                    <p><?php the_field('nizhnij_blok_opisanie', $post_id )?></p>
                </div>
            </div>
        </div>
    </div>
</section>