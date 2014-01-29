<?php get_header(); ?>

<div id="primary" class="col-md-8 <?php echo is_single() ? '' : 'post-list' ?>">
<?php echo get_option("pfc_theme_ad_above_post"); ?>
<?php if ( !is_single() && get_previous_posts_link() ): ?>
        <ul class="pager">
            <li class="previous"><?php next_posts_link('&larr; Older Posts'); ?></li>
            <li class="next"><?php previous_posts_link('Newer Posts &rarr;')?></li>
        </ul>
    <?php endif;?>

    <?php for($i = 0; have_posts(); $i++ ) :
            the_post();  
            get_template_part('pager');
            get_template_part('content');
            get_template_part('pager');
            if($i == 2){
                echo get_option("pfc_theme_ad_in_listing");
            }
          endfor;

        if(! is_single() ) : ?>
        <ul class="pager">
            <li class="previous"><?php next_posts_link('&larr; Older Posts'); ?></li>
            <li class="next"><?php previous_posts_link('Newer Posts &rarr;')?></li>
        </ul>
    <?php endif;?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
