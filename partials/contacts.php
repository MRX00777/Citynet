<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Контакты';
$page = 'contacts';
$pageActiv = '6';



include './header.php';

?>

<main class="main">
    <div class="container-fluid pages__name">
        <a href="./../index.php" class="pages__name-left">Главная</a>
        <div class="pages__name-slash">/</div>
        <a href="./contacts.php" class="pages__name-right">Контакты</a>
    </div>

    <div class="container-fluid">
        <section class="contacts">
            <div class="contacts__top">
                <div class="contacts__top__content">
                    <div>
                        <div class="contacts__top__content-text">Служба поддержки</div>
                        <a href="tel:712021111" class="contacts__top__content-info">(71) 202 11 11</a>
                    </div>
                </div>
                <div class="contacts__top__border"></div>
                <div class="contacts__top__content">
                    <div>
                        <div class="contacts__top__content-text">Электронная почта</div>
                        <a href="mailto:info@citynet.uz" class="contacts__top__content-info">
                            info@citynet.uz
                        </a>
                    </div>

                </div>
            </div>
            <div class="contacts__bottom">
                <div class="contacts__bottom__content">
                    <div class="contacts__bottom__content-text">Адрес</div>
                    <a href="https://www.google.com/maps/place/%D1%83%D0%BB%D0%B8%D1%86%D0%B0+%D0%A8%D0%BE%D1%82%D0%B0+%D0%A0%D1%83%D1%81%D1%82%D0%B0%D0%B2%D0%B5%D0%BB%D0%B8+35,+100070,+%D0%A2%D0%B0%D1%88%D0%BA%D0%B5%D0%BD%D1%82,+Toshkent+Shahri/@41.2905081,69.2599326,17z/data=!3m1!4b1!4m6!3m5!1s0x38ae8ae910ec3021:0xa5cd71b4c3b6276d!8m2!3d41.2905081!4d69.2599326!16s%2Fg%2F11j96t0094?entry=ttu" class="contacts__bottom__content-info">
                        Улица Шота Руставели,35 Ташкент,Узбекистан
                    </a>
                </div>
                <div class="contacts__top__border"></div>
                <div class="contacts__bottom__content">
                    <div class="contacts__bottom__content-text">Социальные сети</div>
                    <div class="footer__social__list">
                        <a href="#" class="footer__social__list-link"><img src="./../assets/icons/instagram-icon.svg" alt=""></a>
                        <a href="#" class="footer__social__list-link"><img src="./../assets/icons/telegram-icon.svg" alt=""></a>
                        <a href="#" class="footer__social__list-link"><img src="./../assets/icons/facebook-icon.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2997.843421444716!2d69.257357676461!3d41.29051210199798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8ae910ec3021%3A0xa5cd71b4c3b6276d!2z0YPQu9C40YbQsCDQqNC-0YLQsCDQoNGD0YHRgtCw0LLQtdC70LggMzUsIDEwMDA3MCwg0KLQsNGI0LrQtdC90YIsIFRvc2hrZW50IFNoYWhyaSwg0KPQt9Cx0LXQutC40YHRgtCw0L0!5e0!3m2!1sru!2s!4v1711687377015!5m2!1sru!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

</main>



<?php include './footer.php'; ?>