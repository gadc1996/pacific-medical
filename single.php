<?php include('functions/renders.php'); ?>

<?php get_header();?>
<!--Inicia imagen destacada-->
<section class="featured-image">
</section>
<!--Termina Imagen destacada -->

<!--Inicia seccion ultimos articulos-->
<section class="articles-section" >
    <?php 
        renderSectionTitle(single_cat_title( '', false ));
        renderCardRow($cardsPerRow = 2, $cardsSize = 'big'); 
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $threshold = 2) ; 
    ?>    
</section>
<!--Termina  seccion ultimos articulos-->

<!--Inicia seccion ultimos articulos-->
<section class="articles-section" >
    <?php 
        renderSectionTitle(the_archive_title( )); 
    ?>
    <div class="card-row">
    <?php    
        renderCardMini($category = "Categoria", $categoryNumber = 1);
        renderCardMini($category = "Categoria", $categoryNumber = 2);
        renderCardMini($category = "Categoria", $categoryNumber = 3);
    ?>
    </div>
    <div class="card-row">
    <?php    
        renderCardMini($category = "Categoria", $categoryNumber = 1);
        renderCardMini($category = "Categoria", $categoryNumber = 2);
        renderCardMini($category = "Categoria", $categoryNumber = 3);
    ?>
    </div>    
</section>
	<!--Inicia Articulos recomendados-->
	<section class="articles-section" >
        <?php 
        renderSectionTitle('Articulos recomendados'); 
        renderMainPageArticle($postLimit = 2, $threshold = 0);
        ?>
	</section>
	<!--Termina Articulos recomendados-->


<?php get_footer();?>
