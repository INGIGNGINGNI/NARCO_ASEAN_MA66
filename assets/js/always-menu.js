const swiper = new Swiper(".menu-slide", {
    slidesPerView: 4,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    centerSlide: "true",
    fade: "true",
    grabCursor: "true",
    speed: 1000,
    autoplay: {
        delay: 3500,
        disableOnInteraction: true,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        // dynamicBullets: true,
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
            slidesPerGroup: 1,
        },
        520: {
            slidesPerView: 2,
            slidesPerGroup: 2,
        },
        768: {
            slidesPerView: 6,
            slidesPerGroup: 2,
            spaceBetween: 30,
        },
        950: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        1200: {
            slidesPerView: 4,
        },
    },
});