<?php get_header(); ?>

<main class="container" style="padding: 80px 20px; min-height: 60vh;">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <h1 style="font-family: var(--font-heading); color: var(--navy); text-transform: uppercase; margin-bottom: 30px; border-bottom: 3px solid var(--green); display: inline-block;">
            <?php the_title(); ?>
        </h1>
        
        <div style="color: var(--gray-text); line-height: 1.8;">
            <?php the_content(); ?>
        </div>

    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>