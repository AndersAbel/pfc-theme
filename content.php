<article>
    <header class="entry-header">
        <a href="<?php the_permalink(); ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>
        <div class="row share-buttons">
            <div class="share-buttons col-sm-6">
                <a href="https://twitter.com/share" class="twitter-share-button" data-via="anders_abel" data-url="<?php the_permalink(); ?>">Tweet</a>
                <div class="g-plus" data-action="share" data-annotation="bubble" data-href="<?php the_permalink(); ?>"></div>
            </div>
            <div class="entry-meta small text-right col-sm-6">
                Posted on <?php the_date(); ?> by <?php the_author(); ?>
            </div>
        </div>
    </header>
    <?php the_content('Continue Reading &rarr;'); ?>
    <?php if (! is_page() ): ?>
        <footer class="entry-meta small">
            Posted in 
            <?php 
                echo get_the_category_list(', ');
                echo ' on ' . get_the_date('Y-m-d');
                echo get_the_tag_list(' | Tagged ', ', ');
            ?>
        </footer>
    <?php endif; ?>
</article>
