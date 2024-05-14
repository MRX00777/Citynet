<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'О компании';
$page = 'about';
$pageActiv = '4';



include './header.php';

?>


<main class="main">

    <div class="container-fluid pages__name">
        <a href="./../index.php" class="pages__name-left">Главная</a>
        <div class="pages__name-slash">/</div>
        <a href="./about.php" class="pages__name-right">О компании</a>
    </div>

    <div class="container-fluid">
        <section class="first">
            <h1 class="first-title"><span class="first-title__span"> </span></h1>
            <div class="first__content" style="gap: 30px;">
                <div data-aos="fade-right" data-aos-duration="600" data-aos-delay="200" class="first__content__left">
                    <div class="first__content__left__card">
                        <div class="first__content__left__card-line">
                            <div class="line-circle"></div>
                            <div class="line-content"></div>
                        </div>
                        <div class="first__content__left__card-title">
                            Инновационные технологии
                        </div>
                        <div class="first__content__left__card-text">
                            Мы следим за последними тенденциями в мире IT и используем передовые технологии
                        </div>
                    </div>
                    <div class="first__content__left__card">
                        <div class="first__content__left__card-line">
                            <div class="line-circle"></div>
                            <div class="line-content"></div>
                        </div>
                        <div class="first__content__left__card-title">
                            Инновационные технологии
                        </div>
                        <div class="first__content__left__card-text">
                            Мы следим за последними тенденциями в мире IT и используем передовые технологии
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in-up" data-aos-duration="600" data-aos-delay="200" class="first__content__img">
                    <img src="./../assets/images/first__contend-img.png" alt="">
                </div>

                <div data-aos="fade-left" data-aos-duration="600" data-aos-delay="200" class="first__content__right">
                    <div class="first__content__right__card">
                        <div class="first__content__right__card-line">
                            <div class="line-circle"></div>
                            <div class="line-content"></div>
                        </div>
                        <div class="first__content__right__card-title">
                            Инновационные технологии
                        </div>
                        <div class="first__content__right__card-text">
                            Мы следим за последними тенденциями в мире IT и используем передовые технологии
                        </div>
                    </div>
                    <div class="first__content__right__card">
                        <div class="first__content__right__card-line">
                            <div class="line-circle"></div>
                            <div class="line-content"></div>
                        </div>
                        <div class="first__content__right__card-title">
                            Инновационные технологии
                        </div>
                        <div class="first__content__right__card-text">
                            Мы следим за последними тенденциями в мире IT и используем передовые технологии
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="items" id="items">
        <div class="item br">
            <div class="absolute__title absolute__title__mobile--active  absolute__title--active">
                <h2>Наша стратегия</h2>
                <p>Многолетний опыт работы позволяет предоставлять заказчикам...</p>
            </div>
            <div class="absolute-image absolute-image--active">
                <img src="./../assets/images/internet__img.png" alt="items">
            </div>
        </div>
        <div class="item br">
            <div class="absolute__title absolute__title__mobile--active ">
                <h2>Опыт и история</h2>
                <p>Наша история начинается в 2016 году. В тот период мы начали работу...</p>
            </div>
            <div class="absolute-image ">
                <img src="./../assets/images/about__second4.jpg" alt="items">
            </div>
        </div>
        <div class="item br">
            <div class="absolute__title  absolute__title__mobile--active">
                <h2>Проекты</h2>
                <p>Мы выполнили более 1000 проектов в разных сферах деятельности IT...</p>
            </div>
            <div class="absolute-image ">
                <img src="./../assets/images/about__second3.jpg" alt="items">
            </div>
        </div>
        <div class="item br">
            <div class="absolute__title absolute__title__mobile--active">
                <h2>Миссия</h2>
                <p>Мы считаем, что наша миссия - помогать людям в автоматизации...</p>
            </div>
            <div class="absolute-image ">
                <img src="./../assets/images/about-video-bg.png" alt="items">
            </div>
        </div>
    </section>

    <section class="about">

        <div class="about__clients swiper">

            <div class="swiper-wrapper">

                <?php for ($i = 0; $i < 25; $i++) :  ?>
                    <div class="swiper-slide">
                        <div class="about__clients__logo">
                            <img src="./../assets/images/clients-logo.png" alt="">
                        </div>
                    </div>
                <?php endfor ?>

            </div>



        </div>

    </section>

    <section class="statistics">
        <div class="statistics__content">
            <div class="statistics__content__info">
                <p>
                    Партнёрами нашей компании являются страны СНГ, КНР и ЕС. Не менее важный плюс компании – это осуществление технической поддержки опытными специалистами, работающими по стандартам качества, в режиме 24/7.
                </p>
            </div>
            <div class="statistics__content__row">
                <div class="statistics__content__row-item">
                    <div class="statistics-number">2019г</div>
                    <div class="statistics-text">начало работы на рынке Узбекистана</div>
                </div>
                <div class="statistics__content__row-item">
                    <div class="statistics-number">200+</div>
                    <div class="statistics-text">выполненных крупных проектов</div>
                </div>
                <div class="statistics__content__row-item">
                    <div class="statistics-number">300+</div>
                    <div class="statistics-text">квалифицированных специалистов</div>
                </div>
            </div>
        </div>
    </section>

    <section class="photo swiper" id="galary">

        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="photo__card" data-src="./../assets/images/photo-card.png" data-fancybox="gallery">
                    <img data-lazy="./../assets/images/photo-card.png" alt="photo-card" class="photo__card-img">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="photo__card" data-src="./../assets/images/photo-card.png" data-fancybox="gallery">
                    <img data-lazy="./../assets/images/photo-card.png" alt="photo-card" class="photo__card-img">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="photo__card" data-src="./../assets/images/photo-card.png" data-fancybox="gallery">
                    <img data-lazy="./../assets/images/photo-card.png" alt="photo-card" class="photo__card-img">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="photo__card" data-src="./../assets/images/photo-card.png" data-fancybox="gallery">
                    <img data-lazy="./../assets/images/photo-card.png" alt="photo-card" class="photo__card-img">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="photo__card" data-src="./../assets/images/photo-card.png" data-fancybox="gallery">
                    <img data-lazy="./../assets/images/photo-card.png" alt="photo-card" class="photo__card-img">
                </div>
            </div>
        </div>


    </section>

    <section class="about">

        <div class="container-fluid about__row">
            <div class="about__row__left">
                <div class="about__row__left-title">
                    минимум ручных действий, максимум автоматизации
                </div>
            </div>

            <div class="about__row__right">
                <p class="about__row__right-text">
                    На сегодняшний день мы являемся одним из лидеров в области IT технологий в Узбекистане. Многолетний опыт работы позволяет предоставлять заказчикам наиболее выгодные и гибкие условия сотрудничества.
                </p>
            </div>
        </div>

    </section>
