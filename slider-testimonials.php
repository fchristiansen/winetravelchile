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
		          				<a href="<?php bloginfo('url'); ?>">Home</a> / <a href="page-about.php">about us</a>  / <span class="txt-bread">testimonials</span>
		          			</p>
		          			<p class="title2">Every Day is a Unique Experience</p>
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
