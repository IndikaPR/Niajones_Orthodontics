jQuery(document).ready(function ($) {
  Fancybox.bind("[data-fancybox]");

  new Swiper("#testimonialsSwiper", {
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    slidesPerView: 1,
    speed: 500,
    preventClicksPropagation: false,
    // navigation: {
    //   nextEl: ".testimonials-next",
    //   prevEl: ".testimonials-prev",
    // },
  });

  new Swiper("#partnersSwiper", {
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    slidesPerView: 5,
    speed: 500,
    preventClicksPropagation: false,
  });

  // Sticky Menu
  let windowWidth = $(window).width();
  if (windowWidth >= 1025) {
    $(window).scroll(function (event) {
      stickyMenu();
    });
    stickyMenu();
  }

  function stickyMenu() {
    let scroll = $(window).scrollTop();
    if (scroll > 0) {
      if (!$("header.main-header").hasClass("sticky")) {
        $("header.main-header").addClass("sticky");
      }
    } else {
      $("header.main-header").removeClass("sticky");
    }
  }
});
