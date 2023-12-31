$(function () {
  "use strict";

  $(window).on("load", function () {
    var preloader = $('#preloader');

    // Hide preloader and fade in content after a delay
    setTimeout(function () {
      preloader.fadeOut(500)
    }, 0); // Change the delay value as per your requirement

  });


  $(window).scroll(function () {
    if ($(this).scrollTop() > 350 && screen.width > 767) {
      $('.sticky-top').addClass('shadow-lg').css('top', '0px');
      // console.log(screen.width)
    } else {
      $('.sticky-top').removeClass('shadow-lg').css('top', '-143px');
    }
  });



  $("#banner").slick({
    dots: true,
    infinite: true,
    speed: 800,
    autoplaySpeed: 5000,
    slidesToShow: 1,
    fade: false,
    autoplay: false,
    slidesToScroll: 1,
    arrows: false,
    // prevArrow: '<i class="fas left icon fa-chevron-left"></i>',
    // nextArrow: '<i class="fas right icon fa-chevron-right"></i>',
  }).slickAnimation();

  $(".wwd").slick({
    dots: false,
    infinite: true,
    speed: 800,
    autoplaySpeed: 2000,
    slidesToShow: 4,
    fade: false,
    autoplay: true,
    slidesToScroll: 1,
    prevArrow: false,
    nextArrow: false,
    responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
      }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  }).slickAnimation();

  $('.owl-carousel').owlCarousel({
    nav: false,
    dots: false,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplaySpeed: 1000,
    nav: true,
    responsive:{
        0:{
            items:1
        },
        576:{
            items:3
        },
        992:{
            items:4
        },
        1200:{
            items:5
        }
    }
})

  
   // gallery popup js
   $('.parent-container').magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery: {
      enabled: true
    },
    removalDelay: 300,
    mainClass: 'mfp-fade',
  });


  // video gallery popup js
  $('.vidplay').magnificPopup({
    type: 'iframe',
    iframe: {
      markup: '<div class="mfp-iframe-scaler">' +
        '<div class="mfp-close"></div>' +
        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
        '</div>',
      patterns: {
        youtube: {
          index: 'youtube.com/',
          id: 'v=',
          src: 'https://www.youtube.com/embed/%id%?autoplay=1'
        },
      },
      srcAction: 'iframe_src',
    }
  });
  // profile slider js
  // $(".profile-slider").slick({
  //   dots: false,
  //   infinite: true,
  //   speed: 500,
  //   arrows: true,
  //   slidesToShow: 4,
  //   autoplay: true,
  //   slidesToScroll: 1,
  //   prevArrow: '<i class="fas left arrow fa-chevron-left"></i>',
  //   nextArrow: '<i class="fas right arrow fa-chevron-right"></i>',
  //   responsive: [{
  //       breakpoint: 992,
  //       settings: {
  //         slidesToShow: 3,
  //       }
  //     },
  //     {
  //       breakpoint: 768,
  //       settings: {
  //         slidesToShow: 2,
  //       }
  //     },
  //     {
  //       breakpoint: 576,
  //       settings: {
  //         slidesToShow: 1,
  //       }
  //     }
  //   ]
  // });

  // testimonial slider js
  // $(".testimonial--slider").slick({
  //   dots: false,
  //   infinite: true,
  //   speed: 500,
  //   arrows: true,
  //   slidesToShow: 1,
  //   autoplay: true,
  //   slidesToScroll: 1,
  //   prevArrow: '<i class="fas left arrow fa-chevron-left"></i>',
  //   nextArrow: '<i class="fas right arrow fa-chevron-right"></i>',
  //   responsive: [
	// 		{
	// 			breakpoint: 1200,
	// 			settings: {
	// 				slidesToShow: 1,
	// 				slidesToScroll: 1,
	// 			},
	// 		},
	// 		{
	// 			breakpoint: 992,
	// 			settings: {
	// 				slidesToShow: 1,
  //         slidesToScroll: 2,
  //         arrows: false,
	// 			},
	// 		},
	// 		{
	// 			breakpoint: 768,
	// 			settings: {
	// 				slidesToShow: 1,
  //         slidesToScroll: 1,
  //         arrows: false,
         
	// 			},
	// 		},
	// 		{
	// 			breakpoint: 576,
	// 			settings: {
	// 				slidesToShow: 1,
  //         slidesToScroll: 1,
  //         arrows: false,
	// 			},
	// 		},
	// 	],
  // });

  // profile slider js
  // $(".news--slider").slick({
  //   dots: false,
  //   infinite: true,
  //   speed: 500,
  //   arrows: false,
  //   slidesToShow: 3,
  //   autoplay: true,
  //   slidesToScroll: 1,
  //   prevArrow: '<i class="fas left arrow fa-chevron-left"></i>',
  //   nextArrow: '<i class="fas right arrow fa-chevron-right"></i>',
  //   responsive: [{
  //       breakpoint: 992,
  //       settings: {
  //         slidesToShow: 2,
  //       }
  //     },
  //     {
  //       breakpoint: 768,
  //       settings: {
  //         slidesToShow: 1,
  //       }
  //     },
  //     {
  //       breakpoint: 576,
  //       settings: {
  //         slidesToShow: 1,
  //       }
  //     }
  //   ]
  // });

  // clients slider js
  // $(".partner_slider").slick({
  //   dots: false,
  //   infinite: true,
  //   autoplaySpeed: 0,
  //   speed: 3000,
  //   arrows: false,
  //   slidesToShow: 5,
  //   autoplay: true,
  //   slidesToScroll: 1,
  //   cssEase: "linear",
  //   responsive: [{
  //     breakpoint: 1400,
  //     settings: {
  //       slidesToShow: 4,
  //     }
  //   },
  //     {
  //     breakpoint: 1200,
  //     settings: {
  //       slidesToShow: 4,
  //     }
  //   },
  //     {
  //       breakpoint: 992,
  //       settings: {
  //         slidesToShow: 2,
  //       }
  //     },
  //     {
  //       breakpoint: 576,
  //       settings: {
  //         slidesToShow: 1,
  //       }
  //     }
  //   ]
  // });

  // search option js
  
  
  $('.search .main-icon').click(function () {
    $('.search-field').addClass('show-search-field')
  })
  $('.search .close-btn').click(function () {
    $('.search-field').removeClass('show-search-field')
  })


  // back to top js
  var btn = $("#button");

  $(window).scroll(function () {
    btn.toggleClass("show", $(window).scrollTop() > 300);
  });

  btn.click(function (e) {
    e.preventDefault();
    if (navigator.userAgent.toLowerCase().indexOf("firefox") > -1) {
      $("html").animate({
          scrollTop: 0,
        },
        1000
      );
    } else {
      $("html, body").animate({
          scrollTop: 0,
        },
        0
      );
    }
  });

  // Animation on scroll
  $(window).on("load", function () {
    setTimeout(() => {
      AOS.init({
        once: false,
      });
    }, 0);
  });

  // counter up js
  $('.counter').counterUp({
    delay: 50,
    time: 2000
  });




  // mobile menu js
  $('.mobile-topbar .bars i').click(function () {
    $('.mobile-menu-main').addClass('show-mobile-menu')
  })
  $('.close-m-menu').click(function () {
    $('.mobile-menu-main').removeClass('show-mobile-menu')
  })
  $('.mobile-topbar .bars i').click(function () {
    $('.mobile-menu-overlay').addClass('show-mobile-menu-overlay')
  })
  $('.mobile-topbar .bars i').click(function () {
    $('.mobile-menu-overlay').addClass('show-mobile-menu-overlay')
  })
  $('.close-m-menu').click(function () {
    $('.mobile-menu-overlay').removeClass('show-mobile-menu-overlay')
  })
  $('.mobile-menu-overlay').click(function () {
    $('.mobile-menu-overlay').removeClass('show-mobile-menu-overlay')
  })
  $('.mobile-menu-overlay').click(function () {
    $('.mobile-menu-main').removeClass('show-mobile-menu')
  })

  $('.sub-menu ul').hide();
  $(".sub-menu a").click(function () {
    $(this).parent(".sub-menu").children("ul").slideToggle("100");
    $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
  });


  // Get all the choose--list elements
  const chooseListItems = document.querySelectorAll('.choose--list');

  // Add event listeners for hover
  chooseListItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
      // Remove active class from all choose--list elements
      chooseListItems.forEach(listItem => {
        listItem.classList.remove('active--list');
      });
      // Add active class to the hovered element
      item.classList.add('active--list');
    });
  });


});