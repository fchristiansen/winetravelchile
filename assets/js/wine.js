


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
})



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











