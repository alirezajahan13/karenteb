var $ = jQuery;


var swiper = new Swiper(".productsSwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    // freeMode: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0: {
          slidesPerView: 1,  
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 50,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
});

var swiper = new Swiper(".ProductImgSwiper", {
  effect: "cards",
  grabCursor: true,
  autoplay: {
    delay: 3000,
  },
});