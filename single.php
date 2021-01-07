<?php include('functions/renders.php'); ?>

<?php 
    get_header();
    while(have_posts(  )){
        the_post(  );
?>
<!--Inicia imagen destacada-->
<section class="featured-image">
</section>
<!--Termina Imagen destacada -->
<!--Inicia seccion ultimos articulos-->
<section class="articleSection">
        <h2 class="categorySubtitle"><?php get_the_category(); ?></h2>
        <h1 class="categoryTitle"><?php the_title(); ?></h1>
        <div class="articleInfo"><?php the_author(); ?></div>
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" class="articleImage">
        <div class="articleContent">
            <?php the_content()?>
        </div>
    </section>
	<!--Termina Articulos recomendados-->


<?php 
    }
get_footer();?>
