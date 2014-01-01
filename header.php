<!DOCTYPE html>
<html>
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
    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <?php
	    /*
	     * We add some JavaScript to pages with the comment form
	     * to support sites with threaded comments (when in use).
	     */
	    if ( is_singular() && get_option( 'thread_comments' ) )
		    wp_enqueue_script( 'comment-reply' );

	    /*
	     * Always have wp_head() just before the closing </head>
	     * tag of your theme, or you will break many plugins, which
	     * generally use this hook to add elements to <head> such
	     * as styles, scripts, and meta tags.
	     */
	    wp_head();
    ?>
  </head>
  <body>
	<div id="main">
