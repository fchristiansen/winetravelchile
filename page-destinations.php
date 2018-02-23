<?php include('header.php'); ?>
<?php include('main-nav.php'); ?>
<?php include('include-menu-experiencias.php'); ?>
<?php include('slider-destinations.php'); ?>

		<section id="destinations" class="position-relative">
			<div class="bloque-blanco-top-content"> </div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<div class="content clearfix mb-0">
							<h2>destinations</h2>
							<?php include('include-menu-destinations.php'); ?>
						</div> <!-- content -->
					</div>
				</div>
			</div>
		</section><!-- destinations -->
		<section class="slider-destinations">
			<div class="container-fluid no-padding">

				<div id="carousel-destinations" class="carousel-destinations">
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations-img1.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations-img1.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations-img2.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations-img2.jpg" alt="">
					    </div>
					    <div>
			      			<img class="img-responsive owl-lazy" data-src="<?php bloginfo('template_url'); ?>/assets/img/destinations-img3.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/destinations-img3.jpg" alt="">
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
								<form action="ajax/enviar.php" method="post" id="formContacto">
									<input type="hidden" name="from" value="1">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										    <label for="sel1">Destination *</label>
											  <select class="form-control required" id="sel1" name="destino">
											    <option value="Luxury Red Wine Experience">Luxury Red Wine Experience</option>
											    <option value="Women's Walking, Wine and Food Experience">Women's Walking, Wine and Food Experience</option>

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
										    <label for="date1">Dates of Travel From</label>

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
										    <label for="date2">Dates of Travel To</label>
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



