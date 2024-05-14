<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Оборудование';
$page = 'equipment_inner';
$pageActiv = '3';


include './header.php';

?>



<main class="main">

    <div class="container-fluid pages__name">
        <a href="./../index.php" class="pages__name-left">Главная</a>
        <div class="pages__name-slash">/</div>
        <a href="./equipment.php" class="pages__name-left">Оборудование</a>
        <div class="pages__name-slash">/</div>
        <a href="./equipment_inner.php" class="pages__name-right">Системы видеонаблюдения</a>
    </div>

    <div class="container-fluid">
        <h1 class="my-4">Системы видеонаблюдения</h1>

        <div class="row">
            <?php for ($i = 0; $i < 16; $i++) : ?>
                <div class="col-xl-3 col-md-6 col-12">
                    <a href="./equipment_inner-details.php" class="equip__cell">
                        <img src="/assets/images/equipment__card-img.png" alt="">
                        <div class="equip__descr">
                            <p>2Мп HD-TVI купольная камера для помещений HiWatch

                            </p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
                                <g clip-path="url(#clip0_1127_4497)">
                                    <path d="M15.5718 6.54326L15.5718 15.129L17.5715 15.129V3.12935L16.5716 3.12935L5.57189 3.12935L5.57189 5.12905L14.1576 5.12905L2.72225 16.5644L4.13646 17.9786L15.5718 6.54326Z" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1127_4497">
                                        <rect width="20" height="20" fill="white" transform="translate(0.5 0.200439)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </a>
                </div>

            <?php endfor ?>

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
        </div>
    </div>

</main>





<?php include './footer.php'; ?>