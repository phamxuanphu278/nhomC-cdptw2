
$(document).ready(function() {
    $(window).on("load", function() {
      var $container = $('.content');
      $container.isotope({
        filter: '*',
        animationOptions: {
          duration: 750,
          easing: 'linear',
          queue: false
        }
      });
      var pro_menu = $('.project-menu li a');
      pro_menu.on("click", function() {
        var pro_menu_active = $('.project-menu li a.active');
        pro_menu_active.removeClass('active');
        $(this).addClass('active');
        var selector = $(this).attr('data-filter');
        $container.isotope({
          filter: selector,
          animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
          }
        });
        return false;
      });
  
    });
  });
  