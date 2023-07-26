jQuery(document).ready(function ($) {

  $(".testimonial__slider").slick({
    autoplay: true,
    arrows: true,
    dots: true,
    prevArrow:'<i class=" fas fa-angle-right"></i>',
    nextArrow:'<i class="fas fa-angle-left"></i>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $(".clients").slick({
    autoplay: true,
    arrows: false,
    dots: false,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  // Counter
  $(".counter__number").counterUp({
    delay: 10,
    time: 1000,
  });

  // Mobile Menu
  $('#menu').slicknav();
});

jQuery(window).scroll(function () {
  var winTop = jQuery(window).scrollTop();
  if (winTop >= 30) {
    jQuery(".header").addClass("sticky");
  } else {
    jQuery(".header").removeClass("sticky");
  } 
});
