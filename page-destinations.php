<?
/*

Template name: Destinations

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
					<div class="slider-solo">
					    <div class="item">
					    	<div class="layer"></div>
					          	<!-- 1920 x 550 -->
					          	<div class="carousel-info">
					          		<div class="carousel-info-inner">
					          			<p class="hidden-xs">
					          				<a href="<?php bloginfo('url'); ?>">Home</a><!--  / <a href="page-about.php">about us</a> -->  / destinations
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

		<section id="destinations" class="position-relative">
			<div class="bloque-blanco-top-content">
				<a href="#destinations">
					<img src="<?php bloginfo('template_url');?>/assets/img/down-arrow.png" alt="" class="down-arrow">
				</a>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<div class="content clearfix mb-0">
							<h2>destinations</h2>
							<section class="botonera">
								<ul>
									<li><a data-pais="fr" class="btn-destination btn btn-default activo" href="javascript:void(0);" role="button">France</a></li>
									<li><a data-pais="nz" class="btn-destination btn btn-default" href="javascript:void(0);" role="button">New Zealand</a></li>
									<li><a data-pais="uy" class="btn-destination btn btn-default" href="javascript:void(0);" role="button">Uruguay</a></li>
								</ul>
							</section>
						</div> <!-- content -->
					</div>
				</div>
			</div>
		</section><!-- destinations -->
		<section class="slider-destinations">
			<div class="container-fluid no-padding">
				<div class="row">
					<div id="carousel-destinations-fr" class="carousel-destinations">
					   <!--  <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/1.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/1.jpg" alt="">
					    </div> -->
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/2.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/2.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/3.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/3.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/4.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/4.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/5.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/5.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/6.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/6.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/7.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/7.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/8.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/8.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/9.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/9.jpg" alt="">
					    </div>
					    <!-- <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/10.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/10.jpg" alt="">
					    </div> -->
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/11.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/11.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/12.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/12.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/13.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/13.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/14.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/14.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/15.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/15.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/16.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/16.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/17.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/17.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/18.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/18.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/19.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/19.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/20.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/20.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/21.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/21.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/22.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/22.jpg" alt="">
					    </div>
					    <!-- <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/23.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/23.jpg" alt="">
					    </div> -->
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/24.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/francia/24.jpg" alt="">
					    </div>
					</div>

					<div id="carousel-destinations-nz" class="carousel-destinations hide">
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/new-zeland/1.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/new-zeland/1.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/new-zeland/2.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/new-zeland/2.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/new-zeland/3.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/new-zeland/3.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/new-zeland/4.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/new-zeland/4.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/new-zeland/5.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/new-zeland/5.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/new-zeland/6.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/new-zeland/6.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/new-zeland/7.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/new-zeland/7.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/new-zeland/8.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/new-zeland/8.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/new-zeland/9.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/new-zeland/9.jpg" alt="">
					    </div>
					</div>
						<div id="carousel-destinations-uy" class="carousel-destinations hide">
						    <div>
				      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/uruguay/1.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/uruguay/1.jpg" alt="">
						    </div>
						    <div>
				      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/uruguay/2.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/uruguay/2.jpg" alt="">
						    </div>
						    <div>
				      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/uruguay/3.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/uruguay/3.jpg" alt="">
						    </div>
						    <div>
				      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/uruguay/4.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/uruguay/4.jpg" alt="">
						    </div>
						    <div>
				      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/uruguay/5.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/uruguay/5.jpg" alt="">
						    </div>
						    <div>
				      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/uruguay/6.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/uruguay/6.jpg" alt="">
						    </div>
						    <div>
				      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/uruguay/7.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/uruguay/7.jpg" alt="">
						    </div>
						    <div>
				      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/uruguay/8.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/uruguay/8.jpg" alt="">
						    </div>
						    <div>
				      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations/uruguay/9.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations/uruguay/9.jpg" alt="">
						    </div>
						</div>
				</div>






			</div>
					<p class="quote">Ready for your next wine adventure? Contact us for a personalized quote.</p>

		</section>
		<section id="contacto">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="contact clearfix">
							<div class="formulario-contacto">
								<form action="<?php bloginfo('template_url'); ?>/ajax/enviar.php" method="post" id="formContacto">
									<input type="hidden" name="from" value="1">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										    <label for="sel1">Destination *</label>
											  <select class="form-control required" id="sel1" name="destino">
											  	 <option value="" >Select a destination</option>
											    <option value="France">France</option>
											    <option value="New Zealand">New Zealand</option>
											    <option value="Uruguay">Uruguay</option>
											  </select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="passengers">#Of Passengers *</label>
										    <input type="number" class="form-control required" id="passengers" name="pasajeros">
										</div>
									</div>
								</div><!-- fin linea form -->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										    <label for="name">First Name *</label>
										    <input type="text" class="form-control required" id="name" name="nombre">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="lastname">Last Name *</label>
										    <input type="text" class="form-control required" id="lastname" name="apellido">
										</div>
									</div>
								</div><!-- fin linea form -->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										    <label for="email">Email *</label>
										    <input type="email" class="form-control required" id="email" name="email">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="phone">Phone *</label>
										    <input type="text" class="form-control required" id="phone" name="phone">
										</div>
									</div>
								</div><!-- fin linea form -->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										    <label for="date1">Travel Dates From *</label>

										    <div class='input-group date' id='datetimepicker1'>
							                    <input type='text' class="form-control fechainput required" name="fecha1" id="date1" readonly=""  />
							                    <span class="input-group-addon">
							                        <span class="glyphicon glyphicon-calendar"></span>
							                    </span>
							                </div>
							                <label id="date1-error" class="error" for="date1" style="display: none;"></label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="date2">Travel Dates To *</label>
										    <div class='input-group date' id='datetimepicker2'>
							                    <input type='text' class="form-control fechainput required" name="fecha2" id="date2" readonly=""  />
							                    <span class="input-group-addon">
							                        <span class="glyphicon glyphicon-calendar"></span>
							                    </span>
							                </div>
							                <label id="date2-error" class="error" for="date2" style="display: none;"></label>
										</div>
									</div>
								</div><!-- fin linea form -->
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
										  <label for="comment">Comments:</label>
										  <textarea class="form-control" rows="5" id="comment" name="comment" maxlength="600"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div id="result"></div>
										<button type="submit" class="btn bt-submit pull-right">Submit</button>
									</div>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>


		</section>

<?php include('footer.php'); ?>



