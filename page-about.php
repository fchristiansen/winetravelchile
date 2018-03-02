<?
/*

Template name: About

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
				          				<a href="<?php bloginfo('url'); ?>">Home</a> / about us
				          			</p>
				          			<p class="title2">Design Your Perfect Trip With Us!!</p>
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
			<div class="container">
				<?php include('include-menu-about.php'); ?>
				<div class="row">
					<div class="bloque clearfix mt-0">
						<div class="col-sm-12 text-center">
							<div class="content">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="founder">
			<div class="container-fluid">
					<div class="row no-gutter">
						<div class="col-sm-6 ">
							<div class="founder-img-box position-relative mh-500">
								<img class="img-responsive img-circle center" src="<?php bloginfo('template_url'); ?>/assets/img/founder.png" alt="">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="founder-signature-box position-relative mh-500">
								<div class="founder-signature center">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/founder-signature.png" alt="">
									<p>founder and trip planner</p>
									<span class="rectangulo-vino center-block"></span>
								</div>
							</div>
						</div>
					</div>
			</div>
		</section>

<?php
	} // end while
} // end if
?>
<?php include('footer.php'); ?>
