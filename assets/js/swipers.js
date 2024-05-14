var swiperOne = new Swiper('.top', {
    slidesPerView: 1,
    spaceBetween: 50,
    allowTouchMove: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        // dynamicBullets: true,
    },

});


var swiper = new Swiper('.tariff__cards', {
    // slidesPerView: 4,
    spaceBetween: 30,
    allowTouchMove: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    // Выравнивание слайдов по центру
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        576: {
            slidesPerView: 2,
            // centeredSlides: true, 
        },
        1100: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1100: {
            slidesPerView: 3,
            spaceBetween: 30,
            // centeredSlides: true, 
        },
        1430: {
            slidesPerView: 4,
            spaceBetween: 30,
            centeredSlides: false,
        }
    }
});


var swiper = new Swiper('.services__cards', {
    slidesPerView: 4,
    spaceBetween: 30,
    allowTouchMove: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    // Выравнивание слайдов по центру
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        576: {
            slidesPerView: 2,
            // centeredSlides: true, 
        },
        800: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 30,
            // centeredSlides: true, 
        },
        1600: {
            slidesPerView: 4,
            spaceBetween: 30,
            centeredSlides: false,
        }
    }
});


var swiperHero = new Swiper('.about__clients', {
    slidesPerView: "auto",
    spaceBetween: 60,
    loop: true,
    allowTouchMove: true,
    speed: 5000,
    autoplay: {
        delay: 2000, // Задержка между сменой слайдов в миллисекундах (например, 5000 = 5 секунд)
        disableOnInteraction: false, // Отключить автопрокрутку при взаимодействии с пользователем (по умолчанию true)
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        320: {
            spaceBetween: 40,
        },
        576: {
            spaceBetween: 50,

        },
        800: {
            spaceBetween: 60,
        },
        1200: {

        },
        1600: {

        }
    }
});

swiperHero.on('touchStart', function() {
    swiperHero.params.autoplay.delay = 4000; // Устанавливаем задержку 3000 мс при начале взаимодействия с пользователем
    swiperHero.autoplay.stop(); // Останавливаем автопрокрутку при взаимодействии с пользователем
    swiperHero.autoplay.start(); // Запускаем автопрокрутку с новой задержкой
});




