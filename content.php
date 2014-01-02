<article>
    <header class="entry-header">
        <a href="<?php the_permalink(); ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>
        <div class="entry-meta small text-right">
            Posted on <?php the_date(); ?> by <?php the_author(); ?>
        </div>
    </header>
    <?php the_content('Continue Reading &rarr;'); ?>
    <?php if (! is_page() ): ?>
        <footer class="entry-meta">
            Posted in 
            <?php 
                echo get_the_category_list(', ');
                echo get_the_tag_list(' | Tagged ', ', '); 
            ?>
        </footer>
    <?php endif; ?>
</article>
