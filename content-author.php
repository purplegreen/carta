			




<article id="post-<?php the_ID(); ?>" class="content-author">





	<!----------------- display author's articles -->


	<div class="autorsarticles">
					
					<h4><a class="undecorated" href="<?php the_permalink() ?>" rel="bookmark" title="Permalink"><?php the_title(); ?></a></h4>

					<div class="info-article">
						<p class="authortime_size2"><?php /*coauthors_posts_links();*/ ?><span title="<?php the_time('H:i') ?> Uhr"><?php the_time('d.m.Y') ?></p>

					   <p> <?php echo(get_the_excerpt()); ?> <a href="<?php the_permalink() ?>"  rel="bookmark" title="Permalink">[&hellip;]</a></p>


	</div>





</article>