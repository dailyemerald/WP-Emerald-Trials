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

						$leadQuery = new WP_Query('showposts=25');

						// The Loop
						while ( $leadQuery->have_posts() ) : $leadQuery->the_post();
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
					
					
				
				</div><!-- #lead-well -->
	
				
				<div id="trials-center-well">
				<?php	
					// The Query
					$the_query = new WP_Query('category_name=editors-picks&posts_per_page=20&paged='.get_query_var( 'page' ));

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
					
				    echo '<div id="footer-paginate" style="position:relative; width:400px; height:50px; font-size: 15px; font-weight:bold; margin-top:10px;">';
				
					$currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;
				
					if ($currentPage > 1) {
					  $newerPage = $currentPage - 1;	
					  echo '<a style="position:absolute; left:0;" href="?page='.$newerPage.'">« Newer stories</a>';
					}

					$olderPage = $currentPage + 1;

					echo "<!-- currentPage:".$currentPage.": -->";
					echo '<a style="position:absolute; right:0;" href="?page='.$olderPage.'">Older stories »</a>';
					
					echo "</div>";

					// Reset Post Data
					wp_reset_postdata();
				?>	
				</div><!-- #center-well -->
				
				
				
			</div><!-- #content -->
			
			<?php get_sidebar(); ?>
			
		</div><!-- #container -->

		<script type="text/javascript">
		  mixpanel.track("Viewed Homepage",
		    {"Title":"Homepage (Trials Template)",
		     "Date":"<?php the_date( l ); ?>"});
		</script>

<?php get_footer(); ?>
