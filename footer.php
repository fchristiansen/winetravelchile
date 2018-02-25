<footer class="hide-beta">
	<div class="container">
		<form id="newsletter">
			<div class="row">
				<div class="box-news-letter clearfix">
					<div class="col-sm-3">
							<div class="texto-sobre">
								<img  id="sobre" class="img-responsive" src="<?php bloginfo('template_url');?>/assets/img/sobre.png" alt="">
								<p>Sign up for <br>
								our newsletter</p>
							</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
								<label class="sr-only" for="email">Email address</label>
								<input type="email" class="form-control" id="email" placeholder="Your Email Adress">
						</div>
					</div>
					<div class="col-sm-3">
						<button type="submit" class="btn btn-default boton-submit">submit</button>
					</div>
				</div>
			</div>
		</form>
			<div class="box-links-footer clearfix">
				<div class="row">
					<div class="col-sm-3">
							<h4>chile</h4>
							<ul>
						<?php
							$the_query = new WP_Query( array(
						    'post_type' 		=> 'experience',
							'category_name' 	=> 'wine-and-food-experience',
							'posts_per_page'	=> 1,
						    'tax_query' 		=> array(
						        array (
						            'taxonomy' 	=> 'country',
						            'field' 	=> 'slug',
						            'terms' 	=> 'chile',
						        )
						    ),
						) );
						while ( $the_query->have_posts() ) :
						    $the_query->the_post();
						?>									
								<li><a href="<?php the_permalink(); ?>">Wine and Food Experience</a></li>
						<?php
							endwhile;
						?>	
						<?php
							$the_query = new WP_Query( array(
						    'post_type' 		=> 'experience',
							'category_name' 	=> 'active-wine-and-food-experience',
							'posts_per_page'	=> 1,
						    'tax_query' 		=> array(
						        array (
						            'taxonomy' 	=> 'country',
						            'field' 	=> 'slug',
						            'terms' 	=> 'chile',
						        )
						    ),
						) );
						while ( $the_query->have_posts() ) :
						    $the_query->the_post();
						?>	
								<li><a href="<?php the_permalink(); ?>">Active Wine and Food Experience</a></li>
						<?php
							endwhile;
						?>	
								<li><a href="<?php bloginfo('url'); ?>/chile/tailor-made-experiences">Tailor-Made</a></li>
								<li><a href="<?php bloginfo('url'); ?>/chile/corporate-and-press-trips">Corporate and Press Trips</a></li>
								<li><a href="<?php bloginfo('url'); ?>/chile/history-of-chilean-wine/">Wine Regions Map</a></li>
								<li><a href="<?php bloginfo('url'); ?>/chile/hotels/">Hotels</a></li>
								<li><a href="<?php bloginfo('url'); ?>/chile/terms-and-conditions/">Terms and Conditions</a></li>
							</ul>
					</div>
					<div class="col-sm-3">
						<h4>argentina</h4>
							<ul>
						<?php
							$the_query = new WP_Query( array(
						    'post_type' 		=> 'experience',
							'category_name' 	=> 'wine-and-food-experience',
							'posts_per_page'	=> 1,
						    'tax_query' 		=> array(
						        array (
						            'taxonomy' 	=> 'country',
						            'field' 	=> 'slug',
						            'terms' 	=> 'argentina',
						        )
						    ),
						) );
						while ( $the_query->have_posts() ) :
						    $the_query->the_post();
						?>									
								<li><a href="<?php the_permalink(); ?>">Wine and Food Experience</a></li>
						<?php
							endwhile;
						?>	
						<?php
							$the_query = new WP_Query( array(
						    'post_type' 		=> 'experience',
							'category_name' 	=> 'active-wine-and-food-experience',
							'posts_per_page'	=> 1,
						    'tax_query' 		=> array(
						        array (
						            'taxonomy' 	=> 'country',
						            'field' 	=> 'slug',
						            'terms' 	=> 'argentina',
						        )
						    ),
						) );
						while ( $the_query->have_posts() ) :
						    $the_query->the_post();
						?>	
								<li><a href="<?php the_permalink(); ?>">Active Wine and Food Experience</a></li>
						<?php
							endwhile;
						?>	
								<li><a href="<?php bloginfo('url'); ?>/argentina/tailor-made-experiences">Tailor-Made</a></li>
								<li><a href="<?php bloginfo('url'); ?>/argentina/corporate-and-press-trips">Corporate and Press Trips</a></li>
								<li><a href="<?php bloginfo('url'); ?>/argentina/history-of-argentina-wine/">Wine Regions Map</a></li>
								<li><a href="<?php bloginfo('url'); ?>/argentina/hotels/">Hotels</a></li>
								<li><a href="<?php bloginfo('url'); ?>/argentina/terms-and-conditions/">Terms and Conditions</a></li>
							</ul>
					</div>
					<div class="col-sm-2">
						<h4>More destinations</h4>
							<ul>
								<li><a href="<?php bloginfo('url'); ?>/destinations">France</a></li>
								<li><a href="<?php bloginfo('url'); ?>/destinations">New Zealand</a></li>
								<li><a href="<?php bloginfo('url'); ?>/destinations">Uruguay</a></li>
							</ul>
					</div>
					<div class="col-sm-2">
						<h4>about us</h4>
						<ul>
							<li><a href="<?php bloginfo('url'); ?>/about">History</a></li>
							<li><a href="<?php bloginfo('url'); ?>/about/the-team/">Team</a></li>
							<li><a href="<?php bloginfo('url'); ?>/about/testimonials/">Testimonials</a></li>
							<li><a href="<?php bloginfo('url'); ?>/about/press/">Press</a></li>
						</ul>
					</div>
					<div class="col-sm-2">
						<h4>contact</h4>
						<ul>
							<li><a href="tel:+56992781331">+569 927 81 331 </a></li>
							<li><a href="mailto:info@winetravelchile.com">info@winetravelchile.com</a></li>
							<li>&nbsp</li>
							<li>&nbsp</li>
