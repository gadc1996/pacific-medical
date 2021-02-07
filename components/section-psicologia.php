<?php include('functions/renders.php'); ?>
<section class="articles-section" >
    <?php 
        renderSectionTitle('Psicología');
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Psicología'); 
        renderCardRow($cardsPerRow = 3, $cardsSize = 'small', $category = 'Psicología', $threshold = 3) ; 
    ?>    
</section>
