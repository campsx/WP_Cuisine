<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Ne pas t&eacute;l&eacute;charger cette page directement, merci !');
if (!empty($post->post_password)) { // if there's a password
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>

<h2><?php _e('Prot&eacute;g&eacute; par mot de passe'); ?></h2>
<p><?php _e('Entrer le mot de passe pour voir les commentaires'); ?></p>

<?php return;
	}
}

?>

<?php /* Affichage des commentaires */?>
<div class="comments">
<?php if ($comments) : ?>
	<h3>Commentaires</h3>
	<?php /* On affiche chaque commentaire */ ?>
	<?php foreach ($comments as $comment) : ?>
      <div class="a_comment">
            <div class="comment_title"> <strong>Par <?php comment_author_link() ?></strong> </div>
            <div class="comment_text"> <?php comment_text() ?> </div>
            <div class="comment_info"> Créé le <?php comment_date('j F, Y') ?> à <?php comment_time() ?></a></div>
      </div>
	<?php endforeach; ?>
<?php endif; ?>
</div>

<?php /* Affichage de la saisie */ ?>
<div class="comment_input col-lg-10">
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		<?php if ( $user_ID ) : ?>

			<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="D&eacute;connect&eacute; de ce compte">D&eacute;connection &raquo;</a></p>

		<?php else : ?>

			<p><input class="form-control" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="40" tabindex="1" />
			<label for="author"><small>Nom <?php if ($req) echo "(requis)"; ?></small></label></p>

			<p><input class="form-control" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="40" tabindex="2" />
			<label for="email"><small> E-mail <?php if ($req) echo "(requis)"; ?></small></label></p>

		<?php endif; ?>

		<p><textarea class="form-control" name="comment" id="comment" cols="60" rows="10" tabindex="4"></textarea></p>

		<p><input class="form-control" name="submit" type="submit" id="submit" tabindex="5" value="Envoyer" />
		<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
		</p>

		<?php do_action('comment_form', $post->ID); ?>
	</form>
</div>
