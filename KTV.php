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
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cuprum:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
</head>
<body>
<?php if($_SESSION['logged_user']) :?>
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

    <section class="content-KTV">
        <div class="content-KTV__container">
            <div class="content-KTV__text-block">
                <p class="content-KTV__text">
                    Уважаемые абоненты, компания Теликс по существующей домовой сети кабельного телевидения предоставляет более 200-т каналов.
                </p>
                <p class="content-KTV__text">
                    Базовый открытый пакет «Домашний» включает более 130-ти цифровых каналов, в т.ч. HD-каналы.
                </p>
                <p class="content-KTV__text">
                    Вы можете самостоятельно настроить ваш ТВ выполнив полную автоматическую настройку.
                    Для приема цифровых каналов ваш телевизионный приемник должен обладать цифровым тюнером стандарта DVB-C.
                </p>
                <p class="content-KTV__text">
                    Всю дополнительную информацию вы можете получить в центре по обслуживанию абонентов по телефону <span class="content-KTV__text-blue">385-96-00.</span>
                </p>
                <p class="content-KTV__text">
                    Для просмотра дополнительных цифровых каналов Вам необходимо заключить индивидуальный договор.
                </p>
            </div>
            <h2 class="content-KTV__title">Список каналов кабельного ТВ</h2>

            <div class="operator-tariffs__tab-content content-KTV__table">
                        <div class="operator-tariffs__wrapper content-KTV__table-wrapper">
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
                                    <div class="column__item">24.</div>
                                    <div class="column__item">25.</div>
                                    <div class="column__item">26.</div>
                                    <div class="column__item">27.</div>
                                    <div class="column__item">28.</div>
                                    <div class="column__item">29.</div>
                                    <div class="column__item">30.</div>
                                    <div class="column__item">31.</div>
                                    <div class="column__item">32.</div>
                                    <div class="column__item">33.</div>
                                    <div class="column__item">34.</div>
                                    <div class="column__item">35.</div>
                                    <div class="column__item">36.</div>
                                    <div class="column__item">37.</div>
                                    <div class="column__item">38.</div>
                                    <div class="column__item">39.</div>
                                    <div class="column__item">40.</div>
                                    <div class="column__item">41.</div>
                                    <div class="column__item">42.</div>
                                    <div class="column__item">43.</div>
                                    <div class="column__item">44.</div>
                                    <div class="column__item">45.</div>
                                    <div class="column__item">46.</div>
                                    <div class="column__item">47.</div>
                                    <div class="column__item">48.</div>
                                    <div class="column__item">49.</div>
                                    <div class="column__item">50.</div>
                                    <div class="column__item">51.</div>
                                    <div class="column__item">52.</div>
                                    <div class="column__item">53.</div>
                                    <div class="column__item">54.</div>
                                    <div class="column__item">55.</div>
                                    <div class="column__item">56.</div>
                                    <div class="column__item">57.</div>
                                    <div class="column__item">58.</div>
                                    <div class="column__item">59.</div>
                                    <div class="column__item">60.</div>
                                    <div class="column__item">61.</div>
                                    <div class="column__item">62.</div>
                                    <div class="column__item">63.</div>
                                    <div class="column__item">64.</div>
                                    <div class="column__item">65.</div>
                                    <div class="column__item">66.</div>
                                    <div class="column__item">67.</div>
                                    <div class="column__item">68.</div>
                                    <div class="column__item">69.</div>
                                    <div class="column__item">70.</div>
                                    <div class="column__item">71.</div>
                                    <div class="column__item">72.</div>
                                    <div class="column__item">73.</div>
                                    <div class="column__item">74.</div>
                                    <div class="column__item">75.</div>
                                    <div class="column__item">76.</div>
                                    <div class="column__item">77.</div>
                                    <div class="column__item">78.</div>
                                    <div class="column__item">79.</div>
                                    <div class="column__item">80.</div>
                                    <div class="column__item">81.</div>
                                    <div class="column__item">82.</div>
                                    <div class="column__item">83.</div>
                                    <div class="column__item">84.</div>
                                    <div class="column__item">85.</div>
                                    <div class="column__item">86.</div>
                                    <div class="column__item">87.</div>
                                    <div class="column__item">88.</div>
                                    <div class="column__item">89.</div>
                                    <div class="column__item">90.</div>
                                    <div class="column__item">91.</div>
                                    <div class="column__item">92.</div>
                                    <div class="column__item">93.</div>
                                    <div class="column__item">94.</div>
                                    <div class="column__item">95.</div>
                                    <div class="column__item">96.</div>
                                    <div class="column__item">97.</div>
                                    <div class="column__item">98.</div>
                                    <div class="column__item">99.</div>
                                    <div class="column__item">100.</div>
                                    <div class="column__item">101.</div>
                                    <div class="column__item">102.</div>
                                    <div class="column__item">103.</div>
                                    <div class="column__item">104.</div>
                                    <div class="column__item">105.</div>
                                    <div class="column__item">106.</div>
                                    <div class="column__item">107.</div>
                                    <div class="column__item">108.</div>
                                    <div class="column__item">109.</div>
                                    <div class="column__item">110.</div>
                                    <div class="column__item">111.</div>
                                    <div class="column__item">112.</div>
                                    <div class="column__item">113.</div>
                                    <div class="column__item">114.</div>
                                    <div class="column__item">115.</div>
                                    <div class="column__item">116.</div>
                                    <div class="column__item">117.</div>
                                    <div class="column__item">118.</div>
                                    <div class="column__item">119.</div>
                                    <div class="column__item">120.</div>
                                </div>
                            </div>
                            <div class="column__wrapper">
                                <div class="column__title content-KTV__column-title">КТВ</div>
                                <div class="operator-tariffs__column column content-KTV__column">
                                    <div class="column__item">Первый канал</div>
                                    <div class="column__item">россия 1(местный)</div>
                                    <div class="column__item">НТВ (местный)</div>
                                    <div class="column__item">5 канал</div>
                                    <div class="column__item">россия-культура</div>
                                    <div class="column__item">россия 24</div>
                                    <div class="column__item">карусель</div>
                                    <div class="column__item">отр</div>
                                    <div class="column__item">тв-центр</div>
                                    <div class="column__item">рен-тв</div>
                                    <div class="column__item">спас</div>
                                    <div class="column__item">стс</div>
                                    <div class="column__item">домашний</div>
                                    <div class="column__item">тв3</div>
                                    <div class="column__item">пятница</div>
                                    <div class="column__item">звезда</div>
                                    <div class="column__item">мир</div>
                                    <div class="column__item">ТНТ</div>
                                    <div class="column__item">МУЗ ТВ</div>
                                    <div class="column__item">Санкт-Петербург</div>
                                    <div class="column__item">78</div>
                                    <div class="column__item">ЛЕНТВ24</div>
                                    <div class="column__item">Россия 1</div>
                                    <div class="column__item">НТВ</div>
                                    <div class="column__item">8 канал</div>
                                    <div class="column__item">Мультиландия</div>
                                    <div class="column__item">7 TV</div>
                                    <div class="column__item">Первый HD</div>
                                    <div class="column__item">Россия HD</div>
                                    <div class="column__item">Shopping Live</div>
                                    <div class="column__item">Shop&Show</div>
                                    <div class="column__item">Че</div>
                                    <div class="column__item">Ювелирочка</div>
                                    <div class="column__item">Disney</div>
                                    <div class="column__item">Ю</div>
                                    <div class="column__item">LEO MAX+</div>
                                    <div class="column__item">LEO MAX 24</div>
                                    <div class="column__item">ТНТ HD</div>
                                    <div class="column__item">МИР HD</div>
                                    <div class="column__item">Русский роман HD</div>
                                    <div class="column__item">Дом Кино</div>
                                    <div class="column__item">Супер!</div>
                                    <div class="column__item">Sony Sci-Fi</div>
                                    <div class="column__item">Комедия</div>
                                    <div class="column__item">Еврокино</div>
                                    <div class="column__item">Кино ТВ HD</div>
                                    <div class="column__item">	Наше Новое кино</div>
                                    <div class="column__item">	СТС Love</div>
                                    <div class="column__item">A2</div>
                                    <div class="column__item">A1 HD</div>
                                    <div class="column__item">Иллюзион+</div>
                                    <div class="column__item">НСТ</div>
                                    <div class="column__item">Русский иллюзион</div>
                                    <div class="column__item">TV 1000 Русское кино HD</div>
                                    <div class="column__item">TV 1000 HD</div>
                                    <div class="column__item">TV 1000 Action HD</div>
                                    <div class="column__item">Cinema</div>
                                    <div class="column__item">НТВ Хит</div>
                                    <div class="column__item">	ТНТ4</div>
                                    <div class="column__item">My Zen TV HD</div>
                                    <div class="column__item">2x2</div>
                                    <div class="column__item">Сарафан</div>
                                    <div class="column__item">	ЖАРА</div>
                                    <div class="column__item">World Fashion Channel</div>
                                    <div class="column__item">National Geographic HD</div>
                                    <div class="column__item">Доктор HD</div>
                                    <div class="column__item">Моя планета</div>
                                    <div class="column__item">Наука 2.0</div>
                                    <div class="column__item">Da Vinci Learning</div>
                                    <div class="column__item">	Viasat History</div>
                                    <div class="column__item">Охотник и рыболов HD</div>
                                    <div class="column__item">В мире животных HD</div>
                                    <div class="column__item">	Загородная жизнь</div>
                                    <div class="column__item">Мама</div>
                                    <div class="column__item">Приключения HD</div>
                                    <div class="column__item">История</div>
                                    <div class="column__item">	Russia today Doc HD</div>
                                    <div class="column__item">	24 техно</div>
                                    <div class="column__item">Viasat Explore</div>
                                    <div class="column__item">Viasat Nature</div>
                                    <div class="column__item">Бобер</div>
                                    <div class="column__item">Первый вегетарианский</div>
                                    <div class="column__item">Тномер</div>
                                    <div class="column__item">Eurosport 1 HD</div>
                                    <div class="column__item">Eurosport 2 HD</div>
                                    <div class="column__item">	АВТО24 HD</div>
                                    <div class="column__item">Русский экстрим HD</div>
                                    <div class="column__item">Ti Ji</div>
                                    <div class="column__item">	Nickelodeon</div>
                                    <div class="column__item">Уникум</div>
                                    <div class="column__item">Мульт</div>
                                    <div class="column__item">Gulli Girl</div>
                                    <div class="column__item">	О!</div>
                                    <div class="column__item">Радость моя</div>
                                    <div class="column__item">Рыжий</div>
                                    <div class="column__item">Мультимузыка</div>
                                    <div class="column__item">Ru TV</div>
                                    <div class="column__item">O2</div>
                                    <div class="column__item">ТНТ Music</div>
                                    <div class="column__item">	BRIDGE TV Русский хит</div>
                                    <div class="column__item">Music BOX RU</div>
                                    <div class="column__item">BRIDGE TV Classic</div>
                                    <div class="column__item">Europa Plus TV</div>
                                    <div class="column__item">Bridge TV</div>
                                    <div class="column__item">	Евроновости</div>
                                    <div class="column__item">РБК ТВ</div>
                                    <div class="column__item">France 24</div>
                                    <div class="column__item">Deutche Welle</div>
                                    <div class="column__item">	Russia today</div>
                                    <div class="column__item">МИР 24</div>
                                    <div class="column__item">Известия HD</div>
                                    <div class="column__item">Союз</div>
                                    <div class="column__item">Майдан</div>
                                    <div class="column__item">ТНВ</div>
                                    <div class="column__item">ТНВ Планета</div>
                                    <div class="column__item">Интер+</div>
                                    <div class="column__item">Kazakh TV</div>
                                    <div class="column__item">Беларусь 24</div>
                                    <div class="column__item">БСТ</div>
                                </div>
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
    
    

        <?php endif; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="js/jquery-scripts.js"></script>
    <script src="js/slick.min.js"></script>
    <script src='js/scripts.js'></script>
    <script src="js/masks.js"></script>
    <script>
        
        $('.service-slider').slick({
            fade: true,
            arrows: true,
            dots: false,
            prevArrow: "<button class='service-slider__arrows service-slider__prev' ></button>",
            nextArrow: "<button class='service-slider__arrows service-slider__next' ></button>",
        });
    </script>
    <script src="js/owl.carousel.min.js"></script>
    <script>
        function postsCarousel() {
            var checkWidth = $(window).width();
            var owlPost = $(".our-projects-content");
            if (checkWidth > 767) {
                if (typeof owlPost.data('owl.carousel') != 'undefined') {
                    owlPost.data('owl.carousel').destroy();
                }
                owlPost.removeClass('owl-carousel');
            } else if (checkWidth < 768) {
                owlPost.addClass('owl-carousel');
                owlPost.owlCarousel({
                    margin: 20,
                    slideSpeed: 500,
                    animateOut: 'fadeOut',
                    autoWidth: true,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    autoplayTimeout: 3000,
                    dots: true,
                    loop: true
                });
            }
        }

        postsCarousel();
        $(window).resize(postsCarousel);
    </script>
    <script>
        function postsCarousel() {
            var checkWidth = $(window).width();
            var owlPost = $(".contacts__container");
            if (checkWidth > 576) {
                if (typeof owlPost.data('owl.carousel') != 'undefined') {
                    owlPost.data('owl.carousel').destroy();
                }
                owlPost.removeClass('owl-carousel');
            } else if (checkWidth < 576) {
                owlPost.addClass('owl-carousel');
                owlPost.owlCarousel({
                    items: 2,
                    slideSpeed: 700,
                    autoplay: true,
                    autoplaySpeed: 5000,
                    autoplayTimeout: 5000,
                    dots: true,
                    loop: true,
                    responsive: {
                        0: {
                            items: 1
                        }, //при ширине окна < 992 отображать 1 элемент

                        420: {
                            items: 1
                        } //при ширине окна > 992 отображать 3 элемент

                    }
                });
            }
        }

        postsCarousel();
        $(window).resize(postsCarousel);
    </script>
</body>

</html>