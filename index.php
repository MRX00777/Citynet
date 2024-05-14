<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Главная';
$page = 'index';


?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?= $kw ?>">
    <meta name="description" content="<?= $desc ?>">
    <link rel="shortcut icon" href="./../fav/favicon.svg" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/fav/favicon-16x16.png">
    <link rel="manifest" href="/fav/site.webmanifest">
    <link rel="mask-icon" href="/fav/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/libraries/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/css/intlTelInput.css">
    <link rel="stylesheet" href="/assets/css/global.css">
    <link rel="stylesheet" href="/assets/css/index.css">

    <?php
    switch ($page) {
        case 'internet':
            echo '<link rel="stylesheet" href="/assets/css/internet.css">';
            break;
    }
    ?>
    <title><?= $title ?></title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="container-fluid">
                <div class="header__wrapper">
                    <div class="header__item header__item-left">
                        <a href="/" class="header__item_inner header__item_inner-logo">
                            <img src="/assets/icons/logo.svg" alt="logo">
                        </a>
                    </div>
                    <?php include "./includes/nav.php" ?>
                    <div class="header__item header__item-right">
                        <?php include "./includes/lang.php" ?>
                        <a href="./partials/balance.php" class="header-btn">Мой баланс</a>
                        <div class="burger " onclick="toggleMobileMenu()">
                            <div class="burger__wrapper">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        

        <main class="main">


            <section class="container-fluid top swiper ">


                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="top__content">
                            <div class="top__content__left">
                                <div class="top__content__left-title">
                                    тариф Жара, 10 °C. интернет в вашем доме всего за 90 000
                                </div>
                                <p class="top__content__left-text">
                                    Тариф “Жара” 10 °C” предлагает выгодные условия для подключения интернета в вашем доме с высокой скоростью до 10 Мбит/с.
                                </p>
                                <a href="./partials/login.php" class="btn-yellow top__content__left-btn">Узнать больше</a><!-- btn -->
                            </div>
                            <div class="top__content__right">
                                <img src="./assets/images/top__right-img-mini.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="top__content">
                            <div class="top__content__left">
                                <div class="top__content__left-title">
                                    тариф Жара, 10 °C. интернет в вашем доме всего за 90 000
                                </div>
                                <p class="top__content__left-text">
                                    Тариф “Жара” 10 °C” предлагает выгодные условия для подключения интернета в вашем доме с высокой скоростью до 10 Мбит/с.
                                </p>
                                <button type="submit" class="btn-yellow top__content__left-btn">Узнать больше</button>
                            </div>
                            <div class="top__content__right">
                                <img src="./assets/images/top__right-img.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="top__content">
                            <div class="top__content__left">
                                <div class="top__content__left-title">
                                    тариф Жара, 10 °C. интернет в вашем доме всего за 90 000
                                </div>
                                <p class="top__content__left-text">
                                    Тариф “Жара” 10 °C” предлагает выгодные условия для подключения интернета в вашем доме с высокой скоростью до 10 Мбит/с.
                                </p>
                                <button type="submit" class="btn-yellow top__content__left-btn">Узнать больше</button>
                            </div>
                            <div class="top__content__right">
                                <img src="./assets/images/top__right-img.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="top__content">
                            <div class="top__content__left">
                                <div class="top__content__left-title">
                                    тариф Жара, 10 °C. интернет в вашем доме всего за 90 000
                                </div>
                                <p class="top__content__left-text">
                                    Тариф “Жара” 10 °C” предлагает выгодные условия для подключения интернета в вашем доме с высокой скоростью до 10 Мбит/с.
                                </p>
                                <button type class="btn-yellow top__content__left-btn">Узнать больше</button>
                            </div>
                            <div class="top__content__right">
                                <img src="./assets/images/top__right-img.png" alt="">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="swiper-button-prev" onclick="console.log('click')"></div>
                <div class="swiper-button-next" onclick="console.log('click')"></div>

                <div class="swiper-pagination"></div>





            </section>

            <section class="tariff ">
                <h2 class="container-fluid tariff-title">тарифы на интернет для дома</h2>
                <div class="container-fluid tariff__cards swiper ">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <a data-aos="flip-left" data-aos-duration="600" data-aos-delay="300" data-aos-easing="ease-in-out" href="#" class="tariff__cards__card">
                                <div class="card__top">
                                    <div class="card__top-temp">Жара, 10 °C</div>
                                    <div class="card__top-price">90 000 сум / мес</div>
                                </div>
                                <div class="speed">
                                    <div class="speed-text">Скорость:</div>
                                    <div class="speed-number">10 Мбит / с</div>
                                </div>
                                <div class="tasx">
                                    <div class="tasx-text">Tas - x:</div>
                                    <div class="tasx-number">100 Мбит / с</div>
                                </div>
                                <div class="card__img">
                                    <img src="./assets/images/card-img.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-aos="flip-right" data-aos-duration="600" data-aos-delay="300" data-aos-easing="ease-in-out" href="#" class="tariff__cards__card">
                                <div class="card__top">
                                    <div class="card__top-temp">Жара, 10 °C</div>
                                    <div class="card__top-price">90 000 сум / мес</div>
                                </div>
                                <div class="speed">
                                    <div class="speed-text">Скорость:</div>
                                    <div class="speed-number">10 Мбит / с</div>
                                </div>
                                <div class="tasx">
                                    <div class="tasx-text">Tas - x:</div>
                                    <div class="tasx-number">100 Мбит / с</div>
                                </div>
                                <div class="card__img">
                                    <img src="./assets/images/card-img.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-aos="flip-left" data-aos-duration="600" data-aos-delay="300" data-aos-easing="ease-in-out" href="#" class="tariff__cards__card">
                                <div class="card__top">
                                    <div class="card__top-temp">Жара, 10 °C</div>
                                    <div class="card__top-price">90 000 сум / мес</div>
                                </div>
                                <div class="speed">
                                    <div class="speed-text">Скорость:</div>
                                    <div class="speed-number">10 Мбит / с</div>
                                </div>
                                <div class="tasx">
                                    <div class="tasx-text">Tas - x:</div>
                                    <div class="tasx-number">100 Мбит / с</div>
                                </div>
                                <div class="card__img">
                                    <img src="./assets/images/card-img.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-aos="flip-right" data-aos-duration="600" data-aos-delay="300" data-aos-easing="ease-in-out" href="#" class="tariff__cards__card">
                                <div class="card__top">
                                    <div class="card__top-temp">Жара, 10 °C</div>
                                    <div class="card__top-price">90 000 сум / мес</div>
                                </div>
                                <div class="speed">
                                    <div class="speed-text">Скорость:</div>
                                    <div class="speed-number">10 Мбит / с</div>
                                </div>
                                <div class="tasx">
                                    <div class="tasx-text">Tas - x:</div>
                                    <div class="tasx-number">100 Мбит / с</div>
                                </div>
                                <div class="card__img">
                                    <img src="./assets/images/card-img.png" alt="">
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="swiper-pagination"></div>

                </div>
            </section>

            <section class="container-fluid internet ">
                <div class="internet__row">
                    <div class="internet__content">
                        <h2 class="internet__content-title">интернет для юридических лиц</h2>
                        <p class="internet__content-text">
                            Выберите выгодные тарифы интернета для вашего бизнеса. Надежное подключение, высокая скорость и индивидуальные предложения для компаний.
                        </p>
                        <form action="" class="internet__content__form">
                            <div class="internte__speed-info">выберите скорость и заполните данные для консультации:</div>
                            <div class="range-slider">
                                <div class="range">
                                    <div class="range__content">
                                        <div class="range__slider">
                                            <div class="range__slider-line" id="range-line"></div>
                                        </div>

                                        <div class="range__thumb" id="range-thumb">
                                            <div class="range__value">
                                                <span class="range__value-number" id="range-number">10</span>
                                                Мбит / сек
                                            </div>
                                        </div>

                                        <input type="range" class="range__input" id="range-input" min="10" max="100" value="10" step="10">
                                    </div>
                                </div>
                            </div>
                            <div class="form__row">
                                <div class="input__name">
                                    <p style="padding-left: 20px;">Название компании</p>
                                    <input class="input__name__item" type="text" placeholder="Введите название">
                                </div>
                                <div class="input__tel">
                                    <p style="padding-left: 20px;">Телефон</p>
                                    <div class="input" style="color: #1B1B1B;">
                                        <input type="tel" id="telIndex" class="telCountry" required>
                                        <input class="info__fill_number" type="hidden" name="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="input__button"><!-- должен перенаправить на страницу application-success.php -->
                                <button type="submit" class="btn-yellow input__button-item ">Отправить</button>
                            </div>
                        </form>
                    </div>
                    <div class="internet__img">
                        <img src="./assets/images/test-img.png" alt="">
                    </div>
                </div>

            </section>

            <section class="services ">
                <div class="container-fluid services-title">IT услуги для дома и бизнеса</div>
                <div class="container-fluid services__cards swiper">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="100s" data-aos-delay="200" data-aos-easing="ease-in-out" href="#" class="services__cards__card">
                                <div class="services__cards__card__top">
                                    <div class="services__card-title">
                                        видеонаблюдение
                                        и охранные системы
                                    </div>
                                    <div class="services__card__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 21 21" fill="none">
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
                                    <img src="./assets/images/servies__card.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="100s" data-aos-delay="200" data-aos-easing="ease-in-out" href="#" class="services__cards__card">
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
                                    <img src="./assets/images/servies__card.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="100s" data-aos-delay="200" data-aos-easing="ease-in-out" href="#" class="services__cards__card">
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
                                    <img src="./assets/images/servies__card.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="100s" data-aos-delay="200" data-aos-easing="ease-in-out" href="#" class="services__cards__card">
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
                                    <img src="./assets/images/servies__card.png" alt="">
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="swiper-pagination"></div>




                </div>
            </section>

            <section class="services ">
                <div class="container-fluid services-title">оборудование</div>
                <div class="container-fluid services__cards swiper">

                    <div class="swiper-wrapper">

                        <div href="#" class="swiper-slide">
                            <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="100s" data-aos-delay="200" data-aos-easing="ease-in-out" class="services__cards__card">
                                <div class="services__cards__card__top">
                                    <div class="services__card-title">
                                        Системы видеонаблюдения
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
                                    <img src="./assets/images/equipment__card-img.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="100s" data-aos-delay="200" data-aos-easing="ease-in-out" href="#" class="services__cards__card">
                                <div class="services__cards__card__top">
                                    <div class="services__card-title">
                                        Системы видеонаблюдения
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
                                    <img src="./assets/images/equipment__card-img.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="100s" data-aos-delay="200" data-aos-easing="ease-in-out" href="#" class="services__cards__card">
                                <div class="services__cards__card__top">
                                    <div class="services__card-title">
                                        Системы видеонаблюдения
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
                                    <img src="./assets/images/equipment__card-img.png" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="100s" data-aos-delay="200" data-aos-easing="ease-in-out" href="#" class="services__cards__card">
                                <div class="services__cards__card__top">
                                    <div class="services__card-title">
                                        Системы видеонаблюдения
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
                                    <img src="./assets/images/equipment__card-img.png" alt="">
                                </div>
                            </a>
                        </div>


                    </div>

                    <div class="swiper-pagination"></div>




                </div>
            </section>

            <section class="about ">
                <div data-aos-duration="700" data-aos-delay="200" class="container-fluid about__row">
                    <div data-aos="fade-right" data-aos-duration="700" data-aos-delay="200" class="about__row__left">
                        <div class="about__row__left-title">
                            минимум ручных действий, максимум автоматизации
                        </div>
                    </div>
                    <div class="about__row__border"></div>
                    <div data-aos="fade-left" data-aos-duration="700" data-aos-delay="200" class="about__row__right">
                        <p class="about__row__right-text">
                            На сегодняшний день мы являемся одним из лидеров в области IT технологий в Узбекистане. Многолетний опыт работы позволяет предоставлять заказчикам наиболее выгодные и гибкие условия сотрудничества.
                        </p>
                        <a href="./partials/about.php" class="btn-blue about__row__right-btn">Больше о компании</a>
                    </div>
                </div>

                <div class="about__clients swiper">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="about__clients__logo">
                                <img src="./assets/images/clients-logo.png" alt="">
                            </div>
                        </div>

                    </div>



                </div>

                <div class="about__video ">
                    <div data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-offset="400" data-aos-duration="700" data-aos-delay="100" class="about__video__text">
                        <div class="about__video__text-info">Технологии
                            с эффективным
                            результатом
                        </div>
                        <div class="about__video__text-anker">
                            <div class="video__logo">
                                <img src="./assets/icons/video-icon.svg" alt="">
                            </div>
                            <div class="video__text">
                                Видео о компании
                            </div>
                        </div>
                    </div>
                </div>


                <!--modal edit name contracts  -->

                <div id="modal___name" class="popup popup__video ">
                    <div class="popup__body popup__video__body">
                        <div action="" class="popup__content popup__video__content">
                            <div class="pupup__title popup__video-title ">Видео о компании</div>
                            <button type="reset" class="popup__video-close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 25 25" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.15227 3.61388C4.54279 3.22335 5.17596 3.22335 5.56648 3.61388L21.5665 19.6139C21.957 20.0044 21.957 20.6376 21.5665 21.0281C21.176 21.4186 20.5428 21.4186 20.1523 21.0281L4.15227 5.02809C3.76174 4.63757 3.76174 4.0044 4.15227 3.61388Z" fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.5665 3.61388C21.957 4.0044 21.957 4.63757 21.5665 5.02809L5.56648 21.0281C5.17596 21.4186 4.54279 21.4186 4.15227 21.0281C3.76174 20.6376 3.76174 20.0044 4.15227 19.6139L20.1523 3.61388C20.5428 3.22335 21.176 3.22335 21.5665 3.61388Z" fill="white" />
                                </svg>
                            </button>
                            <div class="popup__video">
                                <video id="modalVideo" src="./assets/video/video.mp4" controls width="100%" height="100%" style="border-radius: 20px;"></video>
                            </div>
                        </div>
                    </div>
                </div>



            </section>

            <section class="statistics ">
                <div data-aos="fade-top" data-aos-easing="ease-in-sine" data-aos-offset="400" data-aos-duration="700" data-aos-delay="100" class="statistics__content">
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

            <section class="container-fluid news ">
                <h3 class="news-title">последние новости</h3>
                <div class="news__cards">
                    <a href="./partials/news-details.php" class="news__cards__card">
                        <div class="news__cards__card-img">
                            <img src="./assets/images/news__card-img.png" alt="">
                        </div>
                        <div class="news__cards__card__content">
                            <div class="news__card__row">
                                <div class="data">02.03.2023</div>
                                <div class="arrow-up">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <path d="M13.8335 3.56206L13.8335 12.1478L15.8332 12.1477V0.148149L14.8334 0.148149L3.8336 0.148147L3.83361 2.14785L12.4193 2.14785L0.983965 13.5832L2.39818 14.9974L13.8335 3.56206Z" fill="white" />
                                    </svg>
                                </div>
                            </div>
                            <div class="news__card__text">
                                <p>
                                    Компания Positive Technologies проанализировала ситуацию в сфере кибербезопасности в 2023...
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="./partials/news-details.php" class="news__cards__card">
                        <div class="news__cards__card-img">
                            <img src="./assets/images/news__card-img.png" alt="">
                        </div>
                        <div class="news__cards__card__content">
                            <div class="news__card__row">
                                <div class="data">02.03.2023</div>
                                <div class="arrow-up">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <path d="M13.8335 3.56206L13.8335 12.1478L15.8332 12.1477V0.148149L14.8334 0.148149L3.8336 0.148147L3.83361 2.14785L12.4193 2.14785L0.983965 13.5832L2.39818 14.9974L13.8335 3.56206Z" fill="white" />
                                    </svg>
                                </div>
                            </div>
                            <div class="news__card__text">
                                <p>
                                    Компания Positive Technologies проанализировала ситуацию в сфере кибербезопасности в 2023...
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="./partials/news-details.php" class="news__cards__card">
                        <div class="news__cards__card-img">
                            <img src="./assets/images/news__card-img.png" alt="">
                        </div>
                        <div class="news__cards__card__content">
                            <div class="news__card__row">
                                <div class="data">02.03.2023</div>
                                <div class="arrow-up">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <path d="M13.8335 3.56206L13.8335 12.1478L15.8332 12.1477V0.148149L14.8334 0.148149L3.8336 0.148147L3.83361 2.14785L12.4193 2.14785L0.983965 13.5832L2.39818 14.9974L13.8335 3.56206Z" fill="white" />
                                    </svg>
                                </div>
                            </div>
                            <div class="news__card__text">
                                <p>
                                    Компания Positive Technologies проанализировала ситуацию в сфере кибербезопасности в 2023...
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

                <a href="./partials/news.php" class="btn-blue news-btn">Смотреть все</a>
            </section>
        </main>


        <footer class="footer">
            <div class="container-fluid">
                <div class="footer__top">
                    <div class="footer__nav">
                        <ul class="footer__nav__list">
                            <li>
                                <div class="header__item_inner_link link-static" style="display: inline-block;">Интернет</div>
                            </li>
                            <li><a href="./partials/internet.php" class="header__item_inner_link">Тарифные планы</a></li>
                            <li><a href="./partials/balance.php" class="header__item_inner_link">Личный кабинет</a></li>
                        </ul>
                        <ul class="footer__nav__list">
                            <li>
                                <div class="header__item_inner_link link-static" style="display: inline-block;">О компании</div>
                            </li>
                            <li><a href="./partials/services.php" class="header__item_inner_link">Услуги</a></li>
                            <li><a href="./partials/about.php" class="header__item_inner_link">Наша история</a></li>
                            <li><a href="./partials/about.php" class="header__item_inner_link">Галерея</a></li>
                        </ul>
                        <ul class="footer__nav__list">
                            <li><a href="./partials/news.php" class="header__item_inner_link">Новости</a></li>
                            <li><a href="./partials/equipment.php" class="header__item_inner_link">Оборудование</a></li>
                        </ul>
                    </div>
                    <div class="footer__contacts">
                        <div class="footer__contacts__support">
                            <p class="footer__contacts__support-text">Служба поддержки</p>
                            <a href="tel:712021111" class="footer__contacts__support-number">(71) 202 11 11</a>
                            <a href="mailto:info@citynet.uz" class="footer__contacts__support-email">info@citynet.uz</a>
                        </div>
                        <div class="footer__social">
                            <p class="footer__social-text">Социальные сети</p>
                            <div class="footer__social__list">
                                <a href="#" class="footer__social__list-link"><img src="./../assets/icons/instagram-icon.svg" alt=""></a>
                                <a href="#" class="footer__social__list-link"><img src="./../assets/icons/telegram-icon.svg" alt=""></a>
                                <a href="#" class="footer__social__list-link"><img src="./../assets/icons/facebook-icon.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom">
                    <div class="footer__bottom__text">
                        <h3 class="footer__bottom__text-title">Бесплатная консультация</h3>
                        <p class="footer__bottom__text-info">Оставьте заявку и мы ответим на все интересующие вас вопросы. Наша служба поддержки доступна 24/7.</p>
                    </div>
                    <form action="" class="footer__bottom__form">
                        <div class="input__name">
                            <p>Ваше имя</p>
                            <input class="input__name__item" type="text" placeholder="Введите имя">
                        </div>
                        <div class="input__tel">
                            <p>Телефон</p>
                            <div class="input" style="color: #1B1B1B;">
                                <input type="tel" id="telIndex" class="telCountry" required>
                                <input class="info__fill_number" type="hidden" name="phone">
                            </div>
                        </div>

                        <div class="input__button"><!-- должен перенаправить на страницу application-success.php -->
                            <button type="submit" class="input__button-item">Отправить</button>
                        </div>
                    </form>

                </div>
                <a href="https://kirano.uz/" class="made-in-kirano">Разработано в Кирано</a>
            </div>
        </footer>

    </div>
    <!-- /.wrapper -->
    <script src="/assets/libraries/jquery/jquery.min.js"></script>
    <script src="/assets/libraries/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.8/jquery.inputmask.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/js/intlTelInput.min.js"></script>
    <script src="/assets/libraries/phonemask/phonemask.min.js"></script>
    <script src="/assets/js/modal.js"></script>
    <script src="/assets/js/swipers.js"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/lazyImage.js"></script>
    <script src="/assets/js/telInput.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

