 jQuery(document).ready( function($){

  $(window).on('load', function() {
    var pre_loader = $('#preloader');
    pre_loader.fadeOut(3000, function() {
      $(this).remove();
    });
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