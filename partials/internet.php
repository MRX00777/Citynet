<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Интернет';
$page = 'internet';
$pageActiv = '1';



include './header.php';

?>


<main class="main">

    <div class="container-fluid pages__name">
        <a href="./../index.php" class="pages__name-left">Главная</a>
        <div class="pages__name-slash">/</div>
        <a href="./internet.php" class="pages__name-right">Интернет</a>
    </div>


    <section class="tariff ">
        <h2 class="container-fluid  tariff-title">тарифы на интернет для дома</h2>
        <div class="container  tariff__cards row">

            <?php for ($i = 1; $i < 9; $i++) : ?>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <a data-aos="flip-right"  data-aos-duration="600" data-aos-delay="300" href="./internet-details.php" class="tariff__cards__card">
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
                            <img src="../assets/images/card-img.png" alt="">
                        </div>
                    </a>
                </div>

            <?php endfor ?>






        </div>
    </section>
</main>



<?php include './footer.php'; ?>