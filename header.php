<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php  bloginfo('charset'); ?>">
	<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>

	<?php wp_head(); ?>

</head>

<body>

	<div id="global-container">


		<header id="main-header">

			<h1 class="site-title"><?php bloginfo('name'); ?></h1>
			<h2 class="site-description"><?php bloginfo('description'); ?></h2>

		</header><!-- /#main-header -->


		<nav id="main-nav">
			<ul class="menu">
				<li><a href="">Inicio</a></li>
				<li><a href="">Portafolio</a></li>
				<li><a href="">Curriculum Vitae</a></li>
				<li><a href="">Blog</a></li>
				<li><a href="">Acerca de mi</a></li>
				<li><a href="">Contacto</a></li>
			</ul>
		</nav><!-- /#main-nav -->


		<section id="global-content" class="cf">
