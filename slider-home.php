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
	          	<img class="img-responsive owl-lazy hidden-xs" data-src="assets/img/slider1.jpg" src="assets/img/slider1.jpg" alt="">
	         	 <!-- 768 x 550 -->
	            <img class="img-responsive owl-lazy visible-xs" data-src="assets/img/slider1m.jpg" src="assets/img/slider1m.jpg" alt="">
	    </div>


	    <div class="item">
	          <!-- 1920 x 550 -->

	         <div class="layer"></div>
		 		<?php
				    $detect = new Mobile_Detect();

					if ($detect->isMobile()) {
					   ?>
					   
			 	<a class="owl-video" href="https://www.youtube.com/watch?v=KZWZ6OuJQMk" data-video-thumb="assets/img/slider2m.jpg"></a>
					  <?php
					}else{
						?>
			 	<a class="owl-video" href="https://www.youtube.com/watch?v=KZWZ6OuJQMk" data-video-thumb="assets/img/slider2.jpg"></a>
						<?php
					}
				?>
	    </div>

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
				<source src="assets/video/small.mp4" type="video/mp4">
			</video>
	    </div> -->
	</div> <!-- contenedor slider -->
</section>



