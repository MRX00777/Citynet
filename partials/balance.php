<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Мой баланс';
$page = 'balance';
$pageActiv = '7';



include './header.php';

?>

<main class="container-fluid main">

    <div class="main__title">Здравствуйте,
        <div>
            <div class="main__title-name">Абдувасит</div><span>!</span>
        </div>

    </div>

    <div class="main__buttons">
        <button class="my-tours tab show" data-tab="#tab-1">Мои договора</button>
        <button class="personal-info tab" data-tab="#tab-2">Личные данные</button>
    </div>


    <section id="tab-1" class="contracts tab__item show">
        <div class="contracts__boxs " id="mainContent">
            <a href="./chat.php" class="contracts__boxs-add" id="fixedButton">+</a>
            <div class="contracts__boxs__content">
                <a href="./contracts-details.php" class="contracts__boxs__content__box">

                    <div class="box__container__top">
                        <div class="box__row">
                            <div class="box__row-title">Интернет для дома мамы</div>
                            <div class="box__row-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 25 25" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.04472 23.8551L5.89453 21.7049L15.2723 12.3272L5.89453 2.94944L8.04472 0.799255L19.5726 12.3272L8.04472 23.8551Z" fill="white" />
                                </svg>
                            </div>
                        </div>
                        <div class="box-text">Договор №
                            <div>
                                <span class="box-text-span"> 135739</span>
                            </div>
                        </div>
                        <div class="box-text">
                            Абонентская плата:
                            <div>
                                <span class="box-text-span"> 133 928.57</span>сум / мес
                            </div>
                        </div>
                        <div class="box-bottom">
                            <div class="box-bottom__content">
                                <div class="box-bottom__content-info">Текущий баланс:</div>
                                <div class="box-bottom__content-item">
                                    <div class="balance-summa">9 331.53 </div>
                                    <div class="balanse-text">сум</div>
                                </div>
                            </div>
                            <div class="box-bottom__content">
                                <div class="box-bottom__content-info">К оплате:</div>
                                <div class="box-bottom__content-item">
                                    <div class="balance-summa">124 597,04</div>
                                    <div class="balanse-text">сум</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-background">
                        <img src="./../assets/images/balance__box-img.png" alt="">
                    </div>


                </a>
                <a href="./contracts-details.php" class="contracts__boxs__content__box">

                    <div class="box__container__top">
                        <div class="box__row">
                            <div class="box__row-title">Интернет для дома мамы</div>
                            <div class="box__row-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 25 25" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.04472 23.8551L5.89453 21.7049L15.2723 12.3272L5.89453 2.94944L8.04472 0.799255L19.5726 12.3272L8.04472 23.8551Z" fill="white" />
                                </svg>
                            </div>
                        </div>
                        <div class="box-text">Договор №
                            <div>
                                <span class="box-text-span"> 135739</span>
                            </div>
                        </div>
                        <div class="box-text">
                            Абонентская плата:
                            <div>
                                <span class="box-text-span"> 133 928.57</span>сум / мес
                            </div>
                        </div>
                        <div class="box-bottom">
                            <div class="box-bottom__content">
                                <div class="box-bottom__content-info">Текущий баланс:</div>
                                <div class="box-bottom__content-item">
                                    <div class="balance-summa">9 331.53 </div>
                                    <div class="balanse-text">сум</div>
                                </div>
                            </div>
                            <div class="box-bottom__content">
                                <div class="box-bottom__content-info">К оплате:</div>
                                <div class="box-bottom__content-item">
                                    <div class="balance-summa">124 597,04</div>
                                    <div class="balanse-text">сум</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-background">
                        <img src="./../assets/images/balance__box-img.png" alt="">
                    </div>


                </a>
                <a href="./contracts-details.php" class="contracts__boxs__content__box">

                    <div class="box__container__top">
                        <div class="box__row">
                            <div class="box__row-title">Интернет для дома мамы</div>
                            <div class="box__row-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 25 25" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.04472 23.8551L5.89453 21.7049L15.2723 12.3272L5.89453 2.94944L8.04472 0.799255L19.5726 12.3272L8.04472 23.8551Z" fill="white" />
                                </svg>
                            </div>
                        </div>
                        <div class="box-text">Договор №
                            <div>
                                <span class="box-text-span"> 135739</span>
                            </div>
                        </div>
                        <div class="box-text">
                            Абонентская плата:
                            <div>
                                <span class="box-text-span"> 133 928.57</span>сум / мес
                            </div>
                        </div>
                        <div class="box-bottom">
                            <div class="box-bottom__content">
                                <div class="box-bottom__content-info">Текущий баланс:</div>
                                <div class="box-bottom__content-item">
                                    <div class="balance-summa">9 331.53 </div>
                                    <div class="balanse-text">сум</div>
                                </div>
                            </div>
                            <div class="box-bottom__content">
                                <div class="box-bottom__content-info">К оплате:</div>
                                <div class="box-bottom__content-item">
                                    <div class="balance-summa">124 597,04</div>
                                    <div class="balanse-text">сум</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-background">
                        <img src="./../assets/images/balance__box-img.png" alt="">
                    </div>


                </a>
                <a href="./contracts-details.php" class="contracts__boxs__content__box">

                    <div class="box__container__top">
                        <div class="box__row">
                            <div class="box__row-title">Интернет для дома мамы</div>
                            <div class="box__row-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 25 25" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.04472 23.8551L5.89453 21.7049L15.2723 12.3272L5.89453 2.94944L8.04472 0.799255L19.5726 12.3272L8.04472 23.8551Z" fill="white" />
                                </svg>
                            </div>
                        </div>
                        <div class="box-text">Договор №
                            <div>
                                <span class="box-text-span"> 135739</span>
                            </div>
                        </div>
                        <div class="box-text">
                            Абонентская плата:
                            <div>
                                <span class="box-text-span"> 133 928.57</span>сум / мес
                            </div>
                        </div>
                        <div class="box-bottom">
                            <div class="box-bottom__content">
                                <div class="box-bottom__content-info">Текущий баланс:</div>
                                <div class="box-bottom__content-item">
                                    <div class="balance-summa">9 331.53 </div>
                                    <div class="balanse-text">сум</div>
                                </div>
                            </div>
                            <div class="box-bottom__content">
                                <div class="box-bottom__content-info">К оплате:</div>
                                <div class="box-bottom__content-item">
                                    <div class="balance-summa">124 597,04</div>
                                    <div class="balanse-text">сум</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-background">
                        <img src="./../assets/images/balance__box-img.png" alt="">
                    </div>


                </a>

            </div>
        </div>

        <!-- блок который отоброжается если нет договоров -->
        <div class="contracts__notcontracts ">
            <div class="contracts__notcontracts-text">
                На ваш номер телефона пока не зарегистрировано договоров.
                Напишите нам, чтобы подключить наши услуги
            </div>
            <a href="./chat.php" class="btn-yellow contracts__notcontracts-btn">
                <div style="margin-top: 4px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 19 18" fill="none">
                        <path d="M6.34005 7.53116C6.34005 7.34998 6.4219 7.17623 6.56758 7.04813C6.71326 6.92002 6.91085 6.84805 7.11687 6.84805H11.7778C11.9838 6.84805 12.1814 6.92002 12.327 7.04813C12.4727 7.17623 12.5546 7.34998 12.5546 7.53116C12.5546 7.71233 12.4727 7.88608 12.327 8.01418C12.1814 8.14229 11.9838 8.21426 11.7778 8.21426H7.11687C6.91085 8.21426 6.71326 8.14229 6.56758 8.01418C6.4219 7.88608 6.34005 7.71233 6.34005 7.53116ZM7.11687 9.58048C6.91085 9.58048 6.71326 9.65245 6.56758 9.78055C6.4219 9.90866 6.34005 10.0824 6.34005 10.2636C6.34005 10.4448 6.4219 10.6185 6.56758 10.7466C6.71326 10.8747 6.91085 10.9467 7.11687 10.9467H10.2241C10.4302 10.9467 10.6277 10.8747 10.7734 10.7466C10.9191 10.6185 11.0009 10.4448 11.0009 10.2636C11.0009 10.0824 10.9191 9.90866 10.7734 9.78055C10.6277 9.65245 10.4302 9.58048 10.2241 9.58048H7.11687ZM0.125536 8.89737C0.125933 7.09266 0.80358 5.33851 2.05336 3.90703C3.30313 2.47556 5.05518 1.44677 7.0377 0.980264C9.02022 0.513759 11.1224 0.635616 13.0181 1.32693C14.9139 2.01824 16.4972 3.24037 17.5225 4.80373C18.5477 6.36708 18.9577 8.18428 18.6887 9.97341C18.4197 11.7626 17.4868 13.4236 16.0347 14.6989C14.5826 15.9743 12.6925 16.7925 10.6576 17.0269C8.6227 17.2612 6.55674 16.8984 4.78021 15.9949L1.14782 17.0605C1.01363 17.0999 0.869738 17.1063 0.731692 17.0791C0.593645 17.0518 0.466682 16.992 0.364504 16.9059C0.262326 16.8198 0.188815 16.7109 0.151903 16.5908C0.114992 16.4707 0.116081 16.344 0.155055 16.2244L1.26124 12.8211C0.513969 11.6178 0.123388 10.2684 0.125536 8.89737ZM9.44731 2.06629C8.07574 2.06622 6.7286 2.38549 5.54282 2.99164C4.35704 3.5978 3.37491 4.46923 2.69625 5.51735C2.0176 6.56548 1.66662 7.75293 1.67899 8.959C1.69137 10.1651 2.06666 11.3468 2.76671 12.384C2.82057 12.4641 2.85524 12.553 2.8686 12.6454C2.88196 12.7377 2.87372 12.8314 2.84439 12.9209L2.05359 15.3527L4.62951 14.5986C4.73891 14.5665 4.85506 14.5562 4.96954 14.5685C5.08402 14.5808 5.19395 14.6153 5.29135 14.6696C6.3094 15.2362 7.46335 15.5868 8.662 15.6936C9.86064 15.8005 11.0711 15.6607 12.1978 15.2853C13.3244 14.91 14.3363 14.3093 15.1535 13.5308C15.9707 12.7523 16.5708 11.8174 16.9063 10.7998C17.2418 9.78229 17.3036 8.71007 17.0868 7.66791C16.87 6.62576 16.3804 5.64224 15.6569 4.7951C14.9334 3.94796 13.9957 3.26041 12.918 2.78681C11.8403 2.31321 10.6521 2.06654 9.44731 2.06629Z" fill="white" />
                    </svg>
                </div>
                Написать в чат
            </a>
        </div>
    </section>

    <section id="tab-2" class="personal tab__item">
        <div class="personal__content">
            <div class="personal__content__top">
                <div class="personal__content__top-name">
                    Аркадьев Геннадий Владиславович
                </div>
                <div class="personal__content__top-number">
                    <div class="number-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 25 24" fill="none">
                            <path d="M19.9654 15.26L17.4254 14.97C17.1267 14.9349 16.824 14.968 16.54 15.0667C16.2559 15.1654 15.9979 15.3273 15.7854 15.54L13.9454 17.38C11.1066 15.9362 8.79917 13.6288 7.35539 10.79L9.20539 8.94001C9.63539 8.51001 9.84539 7.91001 9.77539 7.30001L9.48539 4.78001C9.4287 4.29219 9.19459 3.84225 8.82763 3.51586C8.46067 3.18947 7.9865 3.00943 7.49539 3.01001H5.76539C4.63539 3.01001 3.69539 3.95001 3.76539 5.08001C4.29539 13.62 11.1254 20.44 19.6554 20.97C20.7854 21.04 21.7254 20.1 21.7254 18.97V17.24C21.7354 16.23 20.9754 15.38 19.9654 15.26Z" fill="white" />
                        </svg>
                    </div>
                    <div class="number-info">+998 90 990 98 90</div>
                </div>
            </div>
            <button class="personal__content__bottom">
                <div class="personal__content__bottom__left">
                    <div class="profil-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 21 21" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.7344 1.91943C10.504 1.91943 10.2756 1.92809 10.0496 1.9451C5.56355 2.2826 1.99502 5.90871 1.74803 10.4194C1.73897 10.5849 1.73438 10.7517 1.73438 10.9194C1.73438 11.0872 1.73897 11.2539 1.74803 11.4194C1.99503 15.9302 5.56355 19.5563 10.0496 19.8938C10.2756 19.9108 10.504 19.9194 10.7344 19.9194C10.9648 19.9194 11.1931 19.9108 11.4192 19.8938C15.9052 19.5563 19.4737 15.9302 19.7207 11.4194C19.7298 11.2539 19.7344 11.0872 19.7344 10.9194C19.7344 10.7517 19.7298 10.5849 19.7207 10.4194C19.4737 5.90871 15.9052 2.2826 11.4192 1.9451C11.1931 1.92809 10.9648 1.91943 10.7344 1.91943ZM10.9054 2.92123C11.1569 3.271 11.4715 3.76164 11.7872 4.39304C12.4648 5.74836 13.1499 7.75587 13.2272 10.4194H8.24159C8.31885 7.75587 9.00393 5.74836 9.68159 4.39304C9.99729 3.76164 10.3118 3.271 10.5633 2.92123C10.6202 2.92003 10.6772 2.91943 10.7344 2.91943C10.7915 2.91943 10.8485 2.92003 10.9054 2.92123ZM8.24159 11.4194H13.2272C13.1499 14.083 12.4648 16.0905 11.7872 17.4458C11.4715 18.0772 11.1569 18.5679 10.9054 18.9176C10.8485 18.9188 10.7915 18.9194 10.7344 18.9194C10.6772 18.9194 10.6202 18.9188 10.5633 18.9176C10.3118 18.5679 9.99729 18.0772 9.68159 17.4458C9.00393 16.0905 8.31885 14.083 8.24159 11.4194ZM7.24119 10.4194C7.31894 7.58069 8.04932 5.42152 8.78716 3.94583C8.95377 3.6126 9.12067 3.31441 9.28037 3.05124C5.71575 3.70576 2.97769 6.72301 2.74975 10.4194H7.24119ZM2.74975 11.4194H7.24119C7.31894 14.2582 8.04932 16.4174 8.78716 17.893C8.95377 18.2263 9.12067 18.5245 9.28037 18.7876C5.71575 18.1331 2.97769 15.1159 2.74975 11.4194ZM12.1884 18.7876C15.753 18.1331 18.4911 15.1159 18.719 11.4194H14.2276C14.1498 14.2582 13.4194 16.4174 12.6816 17.893C12.515 18.2263 12.3481 18.5245 12.1884 18.7876ZM14.2276 10.4194C14.1498 7.58069 13.4194 5.42152 12.6816 3.94583C12.515 3.6126 12.3481 3.31441 12.1884 3.05125C15.753 3.70576 18.4911 6.72301 18.719 10.4194H14.2276Z" fill="white" />
                        </svg>
                    </div>
                    <div class="profil-text">сменить профиль</div>
                </div>
                <div class="personal__content__bottom__right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 21 21" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.15103 20.526L5.50781 18.7342L12.6745 10.9194L5.50781 3.10462L7.15103 1.3128L15.9609 10.9194L7.15103 20.526Z" fill="white" />
                    </svg>
                </div>
            </button>
        </div>
        <div class="personal__share">
            <div class="personal__share-title">Понравился сервис?</div>
            <div class="personal__share-text">Поделитесь сайтом с друзьями и знакомыми</div>
            <div class=" personal__share-btn">
                <div class=" personal__share-btn-content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path d="M15.4219 18.6062C14.7274 18.6062 14.1372 18.3631 13.651 17.877C13.1649 17.3909 12.9219 16.8006 12.9219 16.1062C12.9219 16.009 12.9288 15.9081 12.9427 15.8037C12.9566 15.6992 12.9774 15.6056 13.0052 15.5228L7.13021 12.1062C6.8941 12.3145 6.63021 12.4778 6.33854 12.5962C6.04687 12.7145 5.74132 12.7734 5.42188 12.7728C4.72743 12.7728 4.13715 12.5298 3.65104 12.0437C3.16493 11.5576 2.92188 10.9673 2.92188 10.2728C2.92188 9.5784 3.16493 8.98813 3.65104 8.50201C4.13715 8.0159 4.72743 7.77285 5.42188 7.77285C5.74132 7.77285 6.04687 7.83201 6.33854 7.95035C6.63021 8.06868 6.8941 8.23174 7.13021 8.43951L13.0052 5.02285C12.9774 4.93951 12.9566 4.8459 12.9427 4.74201C12.9288 4.63813 12.9219 4.53729 12.9219 4.43951C12.9219 3.74507 13.1649 3.15479 13.651 2.66868C14.1372 2.18257 14.7274 1.93951 15.4219 1.93951C16.1163 1.93951 16.7066 2.18257 17.1927 2.66868C17.6788 3.15479 17.9219 3.74507 17.9219 4.43951C17.9219 5.13396 17.6788 5.72424 17.1927 6.21035C16.7066 6.69646 16.1163 6.93951 15.4219 6.93951C15.1024 6.93951 14.7969 6.88063 14.5052 6.76285C14.2135 6.64507 13.9497 6.48174 13.7135 6.27285L7.83854 9.68951C7.86632 9.77285 7.88715 9.86674 7.90104 9.97118C7.91493 10.0756 7.92188 10.1762 7.92188 10.2728C7.92188 10.3701 7.91493 10.4709 7.90104 10.5753C7.88715 10.6798 7.86632 10.7734 7.83854 10.8562L13.7135 14.2728C13.9497 14.0645 14.2135 13.9015 14.5052 13.7837C14.7969 13.6659 15.1024 13.6067 15.4219 13.6062C16.1163 13.6062 16.7066 13.8492 17.1927 14.3353C17.6788 14.8215 17.9219 15.4117 17.9219 16.1062C17.9219 16.8006 17.6788 17.3909 17.1927 17.877C16.7066 18.3631 16.1163 18.6062 15.4219 18.6062ZM15.4219 5.27285C15.658 5.27285 15.856 5.19313 16.016 5.03368C16.176 4.87424 16.2558 4.67618 16.2552 4.43951C16.2552 4.2034 16.1752 4.00563 16.0152 3.84618C15.8552 3.68674 15.6574 3.60674 15.4219 3.60618C15.1858 3.60618 14.988 3.68618 14.8285 3.84618C14.6691 4.00618 14.5891 4.20396 14.5885 4.43951C14.5885 4.67563 14.6685 4.87368 14.8285 5.03368C14.9885 5.19368 15.1863 5.2734 15.4219 5.27285ZM5.42188 11.1062C5.65799 11.1062 5.85604 11.0262 6.01604 10.8662C6.17604 10.7062 6.25576 10.5084 6.25521 10.2728C6.25521 10.0367 6.17521 9.83896 6.01521 9.67951C5.85521 9.52007 5.65743 9.44007 5.42188 9.43951C5.18576 9.43951 4.98799 9.51951 4.82854 9.67951C4.6691 9.83951 4.5891 10.0373 4.58854 10.2728C4.58854 10.509 4.66854 10.707 4.82854 10.867C4.98854 11.027 5.18632 11.1067 5.42188 11.1062ZM15.4219 16.9395C15.658 16.9395 15.856 16.8595 16.016 16.6995C16.176 16.5395 16.2558 16.3417 16.2552 16.1062C16.2552 15.8701 16.1752 15.6723 16.0152 15.5128C15.8552 15.3534 15.6574 15.2734 15.4219 15.2728C15.1858 15.2728 14.988 15.3528 14.8285 15.5128C14.6691 15.6728 14.5891 15.8706 14.5885 16.1062C14.5885 16.3423 14.6685 16.5403 14.8285 16.7003C14.9885 16.8603 15.1863 16.9401 15.4219 16.9395Z" fill="white" />
                    </svg>
                    <div class="personal__share-btn-text">Поделиться</div>
                </div>

                <div class="personal__share__list ">
                    <a href="" class="personal__share__list-link">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                <g clip-path="url(#clip0_1279_2193)">
                                    <path d="M9.88994 15.6076V8.6815H12.2265L12.5738 5.9697H9.88994V4.2424C9.88994 3.45987 10.108 2.92411 11.231 2.92411H12.6541V0.506391C11.9617 0.432188 11.2657 0.396358 10.5694 0.399069C8.50404 0.399069 7.08603 1.6599 7.08603 3.97452V5.96463H4.76465V8.67643H7.0911V15.6076H9.88994Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1279_2193">
                                        <rect width="16" height="16" fill="white" transform="translate(0.708984 0.00439453)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div>Facebook</div>
                    </a>
                    <a href="" class="personal__share__list-link">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                <path d="M15.8924 3.24658L13.7119 13.1188C13.5474 13.8155 13.1184 13.9889 12.5088 13.6607L9.18648 11.3103L7.58338 12.7905C7.40598 12.9609 7.2576 13.1033 6.91569 13.1033L7.15438 9.85489L13.312 4.51312C13.5797 4.28397 13.2539 4.157 12.8959 4.38616L5.28356 8.98782L2.00639 8.00308C1.29354 7.7894 1.28064 7.31871 2.15476 6.99046L14.9731 2.24945C15.5666 2.03578 16.086 2.37642 15.8924 3.24658Z" fill="white" />
                            </svg>
                        </div>
                        <div>Telegram</div>
                    </a>
                    <a href="" class="personal__share__list-link">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                <g clip-path="url(#clip0_1279_2204)">
                                    <path d="M11.5446 13.9072V15.137C11.5446 15.5445 11.2021 15.8748 10.7796 15.8748H2.10882C1.68628 15.8748 1.34375 15.5445 1.34375 15.137V3.82346C1.34375 3.41596 1.68628 3.08562 2.10882 3.08562H4.40402V12.1856C4.40402 13.1349 5.20482 13.9072 6.18917 13.9072H11.5446ZM11.5446 3.33157V0.134277H6.18917C5.76663 0.134277 5.42411 0.464613 5.42411 0.872114V12.1856C5.42411 12.5931 5.76663 12.9234 6.18917 12.9234H14.8599C15.2825 12.9234 15.625 12.5931 15.625 12.1856V4.06941H12.3097C11.8889 4.06941 11.5446 3.73738 11.5446 3.33157ZM15.4009 2.37764L13.2988 0.350371C13.1554 0.212009 12.9608 0.134278 12.7579 0.134277L12.5647 0.134277V3.08562H15.625V2.89935C15.625 2.70367 15.5444 2.51601 15.4009 2.37764Z" fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1279_2204">
                                        <rect width="16" height="16" fill="white" transform="translate(0.484375 0.00439453)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div>Скопировать ссылку</div>
                    </a>
                </div>
            </div>

        </div>




        <div id="modal___name" class="popup">
            <div class="popup__body">
                <form action="" class="popup__content">
                    <div class="pupup__title">Выйти из текущего профиля?</div>
                    <div class="popup__form">
                        <div class="info__fill_input">
                            <button class="btn-blue balance__btn-exit">Выйти</button>
                            <div class="balance__btn-reset">Отмена</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

