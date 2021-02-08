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
			<a class="nav-item" href="<?php echo site_url('/index.php'); ?>/category/medicina-general/">MEDICINA GENERAL</a>
			<a class="nav-item" href="<?php echo site_url('/index.php'); ?>/category/cirugia-bariatrica/">CIRUGÍA BARIÁTRICA</a>
			<a class="nav-item" href="<?php echo site_url('/index.php'); ?>/category/psicologia/">PSICOLOGÍA</a>
			<a class="nav-item" href="<?php echo site_url('/index.php'); ?>/category/nutricion/">NUTRICIÓN</a>
			<a class="nav-item" href="<?php echo site_url('/index.php'); ?>/category/ginecologia/">GINECOLOGÍa</a>
			<a class="nav-item" href="<?php echo site_url('/index.php'); ?>/category/embarazo/">EMBARAZO</a>
			<a class="nav-item" href="<?php echo site_url('/index.php'); ?>/category/neumologia/">NEUMOLOGÍA</a>
			<a class="nav-item" href="<?php echo site_url('/index.php'); ?>/doctors/">DOCTORES</a>
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
		<a href="<?php echo home_url(  ); ?>"><img src="<?php echo get_bloginfo('template_url') ?>/assets/img/logo.png" alt="pacific-medical-logo"/></a>
	</div>
	<nav>
		
<ul class="nav-links">
			<li class="nav-item"><a href="<?php echo site_url(' '); ?>">INICIO</a></li>
			<li class="nav-item"><a href="#">TODOS LOS TEMAS&#8964;</a>
				<ul class="dropdown">
					<li class="dropdown-item"><a href="<?php echo site_url('/index.php'); ?>/category/medicina-general/">MEDICINA GENERAL</a></li>
					<li class="dropdown-item"><a href="<?php echo site_url('/index.php'); ?>/category/cirugia-bariatrica/">CIRUGÍA BARIÁTRICA</a></li>
					<li class="dropdown-item"><a href="<?php echo site_url('/index.php'); ?>/category/psicologia/">PSICOLOGÍA</a></li>
					<li class="dropdown-item"><a href="<?php echo site_url('/index.php'); ?>/category/nutricion/">NUTRICIÓN</a></li>
					<li class="dropdown-item"><a href="<?php echo site_url('/index.php'); ?>/category/ginecologia/">GINECOLOGÍa</a></li>
					<li class="dropdown-item"><a href="<?php echo site_url('/index.php'); ?>/category/embarazo/">EMBARAZO</a></li>
					<li class="dropdown-item"><a href="<?php echo site_url('/index.php'); ?>/category/neumologia/">NEUMOLOGÍA</a></li>
				</ul>
			</li>
			<li class="nav-item"><a href="<?php echo site_url('/index.php'); ?>/category/tips/">TIPS</a></li>
			<li class="nav-item"><a href="<?php echo site_url('/index.php'); ?>/category/noticias/">NOTICIAS</a></li>
			<li class="nav-item"><a href="<?php echo site_url('/index.php'); ?>/doctors/">DOCTORES</a></li>

		</ul>
	</nav>
	</header>
