<?php include('header.php'); ?>
<?php include('main-nav.php'); ?>
<?php include('include-menu-experiencias.php'); ?>
<?php 
	
	
function submenu($category,$pais,$esteid){
	
	$the_query = new WP_Query( array(
	    'post_type' => 'experience',
	    'category_name' => $category,
	    'tax_query' => array(
	        array (
	            'taxonomy' => 'country',
	            'field' => 'slug',
	            'terms' => $pais,
	        )
	    ),
	) );
	while ( $the_query->have_posts() ) :
	    $the_query->the_post();
	    $otroid 	= get_the_ID();
		$submenu .= '<a href="'.get_the_permalink().'" ';
		if($otroid == $esteid){
			$submenu .= 'class="active" ';
			$submenu .= '>'.get_the_title().'</a> |'; 
		}else{
			$submenu .= '>'.get_the_title().'</a> |';
		}			          				
	endwhile;
	
	return rtrim($submenu,'|');
}	
	
	
	
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
?>
<?php 
		$term_list = wp_get_post_terms($post->ID, 'country', array("fields" => "all"));
		$id = $term_list[0]->term_id ;
		
		$cat_list = wp_get_post_terms($post->ID, 'category', array("fields" => "all"));
		$id1 = $cat_list[0]->term_id ;
		
		$esteid = get_the_ID();
?>
		<div id="slider-destinations">
			<section class="slider-home container-fluid no-padding">
				<div id="slider-home" class="owl-carousel owl-theme">
				    <div class="item">
				    	<div class="layer"></div>
				          <!-- 1920 x 550 -->
				          	<div class="carousel-info">
				          		<div class="carousel-info-inner">
				          			<p class="hidden-xs"><a href="<?php bloginfo('url'); ?>">Home</a> / <a href="javascript:void(0);"><?php echo $term_list[0]->name ; ?></a> / <?php echo $cat_list[0]->name ; ?></p>
				          			<h2><?php echo $cat_list[0]->name ; ?></h2>	          			
				          			<p class="hidden-xs hide-beta">
										<?php 
											$category = $cat_list[0]->slug;
											$pais	  = $term_list[0]->slug;
											
											echo submenu($category,$pais,$esteid);
										?>
				          			</p>
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
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
?>
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
							<h4><?php the_title(); ?></h4>
							<?php the_content(); ?>
						</div>
					</div>
					<div class="bloque clearfix">
						<div class="col-sm-12 col-md-10 col-md-offset-1" id="tourmap">
							<div class="row">
								<div class="col-sm-6">
									<h6>Tour Map</h6>
									<div class="row hidden-xs">
										<div class="col-sm-10 col-sm-offset-1">
											<img src="<?php echo get('detalles_mapa'); ?>" class="img-responsive">	
										</div>
									</div>
								</div>
								<div class="col-sm-6" id="mapa">
									<div class='embed-container'>
										<?php echo get('detalles_tour_map'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="bloque clearfix" id="simbologia">
						<div class="col-sm-12 text-center">
							<ul class="complimentary">
								<li><span>B</span> Breakfast</li>
								<li><span>L</span> Lunch</li>
								<li><span>D</span> Dinner</li>
							</ul>
						</div>
					</div>
					<div class="bloque clearfix">
						<div class="col-sm-12">
							   	<?php
								   	$i = 0;
									$itinerarios = get_order_group('intinerary_day');
									foreach($itinerarios as $itinerario){   
										$i++;
								?>
									<?php
											if($i == 1){ 
									?>    	
							<div class="row">		
									<?php } ?>					
								<div class="col-md-6 day">
									<h5><?php echo get('intinerary_day',$itinerario); ?></h5>
									<?php echo get('intinerary_description',$itinerario); ?>
									<ul class="complimentary">
										<?php 
										foreach (get('intinerary_complimentary',$itinerario) as &$valor) {
											  
										   if($valor == 'Breakfast'){
										?>
											   <li><span>B</span></li>
										<?php
										   }elseif($valor == 'Lunch'){
										?>
											   <li><span>L</span></li>
										<?php
										   }elseif($valor == 'Dinner'){
										?>
											   <li><span>D</span></li>
										<?php
										   }
										}
										?>
									</ul>
								</div>
								
									<?php
										if($i == 2){ 
											$i = 0;
									?>    	
							</div><!-- fin row -->
									<?php } ?>							
                                <?php } ?>
								<?php
									if($i == 1){ 
								?>    	
							</div><!-- fin row -->
									<?php } ?>
							<a href="<?php bloginfo('url'); ?>/contact" id="request">REQUEST A DETAILED<br>ITINERARY</a>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<section id="includes">
			<div class="container-fluid no-padding bg-gris-2 mt-50 position-relative">		
				<div class="container">
					<div class="row">
						<div class="bloque clearfix">
							<div class="col-sm-12 text-center">
								<h4 class="includes">The program includes:</h4>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="bloque clearfix">
							<div class="col-sm-6">
								<?php echo get('includes_column_1'); ?>
							</div>
							<div class="col-sm-6">
								<?php echo get('includes_column_2'); ?>
							</div>

						</div>
					</div>
					<div class="row">
						<div class="bloque clearfix">
							<div class="col-sm-12 text-center">
								<h4>The program does not include:</h4>
							</div>
							<div class="col-sm-12 text-center">
								<ul class="not-include">
									<li><img src="<?php bloginfo('template_url');?>/assets/img/ico-plane.png"> Travel insurance</li>
									<li><img src="<?php bloginfo('template_url');?>/assets/img/ico-luggage.png"> Personal expenses and other items<br>not indicated in the program </li>
									<li><img src="<?php bloginfo('template_url');?>/assets/img/ico-bellman.png"> Tips for hotel staff, guides and drivers</li>
								</ul>
							</div>
							<div class="col-sm-12 text-center">
								
								<?php echo get('includes_disclaimer'); ?>
								<p class="disclaimer">This is a sample itinerary. We work closely with our travelers<br> 
									to personally design the itinerary that best meets their needs and desires.<p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> <!-- guided -->
		
		<?php include('include-galery.php'); ?>
		
		<section id="testimonial" class="position-relative">
			
			<div class="container">
				<div class="row">
					<div class="bloque clearfix">
						<div class="col-sm-12 text-center">
							<h4>testimonial</h4>
							<?php echo get('testimonial_text'); ?>
							<p class="by"> <?php echo get('testimonial_name'); ?><br> <?php echo get('testimonial_origin'); ?></p>

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
