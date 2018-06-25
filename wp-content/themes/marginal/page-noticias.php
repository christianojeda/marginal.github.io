<div id="escena2"></div>

<div class="bodynoticias">

<?php get_header(); ?>

<br />
<br />
<br />

<h1 class="text-center"><b>Noticias</b></h1>

<div class="row">
<div class="col-xs-12 col-sm-12">
<?php
      $argsNoticiass = array(
            'cat' => 6,
            'type' => 'post',
            'posts_per_page' => 24,
       );



        query_posts($argsNoticiass);

        $ultimaNoticiass = new WP_Query($argsNoticiass);
        if ( $ultimaNoticiass->have_posts() ):

          while($ultimaNoticiass->have_posts() ): $ultimaNoticiass->the_post(); ?>
            <div class="col-lg-4 col-sm-6 col-xs-12 card-padding paddingbottom">
                 
              <div class="card-noticias">
                <a href="<?php the_permalink() ?>">
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

</div>

</div>

</div>


<?php get_footer(); ?>