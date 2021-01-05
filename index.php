<?php 
    function renderCard($cardSize){
?>
        <div class="card-<?php echo $cardSize; ?>">
                    <div class="category"><?php the_category(); ?></div>
                    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" /></a>
                    <div class="card-info"><?php the_author(); ?></div>
                    <a href="<?php the_permalink(); ?>"><h3 class="card-title"><?php the_title(); ?></h3></a>
                    <div class="card-description"><?php the_excerpt(); ?></div>
        </div>
<?php
        }
?>

<?php 
    function renderCardRow($cardsPerRow, $cardsSize, $threshold = 0){
?>
        <div class="card-row">
        <?php 
            $i = 0;
            $skip = 0;
            while(have_posts()) {
                the_post();
                if ($skip < $threshold){
                    $skip++;
                    continue;
                }
        ?>

        <?php 
                if($i <= $cardsPerRow - 1){
                    renderCard($cardsSize);
                    $i++;
                }    
            }
        ?>
    </div>
    <?php
    }
?>

<?php get_header();?>
<!--Inicia imagen destacada-->
<section class="featured-image">
    <img src="<?php echo get_bloginfo('template_url') ?>/img/background.jpeg" alt="pacific-medical-logo"/>
</section>
<!--Termina Imagen destacada -->

<!--Inicia seccion ultimos articulos-->
<section class="articles-section" >
    <h2 class="section-title">Últimos artículos</h2>

    <div class="title-divider">
        <div class="divider-color"></div>
        <div class="divider-section"></div>
        <div class="divider-section"></div>
        <div class="divider-section"></div>
        <div class="divider-section"></div>
    </div>

    <?php 
        renderCardRow(2, 'big'); 
        renderCardRow(3, 'small', 2); 
    ?>    

    
</section>
<!--Termina  seccion ultimos articulos-->

<?php get_footer();?>
