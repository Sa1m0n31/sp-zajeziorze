<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zajeziorze
 */

get_header();
?>

<div class="w">
    <h1 class="main__header main__header--page">
        <?php echo get_the_title(); ?>
    </h1>

    <div class="pageContent pageContent--grid">
        <?php
        $category = get_category_by_slug('wydarzenia');
        $category_id = $category->term_id;

        $args = array(
            'cat' => $category_id,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 9
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
                    <img class="img" src="<?php echo $image_src; ?>" alt="zdjecie" />

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

<?php
get_footer();
?>