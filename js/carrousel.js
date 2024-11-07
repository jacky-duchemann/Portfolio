document.addEventListener('DOMContentLoaded', function () {
    var swiperContainer = document.querySelector('.swiper-container');
    if (swiperContainer) {
        var swiper = new Swiper(swiperContainer, {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            speed: 1200,
            mousewheel: true, // Activer le contrôle par molette
        });
    } else {
        console.error('La classe .swiper-container n\'a pas été trouvée.');
    }
});

