<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<div id="post-<?php the_ID(); ?>" <?php post_class('single'); ?>>
	
	<h2 class="entry-title"><?php the_title(); ?></h2>
						
	<?php if ( get_post_meta($post->ID, 'show_featured_image', true)  && 
			   get_post_meta($post->ID, 'show_featured_image', true ) == "false") {
					      // do nothing
				  } else {
					if ( has_post_thumbnail() ) { 
			?>
				<div class="entry-lead-image">
					<?php the_post_thumbnail(array(670,540)); ?>
				</div>
				<div class="entry-lead-image-caption">
					<?php the_post_thumbnail_caption(); ?>
				</div>
	<?php
			} // close the if that checked we actually have a post thumbnail before we write it out.
		} // close the if that checked if we were going to hide the image based on the custom filed "show_featured_image"
	?>
	
	<?php if (in_category('multimedia')) { ?>
	<div class="copyright-notice" style="margin-bottom:3px;">
		<span style="font-size: 12px;"><i>All photos and video are copyright Oregon Daily Emerald. All unauthorized use is strictly prohibited. Please contact <a href="mailto:publisher@dailyemerald.com">publisher@dailyemerald.com</a> for licensing.</i></span>
	</div>
	<?php } ?>

	<div class="entry-meta">
		<div class="byline"><?php do_action( 'ode_author_posts_link' ); ?></div>
		<div class="timestamp"><?php do_action( 'ode_timestamp' ); ?></div>
	</div><!-- .entry-meta -->
	
	<div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false"></div>
	
	<div class="entry-content">
		<?php the_content(); ?>
		<p><?php the_tags('Related topics: ', ', ', '<br />'); //IV, 20120117 ?></p>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	
	<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
		<div id="entry-author-info">
			<div id="author-avatar">
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
			</div><!-- #author-avatar -->
			<div id="author-description">

				<h2><?php printf( esc_attr__( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
				<?php the_author_meta( 'description' ); ?>
				<div id="author-link">
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
						<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyten' ), get_the_author() ); ?>
					</a>
				</div><!-- #author-link	-->
				
			</div><!-- #author-description -->
		</div><!-- #entry-author-info -->
	<?php endif; ?>
	
	<div class="entry-utility">
		<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-utility -->
</div><!-- #post-## -->
	
<div id="nav-below" class="navigation">
	<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
	<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
</div><!-- #nav-below -->

<?php comments_template( '', true ); ?>
	
<?php endwhile; // end of the loop. ?>