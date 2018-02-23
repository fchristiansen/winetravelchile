<section class="slider-home container-fluid no-padding">
	<div id="slider-home" class="owl-carousel owl-theme">
	    <div class="item">
	    	<div class="layer"></div>
	          <!-- 1920 x 550 -->
	          	<div class="carousel-info">
	          		<div class="carousel-info-inner">
	          			<h2>Wine Travel Chile</h2>
	          			<h3>Design your perfect trip with us</h3>
	          		</div>
	          	</div>
	          	<img class="img-responsive owl-lazy hidden-xs" data-src="<?php bloginfo('template_url'); ?>/assets/img/img-slide.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/img-slide.jpg" alt="">
	         	 <!-- 768 x 550 -->
	            <img class="img-responsive owl-lazy visible-xs" data-src="<?php bloginfo('template_url'); ?>/assets/img/img-slidem.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/img-slidem.jpg" alt="">
	    </div>

	    <div class="item">
	    	<div class="layer"></div>
	          <!-- 1920 x 550 -->
	          	<div class="carousel-info">
	          		<div class="carousel-info-inner">
	          			<h2>Wine Travel Chile</h2>
	          			<h3>Exploring Chile's Wine Country</h3>
						<!-- Button modal fullscreen -->
						<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-fullscreen">
						  Watch Video
						</button>
	          			
	          		</div>
	          	</div>
	          	<img class="img-responsive owl-lazy hidden-xs" data-src="<?php bloginfo('template_url'); ?>/assets/img/img-slide2.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/img-slide2.jpg" alt="">
	         	 <!-- 768 x 550 -->
	            <img class="img-responsive owl-lazy visible-xs" data-src="<?php bloginfo('template_url'); ?>/assets/img/img-slide2m.jpg" src="<?php bloginfo('template_url'); ?>/assets/img/img-slide2m.jpg" alt="">
	    </div>
<!--
	    <div class="item">

	         <div class="layer"></div>
		 		<?php
				    $detect = new Mobile_Detect();

					if ($detect->isMobile()) {
					   ?>
					   
			 	<a class="owl-video" href="https://www.youtube.com/watch?v=KZWZ6OuJQMk" data-video-thumb="<?php bloginfo('template_url'); ?>/assets/img/slider2m.jpg"></a>
					  <?php
					}else{
						?>
			 	<a class="owl-video" href="https://www.youtube.com/watch?v=KZWZ6OuJQMk" data-video-thumb="<?php bloginfo('template_url'); ?>/assets/img/slider2.jpg"></a>
						<?php
					}
				?>
	    </div>
-->
	    


	    <!-- video html5 -->
	    <!-- <div class="item">
	    	<div class="layer"></div>
	    	<div class="carousel-info">
	    		<div class="carousel-info-inner">
	    			<h2>Wine Travel Chile</h2>
	    			<h3>Design your perfect trip with us</h3>
	    		</div>
	    	</div>
			<video loop="" class="hidden-xs">
				<source src="<?php bloginfo('template_url'); ?>/assets/video/small.mp4" type="video/mp4">
			</video>
	    </div> -->
	</div> <!-- contenedor slider -->
</section>


	    
<!-- Modal fullscreen -->
<div class="modal modal-fullscreen fade" id="modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-body">
        <iframe src="" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

      </div>
    </div>
  </div>
</div>	    
	    
