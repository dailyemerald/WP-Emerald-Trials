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

<!-- start Mixpanel -->
<script type="text/javascript">(function(c,a){var b,d,h,e;b=c.createElement("script");b.type="text/javascript";b.async=!0;b.src=("https:"===c.location.protocol?"https:":"http:")+'//api.mixpanel.com/site_media/js/api/mixpanel.2.js';d=c.getElementsByTagName("script")[0];d.parentNode.insertBefore(b,d);a._i=[];a.init=function(b,c,f){function d(a,b){var c=b.split(".");2==c.length&&(a=a[c[0]],b=c[1]);a[b]=function(){a.push([b].concat(Array.prototype.slice.call(arguments,0)))}}var g=a;"undefined"!==typeof f?g=
a[f]=[]:f="mixpanel";g.people=g.people||[];h="disable track track_pageview track_links track_forms register register_once unregister identify name_tag set_config people.set people.increment".split(" ");for(e=0;e<h.length;e++)d(g,h[e]);a._i.push([b,c,f])};a.__SV=1.1;window.mixpanel=a})(document,window.mixpanel||[]);
mixpanel.init("6430a27843701ed6a70443f0b7ee4eff");</script>
<!-- end Mixpanel -->

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

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<div id="wrapper" class="hfeed">
	<div id="header">
		
		<div id="top-banner-ad-wrapper">
			<!-- Main Banner Ad -->
			<div id="top-banner-ad" style="float: left">
				<?php adtag_banner(); ?>	
			</div>
			
			<div style="clear:both" />
		</div>
		
		<div id="masthead" style="margin-top: -18px;">
			<div id="flag">
				<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/emerald.png"></img></a></span>
			</div>
			
			<div id="socialmedia" style="margin-top:-38px; padding-bottom: 10px;">
				
				<iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/follow_button.1340179658.html#_=1340391604138&amp;id=twitter-widget-0&amp;lang=en&amp;screen_name=dailyemerald&amp;show_count=false&amp;show_screen_name=true&amp;size=m" class="twitter-follow-button" style="width: 139px; height: 20px; " title="Twitter Follow Button"></iframe>

				<div style="margin-top: -2px;" class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-href="http://facebook.com/dailyemerald" data-send="false" data-layout="button_count" data-width="90" data-show-faces="true">
					<span style="height: 20px; width: 90px; ">
						<iframe id="f3b8134084" name="f2bf3c9e8c" scrolling="no" style="overflow: hidden; margin-top:-3px; height: 20px; width: 90px; border: none; " title="Like this content on Facebook." class="fb_ltr " src="http://www.facebook.com/plugins/like.php?api_key=197312536953017&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D8%23cb%3Df1c76cbf4%26origin%3Dhttp%253A%252F%252Ftesting.dailyemerald.com%252Ff209cb793%26domain%3Dtesting.dailyemerald.com%26relation%3Dparent.parent&amp;extended_social_context=false&amp;href=http%3A%2F%2Ffacebook.com%2Fdailyemerald&amp;layout=button_count&amp;locale=en_US&amp;node_type=link&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=90"></iframe>
					</span>
				</div>
				
				</div><!--social media -->

		
			

			
		</div><!-- #masthead -->
		
		<div id="access" role="navigation">
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>

			<?php if ( !is_search() ): ?>
				<div class="site-search"><?php get_search_form(); ?></div>
			<?php endif; ?>
		</div><!-- #access -->	
					

	</div><!-- #header -->

	<div id="main">