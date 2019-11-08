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
  var swiper2 = new Swiper('.slider-swip-2', {
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
    var swiper3 = new Swiper('.slider-swip-3', {
      loop: true,
      navigation: {
        nextEl: '.next3',
        prevEl: '.prev3',
      },
    });
    var swiper4 = new Swiper('.slider-swip-4', {
      slidesPerView: 3,
      spaceBetween: 20,
      loop: true,
      navigation: {
        nextEl: '.next4',
        prevEl: '.prev4',
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
    var swiper2 = new Swiper('.slider-swip-6', {
      slidesPerView: 3,
      spaceBetween: 20,
      navigation: {
        nextEl: '.next6',
        prevEl: '.prev6',
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

$(document).on('scroll' , function() {
	window.onscroll = function() {scrollMenu()};
	var header = document.getElementById("my-menu");
	var sticky = header.offsetTop;

	function scrollMenu() {
		if (window.pageYOffset > sticky) {
			header.classList.add("sticky");
		} else {
			header.classList.remove("sticky");
		}
	}
});

function myFunction() {
	var x = document.getElementById("myTopnav");
	if (x.className === "navbar-ex1-collapse") {
		x.className += " responsive";

	} else {
		x.className = "navbar-ex1-collapse";
	}
}