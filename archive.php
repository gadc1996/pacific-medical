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




<?php get_footer();?>
