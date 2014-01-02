<article>
    <header class="entry-header">
        <a href="<?php the_permalink(); ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>
        <div class="row share-buttons">
            <div class="share-buttons col-sm-6">
                <?php if (is_single() ): ?>
                    <a href="https://twitter.com/share" class="twitter-share-button" data-via="anders_abel">Tweet</a>
                    <div class="g-plus" data-action="share" data-annotation="bubble"></div>
                <?php endif; ?>
            </div>
            <div class="entry-meta small text-right col-sm-6">
                Posted on <?php the_date(); ?> by <?php the_author(); ?>
            </div>
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
