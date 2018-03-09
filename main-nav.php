<nav id="main-nav" class="navbar navbar-default position-relative">
	<div class="container ">
		<div class="row" >
			<div class="col-sm-12">
				<a class="logo-xs" href="<?php bloginfo('url'); ?>">
					<img id="logo-mobile" class="img-responsive center-block" src="<?php bloginfo('template_url') ?>/assets/img/logo-wine-travel-xs.png" alt="wine travel chile">
				</a>
			</div>
		</div>
	</div> <!-- container -->

	<div class="container position-relative">
		<div class="row">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
					<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
						<img id="logo-desk" class="img-responsive" src="<?php bloginfo('template_url') ?>/assets/img/logo.svg" width="170" alt="wine travel chile">
					</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="search-wrapper-xs">
								<form class="navbar-form navbar-right"action="<?php bloginfo('url'); ?>">
									<div class="form-group">
										<input type="text" placeholder="" class="form-control" name="s">
									</div>
									<button type="submit" class="btn btn-success bt-vino"><i class="fa fa-search"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<ul id="nav-list" class="nav navbar-nav navbar-right">
					<li <?php if(is_home()){ ?>class="active"<?php } ?>><a href="<?php bloginfo('url'); ?>">HOME</a></li>
					<li class="divisor-item-menu">|</li>
					<li <?php if((is_singular('experience') && has_term( 'chile', 'country' )) || is_page(185) || is_page(176) || is_page(203) || is_page(140) || is_page(142) ){ ?>class="active"<?php } ?>><a href="javascript:void(0);" class="btn-pais" data-pais="cl">CHILE <span class="sr-only">(current)</span></a></li>
					<li class="divisor-item-menu">|</li>
					<li <?php if((is_singular('experience') && has_term( 'argentina', 'country' ) ) || is_page(193) || is_page(178) || is_page(65) || is_page(211) || is_page(69)   ){ ?>class="active"<?php } ?>><a href="javascript:void(0);" class="btn-pais" data-pais="ar">ARGENTINA</a></li>
					<li class="divisor-item-menu">|</li>
					<li <?php if(is_page('destinations')){ ?>class="active"<?php } ?>><a href="<?php bloginfo('url'); ?>/destinations" id="btn-destinations">more Destinations</a></li>
					<li class="divisor-item-menu">|</li>
					<li  <?php if(is_page('about')){ ?>class="active"<?php } ?>><a href="<?php bloginfo('url'); ?>/about">ABOUT US</a></li>
<!--
					<li class="divisor-item-menu">|</li>
					<li class="hide-beta"><a href="javascript:void(0);">blog</a></li>
-->
					<li class="divisor-item-menu">|</li>
					<li  <?php if(is_page('contact')){ ?>class="active"<?php } ?>><a href="<?php bloginfo('url'); ?>/contact" id="btn-contacto">contact</a></li>
					<li id="mobile-contact">
						<!-- info contacto temp -->
						<ul class="info-contact">
							<li class="whatsapp"><a href="whatsapp://tel:56995381177" alt="WhatsApp" title="WhatsApp"><i class="fa fa-whatsapp"></i> + 56 9 95381177</a></li>
							<li class="mail"><a href="mailto:winetravelchile@gmail.com"><i class="fa fa-envelope"></i> winetravelchile@gmail.com</a></li>
							<li class="whatsapp"><a href="tel:56992781331"><i class="fa fa-mobile" aria-hidden="true"></i> +56 9 92781331 </a></li>
						</ul>
						<!-- fin contacto temp -->
					</li>
				</ul>

			</div><!--/.nav-collapse -->

		</div>

			<?php include('include-menu-contact.php'); ?>

	</div><!--/.container -->
	</nav> <!-- /. main nav -->
<div id="overlay" class=""></div>



