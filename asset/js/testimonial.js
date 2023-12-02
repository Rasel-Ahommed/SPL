var swiper = new Swiper(".mySwiper", {
  slidesPerView: 2,
  spaceBetween: 25,
  centerSlide: "true",
  loop: true,
  fade: "true",
  grabCursor: "true",
  autoplayDisableOnInteraction: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    520: {
      slidesPreView: 1,
    },
    920: {
      slidesPreView: 2,
    }
  }
});

// Add event listeners to pause and resume autoplay on hover
var sliderContainer = document.querySelector(".mySwiper");

sliderContainer.addEventListener('mouseenter', function() {
  swiper.autoplay.stop();
});

sliderContainer.addEventListener('mouseleave', function() {
  swiper.autoplay.start();
});

