<?php
/**
Template Name: Предложения
 */

$post_id = get_the_ID();
get_header();
?>
    <main class="main">
        <div class="main-wrapper">
            <section class="seo">
                <div class="seo__container main-container">
                    <?php
                    the_content();
                    ?>
                </div>
            </section>
            <?php
            get_template_part( 'template-parts/content', 'banner' );
            get_template_part( 'template-parts/content', 'services' );
//            get_template_part( 'template-parts/content', 'news' );
            get_template_part( 'template-parts/content', 'contacts' );
            ?>
        </div>
    </main>
<?php

get_footer();