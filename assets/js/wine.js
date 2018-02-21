


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

// $('#carousel-destinations').owlCarousel({
// 	center: true,
//     items:3,
//     loop:true,
//     margin:10,
//     responsive:{
//         600:{
//             items:1
//         }
//     }

// });

$('.carousel-destinations').slick({
  centerMode: true,
  centerPadding: '500px',
  slidesToShow: 1,
  arrows:true,
  responsive: [
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