<script>
    /*=============== RANGE SLIDER JS ===============*/
    const rangeThumb = document.getElementById('range-thumb'),
        rangeNumber = document.getElementById('range-number'),
        rangeLine = document.getElementById('range-line'),
        rangeInput = document.getElementById('range-input')

    const rangeInputSlider = () => {


        rangeNumber.textContent = rangeInput.value


        const thumbPosition = (rangeInput.value / rangeInput.max),
            space = rangeInput.offsetWidth - rangeThumb.offsetWidth

        rangeThumb.style.left = (thumbPosition * space) + 'px'


        rangeLine.style.width = rangeInput.value + '%'


        rangeInput.addEventListener('input', rangeInputSlider)
    }

    rangeInputSlider()
</script>



<script>
    // script for video

    const videoBtnContr = document.querySelector('.video__logo');
    const videoModalContr = document.querySelector('.popup__video');
    const videoModalContrClose = document.querySelector('.popup__video-close');
    const modalVideo = document.getElementById('modalVideo');


    videoBtnContr.addEventListener('click', function() {
        videoModalContr.classList.toggle('modal-show');
        document.body.classList.toggle('no-scroll');
        modalVideo.currentTime = 0;
        modalVideo.pause();
    })

    videoModalContrClose.addEventListener('click', function() {
        videoModalContr.classList.toggle('modal-show');
        document.body.classList.toggle('no-scroll');
        modalVideo.currentTime = 0;
        modalVideo.pause();
    })
</script>

