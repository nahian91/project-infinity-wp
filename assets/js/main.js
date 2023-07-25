jQuery(document).ready(function ($) {

  $(".testimonial__slider").slick({
    autoplay: true,
    arrows: true,
    dots: true,
    prevArrow:'<i class=" fas fa-angle-right"></i>',
    nextArrow:'<i class="fas fa-angle-left"></i>'
  });

  $(".clients").slick({
    autoplay: true,
    arrows: false,
    dots: false,
    slidesToShow: 6,
    slidesToScroll: 1,
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
