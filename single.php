<?php

get_header(); ?>


<main id="insidemain">

<?php	while(have_posts()){
		the_post(); ?>

<div class="topbanner">
			<p class="iconinside">
			
			<?php 
			
			the_post_thumbnail('post-thumbnail', ['class' => 'fit-single']);
			// the_post_thumbnail( 'thumbnail', array( 'class' => 'fit-single' ) ); 
			
			?>
			
			<p class="img-overlay">	
			</p>
			<p>

			<div class="posttitlein">
			<?php
				$posttags = get_the_tags();
				$count=0;
				if ($posttags) {
				foreach($posttags as $tag) {
					$count++;
					if (1 == $count) {
						echo '<p id="in-tag"><a href="'.get_tag_link($tag->term_id).'"> #'.$tag->name.'</a></p>';}
				}}
				?>
			<h2 class="title-inside"><?php the_title(); ?></h2>
			</div>
</div>

<div class="article-wrapper">
			<div class="article-text-wrapper">
			<div class="highlight_text"><p><?php the_field('highlight_text'); ?></p></div>		
			<p class="morespace">
			von <?php coauthors_posts_links(); ?>, <?php the_date('j.n.y'); ?>
				</p>

			<div class="the-content"><?php the_content(); ?></div>
			<div class="article-sub-wrapper the-content"><?php the_field('article_sub_text', 'options'); ?></div>

</div>	    
	<div class="wrap-tags">	
	<?php the_tags( 'Topics:  ', ' |  ', '  ' ); ?>
	</div>

</div>			
</main>

 	<?php }

 	get_footer();

?>