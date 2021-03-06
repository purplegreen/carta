<?php

get_header(); 
?>

<main id="homemain">

<div class="banner-content">
<p><?php the_field('banner_anim', 'options'); ?></p>
</div>
<svg class="svg-claim" 
width="314px" height="260px" viewBox="0 0 314 260"  version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="anim">
            <rect id="RectangOLA" fill="#F85621" transform="translate(150.500000, 136.500000) rotate(-7.000000) translate(-150.500000, -136.500000) " x="64" y="50" width="173" height="173"></rect>
            <rect id="RectangOLO" fill="#64FFE5" transform="translate(165.500000, 129.500000) rotate(11.000000) translate(-165.500000, -129.500000) " x="79" y="43" width="173" height="173"></rect>
            <polygon id="RectangOLE" fill="#F7E9DE" fill="#F7E9DE" transform="translate(179.558659, 119.609196) rotate(4.000000) translate(-179.558659, -119.609196) " points="91 33 268.117318 33.2183912 268.117318 206.218391 95.1173177 206.218391"></polygon>
        </g>
    </g>
</svg>


<div class="home-content">



    							<!-- First POST -->
				
		<?php
   		$args1 = array (
   		'post_type' => 'post',
		'posts_per_page' => 1
 		);
		$query1 = new WP_Query($args1);
		while($query1->have_posts()) : 
		$query1->the_post();
		?>
<div class="first_section">
		 <div class="wrapper_textandiconsize0">	
			
			<div class="wrapper_textsize1">
			<?php
				$posttags = get_the_tags();
				$count=0;
				if ($posttags) {
				foreach($posttags as $tag) {
					$count++;
					if (1 == $count) {
						echo '<p class="homepage-tag"><a href="'.get_tag_link($tag->term_id).'"> #'.$tag->name.'</a></p>';}
				}}?>
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
					<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'fittin' ) ); ?>
					
					</div>
				</a>
		    </div>
		</div>
		</a>
		<?php endwhile; wp_reset_postdata(); ?>
</div>


<!-- Second Posts section-->


    <?php
   		$args2 = array (
   		'post_type' => 'post',
		'posts_per_page' => 2,
		'offset' => 1
 		);
		$query2 = new WP_Query($args2);
		while($query2->have_posts()) : ?>
		<?php	$query2->the_post(); ?>

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
					if (1 == $count) {
						echo '<p class="homepage-tag"><a href="'.get_tag_link($tag->term_id).'"> #'.$tag->name.'</a></p>';
					}
				}
				}
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
				<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'fittin' ) ); ?>
				</div></a>
				</div>
		</a>				
		</div>
				<?php endwhile; wp_reset_postdata(); ?>




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
   		$args3 = array (
   		'post_type' => 'post',
		'posts_per_page' => 6,
		'offset' => 3
 		);
		$query3 = new WP_Query($args3);
		while($query3->have_posts()) : ?>
 
 		<div class="wrapper_textsize3">
		 <?php
				$posttags = get_the_tags();
				$count=0;
				if ($posttags) {
				foreach($posttags as $tag) {
					$count++;
					if (1 == $count) {
						echo '<p class="homepage-tag"><a href="'.get_tag_link($tag->term_id).'"> #'.$tag->name.'</a></p>';
					}}
				}
				?>
 		<?php	$query3->the_post();?>	
				<a class="undecorated" href="<?php the_permalink(); ?>">
				   <h4><?php the_title(); ?></h4></a>
				   <p class="authortime_size2 somespace">
				   von <?php coauthors_posts_links(); ?>, <?php echo get_the_date('d.n.'); ?>
				</p> 						
				<a class="undecorated" href="<?php the_permalink(); ?>">
				<div class="text_size2"><?php the_excerpt(); ?></div>
				</a>
				</div>
				<?php endwhile; 		
				wp_reset_postdata(); ?>     
				<a name="blog" class="anchor"></a>            
</div>
							<!-- More Posts-->


							<div class="more-posts">
		
	
		
<?php
					$paged = (get_query_var('page')) ? get_query_var('page') : 3;
					$query4 = new WP_Query( array( 
						'post_type' => 'post', 
						'posts_per_page' => 10, 
						'paged' => $paged,
					));
						while($query4->have_posts()) : ?>
						<?php	$query4->the_post();?>
						<div class="more-posts-item">				
						<?php
				$posttags = get_the_tags();
				$count=0;
				if ($posttags) {
				foreach($posttags as $tag) {
					$count++;
					if (1 == $count) {
						echo '<p class="homepage-tag"><a href="'.get_tag_link($tag->term_id).'"> #'.$tag->name.'</a></p>';
					}}
				}
				?>
 		
				<a class="undecorated" href="<?php the_permalink(); ?>">
				   <h4><?php the_title(); ?></h4></a>
				   <p class="authortime_size2 somespace">
				   von <?php coauthors_posts_links(); ?>, <?php echo get_the_date('d.n.'); ?>
				</p> 	
			</div>
								<?php
			 endwhile; ?>
		<div class="next-ones">
		<span class="pagenavi">
			 <?php 
			 next_posts_link( __( 'Ältere Artikel' ), $query4->max_num_pages ); ?>
			</span>
			</div>
		  <?php 		
				wp_reset_postdata(); ?>  
				
	

</div>	
</div>
</main>


<?php get_footer(); ?>

	
