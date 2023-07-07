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

    breakpoints: {
      0: {
        slidesPerView: "auto",
        autoHeight: true,
      },
      // when window width is >= 840px
      820: {
        slidesPerView: "auto",
        spaceBetween: 16,
      },

      1024: {
        slidesPerView: "auto",
        spaceBetween: 16,
      },
    },
  });

  new Swiper("#serviceSwiper", {
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    slidesPerView: 3,
    spaceBetween: 16,
    speed: 500,
    preventClicksPropagation: false,

    breakpoints: {
      0: {
        slidesPerView: 1,
        // spaceBetween: 16,
      },
      // when window width is >= 840px
      820: {
        slidesPerView: 2,
        spaceBetween: 16,
      },

      1024: {
        slidesPerView: 3,
        spaceBetween: 16,
      },
    },
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

    breakpoints: {
      0: {
        slidesPerView: 1,
        // spaceBetween: 20,
      },

      767: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      // when window width is >= 840px

      1024: {
        slidesPerView: 5,
        spaceBetween: 16,
      },
    },
  });

  // Sticky Menu
  let windowWidth = $(window).width();
  if (windowWidth >= 0) {
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

document.addEventListener("DOMContentLoaded", () => {
  new Mmenu("#menu", {
    offCanvas: {
      position: "right",
    },
    theme: "light",
  });
});
