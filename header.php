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
		<div class="mobil-nav">
			<a class="nav-item" href="<?php echo site_url(' '); ?>">INICIO</a>
			<a class="nav-item" href="#">TODOS LOS TEMAS&#8964;</a>
				<!-- <ul class="dropdown">
					<li class="dropdownitem"><a href="<?php echo site_url('/index.php'); ?>/category/medicina-general/">Medicina general</a></li>
					<li class="dropdown-item"><a href="<?php echo site_url('/index.php'); ?>/category/cirugia-bariatrica/">Cirugía bariátrica</a></li>
					<li class="dropdown-item"><a href="<?php echo site_url('/index.php'); ?>/category/psicologia/">Psicología</a></li>
					<li class="dropdown-item"><a href="<?php echo site_url('/index.php'); ?>/category/nutricion/">Nutrición</a></li>
					<li class="dropdown-item"><a href="<?php echo site_url('/index.php'); ?>/category/ginecologia/">Ginecología</a></li>
					<li class="dropdown-item"><a href="<?php echo site_url('/index.php'); ?>/category/embarazo/">Embarazo</a></li>
					<li class="dropdown-item"><a href="<?php echo site_url('/index.php'); ?>/category/neumologia/">Neumología</a></li>
				</ul> -->
			
			<a class="nav-item" href="<?php echo site_url('/index.php'); ?>/doctors/">Doctors</a>
			<a class="nav-item" href="<?php echo site_url('/index.php'); ?>/category/tips/">TIPS</a>
			<a class="nav-item" href="<?php echo site_url('/index.php'); ?>/category/noticias/">NOTICIAS</a>
		</ul>
		</div>
		<div class="burger">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
<div class="top-navigation">
		<a href="<?php echo home_url(  ); ?>"><img src="<?php echo get_bloginfo('template_url') ?>/img/logo.png" alt="pacific-medical-logo"/></a>
	</div>
	<nav>
		
<ul class="nav-links">
			<li class="nav-item"><a href="<?php echo site_url(' '); ?>">INICIO</a></li>
			<li class="nav-item"><a href="#">TODOS LOS TEMAS&#8964;</a>
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
			<li class="nav-item"><a href="<?php echo site_url('/index.php'); ?>/category/tips/">TIPS</a></li>
			<li class="nav-item"><a href="<?php echo site_url('/index.php'); ?>/category/noticias/">NOTICIAS</a></li>
			<li class="nav-item"><a href="<?php echo site_url('/index.php'); ?>/doctors/">DOCTORES</a></li>

		</ul>
	</nav>
	</header>
