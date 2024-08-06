<?php
$post_id = get_the_ID();
?>
<section class="popup" style="display: none">
    <div class="popup__container">
        <div class="popup__close">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.16663 4.16663L20.8333 20.8333" stroke="#BDBDBD" stroke-width="2.08333" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4.16663 20.8333L20.8333 4.16663" stroke="#BDBDBD" stroke-width="2.08333" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <img src="<?php echo the_field('kartinka_bloka_kontakty', $post_id) ?>" alt="<?php the_field('zagolovok_bloka_kontakty', $post_id )?>">
        <div class="contacts__container">
            <h3 class="section-title contacts__title">
                <?php the_field('zagolovok_bloka_kontakty', $post_id )?>
            </h3>
            <div class="contacts__desc">
                <p><?php the_field('opisanie_bloka_kontakty', $post_id )?></p>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="d78dd30" title="Контактная форма"]')?>
        </div>
    </div>
</section>
<div id="success-send" class="success-send" style="display: none">
    <div class="popup__container">
        <div class="popup__subtitle">
            <?php the_field('povidomlennya_vidpravleno', 2)?>
        </div>
    </div>
</div>