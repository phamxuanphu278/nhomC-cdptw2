 jQuery(document).ready( function($){

  $(window).on('load', function () {
    if ($('#preloader').length) {
      $('#preloader').delay(2000).fadeOut('slow', function () {
        $(this).remove();
      });
    }
  });

 var swiper = new Swiper('.swiper-container', {
      loop: true,
      autoplay: {
			delay: 3000,
			disableOnInteraction: false,
	},
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
 });