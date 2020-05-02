<?php

get_header(); 
?>

<main id="homemain">
<!--svg here -->
<div class="home-content">



    							<!-- First POST -->
	
<?php
   $args = array (
   	'post_type' => 'post',
   	 'posts_per_page' => 1
 );
$query = new WP_Query($args);
while($query->have_posts()) : $query->the_post();
	$firstsection = $post->ID;
	?>
<div class="first_section">
		 <div class="wrapper_textandiconsize1">			
				<div class="wrapper_textsize1">
	<?php
				$posttags = get_the_tags();
				$count=0;
				if ($posttags) {
				foreach($posttags as $tag) {
					$count++;
					if (1 == $count) {
						echo '<p class="homepage-tag"><a href="'.get_tag_link($tag->term_id).'"> #'.$tag->name.'</a></p>';
					}	
				}}
				?></a>

				<a class="undecorated" href="<?php the_permalink(); ?>">
				   <h2><?php the_title(); ?></h2>
				   <p class="authortime_size2 somespace">
				  von <?php coauthors_posts_links(); ?>, <?php echo get_the_date('d.n.'); ?>
				</p>		
				<a class="undecorated" href="<?php the_permalink(); ?>">
				    <div class="text_size2"><?php the_excerpt(); ?></div></a>
				</div>
				<a class="undecorated" href="<?php the_permalink(); ?>">
				<div class="wrapper_iconsize1">
				 
				<?php the_post_thumbnail() ?>
			    </div></a>
		</div>
</div>
</a>
<?php endwhile; wp_reset_query(); ?>




									<!-- Second Posts section-->
<?php
   $args = array (
   	'post_type' => 'post',
   	 'posts_per_page' => 2,
   	 'post__not_in' => array($firstsection)
 );

$query = new WP_Query($args);
while($query->have_posts()) : $query->the_post();
	$secondsection = $post->ID;
	?>
<p class="whitespace"></p>
	<div class="second_section">							
				    <div class="wrapper_textandiconsize1">		
							<div class="wrapper_textsize2">				
							<?php
				$posttags = get_the_tags();
				$count=0;
				if ($posttags) {
				foreach($posttags as $tag) {
					$count++;
					if (3 == $count) {
						echo '<p class="homepage-tag"><a href="'.get_tag_link($tag->term_id).'"> #'.$tag->name.'</a></p>';}
				}}
				?>	
				<a class="undecorated" href="<?php the_permalink(); ?>">
				   <h3><?php the_title(); ?></h3>
				   <p class="authortime_size2 somespace">
				   von <?php coauthors_posts_links(); ?>, <?php echo get_the_date('d.n.'); ?>
				</p>
				<a class="undecorated" href="<?php the_permalink(); ?>">
							<div class="text_size2"><?php the_excerpt(); ?></div></a>
						    </div>
							<a class="undecorated" href="<?php the_permalink(); ?>">
						    <div class="wrapper_iconsize2">
							<?php the_post_thumbnail() ?>
							</div></a>
					</div>
	</a>				
	</div>
<?php endwhile; wp_reset_query(); ?>




								<!------GRADIENT---BOX-->
<div class="gradient_box">
				<!----------------- LINKS-->
			<div class="firstsession_gradbox">
			<div class="blocchetto">
			<p><?php the_field('gradient_text'); ?></p>
			</div>
</div>
						<!----------------- TEXT FIELD-->
				<div class="secondsession_gradbox">
					<div class="bg-wrapper">
					<div class="bg"></div>
					<div class="bg bg2"></div>
					<div class="bg bg3"></div>
					<div class="grad1content">
						<?php the_content(); ?>
					</div>
				</div>	
				</div>
</div>								
								   			<!-- Third Post section-->
<div class="third_section"> 
				<?php
				$args = array (
					'post_type' => 'post',
					'posts_per_page' => 8,
					'post__not_in' => array($firstsection, $secondsection)
				);
				$query = new WP_Query($args);
				while($query->have_posts()) : $query->the_post();
					$lastsection = $post->ID;
				?>
				<div class="wrapper_textsize3">
				<?php
				$posttags = get_the_tags();
				$count=0;
				if ($posttags) {
				foreach($posttags as $tag) {
					$count++;
					if (11 == $count) {
						echo '<p class="homepage-tag"><a href="'.get_tag_link($tag->term_id).'"> #'.$tag->name.'</a></p>';
					}
				}}?>

				<a class="undecorated" href="<?php the_permalink(); ?>">
				   <h4><?php the_title(); ?></h4></a>
				   <p class="authortime_size2 somespace">
				   von <?php coauthors_posts_links(); ?>, <?php echo get_the_date('d.n.'); ?>
				</p>
				<a class="undecorated" href="<?php the_permalink(); ?>">
				<div class="text_size2"><?php the_excerpt(); ?></div>
				</a>
				</div>
				<?php endwhile; wp_reset_query(); ?>                 
</div>

--------
<div class="more-posts">
<ul>
   <li><button>this will be a button</button></li>
<?php
					$currentPost = get_query_var('paged');
					$morePosts = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 6,
						'post__not_in' => array($firstsection, $secondsection, $lastsection),
						'paged' => $currentPost
					));
						if($morePosts->have_posts()) :
							while ($morePosts->have_posts()) :
								$morePosts->the_post();
								?><li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
								<?php
							endwhile;
							next_posts_link('next', $currentPost->max_num_pages);
						endif;	
				 wp_reset_query(); ?>
				</ul>
</div>
</div>

</main>

<?php get_footer(); ?>
<!-- Scripts -->




