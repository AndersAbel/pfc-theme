<?php get_header(); ?>

<div id="primary" class="col-md-8 <?php echo is_single() ? '' : 'post-list' ?>">
    <?php if( have_posts() ){
        while( have_posts() ){
            the_post();  
            get_template_part("content");
        } 
    } ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
