$('#slider-home').owlCarousel({
    loop:true,
    lazyLoad: true,
    margin:0,
    dots: false,
    nav:true,
    center: false,
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




