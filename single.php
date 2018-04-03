<?php include('header.php'); ?>
<?php include('main-nav.php'); ?>
<?php include('include-menu-experiencias.php'); ?>
<?php wp_reset_postdata(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div id="slider-destinations">
			<section class="slider-home container-fluid no-padding">

					<div class="slider-solo">
					    <div class="item">
					    	<div class="layer"></div>
					          	<!-- 1920 x 550 -->
					          	<div class="carousel-info blog-info">
					          		<div class="carousel-info-inner">
					          			<p class="">
					          				<a href="<?php bloginfo('url'); ?>">Home</a> / <a href="<?php bloginfo('url'); ?>/category/blog/">blog</a>
					          			</p>
					          			<h1 class="title2"><?php the_title(); ?></h1>
					          			<?php if(get('nombre_del_autor') != ""){ ?>
					          			  <p class="tit-autor">By <?php echo get('nombre_del_autor'); ?></p>
					          			<? } ?>
					          		<!-- 	<div class="txt-resumen">
					          				<?php the_excerpt(); ?>
					          			</div> -->
					          			<!-- <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg btn-read">read MORE</a> -->

					          		</div>
					          	</div>
					          	<?php the_post_thumbnail('full', array('class' => 'img-responsive hidden-xs')); ?>
					          	<?php the_post_thumbnail('slider_mobile', array('class' => 'img-responsive owl-lazy visible-xs')); ?>
					    </div>
					</div> <!-- contenedor slider -->
			</section>
		</div>
	<section id="about" class="position-relative">
		<div class="bloque-blanco-top-content">
			<a href="#about">
				<img src="<?php bloginfo('template_url');?>/assets/img/down-arrow.png" alt="" class="down-arrow">
			</a>
		</div>
	</section>
	<section class="the-post-content">
		<div class="container the-content">
			<div class="row">
				<div class="col-sm-12">
						<?php the_content(); ?>
						<?php if(get('slider_imagen')){ ?>
							<div id="slider-post" class="owl-carousel owl-theme">
									<?
							  	$f = 0;
							  	$bloques = get_order_group('slider_imagen'); // guarda el bloque en un array //poner uno de los campos
							  	foreach($bloques as $bloque){ // recorre cada bloque de edición
								$e = $e +1;
								$f++;
								$fotos = get_order_field('slider_imagen', $bloque); // guarda las fotos en un array
								foreach ($fotos as $foto) {
								?>
										<div class="item">
									      	<img class="img-responsive" src="<?php echo get('slider_imagen', $e, $foto) ?>" alt="">
										</div>
										 <? } ?>
	        					<? } ?>
							</div>
						<? } ?>
						<div class="text-center">
							<?php if(get('texto_boton')){
								$texto_boton = get('texto_boton'); ?>
								<a href="<?php echo get('boton_enlace'); ?>" target="<?php if(get('enlace_externo')){?> _blank <?php } ?>" class="btn btn-default boton-submit"><?php echo $texto_boton ?></a>
							<? } ?>

						</div>
				</div>
			</div>
		</div>
</section> <!-- noticia -->

	<section id="post-author">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="the-author-img">
							<img class="img-responsive img-circle img-author center" src="<?php echo get('imagen_autor'); ?>" alt="<?php echo get('nombre_del_autor'); ?>">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="the-autor-profile">
							<div class="center">
								<h5><?php echo get('nombre_del_autor'); ?></h5>
								<h6><?php echo get('autor_titulo'); ?></h6>
								<span class="rectangulo-vino-small"></span>
									<?php echo get('autor_texto'); ?>
							</div>
						</div> <!-- datos autor -->

					</div>
				</div>

			</div>
		</section> <!-- post author -->



<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<section class="more-items">
	<div class="container">
		<h1>more</h1>
		<span class="rectangulo-vino-small"></span>
		<div class="row">

		<?php
			$currentID = get_the_ID();
			$my_query = new WP_Query(array(
				//'category_name' => 'blog',
				'posts_per_page' => 3,
				'post__not_in' => array($currentID),
				'orderby' => 'rand'
			));
			while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
				<article class="post-box">
					<div class="col-sm-4">
						<!-- 580 x 330 -->
						<div class="post-thumb-img">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('caluga', array('class' => 'img-responsive')); ?>
							</a>
								<?php the_title( '<h2>', '</h2>' ); ?>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg btn-read-more">read MORE</a>
						</div>
					</div>
				</article> <!-- post box -->

			<?php endwhile; ?>

		</div>
	</div>

</section>
<?php include('footer.php'); ?>
