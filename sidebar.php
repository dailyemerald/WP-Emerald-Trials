<div id="primary" class="widget-area" role="complementary">

	<div style="margin-left: 20px; border-bottom:2px solid #EEE;">
	<a href="http://bit.ly/MoTInH">
	    <img src="http://distilleryimage6.s3.amazonaws.com/581844b0bd7211e180c9123138016265_6.jpg"></img>
		<img style="margin-left: 35px; margin-top: 0px;" src="<?php bloginfo('template_directory'); ?>/images/FanPhotos.png"></img>
	</a>
	</div>
	
<ul class="xoxo" style="padding:20px;">

<?php if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

		
<?php endif; // end primary widget area ?>
			
			</ul>

		</div><!-- #primary .widget-area -->

<?php if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

	<div id="secondary" class="widget-area" role="complementary">
		<ul class="xoxo">
			<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
		</ul>
	</div><!-- #secondary .widget-area -->

<?php endif; ?>
