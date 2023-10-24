var $ = jQuery;


var swiper = new Swiper(".productsSwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    // freeMode: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
  });