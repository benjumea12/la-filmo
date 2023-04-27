// Swipers
$(function () {
  new Swiper(".swiper-home", {
    grabCursor: true,
    loop: true,
    autoplay: {
      delay: 8000,
      disableOnInteraction: true,
    },
    navigation: {
      nextEl: ".swiper-next-home",
      prevEl: ".swiper-prev-home",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  })

  new Swiper(".swiper-collections-home", {
    grabCursor: true,
    loop: true,
    slidesPerView: 2,
    spaceBetween: 30,
    navigation: {
      nextEl: ".swiper-next-collections",
      prevEl: ".swiper-prev-collections",
    },
    breakpoints: {
      "@0.00": {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      "@0.75": {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      "@1.00": {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      "@1.50": {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    },
  })

  new Swiper(".swiper-popular", {
    loop: true,
    grabCursor: true,
    slidesPerView: 2,
    spaceBetween: 30,
    navigation: {
      nextEl: ".swiper-next-popular",
      prevEl: ".swiper-prev-popular",
    },
    breakpoints: {
      "@0.00": {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      "@0.75": {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      "@1.00": {
        slidesPerView: 3,
        spaceBetween: 40,
      },
    },
  })
})
