<?php
/**
 * The most generic template file in hierarchy.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<?php get_header(); ?>

<main class="box">
    <?php if ( have_posts() ) : ?>
        <?php if ( is_home() && is_front_page() ) : ?>
            <?php get_template_part( 'resources/templates/content/content', 'homepage' ); ?>
        <?php else : ?>
            <?php while ( have_posts() ) : the_post() ?>
                <?php get_template_part( 'resources/templates/content/content', get_post_type() ); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endif; ?>

    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
