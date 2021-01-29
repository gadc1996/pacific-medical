<?php 
    function renderMainPageArticle($postLimit, $threshold = 0){
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
        
            if($i < $postLimit){
?>  
            <div class="main-page-article">
                <a href="<?php the_permalink()?>" ><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt=""></a>
                <div class="right-column">
                    <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
                    <p><?php echo wp_trim_words( get_the_excerpt(), 15 )?></p>
                    <a href="<?php the_permalink()?>" class="readmore">Leer más</a>
                </div>
            </div>
            <?php
            $i++;
            }
        }
    }
?>