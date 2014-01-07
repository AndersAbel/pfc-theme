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
    <?php the_content(''); ?>
    <?php if ( ! is_singular() ): ?>
        <ul class="pager">
            <li class="next"><a href="<?php the_permalink(); echo '#more-' . get_the_id(); ?>">Continue Reading &rarr;</a></li>
        </ul>
    <?php endif;?>
    <?php if (! is_page() ): ?>
        <footer class="entry-meta small">
            Posted in 
            <?php 
                echo get_the_category_list(', ');
                echo ' on ' . get_the_date('Y-m-d');
                echo get_the_tag_list(' | Tagged ', ', ');
            ?>
        </footer>
    <?php endif; 
    if(is_single()) : ?>
        <!-- Below Post - Responsive -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-8682707145421648"
             data-ad-slot="9185849256"
             data-ad-format="auto"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    <?php 
        get_template_part('pager');
        comments_template( '', true ); 
    endif; ?>
</article>
