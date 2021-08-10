<?php get_header(); ?>

<div class="jumbotron text-center" style="background-color:#8cbdef2">
  <h1>Welcome to Codewing</h1>
  <p>You can  get awesome Theme Here!</p>
  
</div>

<div class="row">
	
<div class="col-sm-2"></div>
	<div class="col-xs-12 col-sm-8">
	<?php

	$lastBlog = new WP_Query('type= post&posts_per_page=1');
	if( $lastBlog->have_posts() ):
			
		while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
			
			<?php get_template_part('content',get_post_format()); ?>
		
		<?php endwhile;
		
	endif;
	?>

	<?php
	//print 2 page without first post
	$lastBlog = new WP_Query('type= post&posts_per_page=2&offset = 1');
	if( $lastBlog->have_posts() ):
			
		while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
			
			<?php get_template_part('content',get_post_format()); ?>
		
		<?php endwhile;
		
	endif;

	
	
	?>
	
	</div>
	
	<!--
	<div class="col-xs-12 col-sm-4>
	<?php get_sidebar(); ?>
	</div>
	-->
	
</div>

<?php get_footer(); ?>