// Swipers
$(function () {
  new Swiper(".swiper-home", {
    grabCursor: true,
    autoplay: {
      delay: 8000,
      disableOnInteraction: true,
    },
    navigation: {
      nextEl: ".swiper-next",
      prevEl: ".swiper-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  })
})

$(function () {
  new Swiper(".swiper-collections", {
    loop: true,
    grabCursor: true,
    slidesPerView: 4,
    spaceBetween: 30, 
    navigation: {
      nextEl: ".swiper-next",
      prevEl: ".swiper-prev",
    }
  })
})
