<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pacific Medical</title>
	<link rel="stylesheet" href="css/style.css">
    <?php wp_head(); ?>
</head>

<body>	
	<header>
		<div class="top-navigation">
		<a href="<?php echo home_url(  ); ?>"><img src="<?php echo get_bloginfo('template_url') ?>/img/logo.png" alt="pacific-medical-logo"/></a>
		<ul class="contact">
			<li><i class="fas fa-phone-alt"></i><a href="#">644-223-4975</a></li>
			<li><i class="fas fa-envelope"></i><a href="#">pacific@medical.com</a></li>
		</ul>
	</div>

	<nav>
		<ul class="nav-links">
			<li class="nav-item"><a href="<?php echo site_url(' '); ?>">Inicio</a></li>
			<li class="nav-item"><a href="#">Todos los temas&#8964;</a>
				<ul class="dropdown">
					<li class="dropdown-item"><a href="<?php echo site_url('/index.php'); ?>/category/medicina-general/">Medicina general</a></li>
					<li class="dropdown-item"><a href="<?php echo site_url('/index.php'); ?>/category/cirugia-bariatrica/">Cirugía bariátrica</a></li>
					<li class="dropdown-item"><a href="<?php echo site_url('/index.php'); ?>/category/psicologia/">Psicología</a></li>
					<li class="dropdown-item"><a href="<?php echo site_url('/index.php'); ?>/category/nutricion/">Nutrición</a></li>
					<li class="dropdown-item"><a href="<?php echo site_url('/index.php'); ?>/category/ginecologia/">Ginecología</a></li>
					<li class="dropdown-item"><a href="<?php echo site_url('/index.php'); ?>/category/embarazo/">Embarazo</a></li>
					<li class="dropdown-item"><a href="<?php echo site_url('/index.php'); ?>/category/neumologia/">Neumología</a></li>
				</ul>
			</li>
			<li class="nav-item"><a href="#">Tips</a></li>
			<li class="nav-item"><a href="#">Noticias</a></li>
			<li class="nav-item"><a href="#">Médicos</a></li>
		</ul>
	</nav>
	</header>
