<section id="sub-menu" class="clander sub-menu sub-menu-ar">
	<div class="container-fluid no-padding">
		<div class="container">
			<div class="row">
				<div class="menu-experiences">
					<div class="col-sm-3">
						<?php
							$the_query = new WP_Query( array(
						    'post_type' => 'experience',
							'category_name' => 'wine-and-food-experience',
							'posts_per_page'	=> 1,
						    'tax_query' => array(
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
						<div class="caluga">
						    <a class="caluga-enlace" href="<?php the_permalink(); ?>">
						    	<div class="lente">
						    		<h3 class="caluga-title"> WINE AND FOOD EXPERIENCES</h3>
						    	</div>
								<?php the_post_thumbnail('menu', array('class' => 'caluga-img')); ?>
						    </a>
						</div>
						<?php
							endwhile;
						?>							
					</div>
					<div class="col-sm-3">
						<?php
							$the_query = new WP_Query( array(
						    'post_type' => 'experience',
							'category_name' => 'active-wine-and-food-experience',
							'posts_per_page'	=> 1,
						    'tax_query' => array(
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
						<div class="caluga">
						    <a class="caluga-enlace" href="<?php the_permalink(); ?>">
						    	<div class="lente">
						      		<h3 class="caluga-title">ACTIVE WINE AND FOOD EXPERIENCES</h3>
						      	</div>
								<?php the_post_thumbnail('menu', array('class' => 'caluga-img')); ?>
						    </a>
						</div>
						<?php
							endwhile;
						?>		
					</div>
					<div class="col-sm-3">
						<div class="caluga">
						    <a class="caluga-enlace" href="<?php bloginfo('url'); ?>/argentina/tailor-made-experiences">
						    	<div class="lente">
						      		<h3 class="caluga-title">TAILOR-MADE EXPERIENCES</h3>
						      	</div>
						        <img class="caluga-img" src="<?php bloginfo('template_url'); ?>/assets/img/exp3.jpg" alt="">
						    </a>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="caluga">
						    <a class="caluga-enlace" href="<?php bloginfo('url'); ?>/argentina/corporate-and-press-trips">
						    	<div class="lente">
						      		<h3 class="caluga-title">CORPORATE AND PRESS TRIPS</h3>
						      	</div>
						        <img class="caluga-img" src="<?php bloginfo('template_url'); ?>/assets/img/exp4.jpg" alt="">
						    </a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div id="sub-menu-experiences-container" class="hide-beta">
		<div class="container position-relative">
			<div class="row">
				<div class="col-sm-12">
					<div class="menu-list-wrapper">
						<div class="text-center">
							<ul class="">
								<li class="active"><a href="<?php bloginfo('url'); ?>/argentina/history-of-argentina-wine">WINE REGIONS MAP</a></li>
								<li class="divisor-item-sub-menu">|</li>
								<li><a href="<?php bloginfo('url'); ?>/argentina/hotels">HOTELS</a></li>
								<li class="divisor-item-sub-menu">|</li>
								<li><a href="<?php bloginfo('url'); ?>/argentina/terms-and-conditions">TERMS AND CONDITIONS</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="sub-menu-2" class="clander sub-menu sub-menu-cl">
	<div class="container-fluid no-padding">
		<div class="container">
			<div class="row">
				<div class="menu-experiences">
					<div class="col-sm-3">
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
						<div class="caluga">
						    <a class="caluga-enlace" href="<?php the_permalink(); ?>">
						    	<div class="lente">
						    		<h3 class="caluga-title"> WINE AND FOOD EXPERIENCES</h3>
						    	</div>
								<?php the_post_thumbnail('menu', array('class' => 'caluga-img')); ?>
						    </a>
						</div>
						<?php
							endwhile;
						?>
					</div>
					<div class="col-sm-3">
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
						<div class="caluga">
						    <a class="caluga-enlace" href="<?php the_permalink(); ?>">
						    	<div class="lente">
						      		<h3 class="caluga-title">ACTIVE WINE AND FOOD EXPERIENCES</h3>
						      	</div>
								<?php the_post_thumbnail('menu', array('class' => 'caluga-img')); ?>
						    </a>
						</div>
						<?php
							endwhile;
						?>	
					</div>
					<div class="col-sm-3">
						<div class="caluga">
						    <a class="caluga-enlace" href="<?php bloginfo('url'); ?>/chile/tailor-made-experiences">
						    	<div class="lente">
						      		<h3 class="caluga-title">TAILOR-MADE EXPERIENCES</h3>
						      	</div>
						        <img class="caluga-img" src="<?php bloginfo('template_url'); ?>/assets/img/exp3.jpg" alt="">
						    </a>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="caluga">
						    <a class="caluga-enlace" href="<?php bloginfo('url'); ?>/chile/corporate-and-press-trips">
						    	<div class="lente">
						      		<h3 class="caluga-title">CORPORATE AND PRESS TRIPS</h3>
						      	</div>
						        <img class="caluga-img" src="<?php bloginfo('template_url'); ?>/assets/img/exp4.jpg" alt="">
						    </a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div id="sub-menu-experiences-container" class="hide-beta">
		<div class="container position-relative">
			<div class="row">
				<div class="col-sm-12">
					<div class="menu-list-wrapper">
						<div class="text-center">
							<ul class="">
								<li class="active"><a href="<?php bloginfo('url'); ?>/chile/history-of-chilean-wine">WINE REGIONS MAP</a></li>
								<li class="divisor-item-sub-menu">|</li>
								<li><a href="<?php bloginfo('url'); ?>/chile/hotels">HOTELS</a></li>
								<li class="divisor-item-sub-menu">|</li>
								<li><a href="<?php bloginfo('url'); ?>/chile/terms-and-conditions">TERMS AND CONDITIONS</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
