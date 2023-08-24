<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zajeziorze
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="container">
    <!-- HEADER -->
    <div class="topBar d-desktop">
        <div class="w flex">
            <div class="topBar__left flex flex--start">
                <span class="topBar__left__item flex flex--start">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/szkola.svg"; ?>" alt="szkola" />
                    Szkoła Podstawowa w Zajeziorzu
                </span>
                <a href="mailto:zbogoski@o2.pl" class="topBar__left__item flex flex--start">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/mail.svg"; ?>" alt="szkola" />
                    zbogoski@o2.pl
                </a>
                <a href="tel:+48609516900" class="topBar__left__item flex flex--start">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/telefon.svg"; ?>" alt="szkola" />
                    609 516 900
                </a>
            </div>

            <div class="topBar__right flex flex--end">
                <a href="https://www.gov.pl/web/bip" target="_blank" class="topBar__right__link">
                    Biuletyn informacji publicznej
                </a>
                <a href="<?php echo get_page_link(get_page_by_title('Stowarzyszenie')->ID); ?>" target="_blank" class="topBar__right__link">
                    Stowarzyszenie
                </a>
                <a href="https://uonetplus.vulcan.net.pl/gminakikol" target="_blank" class="topBar__right__link topBar__right__link--log">
                    e-Dziennik
                </a>
            </div>
        </div>
    </div>
    <div class="topMenu">
        <div class="mobileMenu d-mobile">
            <button class="mobileMenu__close" onclick="closeMobileMenu()">
                &times;
            </button>

            <a class="mobileMenu__item" href="<?php echo home_url(); ?>">
                Strona główna
            </a>
            <a class="mobileMenu__item" href="<?php echo get_page_link(get_page_by_title('Wydarzenia')->ID); ?>">
                Wydarzenia
            </a>
            <a class="mobileMenu__item" href="<?php echo get_page_link(get_page_by_title('Nauczyciele')->ID); ?>">
                Nauczyciele
            </a>
            <a class="mobileMenu__item" href="<?php echo get_page_link(get_page_by_title('Samorząd szkolny')->ID); ?>">
                Samorząd szkolny
            </a>
            <a class="mobileMenu__item" href="<?php echo get_page_link(get_page_by_title('Rada rodziców')->ID); ?>">
                Rada rodziców
            </a>
            <a class="mobileMenu__item" href="<?php echo get_page_link(get_page_by_title('Baza szkoły')->ID); ?>">
                Baza szkoły
            </a>
            <a class="mobileMenu__item" href="<?php echo get_page_link(get_page_by_title('Stowarzyszenie')->ID); ?>">
                Stowarzyszenie
            </a>
            <a class="mobileMenu__item" href="<?php echo get_page_link(get_page_by_title('Historia')->ID); ?>">
                Historia
            </a>
            <a class="mobileMenu__item" href="<?php echo get_page_link(get_page_by_title('Klasy')->ID); ?>">
                Klasy
            </a>
            <a class="mobileMenu__item" href="<?php echo get_page_link(get_page_by_title('Rekrutacja')->ID); ?>">
                Rekrutacja
            </a>
        </div>

        <div class="w flex">
            <a href="<?php echo home_url(); ?>" class="topMenu__logoLeft d-desktop">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/logo-stowarzyszenie.png"; ?>" alt="stowarzyszenie" />
            </a>
            <div class="topMenu__menu flex d-desktop">
                <a class="topMenu__menu__item flex flex--start" href="<?php echo home_url(); ?>">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/home.svg"; ?>" alt="home" />
                    Strona główna
                </a>
                <span class="topMenu__menu__item flex flex--start topMenu__menu__item--dropdown">
                    Szkoła
                    <img class="img img--arrow" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/arrow-down.svg"; ?>" alt="down" />

                    <span class="topMenu__menu__item__dropdown">
                        <a class="topMenu__menu__item__dropdown__item" href="<?php echo get_page_link(get_page_by_title('Wydarzenia')->ID); ?>">
                            Wydarzenia
                        </a>
                         <a class="topMenu__menu__item__dropdown__item" href="<?php echo get_page_link(get_page_by_title('Nauczyciele')->ID); ?>">
                             Nauczyciele
                        </a>
                         <a class="topMenu__menu__item__dropdown__item" href="<?php echo get_page_link(get_page_by_title('Samorząd szkolny')->ID); ?>">
                            Samorząd szkolny
                        </a>
                         <a class="topMenu__menu__item__dropdown__item" href="<?php echo get_page_link(get_page_by_title('Rada rodziców')->ID); ?>">
                            Rada rodziców
                        </a>
                         <a class="topMenu__menu__item__dropdown__item" href="<?php echo get_page_link(get_page_by_title('Baza szkoły')->ID); ?>">
                            Baza szkoły
                        </a>
                         <a class="topMenu__menu__item__dropdown__item" href="<?php echo get_page_link(get_page_by_title('Stowarzyszenie')->ID); ?>">
                            Stowarzyszenie
                        </a>
                         <a class="topMenu__menu__item__dropdown__item" href="<?php echo get_page_link(get_page_by_title('Historia')->ID); ?>">
                            Historia
                        </a>
                    </span>
                </span>
                <a class="topMenu__menu__item" href="<?php echo get_page_link(get_page_by_title('Klasy')->ID); ?>">
                    Klasy
                </a>
                <a class="topMenu__menu__item" href="<?php echo get_page_link(get_page_by_title('Rekrutacja')->ID); ?>">
                    Rekrutacja
                </a>
                <a class="topMenu__menu__item" href="<?php echo home_url(); ?>#kontakt">
                    Kontakt
                </a>
            </div>
            <a href="<?php echo home_url(); ?>" class="topMenu__logoRight">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/logo-sp-zajeziorze.png"; ?>" alt="logo" />
            </a>

            <button class="btn--menu d-mobile-flex center" onclick="openMobileMenu()">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/menu.svg"; ?>" alt="menu" />
            </button>
        </div>
    </div>