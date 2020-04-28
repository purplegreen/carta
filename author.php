

<?php

get_header(); ?>

 
 <main id="content" class="postgroup" role="main">
 	
 	<div class="wrap-it-up">

<!----------------- author's info--> 		

<div class="authorbiobox">

		 Beitr&auml;ge von <h3><?php the_author(); ?></h3>
		 
		 <p class="morespace"></p>

		<p class="author-bio"><?php userphoto_the_author_photo() ?><?php the_author_meta('description'); ?></p>	
			</div>


<!----------------- author's articles-->	

		<section id="container" class="author-posts">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'content', 'author' ); ?>

			<?php endwhile; 
			if ($wp_query->found_posts > 8) {
				echo "<div class='infinite-loader' id='infinite-handle'><span class='i-arrow-down'></span><br />Ältere Artikel einblenden</div>";
			}
			endif; ?>

		</section>
	</div>



			
</main>

 <?php 	get_footer();

?>