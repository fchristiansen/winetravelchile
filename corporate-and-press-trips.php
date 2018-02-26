<?
/*

Template name: Corporate and press trips

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
			          				<a href="<?php bloginfo('url'); ?>">Home</a> / <?php echo $pais; ?>	 / CORPORATE AND PRESS TRIPS
			          			</p>
			          			<h4>Corporate Wine Events</h4>
			          		</div>
			          	</div>
		          	<?php the_post_thumbnail('full', array('class' => 'img-responsive owl-lazy hidden-xs')); ?>
		          	<?php the_post_thumbnail('slider_mobile', array('class' => 'img-responsive owl-lazy visible-xs')); ?>
	
			    </div>
			</div> <!-- contenedor top -->
		</section>
	</div>

		<section id="destinations" class="position-relative">

			<div class="bloque-blanco-top-content">
				<a href="#destinations">
					<img src="<?php bloginfo('template_url');?>/assets/img/down-arrow.png" alt="" class="down-arrow">
				</a>
			</div>
			<div class="container">
				<div class="row">
					<div class="bloque clearfix mt-0">
						<div class="col-sm-12 text-center">
							<h4>CORPORATE AND PRESS TRIPS</h4>
							<?php the_content(); ?>
						</div>
					</div>

				</div>
			</div>
		</section>
		<section id="includes" class="events">
			<div class="container-fluid no-padding bg-gris-2 mt-50 position-relative">
				<div class="container">
					<div class="row">
						<div class="content center-block clearfix">
							<div class="col-sm-12 text-center">
								<h4 class="includes">Sample Events we can organize for you:</h4>
							</div>
							<div class="col-sm-6">
								<ul>
									<li>Make Your Own Wine</li>
									<li>Private Wine Dinners</li>
									<li>Private Wine Tastings</li>
								</ul>
							</div>
							<div class="col-sm-6">
								<ul>
									<li>Cooking Classes</li>
									<li>Corporate Meeting</li>
									<li>Press Trips</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> <!-- events -->

		<?php include('include-galery.php'); ?>

<?php
	} // end while
} // end if
?>		

<?php include('footer.php'); ?>
