document.addEventListener("DOMContentLoaded", function () {
    if (document.querySelector(".trigger")) {
      var trigger = document.querySelector(".trigger");
      var menu = document.querySelector(".menu");
  
      var trigger2 = document.querySelector(".slider-2");
      var menu2 = document.querySelector(".slider-menu-2");
  
      var trigger3 = document.querySelector(".slider-3");
      var menu3 = document.querySelector(".slider-menu-3");
  
      var trigger4 = document.querySelector(".slider-4");
      var menu4 = document.querySelector(".slider-menu-4");
  
      var trigger5 = document.querySelector(".slider-5");
      var menu5 = document.querySelector(".slider-menu-5");
  
      var trigger6 = document.querySelector(".slider-6");
      var menu6 = document.querySelector(".slider-menu-6");
  
      trigger.addEventListener("click", function () {
        menu.classList.toggle("active");
      });
  
      trigger2.addEventListener("click", function () {
        menu2.classList.toggle("active");
      });
  
      trigger3.addEventListener("click", function () {
        menu3.classList.toggle("active");
      });
  
      trigger4.addEventListener("click", function () {
        menu4.classList.toggle("active");
      });
  
      trigger5.addEventListener("click", function () {
        menu5.classList.toggle("active");
      });
  
      trigger6.addEventListener("click", function () {
        menu6.classList.toggle("active");
      });
    }
  });
  
  const swiper1 = new Swiper(".testimonial-slider", {
    // Optional parameters
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    // Navigation arrows
    pagination: {
      el: ".swiper-pagination",
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1280: {
        slidesPerView: 4,
      },
    },
    // Navigation arrows
    navigation: {
      prevEl: ".slidePrev-btn",
      nextEl: ".slideNext-btn",
    },
  });
  const swiper2 = new Swiper(".testimonial-slider-2", {
    // Optional parameters
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    // Navigation arrows
    pagination: {
      el: ".swiper-pagination",
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1280: {
        slidesPerView: 4,
      },
    },
    // Navigation arrows
    navigation: {
      prevEl: ".slidePrev-btn-2",
      nextEl: ".slideNext-btn-2",
    },
  });
  
  const swiper3 = new Swiper(".testimonial-slider-3", {
    // Optional parameters
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    // Navigation arrows
    pagination: {
      el: ".swiper-pagination",
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1280: {
        slidesPerView: 4,
      },
    },
    // Navigation arrows
    navigation: {
      prevEl: ".slidePrev-btn-3",
      nextEl: ".slideNext-btn-3",
    },
  });
  
  const swiper4 = new Swiper(".testimonial-slider-4", {
    // Optional parameters
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    // Navigation arrows
    pagination: {
      el: ".swiper-pagination",
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1280: {
        slidesPerView: 4,
      },
    },
    // Navigation arrows
    navigation: {
      prevEl: ".slidePrev-btn-4",
      nextEl: ".slideNext-btn-4",
    },
  });
  
  const swiper5 = new Swiper(".testimonial-slider-5", {
    // Optional parameters
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    // Navigation arrows
    pagination: {
      el: ".swiper-pagination",
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1280: {
        slidesPerView: 4,
      },
    },
    // Navigation arrows
    navigation: {
      prevEl: ".slidePrev-btn-5",
      nextEl: ".slideNext-btn-5",
    },
  });
  
  
  var swiper6 = new Swiper(".mySwiper", {
    spaceBetween: 10,
    slidesPerView: 3,
    freeMode: true,
    watchSlidesProgress: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 4,
        spaceBetweenSlides: 50,
      },
    },
  });
  var swiper7 = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    thumbs: {
      swiper: swiper6,
    },
  });
  
  const swiper8 = new Swiper(".reviews-slider", {
    // Optional parameters
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    // Navigation arrows
    navigation: {
      prevEl: ".review-slider-prev",
      nextEl: ".review-slider-next",
    },
  });
  const swiper9 = new Swiper(".comment-slider", {
    // Optional parameters
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    // Navigation arrows
    navigation: {
      prevEl: ".comment-slider-prev",
      nextEl: ".comment-slider-next",
    },
  });