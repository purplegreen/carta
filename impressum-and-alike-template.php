<?php

/*
Template Name: Impressum and alike pages
*/

?>

<?php

get_header(); ?>

 
 <main class="moretopmargin" id="insidemain">

	 	<div class="frameit">


               <?php 
				while(have_posts()){
					the_post(); ?>
			
							<h4 class="undecorated morespace">
								<a class="undecorated" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h4>

				
							<div class="text_size2"><?php the_content(); ?></div>

				
			

				<p class="pagination">	
				<?php }
				 	echo paginate_links();
				?></p>

			</div>
</main>

 <?php 	get_footer();

?>


