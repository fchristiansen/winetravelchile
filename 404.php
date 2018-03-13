<?
/*

Template name: 404

*/
?>
<?php include('header.php'); ?>
<?php include('main-nav.php'); ?>
<?php include('include-menu-experiencias.php'); ?>

		<section id="not-found" class="position-relative">
			<div class="container">
				<div class="row">
						<div class="col-sm-12 text-center">
							<div class="content clearfix">
								<div class="error-message">
									<img class="img-responsive center-block" src="<?php bloginfo('template_url');?>/assets/img/404.png" alt="404">
									<p class="title">the page you are looking for is not available</p>
									<p class="call">Keep learning about our programs.</p>
									<a href="<?php bloginfo('url'); ?>" class="btn btn-primary btn-lg btn-return">
						  				return to home
									</a>
								</div>
							</div> <!-- content -->
						</div>
				</div>
			</div>
		</section><!-- about -->

<?php include('footer.php'); ?>
