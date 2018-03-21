<?php include('header.php'); ?>
<?php include('main-nav.php'); ?>
<?php include('include-menu-experiencias.php'); ?>
<?php wp_reset_postdata(); ?>
<?php
	$i = 0;
if (have_posts()) :
	while (have_posts()) :
		the_post();
			$i++;
			if($i==1){
		?>
		<div id="slider-destinations">
			<section class="slider-home container-fluid no-padding">
					<div id="slider-home" class="owl-carousel owl-theme">
					    <div class="item">
					    	<div class="layer"></div>
					          	<!-- 1920 x 550 -->
					          	<div class="carousel-info blog-info">
					          		<div class="carousel-info-inner">
					          			<p class="">
					          				<a href="<?php bloginfo('url'); ?>">Home</a> / <span class="txt-bread">blog</span>
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
	<section class="posts-list">
		<?php }else{ ?>
		<!-- 	acá debe ir la lista del resto de posts -->
			<div class="container">
				<div class="row">
					<article class="post-box clearfix">
						<div class="col-sm-6">
							<!-- 580 x 330 -->
							<div class="post-thumb-img">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail('caluga', array('class' => 'img-responsive')); ?>
								</a>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="post-title">
								<?php the_title( '<h1>', '</h1>' ); ?>
							</div>
							<div class="post-author">
								<p><?php the_author(); ?></p>
							</div>
							<div class="post-excerpt">
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg btn-read-more">read MORE</a>
							</div>
						</div>
					</article> <!-- post box -->
				</div>
			</div>

			<?php if($i == 3) : ?>
			<section class="design-trip-banner loop-blog">
				<div class="mid-banner-container">
					<div class="mid-banner-caption">
						<p class="mid-banner-title">Design your perfect trip with us</p>
						<a href="<?php bloginfo('url');?>/contact" class="btn btn-primary btn-lg">MORE INFORMATION</a>
					</div>
					<img class="img-responsive hidden-xs hidden-sm mid-banner-img" src="<?php bloginfo('template_url') ?>/assets/img/mid-banner.jpg" alt="Design your perfect trip with us">
					<img class="img-responsive visible-xs visible-sm mid-banner-img" src="<?php bloginfo('template_url') ?>/assets/img/mid-banner-xs.jpg" alt="Design your perfect trip with us">
				</div>
			</section> <!-- design trip banner -->
			<?php endif;?>	

		<? } ?>
		<?php
		endwhile;
		endif;
		?>
	</section> <!-- caja noticias superior noticias -->


<?php include('footer.php'); ?>
