<?php 
    function renderCard($cardSize){
?>
        <div class="card-<?php echo $cardSize; ?>">
                    <div class="category"><?php the_category(); ?></div>
                    <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" /></a>
                    <div class="card-info"><?php the_author(); ?></div>
                    <a href="<?php the_permalink(); ?>"><h3 class="card-title"><?php the_title(); ?></h3></a>
                    <div class="card-description"><?php  substr(the_excerpt(), 0, 1); ?></div>
        </div>
<?php
    }
?>

<?php 
    function renderCardMini($category, $categoryNumber){
?>
			<div class="card-mini">
				<div class="category"><a href=""> <?php echo $category; ?></a> </div>
				<a href="#"><img src="<?php echo get_bloginfo('template_url') ?>/img/category<?php echo $categoryNumber;?>.jpeg" alt=""></a>
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
            $args = array(
                'post_type' =>  'post',
                'posts_per_page' =>  5,
            );
            $blogposts = new WP_Query($args);
            while($blogposts->have_posts()) {
                $blogposts->the_post();
                if ($skip < $threshold){
                    $skip++;
                    continue;
                }
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
