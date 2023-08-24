<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zajeziorze
 */

?>

<!-- FOOTER -->
<div class="footer">
    <div class="w">
        <div class="flex flex--top">
            <div class="footer__col">
                <div class="footer__col__logos flex flex--start">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/logo-stowarzyszenie.png"; ?>" alt="stowarzyszenie" />
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/logo-sp-zajeziorze.png"; ?>" alt="stowarzyszenie" />
                </div>

                <h5 class="footer__col__headerAfterLogos">
                    Szkoła podstawowa w Zajeziorzu<br/>
                    - kształcimy przyszłe pokolenia
                </h5>

                <p class="footer__col__text">
                    Sekretariat szkoły czynny<br/>
                    od pon. do pt. w godz. 8:00 - 16:00
                </p>
            </div>

            <div class="footer__col">
                <h5 class="footer__col__header">
                    Informacje o szkole
                </h5>
                <a href="<?php echo get_page_link(get_page_by_title('Wydarzenia')->ID); ?>" class="footer__col__link">
                    Wydarzenia
                </a>
                <a href=<?php echo get_page_link(get_page_by_title('Nauczyciele')->ID); ?>"" class="footer__col__link">
                    Nauczyciele
                </a>
                <a href="<?php echo get_page_link(get_page_by_title('Baza szkoły')->ID); ?>" class="footer__col__link">
                    Baza szkoły
                </a>
                <a href="<?php echo get_page_link(get_page_by_title('Historia')->ID); ?>" class="footer__col__link">
                    Historia
                </a>
                <a href="<?php echo get_page_link(get_page_by_title('Archiwum')->ID); ?>" class="footer__col__link">
                    Archiwum
                </a>
            </div>

            <div class="footer__col">
                <h5 class="footer__col__header">
                    Informacje o szkole
                </h5>
                <a href="<?php echo get_page_link(get_page_by_title('Samorząd szkolny')->ID); ?>" class="footer__col__link">
                    Samorząd szkolny
                </a>
                <a href="<?php echo get_page_link(get_page_by_title('Rada rodziców')->ID); ?>" class="footer__col__link">
                    Rada rodziców
                </a>
                <a href="<?php echo get_page_link(get_page_by_title('Klasy')->ID); ?>" class="footer__col__link">
                    Klasy
                </a>
                <a href="<?php echo get_page_link(get_page_by_title('Stowarzyszenie')->ID); ?>" class="footer__col__link">
                    Stowarzyszenie
                </a>
                <a href="https://uonetplus.vulcan.net.pl/gminakikol" target="_blank" class="footer__col__link">
                    e-dziennik
                </a>
            </div>

            <div class="footer__col">
                <h5 class="footer__col__header">
                    Dla kandydatów
                </h5>
                <a href="<?php echo get_page_link(get_page_by_title('Rekrutacja')->ID); ?>" class="footer__col__link">
                    Rekrutacja
                </a>
            </div>
        </div>
    </div>
</div>

<div class="footer__bottom center">
    <h6 class="footer__bottom__header">
        &copy; 2023 Szkoła Podstawowa w Zajeziorzu
    </h6>
</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
