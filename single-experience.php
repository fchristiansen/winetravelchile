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
				          			<p class="hidden-xs"><a href="<?php bloginfo('url'); ?>">Home</a> / <a href="javascript:void(0);">Chile</a> / Active Wine And Food Experience</p>
				          			<h2>Active Wine and Food Experience</h2>	          			
				          			<p class="hidden-xs hide-beta">
					          			<a href="javascript:void(0);" class="active">WOMEN'S WALKING, WINE AND FOOD EXPERIENCE</a> | 
				          				<a href="javascript:void(0);">CHILE ACTIVE COASTAL WINE EXPERIENCE</a>
				          			</p>
				          		</div>
				          	</div>
				          	<img class="img-responsive owl-lazy hidden-xs" data-src="<?php bloginfo('template_url');?>/assets/img/awawe01.jpg" src="<?php bloginfo('template_url');?>/assets/img/awawe01.jpg" alt="">
				          	<img class="img-responsive owl-lazy visible-xs" data-src="<?php bloginfo('template_url');?>/assets/img/awawe01_m.jpg" src="<?php bloginfo('template_url');?>/assets/img/awawe01_m.jpg" alt="">
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
							<div class="row">
							   	<?php
									$itinerarios = get_order_group('intinerary_day');
									foreach($itinerarios as $itinerario){   
								?>    								
								<div class="col-md-6 day">
									<h5><?php echo get('intinerary_day',$horario); ?></h5>
									<p><?php echo get('intinerary_description',$horario); ?></p>
									<ul class="complimentary">
										<<?php echo get('intinerary_complimentary',$horario); ?>
										<li><span>B</span></li>
										<li><span>L</span></li>
										<li><span>D</span></li>
									</ul>
								</div>
                                <?php } ?>
								
							</div>
							<div class="row">
								<div class="col-md-6 day">
									<h5>Day 3:  Casablanca Valley<br>Valparaiso Port</h5>
									<p>Breakfast and check-out - Depart to the Casablanca Valley, about a 1.5-hour drive from Santiago - Walking visit and premium wine tasting at <b>Emiliana</b>, the largest organic winery in the world and Chile’s largest producer of biodynamic wines. It is enclosed in a small valley filled wild animals and birds - Gourmet lunch and continue to Viña del Mar, a coastal resort town near <b>Valparaiso</b> - City tour & walk around Valparaiso, discovering its historic sites and charming hillside “elevators”, stop in the “Alegre” hill for a local pastry - Check-in and overnight at the hotel in Valparaiso </p>
									<ul class="complimentary">
										<li><span>B</span></li>
										<li><span>L</span></li>
									</ul>
								</div>
								<div class="col-md-6 day">
									<h5>Day 4: Valparaiso Port<br>
San Antonio Valley <br>
Santa Cruz</h5>
									<p>Breakfast and check-out - Depart from Fauna Hotel in Valparaiso - Today we will hike the fun trails in the Rosario Valley, about 1 hour from Valparaiso, close to the port of San Antonio. We will also enjoy a tour of the <b>Matetic Winery</b> and taste their excellent wines made from 100% organically grown grapes - Gourmet lunch at the Matetic restaurant - Next we head for the Colchagua Valley, about 3 hours by van - Dinner at the hotel restaurant and overnight at Noi Blend Boutique Hotel </p>
									<ul class="complimentary">
										<li><span>B</span></li>
										<li><span>L</span></li>
										<li><span>D</span></li>
									</ul>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 day">
									<h5>Day 5: Colchagua Valley</h5>
									<p>Breakfast and check-out - Depart for a hike in the Apalta Valley, where you will enjoy a panoramic view of the valley followed by a tour and wine tasting at the <b>Montes Winery</b> - Lunch - Visit the village of Santa Cruz and the Colchagua Museum. The largest and most comprehensive museum of Chilean history, with a large collection of Latin American colonial Art - Continue to Santiago, about 2.5 hour drive north - Check-in and overnight at the luxury hotel in Santiago </p>
									<ul class="complimentary">
										<li><span>B</span></li>
										<li><span>L</span></li>
									</ul>
								</div>
								<div class="col-md-6 day">
									<h5>Day 6: Maipo Valley</h5>
									<p>Breakfast and depart to Cascada de las Animas Ecological Park for a moderate 1.5-hour hiking excursion in the Cajon del Maipo in the Andes, where you will enjoy the beautiful views of the mountains or a moderate walk at the <b>El Principal Winery</b>, follow by a wine tasting of their fine reds - Gourmet lunch at the Ecological School in Pirque - Private visit and premium wine tasting at <b>Aquitania</b>, a small winery that makes red wines from the Maipo Valley and Chardonnay & Pinot Noir from the Malleco Valley in Chile’s deep south - Overnight at the luxury hotel in Santiago </p>
									<ul class="complimentary">
										<li><span>B</span></li>
										<li><span>L</span></li>
									</ul>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 day">
									<h5>Day 7:  Santiago</h5>
									<p>Breakfast and depart for a <b>City tour of Santiago’s</b> historic downtown and surrounding areas - Lunch at a local restaurant - At leisure until your airport transfer for the return flight home - End of the trip </p>
									<ul class="complimentary">
										<li><span>B</span></li>
										<li><span>L</span></li>
									</ul>
								</div>
								<div class="col-md-6 day">
									<h5>Waking Trip details<br>
										Easygoing / moderate grade</h5>
									<p>Walking through the Aconcagua Valley (4 km)<br>
										Walking through the San Rosario Valley (8 km)<br>
										Walking through Valparaiso (4 km)<br>
										Walking through the Colchagua Valley (8 km)<br>
										Maipo Valley / Cajon del Maipo (4 km)
										</p>
								</div>
							</div>
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
								<p>
									Private land transportation and airport transfers<br> 
									Bilingual expert guides<br>
									All entrance fees, premium and reserve wine tastings at the wineries<br>
									Introduction to Chilean wines and wine regions given by a wine expert<br>
									6 nights in luxury and small hotels (Superior double rooms)<br>
									6 buffet breakfasts
								</p>
							</div>
							<div class="col-sm-6">
								<p>
									6 lunches with wine<br>
									2 dinners with wine<br>
									City tour of Santiago and Valparaiso Port<br>
									Chile wine regions map to keep and mineral water per day<br>
									Tips at meals as indicated in the itinerary
								</p>
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
