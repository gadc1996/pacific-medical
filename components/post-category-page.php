<?php include('functions/renders.php'); ?>
<section class="articles-section" >
    <?php 
        renderSectionTitle(single_cat_title( '', false ));
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = single_cat_title( '', false )); 
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = single_cat_title( '', false ), $threshold = 3) ; 
    ?>    
</section>
