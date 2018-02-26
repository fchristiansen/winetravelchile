<?
/*

Template name: Hotels Chile

*/
?>
<?php include('header.php'); ?>
<?php include('main-nav.php'); ?>
<?php include('include-menu-experiencias.php'); ?>
<div id="slider-destinations">
	<section class="slider-home container-fluid no-padding">
		<div id="slider-home" class="owl-carousel owl-theme">
		    <div class="item">
		    	<div class="layer"></div>
		          	<!-- 1920 x 550 -->
		          	<div class="carousel-info">
		          		<div class="carousel-info-inner">
		          			<p class="hidden-xs">
		          				<a href="<?php bloginfo('url'); ?>">Home</a> / chile / hotels
		          			</p>
		          			<h4>Unique Wine Experience</h4>
		          		</div>
		          	</div>
		          	<!-- 1920 x 990 -->
		          	<img class="img-responsive owl-lazy hidden-xs" data-src="<?php bloginfo('template_url'); ?>/assets/img/top-hotels.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/top-hotels.jpg" alt="">
		          	<!-- 320 x 550 -->
		          	<img class="img-responsive owl-lazy visible-xs" data-src="<?php bloginfo('template_url'); ?>/assets/img/top-hotels-xs.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/top-hotels-xs.jpg" alt="">

		    </div>
		</div> <!-- contenedor top -->
	</section>
</div>

		<section id="hotels" class="position-relative">
			<div class="bloque-blanco-top-content">
				<a href="#hotels">
					<img src="<?php bloginfo('template_url');?>/assets/img/down-arrow.png" alt="" class="down-arrow">
				</a></div>
			<div class="container">
				<div class="row">
						<div class="col-sm-12 text-center">
							<div class="content clearfix">
								<h2>hotels</h2>
<?php
	$the_query = new WP_Query( array(
    'post_type' => 'hotel',
    'tax_query' => array(
        array (
            'taxonomy' => 'country',
            'field' => 'slug',
            'terms' => 'chile',
        )
    ),
) );
$i = 0;
$m = 0;
while ( $the_query->have_posts() ) :
    $the_query->the_post();
    $i++;
    $m++;
?>
								<div class="col-sm-6 col-md-4">
									<div class="hotel-box">
										<?php the_post_thumbnail('hotel', array('class' => 'img-responsive')); ?>
										<p><?php the_title(); ?></p>
									</div>
								</div>
<?php
	if($i==3){
		$i = 0;
		echo '<div class="clearfix hidden-sm hidden-xs"></div>';
	}
	
	if($m==2){
		$m = 0;
		echo '<div class="clearfix visible-sm visible-xs"></div>';
	}
	endwhile;
?>									
							</div> <!-- content -->
						</div>
				</div>
			</div>
		</section><!-- about -->

<?php include('footer.php'); ?>