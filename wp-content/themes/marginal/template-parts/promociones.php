<h3 class="text-center"><b>Promociones</b></h3>

<div class="container">

    <ul class="nav nav-tabs nav-justified">
		  <li class="active"><a data-toggle="tab" href="#tecnologia"><h4>Tecnología</h4></a></li>
      <li>               <a data-toggle="tab" href="#comunicaciones"><h4>Comunicaciones</h4></a></li>
    </ul>


<div class="tab-content">
<div id="tecnologia" class="tab-pane fade in active">
                      

      <?php
        $argsPromocion = array(
          'cat' => 7,
          'type' => 'post',
          'posts_per_page' => 12,
        );


        query_posts($argsPromocion);

        $ultimaPromocion = new WP_Query($argsPromocion);
        if ( $ultimaPromocion->have_posts() ):

          while($ultimaPromocion->have_posts() ): $ultimaPromocion->the_post(); ?>
            <div class="col-lg-4 col-sm-6 col-xs-12 card-padding">
              <div class="card transition">
                <h2 class="transition"><?php the_title(); ?></h2>
                <div class="cta-container transition">
                  <p class="cta"><?php the_content(); ?></p>
                </div>
                <?php if (get_the_title() == "Desarrollo de Aplicaciones para Dispositivos Móviles") { ?>
                  <div class="card_circle aplicaciones transition"></div>
                <?php }else if (get_the_title() == "Desarrollo de Sitios Web") { ?>
                  <div class="card_circle transition sitios"></div>
                <?php }else if (get_the_title() == "Cuentas de Correo Corporativos") { ?>
                  <div class="card_circle transition correos"></div>
                <?php }else if (get_the_title() == "Servicio de Hosting") { ?>
                  <div class="card_circle transition hosting"></div>
                <?php }else if (get_the_title() == "Mantenimiento de Hardware") { ?>
                  <div class="card_circle transition hardware"></div>
                <?php }else if (get_the_title() == "Desarrollo de Software") { ?>
                  <div class="card_circle transition software"></div>
                <?php } ?> 
                
              </div>
            </div>
          <?php endwhile; ?>

        <?php endif;
        wp_reset_postdata();

      ?>
</div>
                  <div id="comunicaciones" class="tab-pane fade">
                      

                      <?php
                      $argsComunicacion = array(
                        'cat' => 8,
                        'type' => 'post',
                        'posts_per_page' => 12,
                      );


                      query_posts($argsComunicacion);

                      $ultimaComunicacion = new WP_Query($argsComunicacion);
                      if ( $ultimaComunicacion->have_posts() ):

                        while($ultimaComunicacion->have_posts() ): $ultimaComunicacion->the_post(); ?>
                          <div class="col-lg-4 col-sm-6 col-xs-12 card-padding">
                            <div class="card transition">
                              <h2 class="transition"><?php the_title(); ?></h2>
                              <div class="cta-container transition">
                                <p class="cta"><?php the_content(); ?></p>
                              </div>
                              <?php if (get_the_title() == "Comunicación Estratégica") { ?>
                                <div class="card_circle comunicacion-estrategica transition"></div>
                              <?php }else if (get_the_title() == "Marketing Digital") { ?>
                                <div class="card_circle transition marketing"></div>
                              <?php }else if (get_the_title() == "Producciones Audiovisuales") { ?>
                                <div class="card_circle transition audiovisual"></div>
                              <?php }else if (get_the_title() == "Producción de Eventos Corporativos") { ?>
                                <div class="card_circle transition eventos"></div>
                              <?php }else if (get_the_title() == "Imagen Corporativa") { ?>
                                <div class="card_circle transition corporativa"></div>
                              <?php }else if (get_the_title() == "Diseño gráfico") { ?>
                                <div class="card_circle transition diseño_grafico"></div>
                              <?php } ?> 
                              
                            </div>
                          </div>
                        <?php endwhile; ?>

                      <?php endif;
                      wp_reset_postdata();

                    ?>
                  </div>
</div>
</div>


    

