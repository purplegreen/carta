<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Diese Seite kann nicht direkt geladen werden.');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">Dieser Text ist passwortgesch&uuml;tzt. Bitte geben Sie das Passwort ein.<p>

			<?php
			return;
		}
	}

	
	$oddcomment = 'alt';
?>

			<div class="comments" id="comments">

				

				<p class="the-commenter">Sie möchten diesen Text kommentieren?</p>

				<form action="<?php bloginfo('template_url'); ?>/comments-post.php" method="post" id="commentform">

					<div class="formline">
						<label for="author">Ihr Name</label>
						<input type="text" id="author" value="<?php echo $comment_author; ?>" placeholder="Pflichtangabe" tabindex="1" required name="author" />
					</div>

					<div class="formline">
						<label for="mail">Ihre E-Mail-Adresse</label>
						<input type="email" id="mail" value="<?php echo $comment_author_email; ?>" placeholder="Pflichtangabe" tabindex="2" required name="email"/>
					</div>

					<div class="formline">
						<label for="website">Ihre Webseite</label>
						<input type="url" id="website" value="<?php echo $comment_author_url; ?>" placeholder="Optional" tabindex="3" name="url"/>
					</div>
					
					<label for="comment">Ihr Kommentar (<a href="<?php echo get_settings('home'); ?>/kommentarkodex">Kodex: Kommentar maximal 30 Tage nach Veröffentlichung des Beitrags möglich!</a>)</label>
					<textarea name="comment" id="comment" tabindex="4" required></textarea>

					<?php do_action('comment_form', $post->ID); ?>

					<input name="submit" type="submit" id="submit" tabindex="5" value="Absenden">
					<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

				</form>

                <p class="the-commenter"><span class="i-comment"></span><?php comments_number( '', 'Ein Kommentar', '% Kommentare' ); ?></p>

				<?php foreach (array_reverse($comments) as $comment) : ?>
				<div class="comment" id="comment-<?php comment_ID() ?>">
					<div class="permalink"><a href="#comment-<?php comment_ID() ?>" title="Permalink"><span class="i-comment"></span></a></div>
					<div class="comment-text">
						<div class="the-commenter"><?php comment_author_link() ?> | <?php comment_time('d.m.Y') ?> | <?php comment_time('H:i') ?> Uhr</span></div>
						<?php comment_text() ?>
					</div>
				</div>
				<?php endforeach; ?>


			</div>