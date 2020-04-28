
<?php
/*
Template Name: Search Page
*/
?>
<?php
get_header(); ?>


<main id="insidemain">
	
			<!----------------- search form-->	
	
	<div class="search-wrapper">

			<div class="search-area">
			<?php get_search_form(); ?>
			</div>





	 		<!----------------- search result display-->

				<div class="search-results-box">


               <?php 
				while(have_posts()){
					the_post(); ?>
				<p class="search-result-items">					
				<h3 class="undecorated">
				<a class="undecorated" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h3>
				
							<div class="text_size2"><?php the_excerpt(); ?></div>
			
				<?php }
				
				?></p></p>

			</div>
	</div>

</main>

<?php 	get_footer();

?>







