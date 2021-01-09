<footer>
	<div class="footer-colum">
	<a href="<?php echo home_url(  ); ?>"><img src="<?php echo get_bloginfo('template_url') ?>/img/logo-white.png" alt="pacific-medical-logo"/></a>
	</div>
	<div class="footer-colum">
		<h2 class="column-title">Temas Destacados</h2>
		<ul class="column-list">
			<li><a href="<?php echo site_url('/index.php'); ?>/category/medicina-general/">Medicina general</a></li>
			<li><a href="<?php echo site_url('/index.php'); ?>/category/cirugia-bariatrica/">Cirugía bariátrica</a></li>
			<li><a href="<?php echo site_url('/index.php'); ?>/category/psicologia/">Psicología</a></li>
			<li><a href="<?php echo site_url('/index.php'); ?>/category/nutricion/">Nutrición</a></li>
			<li><a href="<?php echo site_url('/index.php'); ?>/category/ginecologia/">Ginecología</a></li>
			<li><a href="<?php echo site_url('/index.php'); ?>/category/embarazo/">Embarazo</a></li>
			<li><a href="<?php echo site_url('/index.php'); ?>/category/neumologia/">Neumología</a></li>
		</ul>
	</div>
	<div class="footer-colum">
		<h2 class="column-title">Lo más leido</h2>
		<ul class="column-list">
			<?php 
			$args = array(
                'post_type' =>  'post',
                'posts_per_page' =>  5,
            );
            $blogposts = new WP_Query($args);
            while($blogposts->have_posts()) {
                $blogposts->the_post();
			?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
			<?php }?>
		</ul>
	</div>
	<div class="footer-colum">
		<h2 class="column-title">Contacto</h2>
		<a href="#"><i class="fab fa-facebook-f"></i></a>
		<a href="#"><i class="fab fa-twitter"></i></a>
		<a href="#"><i class="fab fa-instagram"></i></a>
		<a href="#"><i class="fab fa-telegram"></i></a>
	</div>
	</footer>
<?php wp_footer(); ?>
</body>
</html>