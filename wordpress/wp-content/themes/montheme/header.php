<!DOCTYPE html>
<html>
<head>
	<title>
		<?php wp_title();
		echo" | ";
		bloginfo('name');
		?>
	</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
	<?php wp_head(); ?>
</head>
<body>
<?php

	$data = get_object_vars(get_theme_mod('header_image_data'));

	$attachement_id = is_array($data) && isset($data['attachement_id']) ? 

	if(get_header_image())
	{
		echo '<img src="'.get_header_image().'" alt="logo">';
	}

	header_image();

	wp_nav_menu(array(
		'theme-location' => 'main_menu',
		'container_class' => 'navbar nav'
	));
?>