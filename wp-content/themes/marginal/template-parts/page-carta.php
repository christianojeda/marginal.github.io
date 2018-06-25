

<h3 class="text-center"><a href="<?php the_permalink(); echo'noticias' ?>"><b>Carta</b></a></h3></h3>

<br />



<?php
      $argsCarta = array(
            'cat' => 6,
            'type' => 'post',
            'posts_per_page' => 3,
       );



        query_posts($argsCarta);

        $ultimaCarta = new WP_Query($argsCarta);
        if ( $ultimaCarta->have_posts() ):

          while($ultimaCarta->have_posts() ): $ultimaCarta->the_post(); ?>
            <div class="col-lg-4 col-sm-6 col-xs-12 card-padding paddingbottom">

              <div class="card-noticias">
                <a href="<?php the_permalink(); ?>">
                <div class="vertical-centered-text">
                  <h2><?php the_title(); ?></h2></div>
                  <div class="imgblog" style="background-image:url('<?php print_r(get_the_post_thumbnail_url()); ?>');"></div>
                </a>
                <div class="cta-container-noticias">
                  <p class="cta-noticias"><?php the_content(); ?></p>
                  <small>Publicado el: <?php the_time('j F, Y'); ?></small>
                </div>
              </div>

            </div>
          <?php endwhile; ?>

        <?php endif;
        wp_reset_postdata();

?>
