<?php get_header(); ?>
<main class="container my-4">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
        </article>
    <?php endwhile; else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.', 'khabarxpress'); ?></p>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
