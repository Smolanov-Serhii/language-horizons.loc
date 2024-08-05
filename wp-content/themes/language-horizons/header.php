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

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>
	<header class="header">
        <div class="header__container main-container">
            <div class="header__logo">
                <a href="<?php ?>" rel="home" hreflang="">
                    <img src="<?php echo get_template_directory_uri() . '/img/logo-pc.svg'?>" alt="Language Horizons">
                </a>
            </div>
            <div class="header__wrapper">
                <nav class="header__nav">
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
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.2733 0.96075L15.2108 0.0232496C14.7694 -0.0783129 14.3163 0.152156 14.1366 0.566218L12.2616 4.94122C12.0975 5.32403 12.2069 5.77325 12.5311 6.03497L14.8983 7.97247C13.492 10.9686 11.035 13.4607 7.97642 14.8943L6.03892 12.5272C5.7733 12.2029 5.32798 12.0936 4.94517 12.2576L0.57017 14.1326C0.152201 14.3162 -0.0782674 14.7693 0.023295 15.2107L0.960795 19.2732C1.05845 19.6951 1.43345 19.9998 1.87486 19.9998C11.8788 19.9998 19.9999 11.8943 19.9999 1.87481C19.9999 1.43731 19.6991 1.05841 19.2733 0.96075Z" fill="#D291DE"/>
                    </svg>
                    <a href="tel:+80993255131">+380993255131</a>
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
	</header>
