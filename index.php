<?php get_header(); ?>

<div id="primary" class="col-md-8 post-list">
    <?php if( have_posts() ) : ?>
    <?php while( have_posts() ): the_post(); ?>
    <article>
        <header class="entry-header">
            <a href="<?php the_permalink(); ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>
            <div class="entry-meta small text-right">
                Posted on <?php the_date(); ?> by <?php the_author(); ?>
            </div>
        </header>
        <?php the_content('Continue Reading &rarr;'); ?>
        <footer class="entry-meta">
            Posted in 
            <?php 
                echo get_the_category_list(', ');
                echo get_the_tag_list(' | Tagged ', ', '); 
            ?>
        </footer>
    </article>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
<div class="col-md-4">
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
