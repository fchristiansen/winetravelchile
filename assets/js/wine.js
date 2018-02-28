


// ===== Scroll to Top ==== //
  $(window).scroll(function() {
      if ($(this).scrollTop() >= 500) {        // If page is scrolled more than 500px
          $('#return-to-top').fadeIn(500);    // Fade in the arrow
      } else {
          $('#return-to-top').fadeOut(200);   // Else fade out the arrow
      }
  });

$('#return-to-top').click(function() {      // When arrow is clicked
      $('body,html').animate({ scrollTop : 0 }, {
              duration:2000,
              easing :'easeOutQuint'
        });           // Scroll to top of body
    });



$('#slider-home').owlCarousel({
	loop:true,
	lazyLoad: true,
	margin:0,
	dots: false,
	nav:true,
	video: true,
	autoplay: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

function carousel(elid){
	$(elid).slick({
	// 	centerMode: true,
	// 	centerPadding: '500px',
	// 	autoplay: true,
	// 	autoplaySpeed: 2000,
	// //	slidesToShow: 1,
	// //	slidesToScroll: 1,
	//   //arrows:true,
	//   responsive: [
	// 	  {
	// 	    breakpoint: 1024,
	// 	    settings: {
	// 	      arrows: false,
	// 	      centerMode: true,
	// 	      centerPadding: '40px',
	// 	      slidesToShow: 1
	// 	    }
	// 	  },
	//     {
	//       breakpoint: 768,
	//       settings: {
	//         arrows: false,
	//         centerMode: false,
	//         centerPadding: '0px',
	//         slidesToShow: 1
	//       }
	//     },
	//     {
	//       breakpoint: 480,
	//       settings: {
	//         arrows: false,
	//         centerMode: false,
	//         centerPadding: '40px',
	//         slidesToShow: 1
	//       }
	//     }
	//   ]

	   			centerMode: true,
	   			autoplay: true,
	   			autoplaySpeed: 3000,
	            slidesToShow: 1,
	            slidesToScroll: 1,
	            centerPadding: '500px',
	            responsive: [{
	                breakpoint: 1000,
	                    settings: {
	                        slidesToShow: 2,
	                        slidesToScroll: 1,
	                        centerMode: true,
	                        centerPadding: 'calc(calc(100vw - 1047px) / 2)',
	                    }
	            },{
	                breakpoint: 1048,
	                    settings: {
	                        slidesToShow: 2,
	                        slidesToScroll: 2,
	                        centerMode: true,
	                        centerPadding: '5vw',
	                    }
	            },{
	                breakpoint: 768,
	                    settings: {
	                        slidesToShow: 1,
	                        slidesToScroll: 1,
	                        centerMode: true,
	                        centerPadding: '5vw',
	                    }
	            }]

	});

}



carousel('#carousel-destinations-fr');

$('.btn-destination').on('click',function(){
	pais = $(this).data('pais');
	$('.btn-destination').removeClass('activo');
	$(this).addClass('activo');
	$('.carousel-destinations').addClass('hide');
	$('#carousel-destinations-'+pais).removeClass('hide');
	carousel('#carousel-destinations-'+pais);
});


$('.grid').masonry({
  itemSelector: '.grid-item', // use a separate class for itemSelector, other than .col-
  columnWidth: '.grid-sizer',
  percentPosition: true
});


// $('.btn-pais').on('click',function(){
// 	pais = $(this).data('pais');
// 	if($('.sub-menu-'+pais).hasClass('clander')){
// 		$('.sub-menu').addClass('clander');
// 		$('.sub-menu-'+pais).removeClass('clander');
// 		$('#navbar').removeClass('in');
// 	}else{
// 		$('.sub-menu-'+pais).addClass('clander');
// 	}
// });


$('.btn-pais').on('click',function(){
	//alert("click");
	pais = $(this).data('pais');
	if($('.sub-menu-'+pais).hasClass('clander')){
		$('.sub-menu').addClass('clander');
		$('.sub-menu-'+pais).removeClass('clander');
		$('#navbar').removeClass('in');
		$('.navbar-brand img#logo-desk').css({'width':'120px'});
	}else{
		$('.sub-menu-'+pais).addClass('clander');
		$('.navbar-brand img#logo-desk').css({'width':'170px'});
	}
});




$('#btn-contacto').mouseover(function() {
	$( "#fig-header-reveal-wrapper").toggleClass( 'chamber');
	$( "#overlay").toggleClass( 'chamber');

	  // if($('#fig-header-reveal-wrapper').hasClass('chamber')){
	  // 		$('#fig-header-reveal-wrapper').removeClass('chamber');

	  // }else{
	  // 		$('#fig-header-reveal-wrapper').addClass('chamber');
	  // }

	  // if($('#overlay').hasClass('chamber')){
	  // 		$('#overlay').removeClass('chamber');

	  // }else{
	  // 		$('#overlay').addClass('chamber');
	  // }

});
$( "#btn-contacto" ).mouseleave(function() {
	//$( "#fig-header-reveal-wrapper").toggleClass( 'chamber');
	//$( "#overlay").toggleClass( 'chamber');

	if($('#fig-header-reveal-wrapper').hasClass('chamber')){
			$( "#fig-header-reveal-wrapper").addClass( 'chamber');

	}else{
		$('#fig-header-reveal-wrapper').removeClass('chamber');
	}

	if($('#overlay').hasClass('chamber')){
			$('#overlay').addClass('chamber');

	}else{
			$('#overlay').removeClass('chamber');
	}
});



$( "#fig-header-reveal-wrapper" ).mouseleave(function() {
  	$('#fig-header-reveal-wrapper').removeClass('chamber');
  	$('#overlay').removeClass('chamber');
});


// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });



	// $(window).click(function() {
	// 	$('#fig-header-reveal-wrapper').hide();
	// 	$('#overlay').hide();

	// });

	// $('#fig-header-reveal-wrapper').click(function(event){
	//     event.stopPropagation();
	// });



$('#gallery a').simpleLightbox();


// .modal-backdrop classes

$(".modal-transparent").on('show.bs.modal', function () {
  setTimeout( function() {
    $(".modal-backdrop").addClass("modal-backdrop-transparent");
  }, 0);
});
$(".modal-transparent").on('hidden.bs.modal', function () {
  $(".modal-backdrop").addClass("modal-backdrop-transparent");
});

$(".modal-fullscreen").on('show.bs.modal', function () {
  setTimeout( function() {
    $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
  }, 0);
});
$(".modal-fullscreen").on('hidden.bs.modal', function () {
  $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
});

$('.modal').on('hidden.bs.modal', function () {
	$('.modal iframe').attr('src','');
});

$('.modal').on('shown.bs.modal', function () {
    $('.modal iframe').attr('src','https://www.youtube-nocookie.com/embed/tarqPWVgnvk?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1');
});




$('#newsletter').on("submit", function(e) {
	  	e.preventDefault();

		$('#progreso').removeClass('hide');

	  	email 		= $('#email').val();
	  	error = 0;r
		if(email==''){
			alert('Please enter a valid email address ');
			$('#email').addClass('invalid');
			error = 1;
		}



	  	if(error==0){
		    $.ajax({
		    	url:  $('#newsletter').attr('action'),
				type: "POST",
	            data: $('#newsletter').serialize(),
	            success: function(data) {
				    console.log(data);
					error = 0;
				    if(data=='0'){
						alert('Something wrong happened, please try again');
					  	return;
				    }else{
						alert('Thanks for subscribing!');
					  	$('#newsletter')[0].reset();
				    }

		    	}
		    });
	  	}else{
			alert('Something wrong happened, please try again');
		  	return;
		}
	});





