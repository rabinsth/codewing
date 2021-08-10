<?php get_header(); ?>

<div class="jumbotron text-center">
  <h1>Welcome to Codewing</h1>
  <p>You can  get awesome Theme Here!</p>
  
</div>

<div class="row">
	
	<div class="col-xs-12 col-sm-12">
		

<?php 
	
	if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>
		
			<h3 style="text-align: center;"><?php the_title(); ?></h3>
			
			
			<p><?php the_content(); ?></p>
			
			<hr>
		
		<?php endwhile;
		
	endif;
	?>
	
			


<?php get_footer(); ?>