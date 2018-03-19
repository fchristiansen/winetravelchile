<?php include('header.php'); ?>
<?php include('main-nav.php'); ?>
<?php include('include-menu-experiencias.php'); ?>
<?php wp_reset_postdata(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div id="slider-destinations">
			<section class="slider-home container-fluid no-padding">

					<div id="slider-home" class="owl-carousel owl-theme">
					    <div class="item">
					    	<div class="layer"></div>
					          	<!-- 1920 x 550 -->
					          	<div class="carousel-info blog-info">
					          		<div class="carousel-info-inner">
					          			<p class="">
					          				<a href="<?php bloginfo('url'); ?>">Home</a> / <a href="<?php bloginfo('url'); ?>/category/blog/">blog</a>
					          			</p>
					          			<p class="title2"><?php the_title(); ?></p>
					          			<p class="tit-autor"><?php the_author(); ?></p>
					          			<div class="txt-resumen">
					          				<?php the_excerpt(); ?>
					          			</div>
					          			<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg btn-read">read MORE</a>

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
						<div id="slider-post" class="owl-carousel owl-theme">
							<div class="item">
						      	<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/imgpost1.jpg" alt="">
							</div>

							<div class="item">
						      	<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/imgpost2.jpg" alt="">
							</div>
							<div class="item">
						      	<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/imgpost3.jpg" alt="">
							</div>
						</div>
						<div class="text-center">
							<a href="" class="btn btn-default boton-submit">GET INSPIRED</a>
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
							<img class="img-responsive img-circle img-author center" src="<?php bloginfo('template_url'); ?>/assets/img/img-author.jpg" alt="">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="the-autor-profile">
							<div class="center">
								<h5>Karen Gilchrist</h5>
								<h6>FOUNDER AND TRIP PLANNER</h6>
								<span class="rectangulo-vino-small"></span>
								<p>
									Trilingual, with extensive experience in tourism development,
									 marketing, and communications in Chile, France, and the
									  United Kingdom, Karen saw the opportunity to build a
									   boutique tour operator company around the fascinat
									   ing world of fine wine and dining immersed in the
									    natural beauty of Chile and other wine-producing countries around the world.
									    She also has vast experience with wine routes in the new world and old world.
									    She was the General Manager of the Maule Valley Wine Route (1999–2002),
									    during which time she organized Chile's first Carmenere event (2001).
								</p>
								<?php
								//$the_query = new WP_Query( array(
							   // 'post_type' => 'the_team',
							    //'posts_per_page'	=> 1
								//));
							//	$m = 0;
							// while ( $the_query->have_posts() ) :
							//     $the_query->the_post();
							// 	the_content();
							// endwhile;
							?>
							</div>


						</div>

					</div>
				</div>

			</div>
		</section> <!-- post author -->



<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<section class="more-items">
	<div class="container">
		<h1>more items</h1>
		<span class="rectangulo-vino-small"></span>
		<div class="row">
			<article class="post-box">
				<div class="col-sm-4">
					<!-- 580 x 330 -->
					<div class="post-thumb-img">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
						</a>
							<?php the_title( '<h2>', '</h2>' ); ?>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg btn-read-more">read MORE</a>
					</div>
				</div>

			</article> <!-- post box -->
			<article class="post-box">
				<div class="col-sm-4">
					<!-- 580 x 330 -->
					<div class="post-thumb-img">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
						</a>
							<?php the_title( '<h2>', '</h2>' ); ?>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg btn-read-more">read MORE</a>
					</div>
				</div>

			</article> <!-- post box -->
			<article class="post-box">
				<div class="col-sm-4">
					<!-- 580 x 330 -->
					<div class="post-thumb-img">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
						</a>
							<?php the_title( '<h2>', '</h2>' ); ?>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg btn-read-more">read MORE</a>
					</div>
				</div>

			</article> <!-- post box -->
		</div>
	</div>

</section>
<?php include('footer.php'); ?>
