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


document.addEventListener('DOMContentLoaded', function() {
    var swipeContainer = document.querySelector('.swipe-container');
    var swipe = new Swipe(swipeContainer, {
        startSlide: 0,
        speed: 400,
        auto: 3000,
        continuous: true,
        disableScroll: false,
        stopPropagation: false,
        mousewheel: true, // Activer le contrôle par molette
        // Options supplémentaires ici
    });
});