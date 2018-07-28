<!DOCTYPE html>
<html>
<head>
	<title>Tema Personalizado</title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
</head>
<body>
	<div class="logo">
		<img width="45" height="45"  src="<?php bloginfo('template_url'); ?>/img/imagem2.png" />
	</div>

	<header>
		<div class="container">
			<h1>FC Barcelona</h1>
		</div>
	</header>

	<?php $defaults = array(
		'menu'			=> 'primary',
		'container'		=> 'nav',
		'menu_class'	=> 'menu-principal',
		
	);
	?>

	<?php wp_nav_menu( $defaults ); ?>

	<div class="container">