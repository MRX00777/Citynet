<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Оборудование';
$page = 'equipment';
$pageActiv = '3';


include './header.php';

?>



<main class="main">

    <div class="container-fluid pages__name">
        <a href="./../index.php" class="pages__name-left">Главная</a>
        <div class="pages__name-slash">/</div>
        <a href="./equipment.php" class="pages__name-right">Оборудование</a>
    </div>


    <section class="services ">
        <div class="container-fluid services-title">оборудование</div>
        <div class="container-fluid services__cards row">



            <?php for ($i = 1; $i < 9; $i++) : ?>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <a data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="100s" data-aos-delay="200" data-aos-easing="ease-in-out" href="./equipment_inner.php" class="services__cards__card">
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
                            <img src="./../assets/images/equipment__robot-img.png" alt="">
                        </div>
                    </a>
                </div>

            <?php endfor ?>








        </div>
    </section>
</main>





<?php include './footer.php'; ?>