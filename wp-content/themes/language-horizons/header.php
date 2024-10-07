<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package language_horizons
 */
$post_id = get_the_ID();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="629cbc3a24436817" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LdV0SgqAAAAAPAMJ4nPBKMuEQiPp6ZW3qM2v9zd"></script>
    <script>
        function onClick(e) {
            e.preventDefault();
            grecaptcha.enterprise.ready(async () => {
                const token = await grecaptcha.enterprise.execute('6LdV0SgqAAAAAPAMJ4nPBKMuEQiPp6ZW3qM2v9zd', {action: 'LOGIN'});
            });
        }
    </script>
</head>
<script>
    window.onload = function () {
        document.body.classList.add('loaded_hiding');
        window.setTimeout(function () {
            document.body.classList.add('loaded');
            document.body.classList.remove('loaded_hiding');
            if ($('.wpcf7-numbers-only').length > 0) {
                $(".wpcf7-numbers-only").on("input", function() {
                    var value = $(this).val();
                    var pos = value.indexOf('+');
                    this.value = this.value.replace(/[^0-9+]/g, '');
                    if(pos === 0) return;
                    else if(pos < 0) $(this).val('+' + value);
                    else $(this).val(value.substr(pos));
                });
            }
        }, 500);

    }
</script>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WD8VZ768"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="preloader">
    <div class="preloader__row">
        <div class="preloader__item"></div>
        <div class="preloader__item"></div>
    </div>
