<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'внутренняя страница тарифа';
$page = 'internet-details';
$pageActiv = '1';



include './header.php';

?>


<main class="main container-fluid">

    <div class=" pages__name">
        <a href="./../index.php" class="pages__name-info">Главная</a>
        <div class="pages__name-slash">/</div>
        <a href="./internet.php" class="pages__name-info">Интернет</a>
        <div class="pages__name-slash">/</div>
        <a href="./internet-details.php" class="pages__name-info">Жара, 10 °C</a>
    </div>

    <div class="tarif-name">Жара, 10 °C</div>

    <section class="options ">
        <div class="row row-gap-3">
            <div class="col-12 col-sm-12 col-lg-12 col-xl-8">
                <div class="options__left">
                    <div class="options__left-title">Параметры:</div>
                    <div class="options__left__item">
                        <div class="options__left__item-text">
                            Скорость соединения с 12:00 до 00:00:
                        </div>
                        <div class="options__left__item-type">
                            50 Мбит / с
                        </div>
                    </div>
                    <div class="options__left__item">
                        <div class="options__left__item-text">
                            Скорость соединения с 00:00 до 12:00:
                        </div>
                        <div class="options__left__item-type">
                            50 Мбит / с
                        </div>
                    </div>
                    <div class="options__left__item">
                        <div class="options__left__item-text">
                            Tas - x:
                        </div>
                        <div class="options__left__item-type">
                            100 Мбит / с
                        </div>
                    </div>
                    <div class="options__left__item">
                        <div class="options__left__item-text">
                            технология:
                        </div>
                        <div class="options__left__item-type">
                            FTTB (Оптический кабель до здания)
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-lg-12 col-xl-4">
                <div class="options__right">
                    <div class="options__right__price">
                        <div class="options__right__price-text">абонентская плата:</div>
                        <div class="options__right__price-number">90 000 сум / мес</div>
                    </div>
                    <div class="options__right__price">
                        <div class="options__right__price-text">сроки подключения:</div>
                        <div class="options__right__price-number">2 - 6 дней</div>
                    </div>
                    <a href="./chat.php" class="options__right__btn">Подключить тариф</a>
                </div>
            </div>
        </div>

    </section>

    <div class="row ">
        <div class="col-12 col-sm-12 col-lg-12 col-xl-8 row-gap-3">
            <section class="accordeon conditions">
                <div class="conditions-title">условия подключения</div>
                <div class="accordeon__item conditions__item">
                    <button class="accordeon__item-btn conditions__item__btn">
                        <div class="accordeon__item-text conditions__item__btn-text">как проверить остаток на балансе?</div>
                        <img class="conditions__item__btn-icon" src="./../assets/icons/accordeon__arrow-down.svg" alt="conditions__item__btn-icon">
                    </button>
                    <div class="accordeon__item__content conditions__item__content">
                        Нажмите на кнопку “Подключить тариф” и напишите сообщение нашему оператору. Он свяжется с вами для заключения договора и обсуждения подробностей подключения.
                    </div>
                </div>
                <div class="accordeon__item conditions__item">
                    <button class="accordeon__item-btn conditions__item__btn">
                        <div class="accordeon__item-text conditions__item__btn-text">как подключить?</div>
                        <img class="conditions__item__btn-icon" src="./../assets/icons/accordeon__arrow-down.svg" alt="conditions__item__btn-icon">
                    </button>
                    <div class="accordeon__item__content conditions__item__content">
                        Нажмите на кнопку “Подключить тариф” и напишите сообщение нашему оператору. Он свяжется с вами для заключения договора и обсуждения подробностей подключения.
                    </div>
                </div>
                <div class="accordeon__item conditions__item">
                    <button class="accordeon__item-btn conditions__item__btn">
                        <div class="accordeon__item-text conditions__item__btn-text">как подключить?</div>
                        <img class="conditions__item__btn-icon" src="./../assets/icons/accordeon__arrow-down.svg" alt="conditions__item__btn-icon">
                    </button>
                    <div class="accordeon__item__content conditions__item__content">
                        Нажмите на кнопку “Подключить тариф” и напишите сообщение нашему оператору. Он свяжется с вами для заключения договора и обсуждения подробностей подключения.
                    </div>
                </div>
                <div class="accordeon__item conditions__item">
                    <button class="accordeon__item-btn conditions__item__btn">
                        <div class="accordeon__item-text conditions__item__btn-text">как подключить?</div>
                        <img class="conditions__item__btn-icon" src="./../assets/icons/accordeon__arrow-down.svg" alt="conditions__item__btn-icon">
                    </button>
                    <div class="accordeon__item__content conditions__item__content">
                        Нажмите на кнопку “Подключить тариф” и напишите сообщение нашему оператору. Он свяжется с вами для заключения договора и обсуждения подробностей подключения.
                    </div>
                </div>
            </section>
        </div>

    </div>

    <section class="advantages ">
        <h2 class="advantages-title">
            преимущества подключения интернета от city net
        </h2>
        <div class="advantages__cards">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="advantages__cards__card">
                        <div class="advantages__cards__card-img">
                            <img src="./../assets/images/advantages/advantages__card1.png" alt="">
                        </div>
                        <div class="advantages__cards__card-title">
                            Удобное подключение и монтаж оборудования
                        </div>
                        <div class="advantages__cards__card-text">
                            Монтажник в удобное вам время привезет договор, подключит интернет и настроит оборудование
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="advantages__cards__card">
                        <div class="advantages__cards__card-img">
                            <img src="./../assets/images/advantages/advantages__card2.png" alt="">
                        </div>
                        <div class="advantages__cards__card-title">
                            Надежность и высокая скорость интернета
                        </div>
                        <div class="advantages__cards__card-text">
                            Предагаем оптимальное сочетание скорости интернета и стоимости для каждого пользователя.
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="advantages__cards__card">
                        <div class="advantages__cards__card-img">
                            <img src="./../assets/images/advantages/advantages__card3.png" alt="">
                        </div>
                        <div class="advantages__cards__card-title">
                            Круглосуточная поддержка 24/7
                        </div>
                        <div class="advantages__cards__card-text">
                            При возникновении проблем с интернетом наша поддержка оперативно решает возникшие проблемы.
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <div class="advantages__cards__card">
                        <div class="advantages__cards__card-img">
                            <img src="./../assets/images/advantages/advantages__card4.png" alt="">
                        </div>
                        <div class="advantages__cards__card-title">
                            Стабильное подключение к интернету
                        </div>
                        <div class="advantages__cards__card-text">
                            Обеспечиваем высокую стабильность соединения, что позволяет пользоваться интернетом без перебоев и задержек.
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>


</main>



<?php include './footer.php'; ?>