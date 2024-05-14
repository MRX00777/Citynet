<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Новости';
$page = 'news';
$pageActiv = '5';



include './header.php';

?>


<main class="main">
    <div class="container-fluid pages__name">
        <a href="./../index.php" class="pages__name-left">Главная</a>
        <div class="pages__name-slash">/</div>
        <a href="./news.php" class="pages__name-right">Новости</a>
    </div>

    <section class="container-fluid news ">
        <h3 class="news-title">последние новости</h3>
        <div class="news__cards">
            <?php for ($i = 1; $i < 5; $i++) : ?>
                <a href="./news-details.php" class="news__cards__card">
                    <div class="news__cards__card-img">
                        <img src="./../assets/images/news__card-img.png" alt="">
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
            <?php endfor ?>
        </div>

        <div class="pg">
                <div class="row my-4">
                    <div class="col-12 d-flex ">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                    <span class="page-link" aria-hidden="true">‹</span>
                                </li>
                                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" rel="next" aria-label="Next »">›</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
    </section>
</main>




<?php include './footer.php'; ?>




<script>

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    //   centeredSlides: true,
      spaceBetween: 15,
    //   grabCursor: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
     /*  breakpoints: {
        320: {
            slidesPerView: 3,
        },
        576: {
            slidesPerView: 4,
        },
    } */
    });


</script>