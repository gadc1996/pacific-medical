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
		<img src="<?php echo get_bloginfo('template_url') ?>/img/logo.png" alt="pacific-medical-logo"/>
		<ul class="contact">
			<li><i class="fas fa-phone-alt"></i><a href="#">644-223-4975</a></li>
			<li><i class="fas fa-envelope"></i><a href="#">pacific@medical.com</a></li>
		</ul>
	</div>

	<nav>
		<ul class="nav-links">
			<li class="nav-item"><a href="#">Inicio</a></li>
			<li class="nav-item"><a href="#">Todos los temas&#8964;</a>
				<ul class="dropdown">
					<li class="dropdown-item"><a href="#">Medicina general</a></li>
					<li class="dropdown-item"><a href="#">Cirugía bariátrica</a></li>
					<li class="dropdown-item"><a href="#">Psicología</a></li>
					<li class="dropdown-item"><a href="#">Nutrición</a></li>
					<li class="dropdown-item"><a href="#">Ginecología</a></li>
					<li class="dropdown-item"><a href="#">Embarazo</a></li>
					<li class="dropdown-item"><a href="#">Nuemología</a></li>
				</ul>
			</li>
			<li class="nav-item"><a href="#">Tips</a></li>
			<li class="nav-item"><a href="#">Noticias</a></li>
			<li class="nav-item"><a href="#">Médicos</a></li>
		</ul>
	</nav>
	</header>