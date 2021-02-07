hello from front-page.php
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
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small',$threshold = 3) ; 
?>    
</section>
<!--Termina  seccion ultimos articulos-->
<!--Inicia seccion ultimos articulos-->
<section class="articles-section" >
    <?php 
        renderSectionTitle('Medicina general');
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Medicina general'); 
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Medicina general', $threshold = 3) ; 
    ?>    
</section>
<!--Termina  seccion ultimos articulos-->
<!--Inicia seccion ultimos articulos-->
<section class="articles-section" >
    <?php 
        renderSectionTitle('Cirugía bariátrica');
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Cirugía bariátrica'); 
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Cirugía bariátrica', $threshold = 3) ; 
    ?>    
</section>
<!--Termina  seccion ultimos articulos-->
<!--Inicia seccion ultimos articulos-->
<section class="articles-section" >
    <?php 
        renderSectionTitle('Psicología');
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Psicología'); 
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Psicología', $threshold = 3) ; 
    ?>    
</section>
<!--Termina  seccion ultimos articulos-->
<!--Inicia seccion ultimos articulos-->
<section class="articles-section" >
    <?php 
        renderSectionTitle('Nutrición');
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Nutrición'); 
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Nutrición', $threshold = 0) ; 
    ?>    
</section>
<!--Termina  seccion ultimos articulos-->

<!--Inicia seccion ultimos articulos-->
<section class="articles-section" >
    <?php 
        renderSectionTitle('Ginecología');
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Ginecología'); 
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Ginecología', $threshold = 0) ; 
    ?>    
</section>
<!--Termina  seccion ultimos articulos-->
<!--Inicia seccion ultimos articulos-->
<section class="articles-section" >
    <?php 
        renderSectionTitle('Ginecología');
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Ginecología'); 
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Ginecología', $threshold = 0) ; 
    ?>    
</section>
<!--Termina  seccion ultimos articulos-->
<!--Inicia seccion ultimos articulos-->
<section class="articles-section" >
    <?php 
        renderSectionTitle('Embarazo');
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Embarazo'); 
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Embarazo', $threshold = 0) ; 
    ?>    
</section>
<!--Termina  seccion ultimos articulos-->
<!--Inicia seccion ultimos articulos-->
<section class="articles-section" >
    <?php 
        renderSectionTitle('Neumología');
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Neumología'); 
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Neumología', $threshold = 0) ; 
    ?>    
</section>
<!--Termina  seccion ultimos articulos-->



<?php get_footer();?>
