<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zajeziorze
 */

get_header();
?>

<div class="hero d-desktop">
    <div class="mainCarousel">
        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/slider.png"; ?>" alt="slider" />
        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/slider.png"; ?>" alt="slider" />
        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/slider.png"; ?>" alt="slider" />
    </div>

    <h1 class="hero__text d-desktop">
        "Dzisiaj należy wiedzieć co trzeba poznać jutro, by radzić sobie pojutrze."
    </h1>
    <h1 class="hero__text d-mobile">
        SP Zajeziorze
    </h1>

    <div class="hero__indicators hero__indicators--main flex">
        <button class="hero__indicators__item center" onclick="mainCarouselGoTo(0)">
            <span class="hero__indicators__item__inner"></span>
        </button>
        <button class="hero__indicators__item center" onclick="mainCarouselGoTo(1)">
            <span class="hero__indicators__item__inner"></span>
        </button>
        <button class="hero__indicators__item center" onclick="mainCarouselGoTo(2)">
            <span class="hero__indicators__item__inner"></span>
        </button>
    </div>
</div>

<div class="main w flex flex--top">
    <div class="main__left">
        <h2 class="main__header flex">
            Aktualności

            <a href="<?php echo get_page_link(get_page_by_title('Archiwum')->ID); ?>" class="btn btn--mainArchive d-desktop">
                Archiwum
            </a>
        </h2>

        <div class="newsCarouselWrapper">
            <button class="newsCarouselWrapper__arrow newsCarouselWrapper__arrow--prev"
                    onclick="newsCarouselPrev()">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/arrow-left.svg"; ?>" alt="left" />
            </button>
            <button class="newsCarouselWrapper__arrow newsCarouselWrapper__arrow--next"
                    onclick="newsCarouselNext()">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/arrow-right.svg"; ?>" alt="left" />
            </button>

            <div class="hero__indicators hero__indicators--news flex d-desktop">
                <button class="hero__indicators__item center" onclick="newsCarouselGoTo(0)">
                    <span class="hero__indicators__item__inner"></span>
                </button>
                <button class="hero__indicators__item center" onclick="newsCarouselGoTo(1)">
                    <span class="hero__indicators__item__inner"></span>
                </button>
                <button class="hero__indicators__item center" onclick="newsCarouselGoTo(2)">
                    <span class="hero__indicators__item__inner"></span>
                </button>
            </div>

            <div class="newsCarousel">
                <!-- News loop -->
                <?php
                    $category = get_category_by_slug('wydarzenia');
                    $category_id = $category->term_id;

                    $args = array(
                        'cat' => $category_id,
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 3
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();

                            $image_id = get_post_thumbnail_id(); // Pobranie ID zdjęcia wyróżniającego
                            $image_url = wp_get_attachment_image_src($image_id, 'full'); // Pobranie pełnego URL obrazka
                            $image_src = $image_url[0];

                            ?>
                            <div class="newsCarousel__item">
                                <img class="newsCarousel__item__image" src="<?php echo $image_src; ?>" alt="img" />

                                <div class="newsCarousel__item__content">
                                    <h4 class="newsCarousel__item__header">
                                        <?php
                                            echo get_the_title();
                                        ?>
                                    </h4>
                                    <h5 class="newsCarousel__item__subheader">
                                        <?php
                                            echo get_field('podtytul');
                                        ?>
                                    </h5>
                                    <a href="<?php echo get_permalink(); ?>" class="btn btn--more">
                                        Czytaj dalej
                                    </a>
                                </div>
                            </div>
                            <?php
                        }
                    }

                    wp_reset_postdata();
                ?>
            </div>
        </div>

        <div class="news">
            <!-- News loop from 4 to 9 -->
            <?php
            $category = get_category_by_slug('wydarzenia');
            $category_id = $category->term_id;

            $args = array(
                'cat' => $category_id,
                'post_type' => 'post',
                'post_status' => 'publish',
                'offset' => 3,
                'posts_per_page' => 6
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();

                    $image_id = get_post_thumbnail_id(); // Pobranie ID zdjęcia wyróżniającego
                    $image_url = wp_get_attachment_image_src($image_id, 'full'); // Pobranie pełnego URL obrazka
                    $image_src = $image_url[0];

                    ?>
                        <a href="<?php echo get_permalink(); ?>" class="news__item">
                            <h5 class="news__item__header">
                                <?php
                                    echo get_the_title();
                                ?>
                            </h5>
                            <h6 class="news__item__date">
                                <?php echo get_the_date( 'Y-m-d' ); ?>
                            </h6>
                            <p class="news__item__excerpt">
                                <?php
                                    echo get_the_excerpt();
                                ?>
                            </p>
                            <span class="news__item__btn">
                                Czytaj dalej
                                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/arrow-right-blog.svg"; ?>" alt="czytaj-dalej" />
                            </span>
                        </a>
                    <?php
                }
            }

            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="main__right">
        <h3 class="main__header">
            O szkole
        </h3>

        <div class="main__right__frames flex flex--top">
            <div class="frame frame--red">
                <?php echo get_field('ramka_1', 92); ?>
            </div>
            <div class="frame frame--grey">
                <?php echo get_field('ramka_2', 92); ?>
            </div>
            <div class="frame frame--red">
                <?php echo get_field('ramka_3', 92); ?>
            </div>
            <div class="frame frame--grey">
                <?php echo get_field('ramka_4', 92); ?>
            </div>
            <div class="frame frame--red">
                <?php echo get_field('ramka_5', 92); ?>
            </div>
            <div class="frame frame--grey">
                <?php echo get_field('ramka_6', 92); ?>
            </div>
        </div>
    </div>
</div>

<div class="blackboard center">
    <div class="blackboard__content">
        <h4 class="blackboard__header">
            Nagłówek informacyjny
        </h4>
        <p class="blackboard__text">
            Szkoła podstawowa numer 41 im. Jana Kochanowskiego w Krakowie już od ponad 40
            lat realizuje program nauczania i pomaga dzieciom rozwijać swoje zdolności.
            Kształcimy i przygotowujemy do dalszej edukacji na poziomie liceum.
        </p>
        <a href="<?php echo get_page_link(get_page_by_title('Rekrutacja')->ID); ?>" class="blackboard__btn center">
            REKRUTACJA NA ROK SZKOLNY 2023/2024
        </a>
    </div>
</div>

<div class="mapSection w" id="kontakt">
    <h3 class="main__header">
        Skontaktuj się z nami
    </h3>
    <div class="map" id="map">
        <?php echo do_shortcode('[wpgmza id="1"]'); ?>
    </div>

    <div class="contact flex flex--top">
        <div class="contact__item">
            <h5 class="contact__item__header">
                Adres szkoły
            </h5>
            <div class="contact__item__text">
                <?php echo get_field('adres_szkoly', 92); ?>
            </div>
        </div>
        <div class="contact__item">
            <h5 class="contact__item__header">
                Dane kontaktowe
            </h5>
            <div class="contact__item__text">
                <?php echo get_field('dane_kontaktowe', 92); ?>
            </div>
        </div>
        <div class="contact__item">
            <h5 class="contact__item__header">
                Godziny kontaktu
            </h5>
            <div class="contact__item__text">
                <?php echo get_field('godziny_kontaktu', 92); ?>
            </div>
        </div>
        <div class="contact__item">
            <h5 class="contact__item__header">
                Media społecznościowe
            </h5>
            <div class="contact__item__text">
                <?php echo get_field('media_spolecznosciowe', 92); ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
