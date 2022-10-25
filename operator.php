<?php	
		require "db.php";
        $data = $_POST;
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>telix</title>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cuprum:wght@400;700&family=PT+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
</head>

<body>
    <div class="header">
        <div class="container header__container">
            <div class="logo">
                <img src="img/mainScreen/logo.svg" alt="" class="logo__img">
            </div>
            <form class="search" action="">
                <img class="search__img" src="img/mainScreen/search.svg" alt="">
                <input class="search__input" type="search" placeholder="Поиск:">
            </form>


            <!-- <form class="mobile-search search" action="">
                <img class="search__img" src="img/mainScreen/search.svg" alt="">
                <input class="search__input" type="search" placeholder="Поиск:">
            </form> -->

            <div class="how-to-pay">
                <img class="how-to-pay__img" src="img/mainScreen/question.svg" alt="">
                <span class="how-to-pay__text">Как оплатить</span>
            </div>

            <a href="tel:+78123859600" class="header__phone">
                +7 (812) 385-96-00
            </a>
            <div class="menu-burger">
                <span></span>
            </div>
        </div>
        <div class="mobile-menu">
            <div class="mobile-menu__title">
                МЕНЮ
            </div>
            <ul class="mobile-menu__list">
                <li><a href="index.php">Главная</a></li>
                <li><a href="operator.php">Оператор</a></li>
                <li><a href="contractor.php">Подрядчик</a></li>
                <li class="link-about">О компании</li>
                <li class="link-contacts">Контакты</li>
            </ul>
        </div>
    </div>
    <div class="mainScreen">
        <div class="container mainScreen__container">
            <?php if($_SESSION['logged_user']) :?>
                <a href="autorisatedUser.php" class="mainScreen__login login"><img class="login__img" src="img/mainScreen/icon-login.svg" alt="entrance">
                Войти в ЛК</a>
            <?php else : ?>
            <a href="profile.php" class="mainScreen__login login"><img class="login__img" src="img/mainScreen/icon-login.svg" alt="entrance">
                Войти в ЛК</a>
            <?php endif; ?>
            <nav class="nav">
                <ul class="menu">
                <li class="menu__item"><a class="menu__link" href="index.php">
                            <img class="menu__img" src="img/mainScreen/menu/main.svg" alt="">
                            <img class="menu__img_hover" src="img/mainScreen/menu/main.svg" alt="">
                            <span class="menu__item-span">Главная</span></a></li>
                    <li class="menu__item"><a class="active menu__link_active" href="operator.php">
                            <img class="menu__img" src="img/mainScreen/menu/operator-active.svg" alt="">
                            <img class="menu__img_hover" src="img/mainScreen/menu/operator.svg" alt="">
                            <span class="menu__item-span">Оператор</span></a></li>
                    <li class="menu__item"><a class="menu__link" href="contractor.php">
                            <img class="menu__img" src="img/mainScreen/menu/contractor.svg" alt="">
                            <img class="menu__img_hover" src="img/mainScreen/menu/contractor.svg" alt="">
                            <span class="menu__item-span">Подрядчик</span></a></li>
                    <li class="menu__item"><a class="menu__link link-about">
                            <img class="menu__img" src="img/mainScreen/menu/info.svg" alt="">
                            <img class="menu__img_hover" src="img/mainScreen/menu/info.svg" alt="">
                            <span class="menu__item-span">О компании</span></a></li>
                    <li class="menu__item"><a class="menu__link link-contacts">
                            <img class="menu__img" src="img/mainScreen/menu/contacts.svg" alt="">
                            <img class="menu__img_hover" src="img/mainScreen/menu/contacts.svg" alt="">
                            <span class="menu__item-span">Контакты</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="content">

        <section class="operator-tariffs">
            <div class="operator-tariffs-container container">
                <ul class="operator-tariffs-tab-pannel">
                    <li class="operator-tariffs-tab-pannel__item active" id="internet-list-item">
                        <div class="operator-tariffs-tab-pannel__wrapper">
                            <div class="operator-tariffs-tab-pannel__title">Интернет</div>
                            <button class="operator-tariffs-tab-pannel__button">Полетели с нами</button>
                        </div>
                        <img class="operator-tariffs-tab-pannel__img" src="img/operator-teriffs/rocket.svg"
                            alt="ракета">
                        <img class="operator-tariffs-tab-pannel__img_active" src="img/operator-teriffs/rocket_active.svg"
                            alt="ракета">
                    </li>
                    <li class="operator-tariffs-tab-pannel__item" id="phone-list-item">
                        <div class="operator-tariffs-tab-pannel__wrapper">
                            <div class="operator-tariffs-tab-pannel__title">Телефония</div>
                            <button class="operator-tariffs-tab-pannel__button">Будь на связи</button>
                        </div>
                        <img class="operator-tariffs-tab-pannel__img" src="img/operator-teriffs/phone.svg"
                            alt="телефон">
                        <img class="operator-tariffs-tab-pannel__img_active" src="img/operator-teriffs/phone_active.svg"
                            alt="телефон">
                    </li>
                    <li class="operator-tariffs-tab-pannel__item" id="tv-list-item">
                        <div class="operator-tariffs-tab-pannel__wrapper">
                            <div class="operator-tariffs-tab-pannel__title">Телевидение</div>
                            <button class="operator-tariffs-tab-pannel__button">Полетели с нами</button>
                        </div>
                        <img class="operator-tariffs-tab-pannel__img" src="img/operator-teriffs/tv.svg"
                            alt="телевизор">
                        <img class="operator-tariffs-tab-pannel__img_active" src="img/operator-teriffs/tv_active.svg"
                            alt="телевизор">
                    </li>
                </ul>
                <div class="tab-content__wrapper" id="operator-teriffs__content">
                    <div class="operator-tariffs__tab-content operator-tariffs__tab-content-internet">
                        <div class="operator-tariffs__wrapper operator-tariffs__tab-content-internet-tariff">
                            <div class="column__wrapper">
                                <div class="column__title">Название</div>
                                <div class="operator-tariffs__column column">
                                    <div class="column__item">Стандарт</div>
                                    <div class="column__item">Базис +</div>
                                    <div class="column__item">слайдер</div>
                                    <div class="column__item">ветер</div>
                                    <div class="column__item">гром</div>
                                    <div class="column__item">молния</div>
                                    <div class="column__item">Инфон</div>
                                    <div class="column__item">минус</div>
                                    <div class="column__item">приостановка</div>
                                    <div class="column__item">полная <br>
                                        остановка
                                    </div>
                                </div>
                            </div>
                            <div class="column__wrapper">
                                <div class="column__title">Скорость</div>
                                <div class="operator-tariffs__column column">
                                    <div class="column__item">50 мб/с</div>
                                    <div class="column__item">100 мб/с</div>
                                    <div class="column__item">100 мб/с</div>
                                    <div class="column__item">200 мб/с</div>
                                    <div class="column__item">300 мб/с</div>
                                    <div class="column__item">500 мб/с</div>
                                    <div class="column__item">100 мб/с</div>
                                    <div class="column__item">50 мб/с</div>
                                    <div class="column__item">0 мб/с</div>
                                    <div class="column__item">0 мб/с</div>
                                </div>
                            </div>
                            <div class="column__wrapper">
                                <div class="column__title">Стоимость</div>
                                <div class="operator-tariffs__column column">
                                    <div class="column__item">400 р/мес</div>
                                    <div class="column__item">400 р/мес</div>
                                    <div class="column__item">400 р/мес</div>
                                    <div class="column__item">400 р/мес</div>
                                    <div class="column__item">400 р/мес</div>
                                    <div class="column__item">400 р/мес</div>
                                    <div class="column__item">400 р/мес</div>
                                    <div class="column__item">400 р/мес</div>
                                    <div class="column__item">400 р/мес</div>
                                    <div class="column__item">400 р/мес</div>
                                </div>
                            </div>
                            <div class="column__wrapper">
                                <div class="column__title">Пояснение</div>
                                <div class="operator-tariffs__column column">
                                    <div class="column__item column__item_small"></div>
                                    <div class="column__item column__item_small"></div>
                                    <div class="column__item column__item_small"> переведен в архив, возможен <br>
                                        переход на любой другой тариф</div>
                                    <div class="column__item column__item_small">при технической возможности</div>
                                    <div class="column__item column__item_small">при технической возможности</div>
                                    <div class="column__item column__item_small">при технической возможности</div>
                                    <div class="column__item column__item_small"><span class="column__item_blue">подробнее</span></div>
                                    <div class="column__item column__item_small"><span class="column__item_blue">подробнее</span></div>
                                    <div class="column__item column__item_small"><span class="column__item_blue">подробнее</span></div>
                                    <div class="column__item column__item_small"><span class="column__item_blue">подробнее</span></div>
                                    <div class="column__item column__item_small"><span class="column__item_blue"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="operator-tariffs__wrapper operator-tariffs__tab-content-internet-abon">
                            <div class="column__wrapper">
                                <div class="column__title">Название</div>
                                <div class="operator-tariffs__column column">
                                    <div class="column__item">Стандарт</div>
                                    <div class="column__item">Базис +</div>
                                    <div class="column__item">ветер</div>
                                    <div class="column__item">гром</div>
                                    <div class="column__item">молния</div>
                                    <div class="column__item">ЛАЙТ-КУРРОРТ</div>
                                    <div class="column__item">стандарт-курорт</div>
                                    <div class="column__item">базис-курорт</div>
                                    <div class="column__item">слайдер-курорт</div>
                                </div>
                            </div>
                            <div class="column__wrapper">
                                <div class="column__title">стоимость/скидка
                                    <span class="column__title-text">3 месяца 5%</span>
                                </div>
                                <div class="operator-tariffs__column column">
                                    <div class="column__item">1140 р/60 р</div>
                                    <div class="column__item">1482 р/78 р</div>
                                    <div class="column__item">1852 р/97 р</div>
                                    <div class="column__item">2137 р/112 р</div>
                                    <div class="column__item">2565 р/135 р</div>
                                    <div class="column__item">1710 р/90 р</div>
                                    <div class="column__item">2565 р/135 р</div>
                                    <div class="column__item">3705 р/195 р</div>
                                    <div class="column__item">5130 р/270 р</div>
                                </div>
                            </div>
                            <div class="column__wrapper">
                                <div class="column__title">стоимость/скидка
                                    <span class="column__title-text">6 месяцев 10%</span>
                                </div>
                                <div class="operator-tariffs__column column">
                                    <div class="column__item">2160 р/240 р</div>
                                    <div class="column__item">2808 р/312 р</div>
                                    <div class="column__item">3510 р/390 р</div>
                                    <div class="column__item">4050 р/ 450 р</div>
                                    <div class="column__item">4860 р/540 р</div>
                                    <div class="column__item">3240 р/360 р</div>
                                    <div class="column__item">4860 р/540 р</div>
                                    <div class="column__item">7020 р/780 р</div>
                                    <div class="column__item">9720 р/1080 р</div>
                                </div>
                            </div>
                            <div class="column__wrapper">
                                <div class="column__title">стоимость/скидка
                                    <span class="column__title-text">12 месяцев 15%</span>
                                </div>
                                <div class="operator-tariffs__column column">
                                    <div class="column__item">4080 р/720 р</div>
                                    <div class="column__item">5304 р/936 р</div>
                                    <div class="column__item">6630 р/1170 р</div>
                                    <div class="column__item">7650 р/1350 р</div>
                                    <div class="column__item">9180 р/1620 р</div>
                                    <div class="column__item">6120 р/1080 р</div>
                                    <div class="column__item">9180 р/1620 р</div>
                                    <div class="column__item">13260 р/2340 р</div>
                                    <div class="column__item">18360 р/3240 р</div>
                                    <div class="column__item"></div>
                                </div>
                            </div>
                        </div>
                        <div class="operator-tariffs__footer">
                            <div class="bottom-pannel">
                                <button class="bottom-pannel__item bottom-pannel__item-tariff">
                                    Тарифы
                                </button>
                                <button class="bottom-pannel__item bottom-pannel__item-abon">
                                    абонементы
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="operator-tariffs__tab-content operator-tariffs__tab-content-phone">
                            <div class="operator-tariffs__phone-block">
                                <div class="operator-tariffs__phone-title-block">
                                    <h2 class="operator-tariffs__phone-title">
                                        оказывает услуги местной телефонной связи по Безлимитному тарифу.
                                    </h2>
                                    <p class="operator-tariffs__phone-text">
                                        Абонентская плата в мес. :  370 руб.
                                    </p>
                                </div>
                                <div class="operator-tariffs__phone-descr-block">
                                    <p class="operator-tariffs__phone-text">Подключение - 1500 рублей.</p>
                                    <p class="operator-tariffs__phone-text">Тарификация звонков для абонентов физических лиц <span class="column__item_blue">Здесь</span></p>
                                </div>
                            </div>
                            <div class="operator-tariffs__phone-block">
                                <h2 class="operator-tariffs__phone-title">
                                    УСЛОВИЯ ПРЕДОСТАВЛЕНИЯ УСЛУГИ:
                                </h2>
                                <p class="operator-tariffs__phone-text-descr">В стоимость услуги входит приобретение телефонного номера, установка оборудования и подключение.</p>
                                <p class="operator-tariffs__phone-text-descr">При подключении обязательно наличие стационарного телефонного аппарата
                                </p>
                                <p class="operator-tariffs__phone-text-descr">Услуги междугородней и международной связи оплачиваются абонентом в начале следующего календарного месяца за предыдущий.</p>
                                <p class="operator-tariffs__phone-text-descr">оплаты услуг посредством платежных терминалов.</p>
                                <p class="operator-tariffs__phone-text-descr">Личный кабинет, возможность просмотра баланса и управление услугой.</p>
                                <p class="operator-tariffs__phone-text-descr">Услуга предоставляется при положительном балансе лицевого счета.</p>
                                <p class="operator-tariffs__phone-text-descr">Подключение производится после поступления на счет компании денежных средств от клиента за подключение.</p>
                                <p class="operator-tariffs__phone-text-descr">Дополнительную информацию Вы всегда можете получить по телефону Центра по обслуживанию абонентов <span class="column__item_blue">385-96-00</span></p>
                            </div>
                    </div>

                    <div class="operator-tariffs__tab-content operator-tariffs__tab-content-tv operator-tariffs__tab-content-tv-okk">
                        <div class="operator-tariffs__wrapper">
                            <div class="column__wrapper">
                                <div class="column__title">НОМЕР</div>
                                <div class="operator-tariffs__column column">
                                    <div class="column__item">1.</div>
                                    <div class="column__item">2.</div>
                                    <div class="column__item">3.</div>
                                    <div class="column__item">4.</div>
                                    <div class="column__item">5.</div>
                                    <div class="column__item">6.</div>
                                    <div class="column__item">7.</div>
                                    <div class="column__item">8.</div>
                                    <div class="column__item">9.</div>
                                    <div class="column__item">10.</div>
                                    <div class="column__item">11.</div>
                                    <div class="column__item">12.</div>
                                </div>
                            </div>
                            <div class="column__wrapper">
                                <div class="column__title">Наименование</div>
                                <div class="operator-tariffs__column column">
                                    <div class="column__item">Первый канал</div>
                                    <div class="column__item">россия 1</div>
                                    <div class="column__item">матч тв</div>
                                    <div class="column__item">россия 24</div>
                                    <div class="column__item">пятый канал</div>
                                    <div class="column__item">карусель</div>
                                    <div class="column__item">нтв</div>
                                    <div class="column__item">отр</div>
                                    <div class="column__item">россия к</div>
                                    <div class="column__item">тв центр</div>
                                    <div class="column__item">рен тв</div>
                                    <div class="column__item">спас</div>
                                </div>
                            </div>
                            <div class="column__wrapper">
                                <div class="column__title">Номер</div>
                                <div class="operator-tariffs__column column">
                                    <div class="column__item">13.</div>
                                    <div class="column__item">14.</div>
                                    <div class="column__item">15.</div>
                                    <div class="column__item">16.</div>
                                    <div class="column__item">17.</div>
                                    <div class="column__item">18.</div>
                                    <div class="column__item">19.</div>
                                    <div class="column__item">20.</div>
                                    <div class="column__item">21.</div>
                                    <div class="column__item">22.</div>
                                    <div class="column__item">23.</div>
                                    <div class="column__item"></div>
                                </div>
                            </div>
                            <div class="column__wrapper">
                                <div class="column__title">Наименование</div>
                                <div class="operator-tariffs__column column">
                                    <div class="column__item">стс</div>
                                    <div class="column__item">домашний</div>
                                    <div class="column__item">тв 3</div>
                                    <div class="column__item">Пятница</div>
                                    <div class="column__item">звезда</div>
                                    <div class="column__item">мир</div>
                                    <div class="column__item">тнт</div>
                                    <div class="column__item">муз тв</div>
                                    <div class="column__item">вести фм</div>
                                    <div class="column__item">радио маяк</div>
                                    <div class="column__item">радио россии</div>
                                    <div class="column__item"></div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- <div class="operator-tariffs__footer">
                            <div class="bottom-pannel">
                                <button class="bottom-pannel__item bottom-pannel__item-iptv">
                                    Пакет IP TV
                                </button>
                                <button class="bottom-pannel__item bottom-pannel__item-ook">
                                    Перечень ООК
                                </button>
                                <button class="bottom-pannel__item bottom-pannel__item-ktv">
                                    Пакет КТВ
                                </button>
                            </div>
                        </div> -->
                    </div>

                    

                    

                    
                </div>
                </div>
                
            </div>
        </section>

        <section class="operator-services">
            <div class="container">
                <div class="operator-services__wrapper">
                    <div class="operator-services__item">
                        <div class="operator-services__title">Интернет</div>
                        <div class="operator-services__text">Космическая скорость для современных пользователей</div>
                    </div>
                </div>
                <div class="operator-services__wrapper">
                    <div class="operator-services__item">
                        <div class="operator-services__title">Телефония</div>
                        <div class="operator-services__text">выгодные безлимитные тарифы </div>
                    </div>
                </div>
                <div class="operator-services__wrapper">
                    <div class="operator-services__item">
                        <div class="operator-services__title">Телевидение</div>
                        <div class="operator-services__text">более 200 современных популярных каналов</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="operator-advantages">
            <div class="operator-advantages__container container">
                <h2 class="operator-advantages__title">Преимущества работы с нами:</h2>
                <ui class="operator-advantages__list">
                    <li class="operator-advantages__item"><span class="operator-advantages__number">1.</span>
                        Оперативное устранение неполадок
                        любой сложности в&nbsp;течение 24&nbsp;часов
                    </li>
                    <li class="operator-advantages__item"><span class="operator-advantages__number">2.</span>
                        Оптимальное соотношение цены и&nbsp;качества услуг
                    </li>
                    <li class="operator-advantages__item"><span class="operator-advantages__number">3.</span>
                        Индивидуальные технические решения для каждого клиента
                        Высокопрофессиональная проектно-техническая и&nbsp;эксплуатационная команда компании
                        самостоятельно выполняет полный комплекс работ без привлечения субподрядных</li>
                </ui>
                <a href="requestConnect.php" class="operator-advantages__button">Подключиться</a>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="footer__row">
                    <div class="footer__img-wrapper">
                        <img class="footer__img" src="img/footer/logo.svg" alt="footer">
                    </div>

                    <ul class="footer-menu footer__top-menu">
                        <li class="footer-menu__link link-about">О компании</li>
                        <li class="footer-menu__link"><a href="contractor.php">Застройщикам</a></li>
                        <li class="footer-menu__link"><a href="contractor.php">Проекты</a></li>
                        <li class="footer-menu__link"><a href="operator.php">Тарифы</a></li>
                        <li class="footer-menu__link link-contacts">Контакты</li>
                    </ul>
                </div>
                <div class="footer__row">
                    <p class="footer__phone">Абонентский отдел с 09-00 до 21-00 ежедневно: <br>
                        <a href="">+7 (812) 385-96-00</a></p>
                    .<ul class="footer-menu footer__bottom-menu">
                        <li class="footer-menu__link"><a href="operator.php">Интернет</a></li>
                        <li class="footer-menu__link"><a href="operator.php">Телевидение</a></li>
                        <li class="footer-menu__link"><a href="operator.php">Телефония</a></li>
                        <li class="footer-menu__link button-site-creating">Спецпредложения</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container footer__row">
                    <p class='footer__date'>
                        © 2011-2021 ООО «Теликс»
                    </p>

                    <div class="footer__links">
                        <p>
                            Абонентский отдел:
                            <a href="tel:+78123859600">
                                +7 (812) 385-96-00
                            </a>
                        </p>
                        <p>
                            Разработано:
                            <span class="button-site-creating">
                                akrillstudio.ru
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="popup-contacts__fade">
        <div class="popup-contacts">
            <div class="popup-contacts__title"><span>Telix</span> контакты</div>
            <ul class="popup-contacts-list">
                <li class="popup-contacts-list__item"><span> Абонентский отдел</span> <a
                        href="tel:3859600">385-96-00</a></li>
                <li class="popup-contacts-list__item"><span> Техническая поддержка</span> <a
                        href="tel:3749574">374-95-74</a></li>
                <li class="popup-contacts-list__item"><span> Электронная почта</span> <a href="mailto:support@telixnet.ru">support@telixnet.ru</a></li>
            </ul>
            <div class="popup-contacts__links">
                <span class="popup-contacts__links-title">Разработка сайтов:</span>
                <a class="popup-contacts__links-href" href="mailto:akrillsm9003@gmail.com">akrillsm9003@gmail.com</a>
            </div>
        </div>
    </div>

    <div class="popup-site-creating__fade">
        <div class="popup-site-creating">
            <div class="popup-site-creating__title">
                Закажи <span>сайт</span> прямо сейчас!
            </div>
            <div class="popup-site-creating__description">
                Опытная <span>команда разработчиков</span>. Быстрое <span>создание сайтов</span> по шаблонам. Разработка
                <span>макетов</span>. создание
                авторской <span>графики</span> под ваш будущий сайт. использование <span>cms</span> или отдельного
                <span>сервера</span>. защита ваших <span>данных</span>.
                организация работы <span>базы данных</span>. оптимизация работы сайта под <span>мобильные
                    устройства</span>. верстка готовых
                лендингов
            </div>
            <div class="popup-site-creating__links">
                <div class="popup-site-creating__text">Связаться с нами:</div>
                <ul class="popup-site-creating__list">
                    <li class="popup-site-creating__item"><a href="" class="popup-site-creating__link"><img
                                class="popup-site-creating__img img-telegram"
                                src="img/popup-creating-site/telegram.svg" alt="telegram"></a></li>
                    <li class="popup-site-creating__item"><a href="" class="popup-site-creating__link"><img
                                class="popup-site-creating__img img-gmail" src="img/popup-creating-site/gmail.svg"
                                alt="gmail"></a></li>
                    <li class="popup-site-creating__item"><a href="" class="popup-site-creating__link"><img
                                class="popup-site-creating__img img-instagram"
                                src="img/popup-creating-site/instagram.svg" alt="instagram"></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="popup-about__fade">
        <div class="popup-about">
            <div class="popup-about__header">
                <div class="popup-about__title">Компания <span>Telix</span></div>
                <div class="popup-about__mini-title">Интернет с космической скоростью!<span> и многое другое</span>
                </div>
            </div>
            <div class="popup-about__wrapper">
                <div class="popup-about__description">
                    <span>Компания «Теликс»</span>, обладающая многолетним опытом в сфере успешного <span>создания и
                        эффективного управления</span> как собственных телекоммуникационных бизнес-проектов, так и
                    проектов для собственников ЖК
                </div>
                <div class="popup-about__advantages">
                    <div class="popup-about__advantage">
                        <span class="popup-about__number">50</span>
                        <p>более</p>
                        <small>ТВ каналов</small>

                    </div>
                    <div class="popup-about__advantage">
                        <span class="popup-about__number">36</span>
                        <p>успешно</p>
                        <small>выполненных <br> объектов</small>
                    </div>
                    <div class="popup-about__advantage">
                        <img src="img/popup-about/lahta.png" alt="Лахтра-центр">
                    </div>
                    <div class="popup-about__advantage">
                        <img src="img/popup-about/vtb.png" alt="Втб-арена">
                    </div>
                    <div class="popup-about__advantage">
                        <span class="popup-about__number">9</span>
                        <p>более</p>
                        <small>лет на рынке</small>
                    </div>
                </div>
            </div>
            <!-- <div class="popup-about__wrapper">
                <div class="popup-about__left-column">
                    <div class="popup-about__text">
                        <p>ООО "Теликс" - один из известных операторов кабельного телевидения и доступа в Интернет в
                            Санкт-Петербурге.</p>
                        <p>Мы постоянно работаем над тем, чтобы каждый мог найти для себя интересные телеканалы и
                            передачи.</p>
                    </div>
                </div>
                <div class="popup-about__right-column">
                    <img class="img-rocket" src="img/popup-about/rocket.png" alt="">
                    <button class="popup-about__button">Узнать больше!</button>
                </div>
            </div> -->
            <div class="mobile-popup-about__content">
                <ul class="popup-about-list">
                    <li class="popup-about__item">Услуги оператора</li>
                    <li class="popup-about__item">Обслуживание систем</li>
                    <li class="popup-about__item">Подрядчик</li>
                </ul>
                <div class="mobile-popup-about__wrapper">
                    <img class="img-rocket" src="img/popup-about/rocket.png" alt="">
                    <button class="popup-about__button">Узнать больше</button>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-how-to-pay__fade">
        <div class="popup-how-to-pay">
            <div class="popup-how-to-pay__header">
                <div class="popup-how-to-pay__title">
                    как оплатить?
                </div>
                <img class="popup-how-to-pay__img" src="img/popup-how-to-pay/how-to-pay.svg" alt="как заплатить?">
            </div>
            <div class="popup-how-to-pay__content">
                <div class="popup-how-to-pay__attention">
                    <div class="popup-how-to-pay__attention-title">Уважаемые абоненты!</div>
                    <div class="popup-how-to-pay__attention-text">При оплате услуг через терминалы,
                        просим Вас быть внимательными и
                        оплачивать услуги ООО "Теликс" только
                        через терминалы банков СДМ(Плат-Форма),
                        ПСКБ, Сбербанк с использованием уникального
                        номера договора в формате набора цифр,
                        разделенных тире 0000-000-000-000</div>
                </div>
                <ul class="popup-how-to-pay__list">
                    <li class="popup-how-to-pay__item">
                        <div class="popup-how-to-pay__item-title">1. Оплата по банковским картам</div>
                        <div class="popup-how-to-pay__item-description">
                            <span class="popup-how-to-pay__accent">Оплата по картам</span> <br>
                            без комиссии, платеж зачисляется <br>
                            на лицевой счет в течение нескольких минут
                        </div>
                    </li>
                    <li class="popup-how-to-pay__item">
                        <div class="popup-how-to-pay__item-title">2. Терминалы оплаты ПЛАТ-ФОРМА</div>
                        <div class="popup-how-to-pay__item-description">
                            оплата без комиссии банковскими картами и наличными <br>
                            <span class="popup-how-to-pay__accent">Спиcок терминалов</span> <br>
                            ближайшие терминалы ПЛАТ-ФОРМА находятся по адресам: <br>
                            Выборгское шоссе, д.17 корпус 3(холл), Хошимина ул. д.16 <br>
                            (ресепшенапарт-отеля), Приморский пр. 52-1 (офис продаж <br>
                            Пионер), платеж зачисляется на лицевой счет в течение <br>
                            нескольких минут
                        </div>
                    </li>
                    <li class="popup-how-to-pay__item">
                        <div class="popup-how-to-pay__item-title">3. Терминалы оплаты ПСКБ</div>
                        <div class="popup-how-to-pay__item-description"> <span class="popup-how-to-pay__accent">Спиcок
                                терминалов</span> <br>
                            ближайший круглосуточный терминал ПСКБ находится в холле корпуса 1 <br> (средняя высотка,
                            напротив 3 корпуса) по Выборгскому шоссе, д.17; <br>
                            во дворе дома по Просвещения д.15; в офисе Управляющей Компании на<br> Приморском пр-те
                            52,Д<br>
                            при оплате через терминал взымается комиссия
                            платеж зачисляется на лицевой счет в течение нескольких минут</div>
                    </li>
                    <li class="popup-how-to-pay__item">
                        <div class="popup-how-to-pay__item-title">4. С помощью web кошелька ПСКБ</div>
                        <div class="popup-how-to-pay__item-description">Подробнее ознакомится с продуктом и завести свой
                            кошелек можно на <br> <span class="popup-how-to-pay__accent">сайте</span>
                            можно использовать в любое удобное время суток, если у вас<br> положительный баланс, или вам
                            предоставлен "обещанный платеж",<br>
                            платеж зачисляется на лицевой счет в течение нескольких минут</div>
                    </li>
                    <li class="popup-how-to-pay__item">
                        <div class="popup-how-to-pay__item-title">5. Перевод на расчётный счёт</div>
                        <div class="popup-how-to-pay__item-description">

                            Реквизиты для оплаты <br>
                            можно использовать при оплате через интернет-банкинг, если у вас <br> положительный баланс,
                            или вам предоставлен "обещанный платеж" <br>
                            платеж зачисляется на следующий рабочий день, в назначении платежа<br> необходимо указать
                            номер договора.
                        </div>
                    </li>
                    <li class="popup-how-to-pay__item">
                        <div class="popup-how-to-pay__item-title">6. В любом отделении Сбербанка в Санкт-Петербурге по
                            обслуживанию физических лиц</div>
                        <div class="popup-how-to-pay__item-description">
                            - через операциониста по системе "Город", для этого вам необходимо <br> назвать свои Ф.И.О.
                            и
                            номер договора.<br>
                            - через операциониста по квитанции <span class="popup-how-to-pay__accent">Скачать</span>
                            <br>
                            - через терминал оплаты услуг, поиск организации можно выполнить набрав<br> на экранной
                            клавиатуре наименование "Теликс" или по ИНН : 7841449260,<br>
                            далее необходимо набрать номер договора в формате 0000-000-000-000 (все<br> цифры и тире
                            набираются на экранной клавиатуре), период оплаты и баланс<br> по договору появляются
                            автоматически, если нет необходимости, то период<br> оплаты оставляем неизменным или меняем
                            (например 06.2018 - означает<br> оплату за июнь 2018 года), сумму оплаты необходимо набирать
                            на
                            цифровом<br> наборнике самого терминала. Отображающийся по договору баланс может<br> быть не
                            достоверным т.к. обновляется один раз в сутки, точный баланс по<br> своему договору Вы
                            можете
                            узнать в личном кабинете, см. раздел сайта<br> Личный кабинет. <br>
                            <span class="popup-how-to-pay__accent">Адреса отделений Сбербанка</span> <br>
                            платежи через Сбербанк по системе "Город" и через терминал принимаются<br> без комиссии и
                            зачисляются на следующий рабочий день,<br>
                            в случае, если оплата услуг производится по реквизитам Теликс через<br> операциониста (без
                            указания номера договора и не по системе "Город"), за<br> платеж может взыматься комиссия,
                            размер комиссии уточняйте у <br> операциониста.
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

 
    
    <div class="popup-callback-layer"></div>
        <div class="popup-callback">
            <div class="popup-callback__container">
                <div class="popup-callback__title-wrapper">
                    <h2 class="popup-callback__title">Закажите обратный звонок</h2>
                    <img src="img/popup-callback/phone.png" alt="phone" class="popup-callback__icon">
                </div>
                <form action="#" class="popup-callback__form">
                    <label for="" class="popup-callback__label">
                        <h3 class="popup-callback__label-title">Ваше имя</h3>
                        <input type="text" class="popup-callback__input popup-callback__input-name">
                    </label>
                    <label for="" class="popup-callback__label">
                        <h3 class="popup-callback__label-title">Ваша фамилия</h3>
                        <input type="text" class="popup-callback__input popup-callback__input-surname">
                    </label>
                    <label for="" class="popup-callback__label">
                        <h3 class="popup-callback__label-title">Номер телефона</h3>
                        <input type="text" class="popup-callback__input popup-callback__input-phone">
                    </label>
                    <input type="button" class="popup-callback__submit" value="Заказать">
                </form>
            </div>
        </div>
    
        <div class="popup-callback-thx">
            <div class="popup-callback-thx__container">
                <h2 class="popup-callback-thx__text">Мы свяжемся с вами в ближайшее время</h2>
                <div class="popup-callback-thx__button">ок</div>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="js/jquery-scripts.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/masks.js"></script>
    <!-- <script src='js/scripts.js'></script> -->
    
</body>

</html>