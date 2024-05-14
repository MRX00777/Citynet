<footer class="footer">
    <div class="container-fluid">
        <div class="footer__top">
            <div class="footer__nav">
                <ul class="footer__nav__list">
                    <li><div class="header__item_inner_link link-static" style="display: inline-block;">Интернет</div></li>
                    <li><a href="./internet.php" class="header__item_inner_link">Тарифные планы</a></li>
                    <li><a href="./balance.php" class="header__item_inner_link <?php echo $pageActiv == 7 ? 'nav__link-btn--active' : ''; ?>">Личный кабинет</a></li>
                </ul>
                <ul class="footer__nav__list">
                    <li><div class="header__item_inner_link link-static" style="display: inline-block;">О компании</div></li>
                    <li><a href="./services.php" class="header__item_inner_link <?php echo $pageActiv == 2 ? 'nav__link-btn--active' : ''; ?>">Услуги</a></li>
                    <li><a href="./about.php" class="header__item_inner_link">Наша история</a></li>
                    <li><a href="./about.php" class="header__item_inner_link">Галерея</a></li>
                </ul>
                <ul class="footer__nav__list">
                    <li><a href="./news.php" class="header__item_inner_link <?php echo $pageActiv == 5 ? 'nav__link-btn--active' : ''; ?>">Новости</a></li>
                    <li><a href="./equipment.php" class="header__item_inner_link <?php echo $pageActiv == 3 ? 'nav__link-btn--active' : ''; ?>">Оборудование</a></li>
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

        <a href="https://kirano.uz/" class="made-in-kirano" >Разработано в Кирано</a>
    </div>
</footer>

</div>
<!-- /.wrapper -->
<script src="./../assets/libraries/jquery/jquery.min.js"></script>
<script src="./../assets/libraries/swiper/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.8/jquery.inputmask.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/js/intlTelInput.min.js"></script>
<script src="./../assets/libraries/phonemask/phonemask.min.js"></script>
<script src="./../assets/js/modal.js"></script>
<script src="./../assets/js/swipers.js"></script>
<script src="./../assets/js/script.js"></script>
<script src="./../assets/js/lazyImage.js"></script>
<script src="./../assets/js/telInput.js"></script>
<script>
    AOS.init();
</script>
</body>

</html>