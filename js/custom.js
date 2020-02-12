(function ($) {
  "use strict";

  var review = $('.player_info_item');
  if (review.length) {
    review.owlCarousel({
      items: 1,
      loop: true,
      dots: false,
      autoplay: true,
      margin: 40,
      autoplayHoverPause: true,
      autoplayTimeout: 5000,
      nav: true,
      navText: [
        '<img src="img/icon/left.svg" alt="">',
        '<img src="img/icon/right.svg" alt="">'

      ],
      responsive: {
        0: {
          margin: 15,
        },
        600: {
          margin: 10,
        },
        1000: {
          margin: 10,
        }
      }
    });
  }
  $('.popup-youtube, .popup-vimeo').magnificPopup({
    // disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });



  var review = $('.textimonial_iner');
  if (review.length) {
    review.owlCarousel({
      items: 1,
      loop: true,
      dots: true,
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 5000,
      nav: false,
      responsive: {
        0: {
          margin: 15,
        },
        600: {
          margin: 10,
        },
        1000: {
          margin: 10,
        }
      }
    });
  }
  $(document).ready(function() {
    $('select').niceSelect();
  });
  // menu fixed js code
  $(window).scroll(function () {
    var window_top = $(window).scrollTop() + 1;
    if (window_top > 50) {
      $('.main_menu').addClass('menu_fixed animated fadeInDown');
    } else {
      $('.main_menu').removeClass('menu_fixed animated fadeInDown');
    }
  });

//   $(document).ready(function(){

//     var owl_1 = $('#owl-1');
//     var owl_2 = $('#owl-2');

//     owl_1.owlCarousel({
//       loop:true,
//       margin:10,
//       nav:false,
//       items: 1,
//       dots: false,
//       navText: false,
//       autoplay: true,
      
//     });
//  owl_2.find(".item").click(function(){
//     var slide_index = owl_2.find(".item").index(this);
//     owl_1.trigger('to.owl.carousel',[slide_index,300]);
//   });

//     owl_2.owlCarousel({
//       margin:50,
//       nav: true,
//       items: 3,
//       dots: false,
//       center: true,
//       loop:true,
//       navText: false,
//       autoplay: true,
//       center: true
//     });
    
//   });
 

$('.counter').counterUp({
  time: 2000
});

  $('.slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    speed: 300,
    infinite: true,
    asNavFor: '.slider-nav-thumbnails',
    autoplay:true,
    pauseOnFocus: true,
    dots: true,
  });
 
  $('.slider-nav-thumbnails').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider',
    focusOnSelect: true,
    infinite: true,
    prevArrow: false,
    nextArrow: false,
    centerMode: true,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          centerMode: false,
        }
      }
    ]
  });
 
  //remove active class from all thumbnail slides
  $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
 
  //set active class to first thumbnail slides
  $('.slider-nav-thumbnails .slick-slide').eq(0).addClass('slick-active');
 
  // On before slide change match active thumbnail to current slide
  $('.slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    var mySlideNumber = nextSlide;
    $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
    $('.slider-nav-thumbnails .slick-slide').eq(mySlideNumber).addClass('slick-active');
 });
 
 //UPDATED 
   
 $('.slider').on('afterChange', function(event, slick, currentSlide){   
   $('.content').hide();
   $('.content[data-id=' + (currentSlide + 1) + ']').show();
 }); 

 $('.gallery_img').magnificPopup({
  type: 'image',
  gallery:{
    enabled:true
  }
});


    /* ########################################### hero parallax ############################################## */
    window.onload = function () {

        var parallaxBox = document.getElementById('parallax');
        var
            /* c1left = document.getElementById('l1').offsetLeft,
                       c1top = document.getElementById('l1').offsetTop, */
            c2left = document.getElementById('l2').offsetLeft,
            c2top = document.getElementById('l2').offsetTop,
            c3left = document.getElementById('l3').offsetLeft,
            c3top = document.getElementById('l3').offsetTop,
            c4left = document.getElementById('l4').offsetLeft,
            c4top = document.getElementById('l4').offsetTop,
            c5left = document.getElementById('l5').offsetLeft,
            c5top = document.getElementById('l5').offsetTop,
            c6left = document.getElementById('l6').offsetLeft,
            c6top = document.getElementById('l6').offsetTop,
            c7left = document.getElementById('l7').offsetLeft,
            c7top = document.getElementById('l7').offsetTop,
            c8left = document.getElementById('l8').offsetLeft,
            c8top = document.getElementById('l8').offsetTop,
            c9left = document.getElementById('l9').offsetLeft,
            c9top = document.getElementById('l9').offsetTop;

        parallaxBox.onmousemove = function (event) {
            event = event || window.event;
            var x = event.clientX - parallaxBox.offsetLeft,
                y = event.clientY - parallaxBox.offsetTop;

            /*  mouseParallax('l1', c1left, c1top, x, y, 5); */
            mouseParallax('l2', c2left, c2top, x, y, 25);
            mouseParallax('l3', c3left, c3top, x, y, 20);
            mouseParallax('l4', c4left, c4top, x, y, 35);
            mouseParallax('l5', c5left, c5top, x, y, 30);
            mouseParallax('l6', c6left, c6top, x, y, 45);
            mouseParallax('l7', c7left, c7top, x, y, 30);
            mouseParallax('l8', c8left, c8top, x, y, 25);
            mouseParallax('l9', c9left, c9top, x, y, 40);
        };

    };

    function mouseParallax(id, left, top, mouseX, mouseY, speed) {
        var obj = document.getElementById(id);
        var parentObj = obj.parentNode,
            containerWidth = parseInt(parentObj.offsetWidth),
            containerHeight = parseInt(parentObj.offsetHeight);
        obj.style.left = left - (((mouseX - (parseInt(obj.offsetWidth) / 2 + left)) / containerWidth) * speed) + 'px';
        obj.style.top = top - (((mouseY - (parseInt(obj.offsetHeight) / 2 + top)) / containerHeight) * speed) + 'px';
    }
    /* ########################################### /hero parallax ############################################## */
    
    
     $('.panel-collapse').on('show.bs.collapse', function () {
        $(this).siblings('.panel-heading').addClass('active');
     });
    
     $('.panel-collapse').on('hide.bs.collapse', function () {
        $(this).siblings('.panel-heading').removeClass('active');
     });
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    // Initiate the wowjs animation library
    new WOW().init();
}(jQuery));