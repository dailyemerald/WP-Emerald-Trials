<?php get_header(); ?>

<div id="container">
	<div id="content" role="main">

	<?php get_template_part( 'loop', 'single' ); ?>

	</div><!-- #content -->
</div><!-- #container -->

<?php 
// don't show the sidebar if the post is a multimedia post
if (in_category('multimedia')) {
	//nothing
} else {	
	get_sidebar(); 
}	
?>

<?php

?>

<script type="text/javascript">
  mixpanel.track("Viewed Post", {
	         "Title": "<?php single_post_title(); ?>",
            "Author": "<?php the_author(); ?>",
          "Category": "<?php $category = get_the_category(); echo $category[0]->cat_name; ?>",
              "Date": "<?php the_date( l ); ?>",
     "Comment Count": "<?php comments_number(); ?>"
  });
</script>

<?php 
get_footer();
?>


