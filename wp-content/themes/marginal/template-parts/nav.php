<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="index.html">Start Bootstrap</a> -->
                <?php
                  $logo = array(
                    'cat'=> 3,
                    'type'=> 'post',
                    'post_per_page'=> 1,
                    'order'=> 'ASC'

                    );
                  query_posts($logo);
                  $ultimalogo = new WP_Query($logo);
                  if ($ultimalogo->have_posts()):
                    while($ultimalogo->have_posts()): $ultimalogo->the_post(); ?>
                    <div>
                      <?php the_post_thumbnail('', array('class'=>'img-responsive center-block logo-nav nav-brand'));?>
                    </div>
                    <?php endwhile; ?>
                  <?php endif; 
                  wp_reset_postdata();
                 ?>

                <img src="" class="img-responsive center-block nav-brand" alt="">
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <?php  /*PREGUNTO SI ES LA PAGINA INICIO (HOME), SI ES VERDADERO MUESTRO EL MENU1 (PRIMARY) */
                    if (is_page( 'inicio' )) {

                             /* Menu 1 navigation */
                            wp_nav_menu( array(
                              'menu' => 'menu 1',
                              'depth' => 2,
                              'container' => false,
                              'menu_class' => 'nav navbar-nav navbar-right',
                              //Process nav menu using our custom nav walker
                              'walker' => new wp_bootstrap_navwalker())
                            );


                    }   /*PREGUNTO SI ES LA PAGINA NOTICIAS, SI ES VERDADERO MUESTRO EL MENU2 (NOTICIAS) */ 
                    elseif (is_page( 'noticias' )) {

                         /* Menu 2 navigation */
                            wp_nav_menu( array(
                              'menu' => 'menu2',
                              'depth' => 2,
                              'container' => false,
                              'menu_class' => 'nav navbar-nav navbar-right',
                              //Process nav menu using our custom nav walker
                              'walker' => new wp_bootstrap_navwalker())
                            );

                    }   /*SI NO SE CUMPLEN LAS CONDICIONES ANTERIORES, SE MUESTRA EL MENU3 (SINGLE) */ 
                    else {

                          /* Menu 3 navigation */
                            wp_nav_menu( array(
                              'menu' => 'menu3',
                              'depth' => 2,
                              'container' => false,
                              'menu_class' => 'nav navbar-nav navbar-right',
                              //Process nav menu using our custom nav walker
                              'walker' => new wp_bootstrap_navwalker())
                            );
                    }
                ?>
            </div>
            <!-- /.navbar-collapse -->
</nav>
