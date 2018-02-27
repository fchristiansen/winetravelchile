<?php include('header.php'); ?>
<?php include('main-nav.php'); ?>
<?php include('include-menu-experiencias.php'); ?>

		<section id="destinations" class="position-relative">
			
			
			<div class="container">
				<div class="row">
				
					<div class="bloque clearfix">
						<div class="col-sm-12">							
							<div class="row">					
								<div class="col-md-12 day text-center">
									<h5>Search results for: <?php echo $_GET['s']; ?></h5>
								</div>
									
							</div><!-- fin row -->
<?php 
	
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
?>  	
							<div class="row">					
								<div class="col-md-3 day">
									<?php the_post_thumbnail('hotels', array('class' => 'img-responsive')); ?>
								</div>				
								<div class="col-md-9 day">
									<h5><?php the_title()?></h5>
									<?php the_excerpt(); ?>
									<p><a href="<?php the_permalink(); ?>">Read More...</a></p>
								</div>
									
							</div><!-- fin row -->
<?php
	} // end while
} // end if
?>		
						</div>
					</div>
					
				</div>
			</div>
		</section>
		
<?php include('footer.php'); ?>
