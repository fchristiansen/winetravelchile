<?
/*

Template name: Tailor made Experiences

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
		          			<p class="">
			          			<?php
				          			if ( $post->post_parent == '171' ) {
										$pais = "Chile";
									}else{
										$pais = "Argentina";
									}
								?>
		          				<a href="<?php bloginfo('url'); ?>">Home</a> / <span class="txt-bread"><?php echo $pais; ?> </span>/ <span class="txt-bread">Tailor-made experiences</span>
		          			</p>
		          			<p class="title2">Tailor-Made Creative Journeys</p>
		          		</div>
		          	</div>
		          	<?php the_post_thumbnail('full', array('class' => 'img-responsive owl-lazy hidden-xs')); ?>
		          	<?php the_post_thumbnail('slider_mobile', array('class' => 'img-responsive owl-lazy visible-xs')); ?>

		    </div>
		</div> <!-- contenedor top -->
	</section>
</div>

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
							<div class="content center-block clearfix mb-0">
								<h4>TAILOR-MADE EXPERIENCES</h4>
								<?php the_content(); ?>
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
							<li>We want to plan your dream trip!</li>
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
								<form action="<?php bloginfo('template_url'); ?>/ajax/enviar.php" method="post" id="formContacto">
									<input type="hidden" name="from" value="3">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										    <label for="sel1">Destination *</label>
											  <select class="form-control required" id="sel1" name="destino">
											    <option value="Tailor Made">Tailor Made</option>
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

		</section> <!-- contacto -->

		<section id="includes">
			<div class="container-fluid no-padding bg-gris-2 position-relative">
				<div class="container">
					<div class="row">
						<div class="bloque clearfix content">
							<div class="col-sm-12 text-center">
								<h4>The program does not include:</h4>
							</div>
							<div class="col-sm-12 text-center">
								<ul class="not-include">
									<li><img src="<?php bloginfo('template_url'); ?>/assets/img/ico-plane.png"> Travel insurance</li>
									<li><img src="<?php bloginfo('template_url'); ?>/assets/img/ico-luggage.png"> Personal expenses and other items<br>not indicated in the program </li>
									<li><img src="<?php bloginfo('template_url'); ?>/assets/img/ico-bellman.png"> Tips for hotel staff, guides and drivers</li>
								</ul>
							</div>
							<div class="col-sm-12 text-center">
								<p class="disclaimer">We work closely with our travelers<br>
									to personally design the itinerary that best meets their needs and desires.<p>
								<!-- texto para argentina -->
								<p class="disclaimer">
									You can also email or phone us: Email: info@winetravelchile.com <br>
									Phone:  Chile <a href="tel:+56992781331">+ 56 9 927 81331</a>, WhatsApp <a href="whatsapp://tel:56995381177">(+ 56 9) 953 81177 </a>, USA <a href="tel:+16266570045">+ 1 (626) 657 0045</a>
								</p>


							</div>
						</div>
					</div>
				</div>
			</div>
		</section> <!-- guided -->

		<?php include('include-galery.php'); ?>

<?php
	} // end while
} // end if
?>
<?php include('footer.php'); ?>
