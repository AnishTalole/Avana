    // Initialize Swiper
const swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    breakpoints: {
        500:{
            slidesPerView:1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
    navigation: {
        nextEl: '.slider-nav.next',
        prevEl: '.slider-nav.prev',
    },
});
