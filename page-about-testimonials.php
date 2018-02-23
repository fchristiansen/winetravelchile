<?
/*

Template name: About - Testimonials

*/
?>
<?php include('header.php'); ?>
<?php include('main-nav.php'); ?>
<?php include('include-menu-experiencias.php'); ?>
<?php include('slider-testimonials.php'); ?>
		<section id="about" class="position-relative">
			<div class="bloque-blanco-top-content"> </div>
			<div class="container">
				<?php include('include-menu-about.php'); ?>
				<div class="row">
					<div class="bloque clearfix mt-0">
						<div class="col-sm-12 text-center">
							<?php 
							if ( have_posts() ) {
								while ( have_posts() ) {
									the_post(); 
							?>							
							<div class="content">
								<h2><?php the_title(); ?></h2>
								<?php the_content(); ?>
							</div>
							<?php
								} // end while
							} // end if
							?>								
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="testimonials">
			<div class="container">
				<div class="row">
					<div class="grid">
						<div class="grid-sizer col-sm-6 col-md-4"></div>
	   			<?php
			        $originales = array(
				        'post_type' => 'testimonial'
			        );
			        $query = new WP_Query( $originales ); 
					$e = 0;
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) : $query->the_post();
	        			$idprograma = get_the_ID();	
				?>								
						<div class="grid-item col-sm-6 col-md-4">
							<div class="testimonial-box grid-item-content">
								<div class="ico-testimonial"></div>
								<div class="testimonial-text">
									<?php the_content(); ?>
									<h4><strong><?php echo get('detalles_nombre'); ?></strong>
									<br><?php echo get('detalles_origen'); ?><br><?php echo get('detalles_tour'); ?></h4>
									<div class="border-bottom-testimonial-box"></div>
								</div>
							</div>
						</div>
				<?php 		
	        			$e++;
		            endwhile; 
					} 
				?>								
					</div>


					</div> <!-- row -->
				</div>
		</section>
<?php include('footer.php'); ?>
