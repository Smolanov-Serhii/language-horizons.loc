<?php
$post_id = get_the_ID();
?>
<section class="faq" id="faq">
    <div class="faq__container main-container">
        <p class="faq__subtitle section-subtitle"><?php the_field('nadzagolovok_voprosy_i_otvety', $post_id )?></p>
        <h2 class="faq__title section-title"><?php the_field('zagolovok_bloka_voprosy_i_otvety', $post_id )?></h2>
        <?php
        if( have_rows('voprosy_i_otvety', $post_id) ):
            echo '<div class="faq__list">';
            while( have_rows('voprosy_i_otvety', $post_id) ) : the_row();
                $title = get_sub_field('vopros');
                $desc = get_sub_field('otvet');
                ?>
                <div class="faq__item">
                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 8C0 3.58172 3.58172 0 8 0H38C42.4183 0 46 3.58172 46 8V38C46 42.4183 42.4183 46 38 46H8C3.58172 46 0 42.4183 0 38V8Z" fill="#D291DE"/>
                        <path d="M12 21H34V25H12V21Z" fill="white"/>
                        <path class="vert" d="M21 34L21 12L25 12L25 34L21 34Z" fill="white"/>
                    </svg>
                    <h3 class="why__item-title faq__item-title">
                        <?php echo $title;?>
                    </h3>
                    <div class="faq__item-desc" style="display: none">
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