<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'проекты';
$page = 'projects';
$pageActiv = '2';



include './header.php';

?>

<main class=" main">
    <div class="container-fluid pages__name">
        <a href="./../index.php" class="pages__name-info">Главная</a>
        <div class="pages__name-slash">/</div>
        <a href="./services.php" class="pages__name-info">Услуги</a>
        <div class="pages__name-slash">/</div>
        <a href="./services_inner.php" class="pages__name-info">Системы видеонаблюдения</a>
        <div class="pages__name-slash">/</div>
        <a href="./projects.php" class="pages__name-info">Видеонаблюдение в «Gardens Residence»</a>
    </div>

    <section class="container-fluid projects">
        <h1 class=" projects-title about__row__left-title">Видеонаблюдение в «Gardens Residence»</h1>
        <div class="projects-date">12.02.2023</div>

      
    </section>

    <section class="photo swiper">

<div class="swiper-wrapper">
    <div class="swiper-slide">
        <div class="photo__card" data-src="./../assets/images/projects-photo.png" data-fancybox="gallery">
            <img data-lazy="./../assets/images/projects-photo.png" alt="photo-card" class="photo__card-img">
        </div>
    </div>
    <div class="swiper-slide">
        <div class="photo__card" data-src="./../assets/images/photo-card.png" data-fancybox="gallery">
            <img data-lazy="./../assets/images/photo-card.png" alt="photo-card" class="photo__card-img">
        </div>
    </div>
    <div class="swiper-slide">
        <div class="photo__card" data-src="./../assets/images/photo-card.png" data-fancybox="gallery">
            <img data-lazy="./../assets/images/photo-card.png" alt="photo-card" class="photo__card-img">
        </div>
    </div>
    <div class="swiper-slide">
        <div class="photo__card" data-src="./../assets/images/photo-card.png" data-fancybox="gallery">
            <img data-lazy="./../assets/images/photo-card.png" alt="photo-card" class="photo__card-img">
        </div>
    </div>
    <div class="swiper-slide">
        <div class="photo__card" data-src="./../assets/images/photo-card.png" data-fancybox="gallery">
            <img data-lazy="./../assets/images/photo-card.png" alt="photo-card" class="photo__card-img">
        </div>
    </div>
</div>


</section>

    <div class="container-fluid">
        <div class="row">
        <div class="col-12 col-sm-12 col-lg-12 col-xl-10">
            <section class="services__inner-container made">
                <h2 class="made-title">Что было сделано:</h2>
                <ul class="made__list">
                    <li class="made__list-item">
                        Профессиональные специалисты: Наша компания имеет опыт и квалифицированных специалистов, которые могут провести установку систем видеонаблюдения на высоком уровне.
                    </li>
                    <li class="made__list-item">
                        Профессиональные специалисты: Наша компания имеет опыт и квалифицированных специалистов, которые могут провести установку систем видеонаблюдения на высоком уровне.
                    </li>
                    <li class="made__list-item">
                        Профессиональные специалисты: Наша компания имеет опыт и квалифицированных специалистов, которые могут провести установку систем видеонаблюдения на высоком уровне.
                    </li>
                    <li class="made__list-item">
                        Профессиональные специалисты: Наша компания имеет опыт и квалифицированных специалистов, которые могут провести установку систем видеонаблюдения на высоком уровне.
                    </li>
                </ul>
                <p class="made-text">
                    Tехнология AcuSense реагирует только на людей или транспортные средства. В принципе, этим сказано уже довольно много, не правда ли? Но, в дополнение к своему главному преимуществу, данная технология отфильтровывает ложные события, вызванные погодными условиями, такими как осадки или листья.
                </p>
            </section>
        </div>
    </div>
    </div>

    

</main>


<?php include './footer.php'; ?>






<script>
    var swiperTwo = new Swiper('.photo', {
        slidesPerView: "auto",
        // spaceBetween: 60,
        allowTouchMove: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            320: {
                spaceBetween: 15,
            },
            450: {
                spaceBetween: 20,
            },
            620: {
                spaceBetween: 25,
            },
            760: {
                spaceBetween: 30,
            },

        }

    });
</script>