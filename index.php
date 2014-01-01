<?php get_header(); ?>

<div id="primary" class="col-md-8 post-list">
    <?php if( have_posts() ) : ?>
    <?php while( have_posts() ): the_post(); ?>
        <a href="<?php the_permalink(); ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>
        <?php the_content('Continue Reading &rarr;'); ?>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
<div class="col-md-4">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vehicula euismod urna a ornare. Mauris ut lobortis nisi. Curabitur bibendum, nisi non congue imperdiet, felis erat condimentum risus, consectetur rutrum urna odio non justo. Phasellus congue dolor sapien, sed euismod nisl aliquet nec. Fusce vulputate rhoncus sem, ut porttitor lacus commodo a. Donec venenatis vulputate est. Ut semper auctor leo ut ultricies.
Suspendisse tincidunt mattis ultrices. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean sodales feugiat ligula id lobortis. Phasellus ut eros sem. Nullam egestas congue leo eget molestie. Suspendisse in magna eget ante molestie pretium. Duis euismod velit sed quam hendrerit tristique. Nulla ut accumsan velit.
Sed ultrices neque eu ipsum pulvinar, a malesuada tortor malesuada. Suspendisse eget interdum nisl. Morbi nec odio nunc. Vivamus vehicula eros eu magna congue ultricies. Curabitur in mollis ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu faucibus massa, accumsan ultrices augue. In neque neque, hendrerit ac dictum at, vulputate ut sapien. Phasellus varius odio eu urna ultrices suscipit. Proin dictum diam varius odio lobortis, sit amet rutrum nibh tincidunt. Curabitur aliquam ut quam at feugiat. Vivamus egestas libero et lacus elementum ullamcorper. Cras nunc erat, pharetra in euismod eget, ultricies sed enim. Nam viverra congue ligula, vel dignissim dolor faucibus ut. Vestibulum in turpis vitae ante consectetur cursus. Mauris vitae porttitor metus, sagittis porttitor est.
</div>
<?php get_footer(); ?>
