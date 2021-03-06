<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php
            global $page, $paged;
            wp_title( '|', true, 'right');
            bloginfo('name');
            
            if ( $paged >= 2 || $page >= 2)
                echo ' | ' . sprintf('Page %s', max( $paged, $page) );
            ?></title>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                    <!--[if lt IE 9]>
                    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
                    <![endif]-->

	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="<?php echo "@" . get_option("pfc_theme_twitter_name");?>" />
	<?php if( is_single() ) : ?>
	<meta name="twitter:title" content="<?php echo ltrim(wp_title('', false)); ?>" />
	<meta name="twitter:description" content="<?php setup_postdata($post); echo wp_trim_words(get_the_excerpt(), 55, ''); ?>" />
	<meta name="twitter:image" content="<?php if ( has_post_thumbnail() ) {
		echo the_post_thumbnail_url();
	}
	else
	{
		echo get_option("pfc_theme_twitter_default_image");
	} ?>" />
	<?php else: ?>
	<meta name="twitter:title" content="<?php bloginfo('name') ?>" />
	<meta name="twitter:description" content="<?php bloginfo( 'description'); ?>" />
	<meta name="twitter:image" content="<?php echo get_option("pfc_theme_twitter_default_image"); ?>" />
	<?php endif; ?>

        <?php
            /*
             * Always have wp_head() just before the closing </head>
             * tag of your theme, or you will break many plugins, which
             * generally use this hook to add elements to <head> such
             * as styles, scripts, and meta tags.
             */
            wp_head();
        ?>
        <?php if(! is_user_logged_in() ) {
           echo get_option("pfc_theme_custom_head_content");
        }
        ?>
    </head>
    <body <?php body_class(); ?>>
        <nav class="navbar navbar-default navbar-fixed-top container navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                <?php
                    wp_nav_menu( array(
                                'menu' => 'main-menu',
                                'container' => FALSE,
                                'menu_class' => 'nav navbar-nav',
                                'menu_id' => 'main-menu',
                                'walker' => new Bootstrap_Walker_Nav_Menu() )
                                );
                ?>
                <div class="navbar-right">
                    <a class="navbar-custom-button" href="<?php echo get_option("pfc_theme_google_plus_profile"); ?>" rel="publisher" target="_blank">
                        <img src="//ssl.gstatic.com/images/icons/gplus-32.png" alt="Google+" />
                    </a>
                    <a class="navbar-custom-button email-button" href="mailto:<?php echo get_option("pfc_theme_public_email"); ?>">&nbsp;</a>
                    <a class="navbar-custom-button my-twitter-follow-button" href="https://twitter.com/<?php echo get_option("pfc_theme_twitter_name");?>" target="_blank">&nbsp;</a>
                    <a class="navbar-custom-button rss-button" href="<?php bloginfo('rss2_url'); ?>">&nbsp;</a>
                </div>
            </div>
        </nav>

        <div id="wrapper" class="container">
            <div id="main" class="row">