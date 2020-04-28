<?php
/*
Template Name: The Authors List
*/
?>

<?php

get_header(); ?>
<main id="insidemain">

 	<div class="frameit">
 							

					<ul class="author-col">
							<?php 
							$authors = get_users('role=author&orderby=display_name&order=ASC');

							foreach ($authors as $author) {
							    if (count_user_posts($author->ID) > 0) {
							       echo '<li class="listingauthors" id="' . $author->ID . '">' . $author->display_name . '</li>';
							    }
							} 
							?>
					</ul>

 	</div>
 



</main>
</div>	


 <?php 	get_footer();

?>