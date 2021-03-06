Hello from index.php
<?php include('functions/renders.php'); ?>

<?php get_header();?>
<!--Inicia imagen destacada-->
<section class="featured-image">
    <img src="<?php echo get_bloginfo('template_url') ?>/img/background.jpeg" alt="pacific-medical-logo"/>
</section>
<!--Termina Imagen destacada -->

<!--Inicia seccion ultimos articulos-->
<section class="articles-section" >
    <?php 
        renderSectionTitle('Últimos artículos');
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small');
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $threshold = 2) ; 
    ?>    
</section>
<!--Termina  seccion ultimos articulos-->

<!--Inicia seccion ultimos articulos-->
<section class="articles-section" >
    <?php 
        renderSectionTitle('Categorias destacadas'); 
    ?>
    <div class="card-row">
    <?php    
            renderCardMini($category = "hola", $categoryNumber = 1);
          renderCardMini($category = "hola", $categoryNumber = 2);
                        renderCardMini($category = "hola", $categoryNumber = 3);
    ?>
    </div>
    <div class="card-row">
    <?php    
        renderCardMini($category = "hola", $categoryNumber = 1);
        renderCardMini($category = "hola", $categoryNumber = 2);
        renderCardMini($category = "hola", $categoryNumber = 3);
    ?>
    </div>    
</section>
	<!--Inicia Articulos recomendados-->
	<section class="articles-section" >
        <?php 
        renderSectionTitle('Articulos recomendados'); 
        renderMainPageArticle($postLimit = 2, $threshold = 2);
        ?>
	</section>
	<!--Termina Articulos recomendados-->


<?php get_footer();?>
