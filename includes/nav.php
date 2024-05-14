<nav class="header__item-center mobileMenu" onclick="toggleMobileMenu()">
    <div class="mobileMenu__container" onclick="event.stopPropagation()">
        <ul class="header__item_inner header__item_inner-nav">
            <li class="header__item_inner_link nav__link-btn <?php echo $pageActiv == 1 ? 'nav__link-btn--active' : ''; ?>">
                <a href="./../partials/internet.php">
                    Интернет
                </a>
            </li>
            <li class="header__item_inner_link nav__link-btn <?php echo $pageActiv == 2 ? 'nav__link-btn--active' : ''; ?>">
                <a href="./../partials/services.php">
                    Услуги
                </a>
            </li>
            <li class="header__item_inner_link nav__link-btn <?php echo $pageActiv == 3 ? 'nav__link-btn--active' : ''; ?>">
                <a href="./../partials/equipment.php">
                Оборудование
                </a>
            </li>
            <li class="header__item_inner_link nav__link-btn <?php echo $pageActiv == 4 ? 'nav__link-btn--active' : ''; ?>">
                <a href="./../partials/about.php">
                    О компании
                </a>
            </li>
            <li class="header__item_inner_link nav__link-btn <?php echo $pageActiv == 5 ? 'nav__link-btn--active' : ''; ?>">
                <a href="./../partials/news.php">
                    Новости
                </a>
            </li>
            <li class="header__item_inner_link nav__link-btn <?php echo $pageActiv == 6 ? 'nav__link-btn--active' : ''; ?>">
                <a href="./../partials/contacts.php">
                    Контакты
                </a>
            </li>
            <li  class="header__item_inner_link header-btn__mobile <?php echo $pageActiv == 7 ? 'nav__link-btn--active' : ''; ?>">
                <a href="./../partials/balance.php" >Мой баланс</a>
            </li>
        </ul>
        <div class="mobile__botton ">


            <!-- <div class="socials">
                <a href="#!" class="socials__item g">
                    <svg width="17" height="17">
                        <use xlink:href="/assets/icons/sprite.svg#icon-tg"></use>
                    </svg>
                </a>
                <a href="#!" class="socials__item g">
                    <svg width="17" height="17">
                        <use xlink:href="/assets/icons/sprite.svg#icon-inst"></use>
                    </svg>
                </a>
                <a href="#!" class="socials__item g">
                    <svg width="17" height="17">
                        <use xlink:href="/assets/icons/sprite.svg#icon-fb"></use>
                    </svg>
                </a>
            </div> -->
        </div>
    </div>
</nav>