<?php
/*
Template Name: Olympic Trials (template, Ivar)
*/
get_header(); 
?>
<style type="text/css">
#trials-lead-well {
	width: 220px;
	float: left;
	margin-right: 10px;
	font-size: 13px;
	line-height: 14px;
	border-right: 1px solid #CCC;
	padding-right: 10px;
}

#trials-lead-well > div {
	border-bottom: 1px solid #CCC;
	padding: 5px 0;
}
#trials-lead-well a {
	color: #333;
	
}

#trials-center-well {
	width: 400px;
	float: left;
	margin-top: -10px;
}
#content .trials-center-story {
	border-bottom: 3px solid #CCC;
}
#content .trials-center-story {
	padding: 10px 0px;
	margin: 0;
	font-size: 25px;
	line-height: 27px;
	font-family: "Helvetica Neue";
	font-weight: bold;
	letter-spacing: -0.5px;
}
#content .trials-center-story img {
	margin-top: 10px;
}
</style>

		<div id="container full-width">
			<div id="content" role="main">


				<div id="trials-lead-well">
					
					<?php	
						// The Query
						$the_query = new WP_Query('num_posts=30');

						// The Loop
						while ( $the_query->have_posts() ) : $the_query->the_post();
							echo '<div class="trials-lead-story">';

							echo '<a href="';
							the_permalink();
							echo '">';
							the_title();
							echo '</a>';

							echo '</div>';
						endwhile;

						// Reset Post Data
						wp_reset_postdata();
					?>
					
					
					<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
					new TWTR.Widget({
					  version: 2,
					  type: 'profile',
					  rpp: 4,
					  interval: 30000,
					  width: 240,
					  height: 1000,
					  theme: {
					    shell: {
					      background: '#ffffff',
					      color: '#000000'
					    },
					    tweets: {
					      background: '#ffffff',
					      color: '#000000',
					      links: '#004F27'
					    }
					  },
					  features: {
					    scrollbar: false,
					    loop: false,
					    live: false,
					    behavior: 'all'
					  }
					}).render().setUser('odesports').start();
					</script>
				</div><!-- #lead-well -->
	
				
				<div id="trials-center-well">
				<?php	
					// The Query
					$the_query = new WP_Query('category_name=2012-olympic-trials');

					// The Loop
					while ( $the_query->have_posts() ) : $the_query->the_post();
						echo '<div class="trials-center-story">';
					
						echo '<a class="title" href="';
						the_permalink();
						echo '">';
						the_title();
							
						the_post_thumbnail(array(400,400));
						echo '</a>';
						
						$embedHtmlFields = get_post_custom_values("embed_html");
						foreach ( $embedHtmlFields as $key => $value ) {
						    echo '<div style="padding-top:10px;">';
						    echo $value;
						    echo '</div>'; 
						}
						
						echo '</div>';
					endwhile;

					// Reset Post Data
					wp_reset_postdata();
				?>	
				</div><!-- #center-well -->
				
				
				
			</div><!-- #content -->
			
			<?php get_sidebar(); ?>
			
		</div><!-- #container -->

<?php get_footer(); ?>
