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
												    <option value="" >Select a destination</option>
													<?php
														$experience = $_GET['e'];
														$the_query = new WP_Query( array(
													    'post_type' 		=> 'experience',
														'posts_per_page'	=> -1
													) );
													while ( $the_query->have_posts() ) :
													    $the_query->the_post();
														$esteid = get_the_ID();
														if(has_term( 'argentina', 'country' )){
															$pais =  " - Argentina";
														}else{
															$pais =  " - Chile";
														}
													?>
												    <option value="<?php the_title(); ?>" <?php if($esteid == $experience){ ?>selected<?php } ?>><?php the_title(); ?><?php echo $pais; ?></option>
													<?php
														endwhile;
													?>

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
											    <label for="date2"> Travel Dates To *</label>
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
