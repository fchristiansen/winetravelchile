<?
/*

Template name: Blog

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
				          	<div class="carousel-info blog-info">
				          		<div class="carousel-info-inner">
				          			<p class="">
				          				<a href="<?php bloginfo('url'); ?>">Home</a> / <span class="txt-bread">blog</span>
				          			</p>
				          			<p class="title2">Chilean Carmenere</p>
				          			<p class="tit-autor">By Karen Gilchrist</p>
				          			<p class="txt-resumen">
				          				Carmenere is a wine grape originally planted in the Médoc region of Bordeaux, France,
				          			where it was used to produce deep red wines for blending in the same manner as Petit Verdot.</p>
				          			<a href="" target="_blank" class="btn btn-primary btn-lg btn-read"> read more</a>

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

<?php
	} // end while
} // end if
?>



<?php include('footer.php'); ?>
