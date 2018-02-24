<?
/*

Template name: History

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
		<div id="slider-home" class="owl-carousel owl-theme">
		    <div class="item">
		    	<div class="layer"></div>
		          	<!-- 1920 x 550 -->
		          	<div class="carousel-info">
		          		<div class="carousel-info-inner">
		          			<p class="hidden-xs">
			          			<?php 
				          			if ( $post->post_parent == '171' ) {
										$pais = "Chile";
									}else{
										$pais = "Argentina";
									}
								?>
		          				<a href="<?php bloginfo('url'); ?>">Home</a> / <?php echo $pais; ?> /  WINE REGIONS MAP
		          			</p>
		          			<h4><?php the_title(); ?></h4>
		          		</div>
		          	</div>
		          	<!-- 1920 x 990 -->
		          	<img class="img-responsive owl-lazy hidden-xs" data-src="<?php bloginfo('template_url'); ?>/assets/img/top-history.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/top-history.jpg" alt="">
		          	<!-- 320 x 550 -->
		          	<img class="img-responsive owl-lazy visible-xs" data-src="<?php bloginfo('template_url'); ?>/assets/img/top-history-xs.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/top-history-xs.jpg" alt="">

		    </div>
		</div> <!-- contenedor top -->
	</section>
</div>

		<section id="history" class="position-relative">
			<div class="bloque-blanco-top-content"> </div>
			<div class="container">
				<div class="row">
						<div class="col-sm-12 text-center">
							<div class="content clearfix">
								<img class="img-responsive center-block vina" src="<?php bloginfo('template_url'); ?>/assets/img/vina-history.jpg" alt="">
									<?php the_content(); ?>
									
									<div class="variedades-box center-block">
										<h2>MAIN VARIETIES PLANTED IN <?php echo $pais; ?></h2>
											<div class="row">

												<div class="col-xs-6">
													<h3 class="red">Red Varieties</h3>
													<div id="red-varieties">
														<ul>
															<li>Malbec</li>
															<li>Bonarda</li>
														</ul>
													</div>
 												</div>
												<div class="col-xs-6">
													<h3 class="white">White Varieties</h3>
													<div id="white-varieties">
														<ul>
															<li>Malbec</li>
															<li>Bonarda</li>
														</ul>
													</div>
												</div>
											</div>
									</div>
									<div class="maps-box">
										<div class="row">
											<div class="col-sm-6">
												<img class="img-responsive center-block" src="<?php bloginfo('template_url'); ?>/assets/img/map-sm.png" alt="">
											</div>
											<div class="col-sm-6">
												<img class="img-responsive center-block" src="<?php bloginfo('template_url'); ?>/assets/img/map-md.png" alt="">
											</div>
										</div>
									</div>
							</div> <!-- content -->
						</div>
				</div>
			</div>
		</section><!-- history -->
<?php
	} // end while
} // end if
?>	
<?php include('footer.php'); ?>
