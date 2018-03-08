<?php include('header.php'); ?>
<?php include('main-nav.php'); ?>
<?php include('include-menu-experiencias.php'); ?>
<?php include('slider-home.php'); ?>


		<section id="intro" class="position-relative">
			<div class="uva"></div>
			<div class="parra"></div>
			<div class="vina"></div>
			<div id="contenido" class="bloque-blanco-top-content">
				<a href="#contenido">
					<img src="<?php bloginfo('template_url');?>/assets/img/down-arrow.png" alt="" class="down-arrow">
				</a>
			</div>
			<div class="container">
				<div class="row">
					<div class="bloque clearfix pl-50">
						<div class="col-sm-6">
							<h1> Wine Tour in Chile</h1>
							<h2> Private Wine and Food Experience</h2>
							<p>
								Visit beautiful wineries and taste the most delicious wines in each of the wine valleys along the route.
								You will also enjoy world’s most spectacular settings, <a href="">and regional cuisine</a> while visiting local
								villages and staying in small luxury hotels.
							</p>
							<div class="box-more hide-beta">
								<a href="<?php bloginfo('url'); ?>/luxury-red-wine-experience">more
									<img src="<?php bloginfo('template_url');?>/assets/img/arrow-more.png" alt="">
								</a>
							</div>

						</div>
						<div class="col-sm-6">
							<div class="picture-r clearfix">
								<div class="bg-picture-r">
									<img class="img-responsive picture" src="<?php bloginfo('template_url');?>/assets/img/bg1.png" alt="Private Wine and Food Experience">
								</div>
							</div>
						</div>

					</div>
					<div class="title-about clearfix">
						<img class="img-responsive center-block" src="<?php bloginfo('template_url');?>/assets/img/cava.png" alt="">
						<h3 class="title-vino">ABOUT WINE TRAVEL CHILE</h3>
					</div>
					<div class="bloque clearfix">
						<div class="col-sm-6">
							<div class="picture-r clearfix">
								<div class="bg-picture-r">
									<img class="img-responsive picture" src="<?php bloginfo('template_url');?>/assets/img/img2.png" alt="ABOUT WINE TRAVEL CHILE">
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<p>
								Wine Travel Chile specializes in tailor-made wine-and-food-focused tours. Karen Gilchrist founded the company in 2002,
								when she returned to Chile after living in France and England for 8 years. While abroad she had the opportunity to learn
								about great wines and travel to the most important wine regions in the world.
								We have built our reputation by crafting creative, tailor-made journeys through the best wine
								 regions in Chile and Argentina.
							</p>
								<div class="box-more hide-beta">
									<a href="<?php bloginfo('url'); ?>/about">more
										<img src="<?php bloginfo('template_url');?>/assets/img/arrow-more.png" alt="">
									</a>
								</div>
						</div>
					</div>
					</div>
				</div>
		</section>
		<section id="guided">
			<div class="container-fluid no-padding bg-gris-2 mt-50 position-relative">
				<img  id="img-chile" src="<?php bloginfo('template_url');?>/assets/img/chile.png" alt="chile">
				<div class="container box-padding">
					<div class="row">
						<div class="bloque clearfix">
							<div class="col-sm-6">
								<h2> GUIDED BY WINE EXPERTS</h2>
								<p>
									Our multilingual team has years of experience in creating, arranging, operating, and guiding high-quality trips.
									The people who embark on our tours have the opportunity to visit beautiful wineries and local villages,
									enjoy great views, stunning scenery and regional cuisine, and taste the most delicious
									wines in Chile, Argentina, Uruguay, France, and beyond.
								</p>
								<div class="box-more hide-beta">
									<a href="<?php bloginfo('url'); ?>/about/the-team">more
										<img src="<?php bloginfo('template_url');?>/assets/img/arrow-more.png" alt="arrow-more">
									</a>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="picture-r clearfix">
									<div class="bg-picture-r">
										<img class="img-responsive picture" src="<?php bloginfo('template_url');?>/assets/img/img4.png" alt=" GUIDED BY WINE EXPERTS">
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section> <!-- guided -->
		<section id="recomended" class="">
			<div class="container">
				<div class="row">
					<h3>recommended by</h3>
					<div class="logos-recomended clearfix">
<?php
					$the_query = new WP_Query( array(
					    'post_type' 		=> 'press',
					    'posts_per_page' 	=> 6
					) );
					while ( $the_query->have_posts() ) :
					    $the_query->the_post();
?>
						<div class="col-sm-2 col-xs-6">
							<?php if(get('detalles_adjuntar_pdf')){ ?>
							<a href="<?php echo get('detalles_adjuntar_pdf'); ?>" target="_blank">
				          		<?php the_post_thumbnail('full', array('class' => 'img-responsive center-block')); ?>
				          	</a>
							<?php } ?>
							<?php if(get('detalles_enlace_externo')){ ?>
							<a href="<?php echo get('detalles_enlace_externo'); ?>" target="_blank">
				          		<?php the_post_thumbnail('full', array('class' => 'img-responsive center-block')); ?>
				          	</a>
							<?php } ?>
						</div>
<?php

					endwhile;
?>
					</div>
				</div>
			</div>
		</section> <!-- recomended -->
<?php include('footer.php'); ?>
