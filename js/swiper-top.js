$(document).ready(function() {
  var swiper = new Swiper('.slider-swip-1', {
      loop: true,
      autoplay: {
      delay: 3000,
      disableOnInteraction: false,
  },
      navigation: {
        nextEl: '.next1',
        prevEl: '.prev1',
      },
    });
  var swiper = new Swiper('.slider-swip-2', {
      slidesPerView: 3,
      spaceBetween: 20,
      navigation: {
        nextEl: '.next2',
        prevEl: '.prev2',
      },
      breakpoints: {
            480: {
              slidesPerView: 1,
              spaceBetween: 10,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 10,

            },
            992: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        }
    });
});