<!-- 							<li><a href="<?php bloginfo('url'); ?>/">SITE MAP</a></li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
</footer>
<div class="container-fluid clearfix rrss-container">
		<div class="container">
			<div class="row">

					<div class="col-xs-12 col-sm-6 col-sm-push-6">
						<div class="center-xs">
							<ul class="rrss">
								<li>Follow us:</li>
								<li><a href="https://www.facebook.com/winetravelchileofficial/ " target="_blank"><img src="<?php bloginfo('template_url');?>/assets/img/ico-fb.svg" width="27" alt="facebook"></a></li>
								<li><a href="https://www.instagram.com/winetravelchileofficial/" target="_blank"><img src="<?php bloginfo('template_url');?>/assets/img/ico-ig.svg" width="31" alt="instagram"></a></li>
								<li><a href="https://twitter.com/winetravelchile" target="_blank"><img src="<?php bloginfo('template_url');?>/assets/img/ico-tw.svg" width="29" alt="twitter"></a></li>
								<li><a href="https://www.youtube.com/watch?v=KZWZ6OuJQMk" target="_blank"><img src="<?php bloginfo('template_url');?>/assets/img/ico-yt.svg" width="32" alt="youtube"></a></li>
							</ul>
						</div>

					</div>
					<div class="col-xs-12 col-sm-6 col-sm-pull-6">
						<p class="copy">WINE TRAVEL CHILE. | 2018 ALL RIGHTS RESERVED.</p>
					</div>
			</div>
		</div>
	</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="//code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<!-- Latest compiled and minified JavaScript -->
		<script src="<?php bloginfo('template_url');?>/assets/js/owl.carousel.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="<?php bloginfo('template_url');?>/assets/js/simpleLightbox.min.js"></script>
		<script src="<?php bloginfo('template_url');?>/assets/js/masonry.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/slick/slick.min.js"></script>
		<script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js'></script>
		<script src="<?php bloginfo('template_url');?>/assets/js/vendor/jquery.form.min.js"></script>
		<script src="<?php bloginfo('template_url');?>/assets/js/vendor/jquery.validate.min.js"></script>
		<script src="<?php bloginfo('template_url');?>/assets/js/contact.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		<script src="<?php bloginfo('template_url');?>/assets/js/wine.js"></script>
</body>
</html>
