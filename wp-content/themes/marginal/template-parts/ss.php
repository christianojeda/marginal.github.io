    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <ul class="nav navbar-nav centrarnav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li>
                        <a class="vertical" href="#escena1">INICIO</a>
                    </li>
                    <li>
                        <a class="vertical" href="#escena2">CARTA</a>
                    </li>
                    <li>
                        <a class="vertical" href="#escena3">PROMOCIONES</a>
                    </li>
                    <li>
                        <a class="vertical" href="#escena4">CLIENTES</a>
                    </li>
                    <li>
                        <a class="vertical" href="#escena5">CONTACTO</a>
                    </li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
</nav>

<!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#testimonials">CV</a></li>
          <li><a href="#team">Noticias</a></li>
          <!-- <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->







<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
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
                    'cat'=> 7,
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
                              'menu' => 'menu1',
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
        </div>
        <!-- /.container -->
    </nav>