</main>



<?php include './footer.php'; ?>



<script>
    const shareBtn = document.querySelector('.personal__share-btn');
    const shareContent = document.querySelector('.personal__share__list');

    shareBtn.addEventListener('click', toggleFilter);


    function toggleFilter() {
        shareContent.classList.toggle('share-active');
    }






    // Select all elements with class "box__row-title"
    const h2Elements = document.querySelectorAll('.box__row-title');

    // Function to truncate text and add ellipsis if it exceeds max length
    function truncateText(element, maxLength) {
        const text = element.textContent.trim();
        if (text.length > maxLength) {
            element.textContent = text.slice(0, maxLength) + '...';
        }
    }

    // Loop through all selected elements and truncate text in each one
    h2Elements.forEach(element => {
        truncateText(element, 22);
    });









    // active sections options balance.php


    const tabsBtn = document.querySelectorAll('.tab');
    const tabsItem = document.querySelectorAll('.tab__item');

    tabsBtn.forEach(function(item) {
        item.addEventListener("click", function() {
            let currentBtn = item;
            let tabId = currentBtn.getAttribute("data-tab");
            let currentTab = document.querySelector(tabId);

            if (!currentBtn.classList.contains('show')) {
                tabsBtn.forEach(function(item) {
                    item.classList.remove('show');
                });

                tabsItem.forEach(function(item) {
                    item.classList.remove('show');
                });

                currentBtn.classList.add('show');
                currentTab.classList.add('show');

            }

        })
    })
</script>