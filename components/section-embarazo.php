<?php include('functions/renders.php'); ?>
<section class="articles-section" >
    <?php 
        renderSectionTitle('Embarazo');
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Embarazo'); 
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Embarazo', $threshold = 0) ; 
    ?>    
</section>

