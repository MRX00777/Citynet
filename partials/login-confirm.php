<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'авторизация';
$page = 'login-confirm';


include "./header.php" ?>

<main class="container-fluid main">
    <section class="confirm">
        <div class="login__part1-title">авторизация</div>
        <h3 class="confirm-title">
            На номер
            <span class="confirm-title__number">+998(99) 123 45 67</span>
            отправлен 4 - х значный код.
            Пожалуйста, введите его
        </h3>

        <form class="confirm-form" action="">
            <div class="confirm-form__content">
                <input type="text" maxlength="1" size="1" pattern="[0-9]" required placeholder="-" oninput="moveToNextOrPreviousInput(event, this)">
                <input type="text" maxlength="1" size="1" pattern="[0-9]" required placeholder="-" oninput="moveToNextOrPreviousInput(event, this)">
                <input type="text" maxlength="1" size="1" pattern="[0-9]" required placeholder="-" oninput="moveToNextOrPreviousInput(event, this)">
                <input type="text" maxlength="1" size="1" pattern="[0-9]" required placeholder="-" oninput="moveToNextOrPreviousInput(event, this)">
            </div>
            <p class="error__message">Вы ввели неверный код</p>
            <a class="getcode-timer">Отправить заново через: <span>00:<div id="getcode-timer__second">60</div></span></a>
            <a href="" class="getcode-again">Отправить код заново</a>
            <button type="submit" class="btn-blue login__btn">Подтвердить</button>
        </form>
    </section>
</main>


<script>
    // скрипт для страницы получить код



    let seconds = document.querySelector('#getcode-timer__second');
    let resenCode = document.querySelector('.getcode-again');
    let sec = 60
    window.addEventListener('load', () => {
        let interval = setInterval(() => {
            sec--;
            if (sec < 10) {
                sec = '0' + sec;
            }

            seconds.innerHTML = sec;
            if (sec <= 0) {
                resenCode.classList.add('active');
                clearInterval(interval);
            }
        }, 1000);
    });
</script>

<?php include "./footer.php" ?>