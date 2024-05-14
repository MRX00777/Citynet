<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?= $kw ?>">
    <meta name="description" content="<?= $desc ?>">
    <link rel="shortcut icon" href="./../fav/favicon.svg" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/fav/favicon-16x16.png">
    <link rel="manifest" href="/fav/site.webmanifest">
    <link rel="mask-icon" href="/fav/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/libraries/bootstrap-grid/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/assets/libraries/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/css/intlTelInput.css">
    <link rel="stylesheet" href="./../assets/css/global.css">
    <link rel="stylesheet" href="./../assets/css/index.css">

    <?php
    switch ($page) {
        case 'internet':
            echo '<link rel="stylesheet" href="/assets/css/internet.css">';
            break;
        case 'services':
            echo '<link rel="stylesheet" href="/assets/css/services.css">';
            break;
        case 'equipment':
            echo '<link rel="stylesheet" href="/assets/css/equipment.css">';
            break;
        case 'about':
            echo '<link rel="stylesheet" href="/assets/css/about.css">';
            break;
        case 'news':
            echo '<link rel="stylesheet" href="/assets/css/news.css">';
            echo '<link rel="stylesheet" href="/assets/css/equipment_inner.css">';
            break;
        case 'contacts':
            echo '<link rel="stylesheet" href="/assets/css/contacts.css">';
            break;
        case 'balance':
            echo '<link rel="stylesheet" href="/assets/css/balance.css">';
            break;
        case 'internet-details':
            echo '<link rel="stylesheet" href="/assets/css/internet-details.css">';
            break;
        case 'projects':
            echo '<link rel="stylesheet" href="/assets/css/projects.css">';
            echo '<link rel="stylesheet" href="/assets/css/services.css">';
            echo '<link rel="stylesheet" href="/assets/css/about.css">';
            break;
        case 'equipment_inner':
            echo '<link rel="stylesheet" href="/assets/css/equipment_inner.css">';
            break;
        case 'equipment_inner-details':
            echo '<link rel="stylesheet" href="/assets/css/equipment_inner-details.css">';
            echo '<link rel="stylesheet" href="/assets/css/services.css">';
            break;
        case 'login':
            echo '<link rel="stylesheet" href="/assets/css/login.css">';
            break;
        case 'login-confirm':
            echo '<link rel="stylesheet" href="/assets/css/login-confirm.css">';
            break;
        case 'chat':
            echo '<link rel="stylesheet" href="/assets/css/chat.css">';
            break;
        case 'contracts-details':
            echo '<link rel="stylesheet" href="/assets/css/contracts-details.css">';
            echo '<link rel="stylesheet" href="/assets/css/internet-details.css">';
            break;
        case 'news-details':
            echo '<link rel="stylesheet" href="/assets/css/news-details.css">';
            echo '<link rel="stylesheet" href="/assets/css/services.css">';
            break;
    }
    ?>
    <title><?= $title ?></title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="container-fluid">
                <div class="header__wrapper">
                    <div class="header__item header__item-left">
                        <a href="/" class="header__item_inner header__item_inner-logo">
                            <img src="/assets/icons/logo.svg" alt="logo">
                        </a>
                    </div>
                    <?php include "../includes/nav.php" ?>
                    <div class="header__item header__item-right">
                        <?php include "../includes/lang.php" ?>
                        <a href="./balance.php" class="header-btn <?php echo $pageActiv == 7 ? 'nav__link-btn--active' : ''; ?>">Мой баланс</a>
                        <div class="burger " onclick="toggleMobileMenu()">
                            <div class="burger__wrapper">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>