<?php
$post_id = get_the_ID();
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
            <?php echo do_shortcode( '[contact-form-7 id="5075044" title="Контактная форма вакансии"]' ); ?>
        </div>
    </div>
</section>