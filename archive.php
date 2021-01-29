archive.php
<?php include('functions/renders.php'); ?>

<?php get_header();?>
<!--Inicia imagen destacada-->
<section class="featured-image">
</section>
<!--Termina Imagen destacada -->

<!--Inicia seccion ultimos articulos-->
<section class="articles-section" >
    <?php 
        renderDoctorsTitle(single_cat_title( '', false ));
        //renderCardRow($cardsPerRow = 3, $cardsSize = 'doctor', $postType = 'doctors', $category = single_cat_title( '', false )); 
    ?>    
</section>
<!--Termina  seccion ultimos articulos-->




<?php get_footer();?>
