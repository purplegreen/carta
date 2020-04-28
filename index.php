<?php

get_header(); ?>

 <main id="insidemain">

	 	<div class="frameit">


               <?php 
				while(have_posts()){
					the_post(); ?>


		

				<div class="authortime_size2"><?php the_author(); ?> <?php the_time('d.m.y');?> </div>

				
							<h3 class="undecorated">
								<a class="undecorated" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>

				
							<div class="text_size2"><?php the_excerpt(); ?></div>

				
			

				<p class="pagination">	
				<?php }
				 	echo paginate_links();
				?></p>

			</div>
</main>

 <?php 	get_footer();

?>