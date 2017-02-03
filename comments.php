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

<div class="comments">
<?php if ($comments) : ?>
	<h3>Commentaire</h3>
	<?php /* On affiche chaque commentaire */ ?>
	<?php foreach ($comments as $comment) : ?>
		<div class="comment_title"> <strong>Par <?php comment_author_link() ?></strong> </div>
		<div class="comment_text"> <?php comment_text() ?> </div>
		<div class="comment_info"> Créé le <?php comment_date('j F, Y') ?> à <?php comment_time() ?></a></div>
	<?php endforeach; ?>
<?php endif; ?>
</div>
