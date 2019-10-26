 jQuery(document).ready( function($){
  var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 20,
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
            480: {
              slidesPerView: 1,
              spaceBetween: 10,
            },
            575: {
              slidesPerView: 1,
              spaceBetween: 10,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 15,

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