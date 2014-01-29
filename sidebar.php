<div class="col-md-4 col-sm-6">
    <blockquote><?php bloginfo( 'description'); ?></blockquote>
    <?php dynamic_sidebar('sidebar'); ?>
</div>
<?php if (! is_404() ): ?>
<div id="ad-sidebar"class="visible-md visible-lg col-md-4">
<?php 
 echo get_option("pfc_theme_ad_sidebar"); 
 ?>
</div>
<?php endif; ?>
<div class="col-md-4 col-sm-6">
    <?php dynamic_sidebar('sidebar-2'); ?>
</div>
