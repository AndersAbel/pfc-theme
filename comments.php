<div id="#comments">
    <ul class="commentlist list-group">
        <?php wp_list_comments('type=pings&callback=list_pings')?>
        <?php wp_list_comments('type=comment&callback=list_comments'); ?>
        <?php if ( comments_open()): ?>
        <li class="list-group-item" id="new-comment">
            <form action="<?php echo site_url( '/wp-comments-post.php' ); ?>" method="post">
                <h4>Leave a Reply</h4>
                <?php if (is_user_logged_in() ) :?>
                    <p>Logged in as <?php echo $user_identity?></p>
                <?php else: ?>
                    <div class="form-group">
                        <input class="form-control" name="author" placeholder="Your Name" required>
                        <span class="help-block">Your name as it will be displayed on the posted comment.</span>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Your E-mail Address" required>
                        <span class="help-block">Your e-mail address will not be published. It is only used if I want to get in touch during comment moderation.</span>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="url" name="url" placeholder="URL to your website">
                        <span class="help-block">Your name will be a link to this address.</span>
                    </div>
                <?php endif;?>
                <div class="form-group">
                    <textarea rows="10" name="comment" class="form-control" placeholder="Praise or bash the post!" required></textarea>
                </div>
                <input type="hidden" name="comment_post_ID" value="<?php the_ID(); ?>"/>
                <button name="submit "class="btn btn-primary">Submit</button>
            </form>
        </li>
        <?php endif; ?>
    </ul>
</div>
