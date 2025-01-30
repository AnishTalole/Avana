document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
        navigation: {
            nextEl: '.slider-nav.next',
            prevEl: '.slider-nav.prev',
        }
    });
});



(function () {
    // Ensure Bootstrap is available
    if (typeof bootstrap === 'undefined') {
        console.error('Bootstrap is not loaded.');
        return;
    }

    document.addEventListener('DOMContentLoaded', function () {
        // Select the carousel element
        const carouselElement = document.querySelector('#careGallery');

        // Ensure the carousel exists before initializing
        if (carouselElement) {
            new bootstrap.Carousel(carouselElement, {
                interval: 5000, // Change slides every 5 seconds
                wrap: true, // Continuous loop
                keyboard: true, // Keyboard control
                pause: 'hover', // Pause on hover
                touch: true // Enable touch swiping on mobile
            });
        }
    });
})();
