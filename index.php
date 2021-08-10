<?php get_header(); ?>
<div class="row">
  <div class="col-sm-3 col-xs-12 ml-2 mr-2" style="background-color:#bad5ef;">
  <?php get_sidebar(); ?>
</div>
  <div class="col-sm-8 col-xs-12 ">
  
  <?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('content',get_post_format()); ?>
			
			<?php endwhile;
			
		endif;
				
		?>
</div>
</div> 



<?php get_footer(); ?>