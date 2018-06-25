<?php
      $argsNoticias = array(
            'cat' => 6,
            'type' => 'post',
            'posts_per_page' => 12,
       );

       query_posts($argsNoticias);

       $ultimaNoticia = new WP_Query($argsNoticias);
       if ( $ultimaNoticia->have_posts() ):

       while($ultimaNoticia->have_posts() ): $ultimaNoticia->the_post(); 
?>
              <div class="col-md-6 col-sm-6 col-lg-4 col-xs-12 portfolio-item">
                <a href="#">
                <div class="imgblog" style="background-image:url('<?php print_r(get_the_post_thumbnail_url()); ?>');">
             <!--    <?php the_post_thumbnail ('serv', array('class' => 'img-responsive center-block')); 
                print_r(get_the_post_thumbnail_url());?> -->
                </div>	
                </a>          
                <small>Publicado el: <?php the_time('F j, Y'); ?></small>    
                <h5><a class="a-noticias" href=""><?php the_title(); ?></a></h5>   
                <p><?php the_content(); ?></p>
              </div>

            <?php endwhile; ?>

        <?php endif;
          wp_reset_postdata();

?>