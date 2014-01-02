<?php get_header(); ?>

<div id="primary" class="col-md-8 <?php echo is_single() ? '' : 'post-list' ?>">
    <?php while( have_posts() ) :
            the_post();  
            get_template_part("pager");
            get_template_part("content");
            get_template_part("pager");
          endwhile; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
