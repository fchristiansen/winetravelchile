<?
/*

Template name: Terms and Conditions

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
				          				<a href="<?php bloginfo('url'); ?>">Home</a> / <?php echo $pais; ?> / terms and conditions
				          			</p>
				          			<p class="title2">Terms and Conditions</p>
				          		</div>
				          	</div>
				          	<?php the_post_thumbnail('full', array('class' => 'img-responsive owl-lazy hidden-xs')); ?>
				          	<?php the_post_thumbnail('slider_mobile', array('class' => 'img-responsive owl-lazy visible-xs')); ?>

				    </div>
				</div> <!-- contenedor top -->
			</section>
		</div>

		<section id="terms" class="position-relative">
			<div class="bloque-blanco-top-content">
				<a href="#terms">
					<img src="<?php bloginfo('template_url');?>/assets/img/down-arrow.png" alt="" class="down-arrow">
				</a>
			</div>
			<div class="container">
				<div class="row">
						<div class="col-sm-12 text-center">
							<div class="content clearfix">
								<div class="term-box">
									<?php the_content(); ?>
								</div>

							</div> <!-- content -->
						</div>
				</div>
			</div>
		</section><!-- about -->
<?php
	} // end while
} // end if
?>
<?php include('footer.php'); ?>
