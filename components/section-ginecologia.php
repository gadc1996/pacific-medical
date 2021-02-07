<?php include('functions/renders.php'); ?>
<section class="articles-section" >
    <?php 
        renderSectionTitle('Ginecología');
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Ginecología'); 
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Ginecología', $threshold = 0) ; 
    ?>    
</section>
