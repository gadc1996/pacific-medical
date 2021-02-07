<section class="articles-section featured" >
<?php
$count = 0;
while( have_posts() ){
	the_post();
	if( $count == 0 ){
?>
		<div class="featured-column big-column">
			<div class="featured-article main-featured">
				<a href="<?php the_permalink(); ?>"><img class="featured-image" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt=""></a>
				<a href="<?php the_permalink(); ?>"><h2 class="featured-title"><?php the_title(); ?></h2></a>
			</div>
		</div>
		<div class="featured-column">
<?php
		$count++;
	}
	elseif( $count < 3 ){
?>
		<div class="featured-article ">
			<a href="<?php the_permalink(); ?>"><img class="featured-image" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt=""></a>
			<a href="<?php the_permalink(); ?>"><h2 class="featured-title"><?php the_title(); ?></h2></a>
		</div>
<?php		
		$count++;
	}
	else{
		continue;
	}
}
?>
	</div>
</section>
