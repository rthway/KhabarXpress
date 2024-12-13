<?php get_header(); ?>

<div class="container">
    <h1 class="my-4">Search Results for: <?php echo get_search_query(); ?></h1>

    <?php if ( have_posts() ) : ?>
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <?php the_posts_navigation(); ?>

    <?php else : ?>
        <p>No results found for your search.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
