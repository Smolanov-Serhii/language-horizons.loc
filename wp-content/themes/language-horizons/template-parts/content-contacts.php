<?php
//$post_id = get_the_ID();
$post_id = 2;
?>
<section class="contacts" id="contacts">
    <div class="contacts__container main-container">
        <div class="contacts__img">
            <img src="<?php echo the_field('kartinka_bloka_kontakty', $post_id) ?>" alt="<?php the_field('zagolovok_bloka_kontakty', $post_id )?>">
        </div>
        <div class="contacts__text">
            <h2 class="section-title contacts__title">
                <?php the_field('zagolovok_bloka_kontakty', $post_id )?>
            </h2>
            <div class="contacts__desc">
                <p><?php the_field('opisanie_bloka_kontakty', $post_id )?></p>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="d78dd30" title="Контактная форма"]' ); ?>
        </div>
    </div>
</section>