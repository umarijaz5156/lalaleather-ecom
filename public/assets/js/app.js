document.addEventListener('alpine:init', () => {
})
AOS.init({
  once: true
});

// Mobile Menu

const burgerButton = document.getElementById("burgerButton");
const closeButton = document.getElementById("closeButton");
const searchButton = document.getElementById("searchButton");
const site = document.getElementById("siteWrapper");
const bodyTag = document.getElementsByTagName('body')[0];
const mobileNavbar = document.getElementsByClassName('main-navbar')[0];

burgerButton.addEventListener('click', function () {
  site.classList.remove('navbar-deactive-site-wrapper')
  site.classList.add('navbar-active-site-wrapper')
  bodyTag.classList.add('active-navbar-body')
  mobileNavbar.classList.remove('hidden')
});

closeButton.addEventListener('click', function () {
  site.classList.remove('navbar-active-site-wrapper')
  site.classList.add('navbar-deactive-site-wrapper')
  bodyTag.classList.remove('active-navbar-body')
  removeDeactiveClass()
});

function removeDeactiveClass() {
  setTimeout(() => {
    site.classList.remove('navbar-deactive-site-wrapper')
    mobileNavbar.classList.add('hidden')
  }, 500);
}

var swiper = new Swiper(".brandlogo", {
  slidesPerView: 3,
  spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 2000,
  },
  speed: 1000,
  navigation: {
    nextEl: '.worknext',
    prevEl: '.workprev'
  },
  // Responsive breakpoints   
  breakpoints: {
    768: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    1023: {
      slidesPerView: 6,
      spaceBetween: 40,
    }
  },
});
var swiper2 = new Swiper(".shop-card", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 2000,
  },
  speed: 1000,
  rewind: true,
  navigation: {
    nextEl: ".shopnext",
    prevEl: ".shopprev",
  },
  // Responsive breakpoints   
});
var swiper3 = new Swiper(".our-shop", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 2000,
  },
  speed: 1000,
  rewind: true,
  navigation: {
    nextEl: ".ourshopnext",
    prevEl: ".ourshopprev",
  },
  // Responsive breakpoints   
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1023: {
      slidesPerView: 3,
      spaceBetween: 40,
    }
  }
});
var swiper4 = new Swiper(".our-shop-v2", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 2000,
  },
  speed: 1000,
  rewind: true,
  navigation: {
    nextEl: ".ourshopnext-v2",
    prevEl: ".ourshopprev-v2",
  },
  // Responsive breakpoints   
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1023: {
      slidesPerView: 3,
      spaceBetween: 40,
    }
  }
});
var swiper5 = new Swiper(".we-make", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  // autoplay: {
  //   delay: 2000,
  // },
  speed: 1000,
  // rewind: true,
  navigation: {
    nextEl: ".we-makenext",
    prevEl: ".we-makeprev",
  },
  // Responsive breakpoints   
  breakpoints: {
    1280: {
      slidesPerView: 2,
      spaceBetween: 40,
    }
  }
});

var swiper4 = new Swiper(".related-categories", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 2000,
  },
  speed: 1000,
  rewind: true,
  navigation: {
    nextEl: ".rel-categnext",
    prevEl: ".rel-categprev",
  },
  // Responsive breakpoints   
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1280: {
      slidesPerView: 4,
      spaceBetween: 40,
    }
  }
});




