<?
/*

Template name: About - Press

*/
?>
<?php include('header.php'); ?>
<?php include('main-nav.php'); ?>
<?php include('include-menu-experiencias.php'); ?>
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
	?>
		<div id="slider-destinations">
			<section class="slider-home container-fluid no-padding">
				<div class="slider-solo">
				    <div class="item">
				    	<div class="layer"></div>
				          	<!-- 1920 x 550 -->
				          	<div class="carousel-info">
				          		<div class="carousel-info-inner">
				          			<p class="">
				          				<a href="<?php bloginfo('url'); ?>">Home</a> / <span class="txt-bread">press</span>
				          			</p>
				          			<p class="title2">Press</p>
				          		</div>
				          	</div>
				          	<?php the_post_thumbnail('full', array('class' => 'img-responsive hidden-xs')); ?>
				          	<?php the_post_thumbnail('slider_mobile', array('class' => 'img-responsive owl-lazy visible-xs')); ?>
				    </div>
				</div> <!-- contenedor slider -->
			</section>
		</div>
	<?php
		} // end while
	} // end if
	?>
		<section id="about" class="position-relative">
			<div class="bloque-blanco-top-content">
				<a href="#about">
					<img src="<?php bloginfo('template_url');?>/assets/img/down-arrow.png" alt="" class="down-arrow">
				</a>
			</div>
			<div class="container">
				<?php include('include-menu-about.php'); ?>
				<div class="row">
					<div class="bloque clearfix mt-0">
						<div class="col-sm-12 text-center">
							<div class="content mb-0">
								<h2>Press</h2>

									<div class="logos-recomended clearfix">
									<?php
										$the_query = new WP_Query( array(
										    'post_type' 		=> 'press',
										    'posts_per_page' 	=> 6
										) );
										while ( $the_query->have_posts() ) :
										    $the_query->the_post();
									?>
										<div class="col-sm-2 col-xs-6">
											<?php if(get('detalles_adjuntar_pdf')){ ?>
											<a href="<?php echo get('detalles_adjuntar_pdf'); ?>" target="_blank">
								          		<?php the_post_thumbnail('full', array('class' => 'img-responsive center-block')); ?>
								          	</a>
											<?php } ?>
											<?php if(get('detalles_enlace_externo')){ ?>
											<a href="<?php echo get('detalles_enlace_externo'); ?>" target="_blank">
								          		<?php the_post_thumbnail('full', array('class' => 'img-responsive center-block')); ?>
								          	</a>
											<?php } ?>
										</div>
										<?php

											endwhile;
										?>
									</div>

							</div> <!-- content -->
						</div>

					</div>
				</div>
			</div>
		</section><!-- about -->

		<section id="prensa">
			<div class="container">
				<div class="row">
				<?php
					$the_query = new WP_Query( array(
					    'post_type' => 'press',
					    'posts_per_page' => -1
					) );
					$i = 0;
					$m = 0;
					while ( $the_query->have_posts() ) :
					    $the_query->the_post();
					    $m++;
					?>
					<div class="col-sm-6">
						<div class="download-box">
							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>
							<?php if(get('detalles_adjuntar_pdf')){ ?>
							<a href="<?php echo get('detalles_adjuntar_pdf'); ?>" target="_blank">download pdf<img src="<?php bloginfo('template_url'); ?>/assets/img/ico-pdf.png" alt=""></a>
							<?php } ?>
							<?php if(get('detalles_enlace_externo')){ ?>
							<a href="<?php echo get('detalles_enlace_externo'); ?>" target="_blank">read more<img src="<?php bloginfo('template_url'); ?>/assets/img/ico-url.png" alt=""></a>
							<?php } ?>
						</div>
					</div>
					<?php
					if($m==2){
						$m = 0;
						echo '<div class="clearfix"></div>';
					}
					endwhile;
?>
<!--
					<div class="col-sm-6">
						<div class="download-box">
							<h2>Harpers</h2>
							<p>Wine, nature and beauty</p>
							<a href="">download pdf<img src="<?php bloginfo('template_url'); ?>/assets/img/ico-pdf.png" alt=""></a>
						</div>
						<div class="download-box">
							<h2>Harpers</h2>
							<p>As more wineries add luxury rooms and gourmet restaurants.</p>
							<a href="">download pdf<img src="<?php bloginfo('template_url'); ?>/assets/img/ico-pdf.png" alt=""></a>
						</div>
						<div class="download-box">
							<h2>Harpers</h2>
							<p>Comer bien al aire libre es lo que viene.</p>
							<a href="">download pdf<img src="<?php bloginfo('template_url'); ?>/assets/img/ico-pdf.png" alt=""></a>
						</div>
						<div class="download-box">
							<h2>Harpers</h2>
							<p>El “factor” femenino en la industria pesa cada día más. Ahora abarcando nuevas áreas que se proyectan como las de mayor expansión.</p>
							<a href="">download pdf<img src="<?php bloginfo('template_url'); ?>/assets/img/ico-pdf.png" alt=""></a>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="download-box">
							<h2>Travel + Leisure</h2>
							<p>Once merely a gateway to Chile, the South American capital is undergoing a stylish—and environmentally sound—transformation.</p>
							<a href="">read more<img src="<?php bloginfo('template_url'); ?>/assets/img/ico-url.png" alt=""></a>
						</div>
						<div class="download-box">
							<h2>Travel + Leisure</h2>
							<p>Once merely a gateway to Chile, the South American capital is undergoing a stylish—and environmentally sound—transformation.</p>
							<a href="">read more<img src="<?php bloginfo('template_url'); ?>/assets/img/ico-url.png" alt=""></a>
						</div>
					</div>
-->
				</div>
			</div>
		</section>
<?php include('footer.php'); ?>
