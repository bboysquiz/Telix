<?php
	require "db.php";
	$data = $_POST;

    // $contract = 'contract';
    // $usersfields = R::getAll('SELECT * FROM '.$contract);
    //     echo '<pre>';
    //     print_r($usersfields); 

    // $charge = 'charge';
    // $chargefields = R::getAll('SELECT * FROM '.$charge);
    //     echo '<pre>';
    //     print_r($chargefields); 

    // $service = 'service';
    // $servicefields = R::getAll('SELECT * FROM '.$service);
    //     echo '<pre>';
    //     print_r($servicefields); 

    // $history = 'history';
    // $historyfields = R::getAll('SELECT * FROM '.$history);
    //     echo '<pre>';
    //     print_r($historyfields); 

    // $payments = 'payments';
    // $paymentsfields = R::getAll('SELECT * FROM '.$payments);
    //     echo '<pre>';
    //     print_r($paymentsfields); 
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>telix</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cuprum:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
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
    </header>
    <div class="mainScreen">
        <div class="container mainScreen__container mainScreen__container-profile">
        <a href="logout.php" class="mainScreen__login login"><img class="login__img" src="img/mainScreen/icon-login.svg" alt="entrance">
                Выйти</a>
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

    <main class="main">
        <section class="profile">
            <div class="profile__container">
                <div class="profile__title-wrapper">
                    <h2 class="profile__title">
                        Личный кабинет
                    </h2>
                </div>
                <div class="profile__info-block">
                    <p class="profile__info-paragraph">Номер вашего договора: <span class="profile__span-number">
                        <?php 
                            $users = R::load('contract', $_SESSION['logged_id']);
                            echo $users->cid;
                        ?>
                    </span></p>
                    <p class="profile__info-paragraph">ФИО: <span class="profile__span-name">
                        <?php
                            $users = R::load('contract', $_SESSION['logged_id']);
                            echo $users->name;
                        ?>
                    </span></p>
                    <p class="profile__info-paragraph">Контактный номер телефона: <span class="profile__span-phone">
                        <?php
                            $users = R::load('contract', $_SESSION['logged_id']);
                            echo $users->phone2;
                        ?>
                    </span></p>
                    <p class="profile__info-paragraph">Адрес подключения: <span class="profile__span-adres">
                        <?php
                            $users = R::load('contract', $_SESSION['logged_id']);
                            echo $users->street;
                            echo ' ';
                            echo $users->dom;
                            echo ' ';
                            echo $users->korpus;
                            echo ' ';
                            echo $users->kvartira;
                        ?>
                    </span></p>
                    <p class="profile__info-paragraph">Ваш баланс: <span class="profile__span-bill">
                        <?php
                            $users = R::load('contract', $_SESSION['logged_id']);
                            echo $users->balance;
                        ?>
                    </span></p>
                    <p class="profile__info-paragraph">Текущий статус: <span class="profile__span-status">
                        <?php
                            $users = R::load('contract', $_SESSION['logged_id']);
                            if ($users->active == 0){
                                echo 'Неактивен';
                            }else if($users->active == 1){
                                echo 'Активен';
                            }else if($users->active == 2){
                                echo 'Приостановка обслуживания';
                            }else if($users->active == 3){
                                echo 'Полная остановка';
                            }else if($users->active == 10){
                                echo 'Архив';
                            }else if($users->active == 7){
                                echo 'Обещанный платёж';
                            }else if($users->active == 8){
                                echo 'Обещанный платёж не погашен';
                            }
                        ?>
                    </span></p>
                </div>
                
                <h3 class="profile__tariff-block-title">Список каналов пакетов: <a href="IPTV.php" class="profile__tariff-block-title_blue">IP TV</a> и  <a href="KTV.php" class="profile__tariff-block-title_blue">КТВ</a></h3>    
                <div class="profile__tariff-block">
                        <div class="operator-tariffs__tab-content operator-tariffs__tab-content-tv_active">
                            <div class="profile-tariffs__wrapper">
                                <div class="column__wrapper profile-column__wrapper">
                                    <div class="column__title">Услуга</div>
                                    <div class="operator-tariffs__column column">
                                        <div class="column__item">Доступ в интернет</div>
                                        <div class="column__item">Доп. сервисы</div>
                                        <div class="column__item">Телефония</div>
                                        <div class="column__item">IPTV</div>
                                        <div class="column__item">Кабельное TV</div>
                                    </div>
                                </div>
                                <div class="column__wrapper profile-column__wrapper">
                                    <div class="column__title">Тариф</div>
                                    <div class="operator-tariffs__column column">
                                        <div class="column__item"><?php echo $users->tarif_id ?></div>
                                        <div class="column__item"><?php echo $users->tarif_iptv ?></div>
                                        <div class="column__item"><?php echo $users->tarif_phone ?></div>
                                        <div class="column__item"><?php echo $users->tarif_moovi ?></div>
                                        <div class="column__item"><?php echo $users->tarif_tv ?></div>
                                    </div>
                                </div>
                                <div class="column__wrapper profile-column__wrapper">
                                    <div class="column__title">стоимость</div>
                                    <div class="operator-tariffs__column column">
                                        <div class="column__item">0 руб.</div>
                                        <div class="column__item">0 руб.</div>
                                        <div class="column__item">0 руб.</div>
                                        <div class="column__item">0 руб.</div>
                                        <div class="column__item">0 руб.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                    

                <div class="profile__buttons-block-1">
                    <div class="profile__button profile__button-suspenseService">Приостановка обслуживания</div>
                    <div class="profile__button profile__button-stopService">Полная остановка</div>
                    <a href="changePassword.php" class="profile__button">Поменять пароль</a>
                </div>
                <div class="profile__buttons-block-2">
                    <a href="historyPayment.php" class="profile__button">История платежей</a>
                    <a href="additional.php" class="profile__button">Дополнительно</a>
                    <a href="changeAdres.php" class="profile__button">Поменять адрес</a>
                </div>
            </div>
        </section>
    </main>

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
                    <a href="#">+7 (812) 385-96-00</a></p>
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

    <div class="popup-stopService__layer"></div>
    <div class="popup-stopService">
        <div class="popup-stopService__container">
            <h3 class="popup-stopService__text">
            Вы уверены, что хотите полностью остановить обслуживание?
            </h3>
            <div class="popup-stopService__button-wrapper">
                <button class="popup-stopService__button popup-stopService__button-yes">Да</button>
                <button class="popup-stopService__button popup-stopService__button-no">Нет</button>
            </div>
        </div>
    </div>
    <div class="popup-stopService__access">
        <div class="popup-stopService__container">
            <h3 class="popup-stopService__text">
                Обслуживание успешно остановлено!
            </h3>
            <button class="popup-stopService__button popup-stopService__button-ok">Ок</button>
        </div>
    </div>
    
    <div class="popup-suspenseService__layer"></div>
    <div class="popup-suspenseService">
        <div class="popup-suspenseService__container">
            <h3 class="popup-suspenseService__text">
                Вы уверены, что хотите приостановить обслуживание?
            </h3>
            <div class="popup-suspenseService__button-wrapper">
                <button class="popup-suspenseService__button popup-suspenseService__button-yes">Да</button>
                <button class="popup-suspenseService__button popup-suspenseService__button-no">Нет</button>
            </div>
        </div>
    </div>
    <div class="popup-suspenseService__access">
        <div class="popup-suspenseService__container">
            <h3 class="popup-suspenseService__text">
                Обслуживание успешно приостановлено!
            </h3>
            <button class="popup-suspenseService__button popup-suspenseService__button-ok">Ок</button>
        </div>
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
                    <li class="popup-site-creating__item"><a href="#" class="popup-site-creating__link"><img
                                class="popup-site-creating__img img-telegram"
                                src="img/popup-creating-site/telegram.svg" alt="telegram"></a></li>
                    <li class="popup-site-creating__item"><a href="#" class="popup-site-creating__link"><img
                                class="popup-site-creating__img img-gmail" src="img/popup-creating-site/gmail.svg"
                                alt="gmail"></a></li>
                    <li class="popup-site-creating__item"><a href="#" class="popup-site-creating__link"><img
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
                        <span class="popup-about__number">0</span>
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
            <div class="popup-about__wrapper">
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
                    <button class="popup-about__button">Узнать больше</button>
                </div>
            </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="js/masks.js"></script>
    <script src="js/jquery-scripts.js"></script>

    <!-- <script src='js/scripts.js'></script> -->
</body>
</html>