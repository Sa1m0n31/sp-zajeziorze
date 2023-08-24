<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package zajeziorze
 */

get_header();
?>

	<main class="site-main w">

        <?php
        while (have_posts()) {
            the_post();

            $image_id = get_post_thumbnail_id(); // Pobranie ID zdjęcia wyróżniającego
            $image_url = wp_get_attachment_image_src($image_id, 'full'); // Pobranie pełnego URL obrazka
            $image_src = $image_url[0];

            // Wyświetlanie zdjęcia wyróżniającego
            if (has_post_thumbnail()) {
                ?>
                <img class="img img--blog" src="<?php echo $image_src; ?>" alt="blog" />

                <?php
            }

            ?>
            <h3 class="main__header main__header--blog">
                <?php
                    echo get_the_title();
                ?>
            </h3>

            <div class="text-white blogContent">
                <?php
                    the_content();
                ?>
            </div>

            <?php
        }
        ?>

	</main><!-- #main -->

<?php
get_footer();
