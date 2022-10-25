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
                <img src="img/mainScreen/logo.svg" alt="logo" class="logo__img">
            </div>
            <form class="search" action="#">
                <img class="search__img" src="img/mainScreen/search.svg" alt="search">
                <input class="search__input" type="search" placeholder="Поиск:">
            </form>


            <!-- <form class="mobile-search search" action="">
                <img class="search__img" src="img/mainScreen/search.svg" alt="">
                <input class="search__input" type="search" placeholder="Поиск:">
            </form> -->

            <div class="how-to-pay">
                <img class="how-to-pay__img" src="img/mainScreen/question.svg" alt="question">
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
                    <li class="menu__item"><a class="menu__link" href="operator.php">
                            <img class="menu__img" src="img/mainScreen/menu/operator.svg" alt="">
                            <img class="menu__img_hover" src="img/mainScreen/menu/operator.svg" alt="">
                            <span class="menu__item-span">Оператор</span></a></li>
                    <li class="menu__item"><a class="active menu__link_active" href="contractor.php">
                            <img class="menu__img" src="img/mainScreen/menu/contractor-active.svg" alt="">
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

        <section class="contractor-services">
            <div class="section-title container">
                <h2 class="section-title__text">услуги подрядчика:</h2>
                <!-- <button class="section-title__button">Сотрудничать!</button> -->
            </div>
            <div class="contractor-services__slider container">
                <div class="contractor-services-item bg-proecting">
                    <div class="contractor-services__content">
                        <div class="contractor-services__title">
                            проектирование слаботочных и <br>
                            телекомуникационных систем
                        </div>
                        <div class="contractor-services__text">услуга застройщикам по выдаче и <br>
                            реализации тех. условий для <br>
                            успешной сдачи объектов <br>
                            строительства согласующим <br>
                            органам</div>
                        <button class="contractor-services__button callback-popup-button">Сотрудничать</button>
                    </div>
                </div>
                <div class="contractor-services-item bg-installation">
                    <div class="contractor-services__content">
                        <div class="contractor-services__title">монтаж слаботочных и <br>
                            телекомуникационных систем под ключ</div>
                        <div class="contractor-services__text">Для жилых комплексов, не жилых <br>
                            помещений, бизнес-центров, <br>
                            производственных зданий <br>
                            и тд.</div>
                        <button class="contractor-services__button callback-popup-button">Сорудничать</button>
                    </div>
                </div>
                <div class="contractor-services-item bg-expluatation">
                    <div class="contractor-services__content">
                        <div class="contractor-services__title">обслуживание слаботочных и <br>
                            телекомуникационных систем</div>
                        <div class="contractor-services__text">Для жилых комплексов, не жилых <br>
                            помещений, бизнес-центров, <br>
                            производственных зданий <br>
                            и тд.</div>
                        <button class="contractor-services__button callback-popup-button">Сотрудничать</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="contractor-about">
            <div class="container contractor-about__container">
                <div class="contractor-about__wrapper">
                    <p class="contractor-about__text">
                        <span>Компания «Теликс»</span>, обладающая многолетним  опытом в сфере успешного
                        <span>создания и 
                            эффективного управления</span> как собственных  телекоммуникационных бизнес-проектов,
                        так и 
                        проектов для собственников ЖК, зданий/сооружений и холдинговых структур, <span>предлагает
                            Вам</span>
                        рассмотреть <span>возможность сотрудничества</span> в сфере проектирования, строительства и
                        
                        эксплуатации <span>слаботочных систем.</span>
                    </p>
                    <button class="contractor-about__button link-about">
                        Узнать больше <span>о компании</span>
                    </button>
                </div>
            </div>
        </section>
        <section class="contractor-projects" id='contractor-projects'>
            <div class="container-slider contractor-projects__header">
                <h2 class="contractor-projects__title ">Наши проекты:</h2>
                <!-- <div class="button-group">
                    <button class="button-prev">назад</button>
                    <button class="button-next">вперед</button>
                </div> -->
            </div>
            <div class="container-slider">
                <div class="contractor-projects-slider owl-carousel owl-theme">
                    <div class="contractor-projects-item">
                        <img class="contractor-projects-item__img" src="img/contractor-projects/life-primorskaia.jpg" alt="">
                        <div class="contractor-projects-item__content">
                            <h3 class="contractor-projects-item__title">Life-Приморская</h3>
                            <p class="contractor-projects-item__data-since">начало контракта: 2011.</p>
                            <div class="contractor-projects-item__button button-served">Завершен</div>
                        </div>
                    </div>
                    <div class="contractor-projects-item">
                        <img class="contractor-projects-item__img" src="img/contractor-projects/life-lesnaya.jpg" alt="">
                        <div class="contractor-projects-item__content">
                            <h3 class="contractor-projects-item__title">LIFE-лесная</h3>
                            <p class="contractor-projects-item__data-since">начало контракта: 2011.</p>
                            <div class="contractor-projects-item__button button-served">Завершен</div>
                        </div>
                    </div>
                    <div class="contractor-projects-item">
                        <img class="contractor-projects-item__img" src="img/contractor-projects/sheraton.jpg" alt="">
                        <div class="contractor-projects-item__content contractor-projects-item__content_small">
                            <h3 class="contractor-projects-item__title">«Шератон Палас <br> Отель» </h3>
                            <p class="contractor-projects-item__data-since">начало контракта: 2010.</p>
                            <div class="contractor-projects-item__button button-completed">Обслуживается</div>
                        </div>
                    </div>
                    <div class="contractor-projects-item">
                        <img class="contractor-projects-item__img" src="img/contractor-projects/shuvalovsky-visoti.jpg" alt="">
                        <div class="contractor-projects-item__content contractor-projects-item__content_small">
                            <h3 class="contractor-projects-item__title">ЖК Шуваловские <br>
                                высоты</h3>
                            <p class="contractor-projects-item__data-since">начало контракта: 2008г.</p>
                            <div class="contractor-projects-item__button button-served">Завершен</div>
                        </div>
                    </div>
                    <div class="contractor-projects-item">
                        <img class="contractor-projects-item__img" src="img/contractor-projects/vkus-wheel.png" alt="">
                        <div class="contractor-projects-item__content">
                            <h3 class="contractor-projects-item__title">Магазин ВкусВилл</h3>
                            <p class="contractor-projects-item__data-since">начало контракта: 2010г.</p>
                            <div class="contractor-projects-item__button button-completed">Обслуживается</div>
                        </div>
                    </div>
                    <div class="contractor-projects-item">
                        <img class="contractor-projects-item__img" src="img/contractor-projects/cdek.jpg" alt="">
                        <div class="contractor-projects-item__content contractor-projects-item__content_small">
                            <h3 class="contractor-projects-item__title">Транспортная <br> компания СДЭК</h3>
                            <p class="contractor-projects-item__data-since">начало контракта: 2010г.</p>
                            <div class="contractor-projects-item__button button-completed">Обслуживается</div>
                        </div>
                    </div>
                    <div class="contractor-projects-item">
                        <img class="contractor-projects-item__img" src="img/contractor-projects/peco.jpg" alt="">
                        <div class="contractor-projects-item__content">
                            <h3 class="contractor-projects-item__title">Офис PECO</h3>
                            <p class="contractor-projects-item__data-since">начало контракта: 2010г.</p>
                            <div class="contractor-projects-item__button button-completed">Обслуживается</div>
                        </div>
                    </div>
                    <div class="contractor-projects-item">
                        <img class="contractor-projects-item__img" src="img/contractor-projects/apart-Hoshimina.jpg" alt="">
                        <div class="contractor-projects-item__content contractor-projects-item__content_small">
                            <h3 class="contractor-projects-item__title">Апарт-Отель на <br> Хошимина</h3>
                            <p class="contractor-projects-item__data-since">начало контракта: 2010г.</p>
                            <div class="contractor-projects-item__button button-completed">Обслуживается</div>
                        </div>
                    </div>
                    <div class="contractor-projects-item">
                        <img class="contractor-projects-item__img" src="img/contractor-projects/administration-kalin.jpg" alt="">
                        <div class="contractor-projects-item__content contractor-projects-item__content_small">
                            <h3 class="contractor-projects-item__title">Администрация <br> Калининского района</h3>
                            <p class="contractor-projects-item__data-since">начало контракта: 2010г.</p>
                            <div class="contractor-projects-item__button button-completed">Обслуживается</div>
                        </div>
                    </div>
                    <div class="contractor-projects-item">
                        <img class="contractor-projects-item__img" src="img/contractor-projects/first-line.jpg" alt="">
                        <div class="contractor-projects-item__content">
                            <h3 class="contractor-projects-item__title">ЖК “Первая линия”</h3>
                            <p class="contractor-projects-item__data-since">начало контракта: 2010г.</p>
                            <div class="contractor-projects-item__button button-completed">Обслуживается</div>
                        </div>
                    </div>
                    <div class="contractor-projects-item">
                        <img class="contractor-projects-item__img" src="img/contractor-projects/Lembolovo-park.jpg" alt="">
                        <div class="contractor-projects-item__content">
                            <h3 class="contractor-projects-item__title">Лемболово парк</h3>
                            <p class="contractor-projects-item__data-since">начало контракта: 2010г.</p>
                            <div class="contractor-projects-item__button button-completed">Обслуживается</div>
                        </div>
                    </div>
                    <div class="contractor-projects-item">
                        <img class="contractor-projects-item__img" src="img/contractor-projects/marina-gorka.jpg" alt="">
                        <div class="contractor-projects-item__content">
                            <h3 class="contractor-projects-item__title">Марьина горка</h3>
                            <p class="contractor-projects-item__data-since">начало контракта: 2010г.</p>
                            <div class="contractor-projects-item__button button-completed">Обслуживается</div>
                        </div>
                    </div>
                    <div class="contractor-projects-item">
                        <img class="contractor-projects-item__img" src="img/contractor-projects/siemens-office.jpg" alt="">
                        <div class="contractor-projects-item__content contractor-projects-item__content_small">
                            <h3 class="contractor-projects-item__title">Офис компании <br> SIEMENS</h3>
                            <p class="contractor-projects-item__data-since">начало контракта: 2010г.</p>
                            <div class="contractor-projects-item__button button-completed">Обслуживается</div>
                        </div>
                    </div>
                    <div class="contractor-projects-item">
                        <img class="contractor-projects-item__img" src="img/contractor-projects/YES-business-center.jpg" alt="">
                        <div class="contractor-projects-item__content contractor-projects-item__content_small">
                            <h3 class="contractor-projects-item__title">Бизнес-центр "YES"</h3>
                            <p class="contractor-projects-item__data-since">начало контракта: 2010г.</p>
                            <div class="contractor-projects-item__button button-completed">Обслуживается</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="footer__row">
                    <div class="footer__img-wrapper">
                        <img class="footer__img" src="img/footer/logo.svg" alt="">
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
                           <span class="popup-how-to-pay__accent">Оплата по картам</span>  <br>
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
                        <div class="popup-how-to-pay__item-description"> <span class="popup-how-to-pay__accent">Спиcок терминалов</span> <br>
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
                            кошелек можно на <br>  <span class="popup-how-to-pay__accent">сайте</span>
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
                            - через операциониста по системе "Город", для этого вам необходимо <br> назвать свои Ф.И.О. и
                            номер договора.<br>
                            - через операциониста по квитанции  <span class="popup-how-to-pay__accent">Скачать</span> <br>
                            - через терминал оплаты услуг, поиск организации можно выполнить набрав<br> на экранной
                            клавиатуре наименование "Теликс" или по ИНН : 7841449260,<br>
                            далее необходимо набрать номер договора в формате 0000-000-000-000 (все<br> цифры и тире
                            набираются на экранной клавиатуре), период оплаты и баланс<br> по договору появляются
                            автоматически, если нет необходимости, то период<br> оплаты оставляем неизменным или меняем
                            (например 06.2018 - означает<br> оплату за июнь 2018 года), сумму оплаты необходимо набирать на
                            цифровом<br> наборнике самого терминала. Отображающийся по договору баланс может<br> быть не
                            достоверным т.к. обновляется один раз в сутки, точный баланс по<br> своему договору Вы можете
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
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="js/jquery-scripts.js"></script>
    <script src="js/slick.min.js"></script>
    <!-- <script src='/js/scripts.js'></script> -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/masks.js"></script>
    <script>
        function postsCarousel() {
            var checkWidth = $(window).width();
            var owlPost = $(".contractor-services__slider");
            if (checkWidth > 767) {
                if (typeof owlPost.data('owl.carousel') != 'undefined') {
                    owlPost.data('owl.carousel').destroy();
                }
                owlPost.removeClass('owl-carousel');
            } else if (checkWidth < 768) {
                owlPost.addClass('owl-carousel');
                owlPost.owlCarousel({
                    items: 2,
                    slideSpeed: 500,
                    animateOut: 'fadeOut',
                    autoplay: true,
                    autoplaySpeed: 3000,
                    autoplayTimeout: 3000,
                    dots: false,
                    loop: true,
                    autoWidth: true,
                    margin: 20,
                    responsive: {
                        0: {
                            items: 2
                        }, //при ширине окна < 992 отображать 1 элемент

                        385: {
                            items: 2,
                            margin: 20
                        } //при ширине окна > 992 отображать 3 элемент

                    }
                });
            }
        }

        postsCarousel();
        $(window).resize(postsCarousel);
    </script>
    <script>
        var owl = $('.contractor-projects-slider');
        owl.owlCarousel({
            items: 5,
            slideSpeed: 3500,
            animateOut: 'fadeOut',
            autoplay : true,
            autoplaySpeed: 1000,
            autoplayTimeout: 3500,
            dots: false,
            autoWidth: true,
            loop: true,
            margin: 20,
            responsive: {
                0: {
                    items: 2
                }, 

                576: {
                    items: 3
                }, 

                768: {
                    items: 4,
                },
                992: {
                    items: 5
                } 
            }
        });
        // Go to the next item
        $('.button-next').click(function () {
            owl.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('.button-prev').click(function () {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl.trigger('prev.owl.carousel', [300]);
        })
    </script>
</body>

</html>