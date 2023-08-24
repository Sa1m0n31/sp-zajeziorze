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

    <div class="pageContent">
        <?php
            the_content();
        ?>
    </div>
</div>

<?php
get_footer();
?>