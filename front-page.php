<?php get_header(); ?>

<main class="homepage-content">
    <section class="hero">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; else : ?>
                <p>No content found for the homepage.</p>
            <?php endif; ?>
        </div>
    </section>

    <section class="features">
        <h3>Our Services</h3>
        </section>
</main>

<?php get_footer(); ?>
