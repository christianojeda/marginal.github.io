<!--=====================================
		SE LLAMA AL HEADER.PHP 
=======================================-->

<?php get_header(); ?>

	<!-- CARGA GIF -->
	<div id="preloader"></div>

	<!--==========================
	Inicio Section
	============================-->
	<section id="hero">
		<div class="hero-container col-xs-12 col-md-12 col-sm-12 col-lg-12">
			<img src="<?php bloginfo('template_url') ?>/img/logo.png" style="width: 60%;">
			<div class="actions">
				<a href="#about" class="btn-get-started">Quiénes Somos</a>
			</div>
		</div>
	</section>
	<!--==========================
	Fin Inicio Section
	============================-->






	<!--==========================
	Nav
	============================-->
	<?php include("template-parts/nav_origin.php"); ?>
	<!--==========================
	Fin Nav
	============================-->





	<!--==========================
	Quienes Somos Section
	============================-->
	<section id="about">
		<div class="container wow fadeInUp">
			<div class="row">
				<div class="col-md-12">
					<h3 class="section-title">Quiénes Somos</h3>
					<div class="section-title-divider"></div>
					</br>
					<!-- <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p> -->
				</div>
			</div>
		</div>
		<div class="container wow fadeInUp">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<?php
					$argsQuienes = array(
									'cat' => 4,
									'type' => 'post',
									'posts_per_page' => 1,
						 );

							 query_posts($argsQuienes);

							 $ultimaQuiene = new WP_Query($argsQuienes);
							 if ( $ultimaQuiene->have_posts() ):

							 while($ultimaQuiene->have_posts() ): $ultimaQuiene->the_post(); 
				?>
								
									<div class="imgblog" style="background-image:url('<?php print_r(get_the_post_thumbnail_url()); ?>');">
									</div>	
					</div>

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 about-content">
				<?php the_content(); ?>
					</div>

			<?php
			endwhile;
			endif;
			wp_reset_postdata();
			?>

		</div>
	</div>
	</section>
	<!--==========================
	Fin Quienes Somos Section
	============================-->





	<!--==========================
	Servicios Section
	============================-->
	<section id="services">
		<div class="container wow fadeInUp">
			<div class="row">
				<div class="col-md-12">
					<h3 class="section-title">Servicios</h3>
					<div class="section-title-divider"></div>
					<!-- <p class="section-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p> -->
				</div>
			</div>


			<div class="row">
				<div class="col-md-2 service-item"></div>
			<?php
			$argsServicios = array(
						'cat' => 7,
						'type' => 'post',
						'posts_per_page' => 2,
			 );

				query_posts($argsServicios);

				$ultimaServicio = new WP_Query($argsServicios);
				if ( $ultimaServicio->have_posts() ):

					while($ultimaServicio->have_posts() ): $ultimaServicio->the_post(); ?>


						

						<div class="col-md-4 service-item">
							<div class="service-icon"><i class="fa fa-play"></i></div>
							<h4 class="service-title"><a href=""><?php the_title(); ?></a></h4>
							<p class="service-description"><?php the_content(); ?></p>
						</div>

					<?php
						
					endwhile;
				endif;
				wp_reset_postdata();
			?>   
			</div> 

			<div class="row">
			<?php
			$argsServiciosInferior = array(
						'cat' => 9,
						'type' => 'post',
						'posts_per_page' => 3,
			 );

				query_posts($argsServiciosInferior);

				$ultimaServicioInferior = new WP_Query($argsServiciosInferior);
				if ( $ultimaServicioInferior->have_posts() ):

					while($ultimaServicioInferior->have_posts() ): $ultimaServicioInferior->the_post(); ?>

						<div class="col-md-4 service-item">
							<div class="service-icon"><i class="fa fa-play"></i></div>
							<h4 class="service-title"><a href=""><?php the_title(); ?></a></h4>
							<p class="service-description"><?php the_content(); ?></p>
						</div>

					<?php
					endwhile;
				endif;
				wp_reset_postdata();
			?>   
			</div> 

		</div>
	</section>
	<!--==========================
	Fin Servicios Section
	============================-->






	<!--==========================
	imagen panorámica
	============================-->
	<!-- <section id="subscribe">
		<div class="container wow fadeInUp">
			<div class="row">
				<div class="col-md-8">
					<h3 class="subscribe-title">Subscribe For Updates</h3>
					<p class="subscribe-text">Join our 1000+ subscribers and get access to the latest tools, freebies, product announcements and much more!</p>
				</div>
				<div class="col-md-4 subscribe-btn-container">
					<a class="subscribe-btn" href="#">Subscribe Now</a>
				</div>
			</div>
		</div>
	</section> -->
	<!--==========================
	Fin Imagen panorámica
	============================-->





	<!--==========================
	Portafolio Section
	============================-->
	<!-- <section id="portfolio">
		<div class="container wow fadeInUp">
			<div class="row">
				<div class="col-md-12">
					<h3 class="section-title">Portafolio</h3>
					<div class="section-title-divider"></div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<a class="portfolio-item" style="background-image: url(<?php bloginfo('template_url') ?>img/portfolio-1.jpg)" href="">
						<div class="details">
							<h4>Portfolio 1</h4>
							<span>Alored dono par</span>
						</div>
					</a>
				</div>

				<div class="col-md-3">
					<a class="portfolio-item" style="background-image: url(img/portfolio-2.jpg);" href="">
						<div class="details">
							<h4>Portfolio 2</h4>
							<span>Alored dono par</span>
						</div>
					</a>
				</div>

				<div class="col-md-3">
					<a class="portfolio-item" style="background-image: url(img/portfolio-3.jpg);" href="">
						<div class="details">
							<h4>Portfolio 3</h4>
							<span>Alored dono par</span>
						</div>
					</a>
				</div>

				<div class="col-md-3">
					<a class="portfolio-item" style="background-image: url(img/portfolio-4.jpg);" href="">
						<div class="details">
							<h4>Portfolio 4</h4>
							<span>Alored dono par</span>
						</div>
					</a>
				</div>

				<div class="col-md-3">
					<a class="portfolio-item" style="background-image: url(img/portfolio-5.jpg);" href="">
						<div class="details">
							<h4>Portfolio 5</h4>
							<span>Alored dono par</span>
						</div>
					</a>
				</div>

				<div class="col-md-3">
					<a class="portfolio-item" style="background-image: url(img/portfolio-6.jpg);" href="">
						<div class="details">
							<h4>Portfolio 6</h4>
							<span>Alored dono par</span>
						</div>
					</a>
				</div>

				<div class="col-md-3">
					<a class="portfolio-item" style="background-image: url(img/portfolio-7.jpg);" href="">
						<div class="details">
							<h4>Portfolio 7</h4>
							<span>Alored dono par</span>
						</div>
					</a>
				</div>

				<div class="col-md-3">
					<a class="portfolio-item" style="background-image: url(img/portfolio-8.jpg);" href="">
						<div class="details">
							<h4>Portfolio 8</h4>
							<span>Alored dono par</span>
						</div>
					</a>
				</div>

			</div>
		</div>
	</section> -->
	<!--==========================
	Fin Portafolio Section
	============================-->







	<!--==========================
	Equipo Section
	============================-->
	<section id="team">
		<div class="container wow fadeInUp">
			<div class="row">
				<div class="col-md-12">
					<h3 class="section-title">Equipo</h3>
					<div class="section-title-divider"></div>
					<!-- <p class="section-description">Erdo lide, nora porodo filece, salvam esse se, quod concedimus ses haec dicturum fuisse</p> -->
				</div>
			</div>

			<div class="row">
			<?php
			$argsEquipos = array(
						'cat' => 10,
						'type' => 'post',
						'posts_per_page' => 2,
			 );

				query_posts($argsEquipos);

				$ultimaEquipo = new WP_Query($argsEquipos);
				if ( $ultimaEquipo->have_posts() ):

					while($ultimaEquipo->have_posts() ): $ultimaEquipo->the_post(); ?>

						<div class="col-md-6">
							<div class="col-md-6 col-md-offset-3">
								<div class="profile">
									<!-- <div class="pic"><img src="img/client-1.jpg" alt=""></div> -->
									<div class="pic"><?php the_post_thumbnail('', array('class'=>'img-responsive center-block'));?></div>
									<h4><?php the_title(); ?></h4>
									<!-- <span>Lawless Inc</span> -->
								</div>
							</div>
							<div class="quote">
								<b><img src="<?php bloginfo('template_url') ?>/img/quote_sign_left.png" alt=""></b><?php the_content(); ?><small><img src="<?php bloginfo('template_url') ?>/img/quote_sign_right.png" alt=""></small>
							</div>
						</div>

					<?php
					endwhile;
				endif;
				wp_reset_postdata();
			?>   
				
			</div>

		</div>
	</section>
	<!--==========================
	Fin Equipo Section
	============================-->






	<!--==========================
	Noticias Section
	============================-->
	<!-- <section id="news">
		<div class="container wow fadeInUp">
			<div class="row">
				<div class="col-md-12">
					<h3 class="section-title">Noticias</h3>
					<div class="section-title-divider"></div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<div class="member">
						<div class="pic"><img src="img/team-1.jpg" alt=""></div>
						<h4>Walter White</h4>
						<span>Chief Executive Officer</span>
						<div class="social">
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-google-plus"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="member">
						<div class="pic"><img src="img/team-2.jpg" alt=""></div>
						<h4>Sarah Jhinson</h4>
						<span>Product Manager</span>
						<div class="social">
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-google-plus"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="member">
						<div class="pic"><img src="img/team-3.jpg" alt=""></div>
						<h4>William Anderson</h4>
						<span>CTO</span>
						<div class="social">
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-google-plus"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="member">
						<div class="pic"><img src="img/team-4.jpg" alt=""></div>
						<h4>Amanda Jepson</h4>
						<span>Accountant</span>
						<div class="social">
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-google-plus"></i></a>
							<a href=""><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section> -->
	<!--==========================
	Fin Noticias Section
	============================-->








	<!--==========================
	Contact Section
	============================-->
	<section id="contact">
		<div class="container wow fadeInUp">
			<div class="row">
				<div class="col-md-12">
					<h3 class="section-title">Contáctanos</h3>
					<div class="section-title-divider"></div>
					<!-- <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> -->
				</div>
			</div>

			<div class="row">
				<div class="col-md-3 col-md-offset-2">
					<br>
					<div class="info">
						<div>
							<i class="fa fa-map-marker"></i>
							<p>A108 Adam Street<br>New York, NY 535022</p>
						</div>

						<div>
							<i class="fa fa-envelope"></i>
							<p><a href="mailto:produccionesmarginal@gmail.com?Subject=Contacto%20Web%20Marginal">produccionesmarginal@gmail.com</a></p>
						</div>

						<div>
							<i class="fa fa-phone"></i>
							<p><a href="tel:+56955555555">+56 9 5555 5555</a></p>
						</div>

					</div>
				</div>

				<div class="col-md-3 col-md-offset-1">
					<!-- <div class="form">
						<div id="sendmessage">Su mensje ha sido enviado, gracias.</div>
						<div id="errormessage"></div>
						<form action="" method="post" role="form" class="contactForm">
							<div class="form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Tu Nombre" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="email" placeholder="Tu Correo" data-rule="email" data-msg="Ingrese un mail correcto" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres del asunto" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Ingrese su consulta" placeholder="Mensaje"></textarea>
								<div class="validation"></div>
							</div>
							<div class="text-center"><button type="submit">Enviar Mensaje</button></div>
						</form>
					</div> -->

					<?php
					$argsContactos = array(
								'cat' => 11,
								'type' => 'post',
								'posts_per_page' => 1,
					 );

						query_posts($argsContactos);

						$ultimaContacto = new WP_Query($argsContactos);
						if ( $ultimaContacto->have_posts() ):

							while($ultimaContacto->have_posts() ): $ultimaContacto->the_post();

								the_content(); 

							endwhile;
						endif;
						wp_reset_postdata();
					?>   
				</div>

			</div>
		</div>
	</section>
 
 
<!--=====================================
		SE LLAMA AL FOOTER.PHP
=======================================-->

<?php get_footer(); ?>