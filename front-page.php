<?php

get_header(); 
?>

<main id="homemain">
<!--svg here -->
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
		 <div class="wrapper_textandiconsize1">			
			<div class="wrapper_textsize1">
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

		<p class="whitespace"></p>
		<div class="second_section">							
				    <div class="wrapper_textandiconsize1">		
							<div class="wrapper_textsize2">				
		<?php	$query2->the_post(); ?>	
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
</div>
											<!-- More Posts-->
		<div class="more-posts">
		<ul>
		<?php

					$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
					$query4 = new WP_Query( array( 
						'post_type' => 'post', 
						'offset' => 9,
						'posts_per_page' => 5, 
						'paged' => $paged 
					));
						while($query4->have_posts()) : ?>
						<?php	$query4->the_post();?>	
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> 
								<?php
			 endwhile;
			 next_posts_link( __( 'Next' ), $query4->max_num_pages );
			 previous_posts_link( __( 'Prev') ); ?>
		  
		  <?php 		
				wp_reset_postdata(); ?>  
				</ul>
	

</div>	
</div>
</main>

<?php get_footer(); ?>
<!-- Scripts -->