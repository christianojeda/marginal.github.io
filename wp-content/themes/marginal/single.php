<?php get_header(); ?>

<div id="escena2"></div>

<div class="bodynoticias paddingbottom">

<div class="container">

	<main id="content"  class="row paddingsingle">

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				<article>
					<h1><?php the_title(); ?></h1><br/><br/>
					<div>
						<?php the_post_thumbnail('',array('class'=>'img-responsive')); ?>						
					</div>
					<br/>
					<?php the_content(); ?>
				</article>

			<?php endwhile; endif; ?>
	
		</div>

    </main><!-- content -->

</div><!-- container -->

</div>

<?php get_footer(); ?>


