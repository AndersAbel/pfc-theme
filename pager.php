<?php if ( is_single() ) : ?>
    <ul class="pager">
        <li class="previous"><?php previous_post_link('%link', '&larr; %title'); ?></li>
        <li class="next"><?php next_post_link('%link', '%title &rarr;'); ?></li>
    </ul>
<?php endif; ?>
