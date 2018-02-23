<?php include('header.php'); ?>
<?php include('main-nav.php'); ?>
<?php include('include-menu-experiencias.php'); ?>
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
?>
<?php 
		$term_list = wp_get_post_terms($post->ID, 'country', array("fields" => "all"));
		$id = $term_list[0]->term_id ;
		
		$cat_list = wp_get_post_terms($post->ID, 'category', array("fields" => "all"));
		$id1 = $cat_list[0]->term_id ;
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
					          			<a href="javascript:void(0);" class="active">WOMEN'S WALKING, WINE AND FOOD EXPERIENCE</a> | 
				          				<a href="javascript:void(0);">CHILE ACTIVE COASTAL WINE EXPERIENCE</a>
				          			</p>
				          		</div>
				          	</div>
				          	<?php the_post_thumbnail('full', array('class' => 'img-responsive owl-lazy hidden-xs')); ?>
				          	<?php the_post_thumbnail('slider_mobile', array('class' => 'img-responsive owl-lazy visible-xs')); ?>
				    </div>
				</div> <!-- contenedor slider -->
			</section>
		</div>
		<section id="destinations" class="position-relative">
			
			<div class="bloque-blanco-top-content"></div>
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
							<a href="contacto.php" id="request">REQUEST A DETAILED<br>ITINERARY</a>
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
		<section id="gallery" class="position-relative">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-4">
						<div class="row">
							<a href="<?php echo get('galery_photo_1'); ?>">
								<?php 
									$ext  = pathinfo(get('galery_photo_1'), PATHINFO_EXTENSION);
									$file = pathinfo(get('galery_photo_1'), PATHINFO_FILENAME);
									$dir  = pathinfo(get('galery_photo_1'), PATHINFO_DIRNAME);
									$foto = $dir.'/'.$file.'-610x355.'.$ext;
								?>
								<img src="<?php echo $foto; ?>" class="img-responsive br5w bb10w">
							</a>
						</div>
						<div class="row">
							<a href="<?php echo get('galery_photo_2'); ?>">
								<?php 
									$ext  = pathinfo(get('galery_photo_2'), PATHINFO_EXTENSION);
									$file = pathinfo(get('galery_photo_2'), PATHINFO_FILENAME);
									$dir  = pathinfo(get('galery_photo_2'), PATHINFO_DIRNAME);
									$foto = $dir.'/'.$file.'-610x427.'.$ext;
								?>
								<img src="<?php echo $foto; ?>" class="img-responsive br5w">
							</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<a href="<?php echo get('galery_photo_3'); ?>">
								<?php 
									$ext  = pathinfo(get('galery_photo_3'), PATHINFO_EXTENSION);
									$file = pathinfo(get('galery_photo_3'), PATHINFO_FILENAME);
									$dir  = pathinfo(get('galery_photo_3'), PATHINFO_DIRNAME);
									$foto = $dir.'/'.$file.'-600x792.'.$ext;
								?>
								<img src="<?php echo $foto; ?>" class="img-responsive br5w bl5w">
							</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<a href="<?php echo get('galery_photo_4'); ?>">
								<?php 
									$ext  = pathinfo(get('galery_photo_4'), PATHINFO_EXTENSION);
									$file = pathinfo(get('galery_photo_4'), PATHINFO_FILENAME);
									$dir  = pathinfo(get('galery_photo_4'), PATHINFO_DIRNAME);
									$foto = $dir.'/'.$file.'-610x425.'.$ext;
								?>
								<img src="<?php echo $foto; ?>" class="img-responsive bl5w bb10w">
							</a>
						</div>
						<div class="row">
							<a href="<?php echo get('galery_photo_5'); ?>">
								<?php 
									$ext  = pathinfo(get('galery_photo_5'), PATHINFO_EXTENSION);
									$file = pathinfo(get('galery_photo_5'), PATHINFO_FILENAME);
									$dir  = pathinfo(get('galery_photo_5'), PATHINFO_DIRNAME);
									$foto = $dir.'/'.$file.'-610x357.'.$ext;
								?>
								<img src="<?php echo $foto; ?>" class="img-responsive bl5w">
							</a>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<section id="testimonial" class="position-relative">
			
			<div class="container">
				<div class="row">
					<div class="bloque clearfix">
						<div class="col-sm-12 text-center">
							<h4>testimonial</h4>
							<p>“Karen, we will now all try to settle into our "former" lives after the wonderful trip of a lifetime that you made for us.  Thank you again so much for everything you did for us.  I think our memories of the adventure will be the topic for our next wine club meeting in December”</p>
							<p class="by"> Lynne Murphy and friends! Minnesota, USA.</p>

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
