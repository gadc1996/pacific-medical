<?php include('functions/renders.php'); ?>
<section class="articles-section" >
	<h2 class="section-title"><?php renderSectionTitle(single_cat_title( '', false ));?></h2>
  <div class="title-divider">
    <div class="divider-color"></div>
    <div class="divider-section"></div>
    <div class="divider-section"></div>
    <div class="divider-section"></div>
    <div class="divider-section"></div>
  </div>
	<div class="card-row">
<?php
		$count = 0;
     while(have_posts()) {
     	the_post();
			if($count < 3){
?>
	      <div class="card-small">
 		 	   	<a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" /></a>
   		  	<a href="<?php the_permalink(); ?>"><h3 class="card-title"><?php the_title(); ?></h3></a>
    		 	<div class="card-description"><?php  echo wp_trim_words( get_the_excerpt(), 15 )  ?></div>
     		</div>
<?php
				$count++;
			}
			else{
?>
	 			</div>
				<div class="card-row">
					<div class="card-small">
 		 	   		<a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" /></a>
   		  		<a href="<?php the_permalink(); ?>"><h3 class="card-title"><?php the_title(); ?></h3></a>
    		 		<div class="card-description"><?php  echo wp_trim_words( get_the_excerpt(), 15 )  ?></div>
     			</div>
<?php				
				$count = 0;
			}
		 } 
		 wp_reset_query();
?>
  </div>
</section>

