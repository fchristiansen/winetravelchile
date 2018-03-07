<?
/*

Template name: Contact

*/
?>
<?php include('header.php'); ?>
<?php include('main-nav.php'); ?>
<?php include('include-menu-experiencias.php') ?>


		<section id="contacto">
			<div class="container-fluid position-relative">
				<!--<div class="container">-->
					<div class="row">
						<div class="bloque clearfix">
							<div class="col-sm-6 hidden-xs hidden-sm col-md-6 col-lg-6">

								<img class="img-responsive img-cava1" src="<?php bloginfo('template_url'); ?>/assets/img/contacto/bodega-cavas.jpg" alt="">

								<img class="img-responsive img-cava2" src="<?php bloginfo('template_url'); ?>/assets/img/contacto/bodega-cavas-1024.jpg" alt="">

							</div>
							<div class="col-sm-12 col-md-6 col-lg-6">
								<div class="box-contacto">
								<h4> CONTACT </h4>
								<p class="bajada">
									Ready for your next wine adventure? Contact us for a personalized quote.
								</p>
								<div class="formulario-contacto">
									<form action="<?php bloginfo('template_url'); ?>/ajax/enviar.php" method="post" id="formContacto">
									<input type="hidden" name="from" value="2">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
											    <label for="sel1">Destination *</label>
												  <select class="form-control required" id="sel1" name="destino">
												  	<option value="CHILEAN WINE ROUTE">CHILEAN WINE ROUTE</option>
												  	<option value="ORGANIC AND BIODYMAMIC EXPERIENCE">ORGANIC AND BIODYMAMIC EXPERIENCE</option>
												  	<option value="LUXURY RED WINE EXPERIENCE">LUXURY RED WINE EXPERIENCE</option>
												  	<option value="CASUAL WHITE AND RED EXPERIENCE">CASUAL WHITE AND RED EXPERIENCE</option>
												  	<option value="COASTAL WINE EXPERIENCE">COASTAL WINE EXPERIENCE</option>
												  	<option value="WOMEN’S WALKING, WINE AND FOOD EXPERIENCE">WOMEN’S WALKING, WINE AND FOOD EXPERIENCE</option>
												  	<option value="ACTIVE COASTAL WINE EXPERIENCE ">ACTIVE COASTAL WINE EXPERIENCE </option>
												  	<option value="LUXURY MALBEC AND CULINARY EXPERIENCE">LUXURY MALBEC AND CULINARY EXPERIENCE</option>
												  	<option value="CULINARY MALBEC AND SPARKLING EXPERIENCE">CULINARY MALBEC AND SPARKLING EXPERIENCE</option>
												  	<option value="ACTIVE SALTA WINE AND FOOD EXPERIENCE">ACTIVE SALTA WINE AND FOOD EXPERIENCE</option>


												  <!--   <option value="Luxury Red Wine Experience">Luxury Red Wine Experience</option>
												    <option value="Women's Walking, Wine and Food Experience">Women's Walking, Wine and Food Experience</option> -->

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
				<!--</div>-->
			</div>
		</section> <!-- guided -->

<?php include('footer.php'); ?>
