<?
/*

Template name: About - Team

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
				          				<a href="<?php bloginfo('url'); ?>">Home</a> / <a href="page-about.php">about us</a>  / team
				          			</p>
				          			<h4>Guided by Wine experts </h4>
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
								<h2>the team</h2>
								<?php the_content(); ?>
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
		<section id="featured">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="">
							<img class="img-responsive img-circle" src="<?php bloginfo('template_url'); ?>/assets/img/founder.jpg" alt="">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="">
							<h5>Karen Gilchrist</h5>
							<h6>FOUNDER, TRIP PLANNER AND WINE EXPERT GUIDE</h6>
							<span class="rectangulo-vino-small"></span>
											<?php
					$the_query = new WP_Query( array(
				    'post_type' => 'the_team',
				    'posts_per_page'	=> 1
				) );
				$m = 0;
				while ( $the_query->have_posts() ) :
				    $the_query->the_post();
					the_content(); 
				endwhile;
?>		
						</div>

					</div>
				</div>
					<img class="img-responsive center-block img-center" src="<?php bloginfo('template_url'); ?>/assets/img/vina-section-team.png" alt="">
			</div>
		</section>
		<section id="team">
			<div class="container">
				<div class="row">
				<?php
					$the_query = new WP_Query( array(
				    'post_type' => 'the_team',
				    'offset'	=> 1
				) );
				$m = 0;
				while ( $the_query->have_posts() ) :
				    $the_query->the_post();
				    $m++;
				?>					
					<div class="col-sm-6">
						<div class="expert-box clearfix">
							<?php the_post_thumbnail('hotel', array('class' => 'img-responsive clearfix')); ?>
							<div class="expert-text">
								<h4><?php the_title(); ?></h4>
								<h3><?php echo get('cargo'); ?></h3>
								<?php the_content(); ?>
							</div>
						</div>
					</div>
<?php
	
	if($m==2){
		$m = 0;
		echo '<div class="clearfix"></div>';
	}
	endwhile;
?>						
				</div>
			</div>
		</section>
<?php include('footer.php'); ?>
