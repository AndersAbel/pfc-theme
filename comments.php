<?php if( is_single() && have_comments() ):
get_template_part('pager');
?>

<div id="#comments">
    <ul class="commentlist list-group">
        <?php wp_list_comments('type=pings&callback=list_pings')?>
        <?php wp_list_comments('type=comment&callback=list_comments'); ?>
    </ul>
</div>
<?php endif; ?>