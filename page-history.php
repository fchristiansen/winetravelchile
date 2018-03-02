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
		          			<p class="title2"><?php the_title(); ?></p>
		          		</div>
		          	</div>
		          	<?php the_post_thumbnail('full', array('class' => 'img-responsive hidden-xs')); ?>
		          	<?php the_post_thumbnail('slider_mobile', array('class' => 'img-responsive owl-lazy visible-xs')); ?>
		    </div>
		</div> <!-- contenedor top -->
	</section>
</div>

		<section id="history" class="position-relative">
			<div class="bloque-blanco-top-content">
				<a href="#history">
					<img src="<?php bloginfo('template_url');?>/assets/img/down-arrow.png" alt="" class="down-arrow">
				</a>
			</div>
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
													<?php echo get('wine_varieties_column_1'); ?>
												</div>
												</div>
											<div class="col-xs-6">
												<h3 class="white">White Varieties</h3>
												<div id="white-varieties">
													<?php echo get('wine_varieties_column_2'); ?>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<?php echo get('wine_varieties_harvest_information'); ?>
											</div>
										</div>
									</div>
									<div class="maps-box">
										<div class="row">
											<div class="col-sm-6">
												<img class="img-responsive center-block" src="<?php echo get('wine_varieties_region_map'); ?>" alt="">
											</div>
											<div class="col-sm-6">
												<img class="img-responsive center-block" src="<?php echo get('wine_varieties_country_map'); ?>" alt="">
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
