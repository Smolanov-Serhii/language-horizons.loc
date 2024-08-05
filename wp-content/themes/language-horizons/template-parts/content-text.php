<?php
$post_id = get_the_ID();
?>
<section class="text" id="text">
    <div class="text__container main-container">
        <h2 class="section-title text__title">
            <?php the_field('zagolovok_bloka_slozhnost', $post_id )?>
        </h2>
        <div class="text__desc">
            <?php the_field('opisanie_blokka_slozhnost', $post_id )?>
        </div>
    </div>
</section>