</div>
<?php wp_body_open(); ?>
<?php
if ( !is_404() ) {
    ?>
    <header class="header default">
        <div class="header__container main-container">
            <div class="header__logo">
                <a href="<?php echo home_url();?>" rel="home" hreflang="<?php echo qtranxf_getLanguage();?>">
                    <img src="<?php echo get_template_directory_uri() . '/img/logo-pc.svg'?>" alt="Language Horizons">
                </a>
            </div>
            <div class="header__wrapper">
                <nav class="header__nav">
                    <div class="header__close">
                        <svg class="static" width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M44.9203 44.9203C44.5298 45.3109 43.8966 45.3109 43.5061 44.9203L1.07969 2.49392C0.689163 2.1034 0.689162 1.47024 1.07969 1.07971C1.47021 0.689187 2.10338 0.689187 2.4939 1.07971L44.9203 43.5061C45.3108 43.8966 45.3108 44.5298 44.9203 44.9203Z" fill="#000"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M44.9203 44.9203C44.5298 45.3109 43.8966 45.3109 43.5061 44.9203L1.07969 2.49392C0.689163 2.1034 0.689162 1.47024 1.07969 1.07971C1.47021 0.689187 2.10338 0.689187 2.4939 1.07971L44.9203 43.5061C45.3108 43.8966 45.3108 44.5298 44.9203 44.9203Z" fill="#000"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.07967 44.92C0.689141 44.5295 0.689141 43.8963 1.07967 43.5058L43.5061 1.07937C43.8966 0.68885 44.5298 0.68885 44.9203 1.07937C45.3108 1.4699 45.3108 2.10306 44.9203 2.49359L2.49388 44.92C2.10335 45.3105 1.47019 45.3105 1.07967 44.92Z" fill="#000"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.07967 44.92C0.689141 44.5295 0.689141 43.8963 1.07967 43.5058L43.5061 1.07937C43.8966 0.68885 44.5298 0.68885 44.9203 1.07937C45.3108 1.4699 45.3108 2.10306 44.9203 2.49359L2.49388 44.92C2.10335 45.3105 1.47019 45.3105 1.07967 44.92Z" fill="#000"/>
                        </svg>
                    </div>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'menu_id'        => 'primary-menu',
                        )
                    );
                    ?>
                </nav>
                <div class="header__contacts">
                    <a href="tg://resolve?domain=Smolanova_Vero">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 0C10.2878 0 6.72437 1.47591 4.10156 4.10047C1.47606 6.72609 0.000751294 10.2869 0 14C0 17.7115 1.47656 21.275 4.10156 23.8995C6.72437 26.5241 10.2878 28 14 28C17.7122 28 21.2756 26.5241 23.8984 23.8995C26.5234 21.275 28 17.7115 28 14C28 10.2885 26.5234 6.72503 23.8984 4.10047C21.2756 1.47591 17.7122 0 14 0Z" fill="url(#paint0_linear_2002_53)"/>
                            <path d="M6.33717 13.8522C10.419 12.0742 13.1403 10.902 14.5009 10.3355C18.3903 8.71833 19.1975 8.43745 19.7247 8.42794C19.8406 8.42608 20.0987 8.45474 20.2672 8.59091C20.4072 8.70575 20.4465 8.86106 20.4662 8.97011C20.4837 9.07905 20.5078 9.32733 20.4881 9.52114C20.2781 11.7349 19.3659 17.107 18.9022 19.5865C18.7075 20.6356 18.3203 20.9874 17.9462 21.0217C17.1325 21.0965 16.5156 20.4845 15.7281 19.9684C14.4965 19.1606 13.8009 18.6579 12.6044 17.8697C11.2219 16.9589 12.1187 16.4581 12.9062 15.64C13.1119 15.4259 16.695 12.1676 16.7628 11.872C16.7715 11.8351 16.7803 11.6973 16.6972 11.6246C16.6162 11.5518 16.4959 11.5767 16.4084 11.5964C16.2837 11.6244 14.3172 12.9255 10.5022 15.4996C9.94436 15.8833 9.43905 16.0703 8.98405 16.0605C8.4853 16.0497 7.5228 15.7778 6.80748 15.5455C5.93248 15.2605 5.23467 15.1098 5.29592 14.6257C5.32655 14.3737 5.67436 14.1158 6.33717 13.8522Z" fill="white"/>
                            <defs>
                                <linearGradient id="paint0_linear_2002_53" x1="1400" y1="0" x2="1400" y2="2800" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#2AABEE"/>
                                    <stop offset="1" stop-color="#229ED9"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </a>
                    <a href="whatsapp://send?phone=+380956819558/">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.906 6.45699C21.7175 -0.000213452 13.1661 -1.91992 6.53437 2.09402C0.0771602 6.10795 -2.01707 14.8339 2.17139 21.2911L2.52043 21.8147L1.12428 27.0502L6.35985 25.6541L6.88341 26.0031C9.15215 27.2248 11.5954 27.9228 14.0387 27.9228C16.6565 27.9228 19.2743 27.2248 21.543 25.8286C28.0002 21.6402 29.9199 13.0887 25.906 6.45699V6.45699ZM22.2411 19.895C21.543 20.9421 20.6704 21.6402 19.4488 21.8147C18.7507 21.8147 17.8781 22.1637 14.3877 20.7676C11.4209 19.3714 8.97763 17.1027 7.23244 14.4849C6.18533 13.2632 5.66177 11.6926 5.48725 10.1219C5.48725 8.72574 6.01081 7.50411 6.88341 6.63151C7.23244 6.28247 7.58148 6.10795 7.93052 6.10795H8.80311C9.15215 6.10795 9.50119 6.10795 9.67571 6.80603C10.0247 7.67863 10.8973 9.77285 10.8973 9.94737C11.0719 10.1219 11.0719 10.4709 10.8973 10.6455C11.0719 10.9945 10.8973 11.3435 10.7228 11.518C10.5483 11.6926 10.3738 12.0416 10.1993 12.2161C9.85023 12.3906 9.67571 12.7397 9.85023 13.0887C10.5483 14.1358 11.4209 15.1829 12.2935 16.0555C13.3406 16.9281 14.3877 17.6262 15.6094 18.1498C15.9584 18.3243 16.3074 18.3243 16.482 17.9753C16.6565 17.6262 17.5291 16.7536 17.8781 16.4046C18.2271 16.0555 18.4017 16.0555 18.7507 16.2301L21.543 17.6262C21.892 17.8007 22.2411 17.9753 22.4156 18.1498C22.5901 18.6733 22.5901 19.3714 22.2411 19.895V19.895Z" fill="#5CCF67"/>
                        </svg>
                    </a>
                </div>
                <div class="header__lang">
                    <?php
                    qtranxf_generateLanguageSelectCode('short');
                    ?>
                </div>
            </div>
            <div class="header__burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <?php if ($post_id <> 2){
            echo '<div class="breadcrumb main-container">';
            if(function_exists('bcn_display')){
                bcn_display();
            }
            echo '</div>';
        }
        ?>
    </header>
    <?php
}
?>

