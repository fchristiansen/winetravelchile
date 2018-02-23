


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
	// resposive: true,
	//goToFirstSpeed : 1300,
	// autoWidth: true,
	autoplay: false,
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


$('.carousel-destinations').slick({
  centerMode: true,
  centerPadding: '500px',
  slidesToShow: 1,
  //arrows:true,
  responsive: [
	  {
	    breakpoint: 1024,
	    settings: {
	      arrows: false,
	      centerMode: true,
	      centerPadding: '40px',
	      slidesToShow: 1
	    }
	  },
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});





$('.grid').masonry({
  itemSelector: '.grid-item', // use a separate class for itemSelector, other than .col-
  columnWidth: '.grid-sizer',
  percentPosition: true
});



/*
var thumb = $(".owl-video").attr("data-video-thumb");
$(".owl-video-tn").append('<img class="img-responsive"  src="'+thumb+'" alt="">');
console.log(thumb);
*/

// para video html 5

// $( document ).ready(function() {
//   var owl = $('#slider-home');
//   owl.owlCarousel({
//       loop:true,
//       margin:0,
//       nav:true,
//       lazyLoad: true,
//       center: false,
//       dots:false,
//       items:1
//   })
// 	owl.on('translate.owl.carousel',function(e){
// 		$('.owl-item video').each(function(){
// 			//alert('pausa');
// 			$(this).get(0).pause();
// 		});
// 	});

// 	owl.on('translated.owl.carousel',function(e){
// 		//alert('play');
// 		$('.owl-item.active video').get(0).play();
// 	})

//   if(!isMobile()){
//     $('.owl-item .item').each(function(){
//       var attr = $(this).attr('data-videosrc');
//       if (typeof attr !== typeof undefined && attr !== false) {
//         console.log('hit');
//         var videosrc = $(this).attr('data-videosrc');
//         $(this).prepend('<video muted><source src="'+videosrc+'" type="video/mp4"></video>');
//       }
//     });
//     $('.owl-item.active video').attr('autoplay',true).attr('loop',true);
//   }
// });

// function isMobile(width) {
// 	if(width == undefined){
// 		width = 719;
// 	}
// 	if(window.innerWidth <= width) {
// 		return true;
// 	} else {
// 		return false;
// 	}
// }




$('#btn-chile').on('click',function(){

	if($('#sub-menu').hasClass('clander')){
		$('#sub-menu').removeClass('clander');
		$('#navbar').removeClass('in');
	}else{
		$('#sub-menu').addClass('clander');
	}
});

$('#btn-argentina').on('click',function(){

	if($('#sub-menu-2').hasClass('clander2')){
		$('#sub-menu-2').removeClass('clander2');
		$('#navbar').removeClass('in');
	}else{
		$('#sub-menu-2').addClass('clander2');
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