</main>





<?php include './footer.php'; ?>






<script>
    // about section second script

    const items = Array.from(document.querySelectorAll('.item'));
    const itemsWrapper = document.querySelector('.items');

    items.forEach((item) => {
        item.addEventListener('mouseover', () => {
            const absoluteImages = Array.from(document.querySelectorAll('.absolute-image'));
            const targetAbsoluteImage = item.querySelector('.absolute-image');
            const absolute__title = Array.from(document.querySelectorAll('.absolute__title'));
            const targetabsolute__title = item.querySelector('.absolute__title');

            absoluteImages.filter((image) => image.classList.remove('absolute-image--active'));
            targetAbsoluteImage.classList.add('absolute-image--active');

            absolute__title.filter((image) => image.classList.remove('absolute__title--active'));
            targetabsolute__title.classList.add('absolute__title--active');
        });
    });
</script>

<!-- <script>
    var swiper = new Swiper('.about__clients', {
        slidesPerView: "auto",
        spaceBetween: 60,
        loop: true,
        allowTouchMove: true,
        speed: 5000,
        autoplay: {
            delay: 5000,
            // disableOnInteraction: true,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            320: {
                spaceBetween: 20,
            },
            576: {
                spaceBetween: 40,

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
</script> -->



<script>
var swiperHero = new Swiper(".about__clients", {
    slidesPerView: "auto",
    speed: 7000,
    spaceBetween: 60,
    pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    autoplay: false /* {
        delay: 3000, // Задержка между сменой слайдов в миллисекундах (например, 5000 = 5 секунд)
        disableOnInteraction: false, // Отключить автопрокрутку при взаимодействии с пользователем (по умолчанию true)
    } */,
    breakpoints: {
            320: {
                spaceBetween: 20,
            },
            576: {
                spaceBetween: 40,

            },
            800: {
                spaceBetween: 60,
            },
            1200: {

            },
            1600: {

            }
        },
});

swiperHero.on('touchStart', function() {
    swiperHero.params.autoplay.delay = 4000; // Устанавливаем задержку 3000 мс при начале взаимодействия с пользователем
    swiperHero.autoplay.stop(); // Останавливаем автопрокрутку при взаимодействии с пользователем
    swiperHero.autoplay.start(); // Запускаем автопрокрутку с новой задержкой
});

$(document).on('click', '.fancybox', function() {
    swiperHero.autoplay.stop(); // Останавливаем автопрокрутку при открытии FancyBox
});

$(document).on('click', '.fancybox-close', function() {
    setTimeout(function() {
        swiperHero.autoplay.start(); // Возобновляем автопрокрутку после закрытия FancyBox
    }, 300); // Даем FancyBox немного времени для закрытия
});

</script>

<script>
    var swiperTwo = new Swiper('.photo', {
        slidesPerView: "auto",
        // spaceBetween: 60,
        allowTouchMove: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            320: {
                spaceBetween: 15,
            },
            450: {
                spaceBetween: 20,
            },
            620: {
                spaceBetween: 25,
            },
            760: {
                spaceBetween: 30,
            },

        }

    });
</script>

<script>
    let i = 0;
    let j = 0;
    let txt1 = 'Комплексные '; // The text for h1
    let txt2 = 'IT решения'; // The text for span
    let speed = 50; // Speed of typing in milliseconds

    function typeWriter1() {
        if (i < txt1.length) {
            document.querySelector('.first-title').innerHTML = txt1.slice(0, i + 1) + '<span class="first-title__span"></span>';
            i++;
            setTimeout(typeWriter1, speed);
        } else {
            // Start typing in the span after the first part is done
            typeWriter2();
        }
    }

    function typeWriter2() {
        if (j < txt2.length) {
            document.querySelector('.first-title__span').innerHTML = txt2.slice(0, j + 1);
            j++;
            setTimeout(typeWriter2, speed);
        }
    }

    window.onload = typeWriter1; // Call the function when the window has finished loading
</script>

<!-- <script>
    const targetElement = document.getElementById('target-element');
    const customCursor = document.getElementById('custom-cursor');

    targetElement.addEventListener('mouseenter', function() {
        customCursor.style.display = 'block'; // Показать курсор при наведении на целевой элемент
    });

    targetElement.addEventListener('mouseleave', function() {
        customCursor.style.display = 'none'; // Скрыть курсор при уходе с целевого элемента
    });

    targetElement.addEventListener('mousemove', function(e) {
        customCursor.style.left = e.clientX + 'px'; /* Перемещение курсора по горизонтали */
        customCursor.style.top = e.clientY + 'px'; /* Перемещение курсора по вертикали */
    });
</script> -->