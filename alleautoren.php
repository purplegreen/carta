<?php

/*
Template Name: Nur für "Alle Autoren"
*/

?>

	<?php get_header(); ?>

	<main id="insidemain">

	 	<div class="frameit">


				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		

					<article>
					 	
					<a href="<?php bloginfo('url'); ?>/author/<?php the_author_meta('user_nicename', $id) ?>">
					<div class="sidebyside">
									<?php contributors(); ?>
								</div>
								</a>

					</article>

				<?php endwhile; endif; ?>

		</div>


	
	</main>
	
</div> <!-- (closing div opened in header) .all -->

 <?php 	get_footer();

?>