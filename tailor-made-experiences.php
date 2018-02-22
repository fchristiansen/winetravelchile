<?php include('header.php'); ?>
<?php include('main-nav.php'); ?>
<?php include('include-menu-experiencias.php'); ?>
<?php include('slider-tailor-made-experiences.php'); ?>
		<section id="destinations" class="position-relative">

			<div class="bloque-blanco-top-content"></div>
			<div class="container">
				<div class="row">
					<div class="bloque clearfix mt-0">
						<div class="col-sm-12 text-center">
							<div class="content center-block clearfix mb-0">
								<h4> TAILOR-MADE EXPERIENCES</h4>
								<p>Chile’s boutique Wine Travel Company specializes in tailor-made experiences. We work closely with our travelers to personally design the itinerary that best meets their needs and desires.
									Private Travel means you go with your friends, your family or your colleagues. we’ll pool our expert knowledge—and 15 years of experience arranging and guiding high-quality trips.
								</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<section class="border-box center-block">
				<div class="punto-l">
					<div class="cuadrado">
						<div class="circle"></div>
					</div>
				</div>
				<div class="punto-r">
					<div class="cuadrado">
						<div class="circle"> </div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6">
						<ul>
							<li>Design your perfect trip with us</li>
							<li>We want to plan your dream trip!!</li>
						</ul>
					</div>
					<div class="col-sm-6">
						<ul>
							<li>Extraordinary journeys</li>
							<li>The Word’s most spectacular settings</li>
						</ul>
					</div>
				</div>


		</section>
		<section id="contacto">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="contact content clearfix mb-0">
							<div class="formulario-contacto">
								<form action="ajax/enviar.php" method="post" id="formContacto">
									<input type="hidden" name="from" value="3">
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

		</section> <!-- contacto -->

		<section id="includes">
			<div class="container-fluid no-padding bg-gris-2 position-relative">
				<div class="container">
					<div class="row">
						<div class="bloque clearfix">
							<div class="col-sm-12 text-center">
								<h4>The program does not include:</h4>
							</div>
							<div class="col-sm-12 text-center">
								<ul class="not-include">
									<li><img src="assets/img/ico-plane.png"> Travel insurance</li>
									<li><img src="assets/img/ico-luggage.png"> Personal expenses and other items<br>not indicated in the program </li>
									<li><img src="assets/img/ico-bellman.png"> Tips for hotel staff, guides and drivers</li>
								</ul>
							</div>
							<div class="col-sm-12 text-center">
								<p class="disclaimer">This is a sample itinerary. We work closely with our travelers<br>
									to personally design the itinerary that best meets their needs and desires.<p>

								<!-- texto para argentina -->
								<p class="disclaimer">
									You can also email or phone us: Email: info@winetravelchile.com
									Phone:  Chile + 56 9 927 81331, WhatsApp (+ 56 9) 953 81177   USA + 1 (626) 657 0045
								</p>

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
							<a href="assets/img/lrwe-foto01_lg.jpg">
								<img src="assets/img/lrwe-foto01.jpg" class="img-responsive br5w bb10w">
							</a>
						</div>
						<div class="row">
							<a href="assets/img/lrwe-foto02_lg.jpg">
								<img src="assets/img/lrwe-foto02.jpg" class="img-responsive br5w">
							</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<a href="assets/img/lrwe-foto03_lg.jpg">
								<img src="assets/img/lrwe-foto03.jpg" class="img-responsive br5w bl5w">
							</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="row">
							<a href="assets/img/lrwe-foto04_lg.jpg">
								<img src="assets/img/lrwe-foto04.jpg" class="img-responsive bl5w bb10w">
							</a>
						</div>
						<div class="row">
							<a href="assets/img/lrwe-foto05_lg.jpg">
								<img src="assets/img/lrwe-foto05.jpg" class="img-responsive bl5w">
							</a>
						</div>
					</div>

				</div>
			</div>
		</section>

<?php include('footer.php'); ?>
