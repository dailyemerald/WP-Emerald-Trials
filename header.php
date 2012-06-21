<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="google-site-verification" content="tKZ-zBCyoOqqxlUVpAKtqTpjHTQB7q98hArOIdUW2k4" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="http://www.dailyemerald.com/favicon.ico" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>

</head>

<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=197312536953017";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="wrapper" class="hfeed">
	<div id="header">
		
		<div id="top-banner-ad-wrapper">
			<!-- Main Banner Ad -->
			<div id="top-banner-ad">
				<?php adtag_banner(); ?>	
			</div>
		</div>
		
		<div id="masthead">
			<div id="flag">
				<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/emeraldtrials.png"></img></a></span>
			</div>
		</div><!-- #masthead -->
		
		<div id="access" role="navigation">
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>

			<?php if ( !is_search() ): ?>
				<div class="site-search"><?php get_search_form(); ?></div>
			<?php endif; ?>
		</div><!-- #access -->	
					

	</div><!-- #header -->

	<div id="main">