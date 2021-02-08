<section class="articles-section" >
   <h2 class="section-title">Doctors</h2>
    <div class="title-divider">
 	   <div class="divider-color"></div>
  	 <div class="divider-section"></div>
   	 <div class="divider-section"></div>
   	 <div class="divider-section"></div>
   	 <div class="divider-section"></div>
    </div>
 <?php 
		while(have_posts()){
					the_post();
?>
			<div class="doctor-card">
			<div class="header">
				<img class="doctor-image" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
				<h2 class="doctor-name"><?php the_title(); ?></h2>		
			</div>	
			<div class="doctor-info"><?php the_content(); ?></div>
			</div>
		<?php
				}		
    ?>    
</section>

