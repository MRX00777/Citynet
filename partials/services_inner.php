<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Услуги';
$page = 'services';
$pageActiv = '2';



include './header.php';

?>

<main class="main">
    <div class="container-fluid pages__name">
        <a href="./../index.php" class="pages__name-left">Главная</a>
        <div class="pages__name-slash">/</div>
        <a href="./services.php" class="pages__name-left">Услуги</a>
        <div class="pages__name-slash">/</div>
        <a href="./services_inner.php" class="pages__name-right">Системы видеонаблюдения</a>
    </div>

    <div class="container-fluid">
        <div class="services__banner">
            <div class="services__banner-content">
                <h1>Системы видеонаблюдения</h1>
                <p>Наша компания имеет опыт и квалифицированных специалистов, которые могут провести установку систем видеонаблюдения на высоком уровне.</p>
                <a href="./chat.php" class="btn-yellow">Оставить заявку</a>
            </div>
            <div class="services__banner-img">
                <img src="/assets/images/test-img.png" alt="">
            </div>
        </div>

        <div class="services__inner-container ">
                <div class="row">
                <div class="col-12 col-sm-12 col-lg-12 col-xl-10">
                    <h1>Чем же так хороша наша технология AcuSense?</h1>
                    <p>Tехнология AcuSense реагирует только на людей или транспортные средства. В принципе, этим сказано уже довольно много, не правда ли? Но, в дополнение к своему главному преимуществу, данная технология отфильтровывает ложные события, вызванные погодными условиями, такими как осадки или листья.</p>
                    <h2>Что мы предлагаем:</h2>
                    <ul>
                        <li>Профессиональные специалисты: Наша компания имеет опыт и квалифицированных специалистов, которые могут провести установку систем видеонаблюдения на высоком уровне.</li>
                        <li>Качественное оборудование: Мы используем современное и надежное оборудование, которое обеспечит надёжную и эффективную работу системы видеонаблюдения.</li>
                        <li>Индивидуальный подход: Мы учитываем особенности каждого объекта и разрабатываем систему видеонаблюдения с учётом всех требований и пожеланий клиента.</li>
                        <li>Гарантия качества: Установленная нами система видеонаблюдения будет функционировать стабильно и долгосрочно, а в случае неисправностей мы обеспечиваем гарантийное обслуживание.</li>
                    </ul>
                    <img src="/assets/images/test-img.png" alt="">
                    <h2>Установка видеоаналитики для детекции только нужных объектов или событий</h2>
                    <ul>
                        <li>Нейросеть AcuSense легко узнает фигуру человека или корпус автомобиля, отличая их от других объектов и явлений в кадре.</li>
                        <li>А в сочетании с высоким 4K-разрешением и сверхчувствительными камерами с технологией ColorVu, AcuSense дает еще больше возможностей.</li>
                        <li>Нейросеть AcuSense легко узнает фигуру человека или корпус автомобиля, отличая их от других объектов и явлений в кадре.</li>
                    </ul>
                    <div class="services__inner-videoImg">
                        <img src="/assets/images/services-content-camera.png" alt="">
                        <svg>
                            <use xlink:href="/assets/icons/sprite.svg#play"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="services ">
        <div class="container-fluid services-title">Выполненные проекты</div>
        <div class="container-fluid services__cards swiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <a href="./projects.php" class="services__completed-projects">
                        <img src="/assets/images/test-img.png" alt="">
                        <p>Видеонаблюдение в «Gardens Residence»...</p>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./projects.php" class="services__completed-projects">
                        <img src="/assets/images/test-mini.jpg" alt="">
                        <p>Видеонаблюдение в «Gardens Residence»...</p>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./projects.php" class="services__completed-projects">
                        <img src="/assets/images/test-img.png" alt="">
                        <p>Видеонаблюдение в «Gardens Residence»...</p>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./projects.php" class="services__completed-projects">
                        <img src="/assets/images/test-mini.jpg" alt="">
                        <p>Видеонаблюдение в «Gardens Residence»...</p>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./projects.php" class="services__completed-projects">
                        <img src="/assets/images/test-img.png" alt="">
                        <p>Видеонаблюдение в «Gardens Residence»...</p>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./projects.php" class="services__completed-projects">
                        <img src="/assets/images/test-mini.jpg" alt="">
                        <p>Видеонаблюдение в «Gardens Residence»...</p>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./projects.php" class="services__completed-projects">
                        <img src="/assets/images/test-img.png" alt="">
                        <p>Видеонаблюдение в «Gardens Residence»...</p>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./projects.php" class="services__completed-projects">
                        <img src="/assets/images/test-mini.jpg" alt="">
                        <p>Видеонаблюдение в «Gardens Residence»...</p>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./projects.php" class="services__completed-projects">
                        <img src="/assets/images/test-img.png" alt="">
                        <p>Видеонаблюдение в «Gardens Residence»...</p>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="./projects.php" class="services__completed-projects">
                        <img src="/assets/images/test-mini.jpg" alt="">
                        <p>Видеонаблюдение в «Gardens Residence»...</p>
                    </a>
                </div>
                

            </div>

            <div class="swiper-pagination"></div>




        </div>
    </section>
    <section class="services ">
        <div class="container-fluid services-title">другие услуги</div>
        <div class="container-fluid services__cards swiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <a class="services__cards__card">
                        <div class="services__cards__card__top">
                            <div class="services__card-title">
                                видеонаблюдение
                                и охранные системы
                            </div>
                            <div class="services__card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                    <g clip-path="url(#clip0_1279_2008)">
                                        <path d="M15.7573 6.95854L15.7573 15.5442L17.757 15.5442V3.54463L16.7572 3.54463L5.75743 3.54463L5.75743 5.54433L14.3431 5.54433L2.90779 16.9797L4.32201 18.3939L15.7573 6.95854Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1279_2008">
                                            <rect width="20" height="20" fill="white" transform="translate(0.685547 0.615723)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="services__cards__card__img">
                            <img src="/assets/images/services-main-camera.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="services__cards__card">
                        <div class="services__cards__card__top">
                            <div class="services__card-title">
                                видеонаблюдение
                                и охранные системы
                            </div>
                            <div class="services__card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                    <g clip-path="url(#clip0_1279_2008)">
                                        <path d="M15.7573 6.95854L15.7573 15.5442L17.757 15.5442V3.54463L16.7572 3.54463L5.75743 3.54463L5.75743 5.54433L14.3431 5.54433L2.90779 16.9797L4.32201 18.3939L15.7573 6.95854Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1279_2008">
                                            <rect width="20" height="20" fill="white" transform="translate(0.685547 0.615723)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="services__cards__card__img">
                            <img src="/assets/images/services-main-camera.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="services__cards__card">
                        <div class="services__cards__card__top">
                            <div class="services__card-title">
                                видеонаблюдение
                                и охранные системы
                            </div>
                            <div class="services__card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                    <g clip-path="url(#clip0_1279_2008)">
                                        <path d="M15.7573 6.95854L15.7573 15.5442L17.757 15.5442V3.54463L16.7572 3.54463L5.75743 3.54463L5.75743 5.54433L14.3431 5.54433L2.90779 16.9797L4.32201 18.3939L15.7573 6.95854Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1279_2008">
                                            <rect width="20" height="20" fill="white" transform="translate(0.685547 0.615723)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="services__cards__card__img">
                            <img src="/assets/images/services-main-camera.png" alt="">
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="services__cards__card">
                        <div class="services__cards__card__top">
                            <div class="services__card-title">
                                видеонаблюдение
                                и охранные системы
                            </div>
                            <div class="services__card__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                    <g clip-path="url(#clip0_1279_2008)">
                                        <path d="M15.7573 6.95854L15.7573 15.5442L17.757 15.5442V3.54463L16.7572 3.54463L5.75743 3.54463L5.75743 5.54433L14.3431 5.54433L2.90779 16.9797L4.32201 18.3939L15.7573 6.95854Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1279_2008">
                                            <rect width="20" height="20" fill="white" transform="translate(0.685547 0.615723)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="services__cards__card__img">
                            <img src="/assets/images/services-main-camera.png" alt="">
                        </div>
                    </a>
                </div>



            </div>

            <div class="swiper-pagination"></div>




        </div>
    </section>
</main>

<?php include './footer.php'; ?>


<script>
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
            1400: {
                slidesPerView: 4,
                spaceBetween: 30,
                centeredSlides: false,
            }
        }
    });
</script>