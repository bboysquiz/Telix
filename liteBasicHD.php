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

    <section class="content-liteBasic">
        <div class="content-liteBasic__container">
            <h2 class="content-liteBasic__title">Пакеты Лайт+HD и Базовый+HD</h2>

            <div class="operator-tariffs__tab-content content-liteBasic__table">
            <div class="operator-tariffs__wrapper content-liteBasic__table-wrapper">
                            <div class="column__wrapper column__wrapper-liteBasic">
                                <div class="column__title">Номер</div>
                                <div class="operator-tariffs__column column">
                                    <div class="column__item">1.</span></div>
                                    <div class="column__item">2.</span></div>
                                    <div class="column__item">3.</span></div>
                                    <div class="column__item">4.</span></div>
                                    <div class="column__item">5.</span></div>
                                    <div class="column__item">6.</span></div>
                                    <div class="column__item">7.</span></div>
                                    <div class="column__item">8.</span></div>
                                    <div class="column__item">9.</span></div>
                                    <div class="column__item">10.</span></div>
                                    <div class="column__item">11.</span></div>
                                    <div class="column__item">12.</span></div>
                                    <div class="column__item">13.</span></div>
                                    <div class="column__item">14.</span></div>
                                    <div class="column__item">15.</span></div>
                                    <div class="column__item">16.</span></div>
                                    <div class="column__item">17.</span></div>
                                    <div class="column__item">18.</span></div>
                                    <div class="column__item">19.</span></div>
                                    <div class="column__item">20.</span></div>
                                    <div class="column__item">21.</span></div>
                                    <div class="column__item">22.</span></div>
                                    <div class="column__item">23.</span></div>
                                    <div class="column__item">24.</span></div>
                                    <div class="column__item">25.</span></div>
                                    <div class="column__item">26.</span></div>
                                    <div class="column__item">27.</span></div>
                                    <div class="column__item">28.</span></div>
                                    <div class="column__item">29.</span></div>
                                    <div class="column__item">30.</span></div>
                                    <div class="column__item">31.</span></div>
                                    <div class="column__item">32.</span></div>
                                    <div class="column__item">33.</span></div>
                                    <div class="column__item">34.</span></div>
                                    <div class="column__item">35.</span></div>
                                    <div class="column__item">36.</span></div>
                                    <div class="column__item">37.</span></div>
                                    <div class="column__item">38.</span></div>
                                    <div class="column__item">39.</span></div>
                                    <div class="column__item">40.</span></div>
                                    <div class="column__item">41.</span></div>
                                    <div class="column__item">42.</span></div>
                                    <div class="column__item">43.</span></div>
                                    <div class="column__item">44.</span></div>
                                    <div class="column__item">45.</span></div>
                                    <div class="column__item">46.</span></div>
                                    <div class="column__item">47.</span></div>
                                    <div class="column__item">48.</span></div>
                                    <div class="column__item">49.</span></div>
                                    <div class="column__item">50.</span></div>
                                    <div class="column__item">51.</span></div>
                                    <div class="column__item">52.</span></div>
                                    <div class="column__item">53.</span></div>
                                    <div class="column__item">54.</span></div>
                                    <div class="column__item">55.</span></div>
                                    <div class="column__item">56.</span></div>
                                    <div class="column__item">57.</span></div>
                                    <div class="column__item">58.</span></div>
                                    <div class="column__item">59.</span></div>
                                    <div class="column__item">60.</span></div>
                                    <div class="column__item">61.</span></div>
                                    <div class="column__item">62.</span></div>
                                    <div class="column__item">63.</span></div>
                                    <div class="column__item">64.</span></div>
                                    <div class="column__item">65.</span></div>
                                    <div class="column__item">66.</span></div>
                                    <div class="column__item">67.</span></div>
                                    <div class="column__item">68.</span></div>
                                    <div class="column__item">69.</span></div>
                                    <div class="column__item">70.</span></div>
                                    <div class="column__item">71.</span></div>
                                    <div class="column__item">72.</span></div>
                                    <div class="column__item">73.</span></div>
                                    <div class="column__item">74.</span></div>
                                    <div class="column__item">75.</span></div>
                                    <div class="column__item">76.</span></div>
                                    <div class="column__item">77.</span></div>
                                    <div class="column__item">78.</span></div>
                                    <div class="column__item">79.</span></div>
                                    <div class="column__item">80.</span></div>
                                    <div class="column__item">81.</span></div>
                                    <div class="column__item">82.</span></div>
                                    <div class="column__item">83.</span></div>
                                    <div class="column__item">84.</span></div>
                                    <div class="column__item">85.</span></div>
                                    <div class="column__item">86.</span></div>
                                    <div class="column__item">87.</span></div>
                                    <div class="column__item">88.</span></div>
                                    <div class="column__item">89.</span></div>
                                    <div class="column__item">90.</span></div>
                                    <div class="column__item">91.</span></div>
                                    <div class="column__item">92.</span></div>
                                    <div class="column__item">93.</span></div>
                                    <div class="column__item">94.</span></div>
                                    <div class="column__item">95.</span></div>
                                    <div class="column__item">96.</span></div>
                                    <div class="column__item">97.</span></div>
                                    <div class="column__item">98.</span></div>
                                    <div class="column__item">99.</span></div>
                                    <div class="column__item">100.</span></div>
                                    <div class="column__item">101.</span></div>
                                    <div class="column__item">102.</span></div>
                                    <div class="column__item">103.</span></div>
                                    <div class="column__item">104.</span></div>
                                    <div class="column__item">105.</span></div>
                                    <div class="column__item">106.</span></div>
                                    <div class="column__item">107.</span></div>
                                    <div class="column__item">108.</span></div>
                                    <div class="column__item">109.</span></div>
                                    <div class="column__item">110.</span></div>
                                    <div class="column__item">111.</span></div>
                                    <div class="column__item">112.</span></div>
                                    <div class="column__item">113.</span></div>
                                    <div class="column__item">114.</span></div>
                                    <div class="column__item">115.</span></div>
                                    <div class="column__item">116.</span></div>
                                    <div class="column__item">117.</span></div>
                                    <div class="column__item">118.</span></div>
                                    <div class="column__item">119.</span></div>
                                    <div class="column__item">120.</span></div>
                                    <div class="column__item">121.</span></div>
                                    <div class="column__item">122.</span></div>
                                    <div class="column__item">123.</span></div>
                                    <div class="column__item">124.</span></div>
                                    <div class="column__item">125.</span></div>
                                    <div class="column__item">126.</span></div>
                                    <div class="column__item">127.</span></div>
                                    <div class="column__item">128.</span></div>
                                    <div class="column__item">129.</span></div>
                                    <div class="column__item">130.</span></div>
                                    <div class="column__item">131.</span></div>
                                    <div class="column__item">132.</span></div>
                                    <div class="column__item">133.</span></div>
                                    <div class="column__item">134.</span></div>
                                    <div class="column__item">135.</span></div>
                                    <div class="column__item">136.</span></div>
                                    <div class="column__item">137.</span></div>
                                    <div class="column__item">138.</span></div>
                                    <div class="column__item">139.</span></div>
                                    <div class="column__item">140.</span></div>
                                    <div class="column__item">141.</span></div>
                                    <div class="column__item">142.</span></div>
                                    <div class="column__item">143.</span></div>
                                    <div class="column__item">144.</span></div>
                                    <div class="column__item">145.</span></div>
                                    <div class="column__item">146.</span></div>
                                    <div class="column__item">147.</span></div>
                                    <div class="column__item">148.</span></div>
                                    <div class="column__item">149.</span></div>
                                    <div class="column__item">150.</span></div>
                                    <div class="column__item">151.</span></div>
                                    <div class="column__item">152.</span></div>
                                    <div class="column__item">153.</span></div>
                                    <div class="column__item">154.</span></div>
                                    <div class="column__item">155.</span></div>
                                    <div class="column__item">156.</span></div>
                                    <div class="column__item">157.</span></div>
                                    <div class="column__item">158.</span></div>
                                    <div class="column__item">159.</span></div>
                                    <div class="column__item">160.</span></div>
                                    <div class="column__item">161.</span></div>
                                    <div class="column__item">162.</span></div>
                                    <div class="column__item">163.</span></div>
                                    <div class="column__item">164.</span></div>
                                </div>
                            </div>
                            <div class="column__wrapper column__wrapper-liteBasic">
                                <div class="column__title">Лайт</div>
                                <div class="operator-tariffs__column column">
                                    <div class="column__item">Первый канал</span></div>
                                    <div class="column__item">Россия 1</span></div>
                                    <div class="column__item">Матч ТВ</span></div>
                                    <div class="column__item">НТВ</span></div>
                                    <div class="column__item">5 канал</span></div>
                                    <div class="column__item">Россия-Культура</span></div>
                                    <div class="column__item">Россия 24</span></div>
                                    <div class="column__item">Карусель</span></div>
                                    <div class="column__item">ОТР</span></div>
                                    <div class="column__item">ТВ-Центр</span></div>
                                    <div class="column__item">РЕН-ТВ</span></div>
                                    <div class="column__item">Спас</span></div>
                                    <div class="column__item">СТС</span></div>
                                    <div class="column__item">Домашний</span></div>
                                    <div class="column__item">ТВ3</span></div>
                                    <div class="column__item">Пятница</span></div>
                                    <div class="column__item">Звезда</span></div>
                                    <div class="column__item">Мир</span></div>
                                    <div class="column__item">ТНТ</span></div>
                                    <div class="column__item">Муз-ТВ</span></div>
                                    <div class="column__item">Санкт-Петербург</span></div>
                                    <div class="column__item">2х2</span></div>
                                    <div class="column__item">Дисней</span></div>
                                    <div class="column__item">Че</span></div>
                                    <div class="column__item">Ю</span></div>
                                    <div class="column__item">Deutsche Welle</span></div>
                                    <div class="column__item">РБК-ТВ</span></div>
                                    <div class="column__item">ТНТ Music</span></div>
                                    <div class="column__item">BRIDGE TV</span></div>
                                    <div class="column__item">СОЮЗ</span></div>
                                    <div class="column__item">Russia Today</span></div>
                                    <div class="column__item">France 24</span></div>
                                    <div class="column__item">Нано ТВ</span></div>
                                    <div class="column__item">Радость моя</span></div>
                                    <div class="column__item">Первый образовательный</span></div>
                                    <div class="column__item">Bridge TV Русский хит</span></div>
                                    <div class="column__item">BRIDGE TV DANCE</span></div>
                                    <div class="column__item">Мир 24</span></div>
                                    <div class="column__item">78</span></div>
                                    <div class="column__item">Домашний магазин</span></div>
                                    <div class="column__item">Раз ТВ</span></div>
                                    <div class="column__item">ТДК</span></div>
                                    <div class="column__item">ТБН</span></div>
                                    <div class="column__item">Shop24</span></div>
                                    <div class="column__item">ТРО Союз</span></div>
                                    <div class="column__item">Europa Plus TV</span></div>
                                    <div class="column__item">RT Док</span></div>
                                    <div class="column__item">BRIDGE TV CLASSIC</span></div>
                                    <div class="column__item">GlobalStar TV</span></div>
                                    <div class="column__item">8 канал</span></div>
                                    <div class="column__item">Luxury World</span></div>
                                    <div class="column__item">Известия</span></div>
                                    <div class="column__item">MusicBoxTV</span></div>
                                    <div class="column__item">MusicBoxRU</span></div>
                                    <div class="column__item">Юмор ТВ</span></div>
                                    <div class="column__item">TTS TV</span></div>
                                    <div class="column__item">Hard Life</span></div>
                                    <div class="column__item">Телеканал 360</span></div>
                                    <div class="column__item">СТС Love</span></div>
                                    <div class="column__item">Вместе РФ</span></div>
                                    <div class="column__item">ТНВ-Планета</span></div>
                                    <div class="column__item">ТНВ-Татарстан</span></div>
                                    <div class="column__item">ЛДПР.ТВ</span></div>
                                    <div class="column__item">Точка ТВ</span></div>
                                    <div class="column__item">РЖД ТВ</span></div>
                                    <div class="column__item">9 ВОЛНА</span></div>
                                    <div class="column__item">TV MALL</span></div>
                                    <div class="column__item">TOPSHOPTV</span></div>
                                    <div class="column__item">Первый HD</span></div>
                                    <div class="column__item">Россия 1 HD</span></div>
                                    <div class="column__item">ЛОТ</span></div>
                                    <div class="column__item">Большая Азия</span></div>
                                    <div class="column__item">Просвещение</span></div>
                                    <div class="column__item">ShoppingLive</span></div>
                                    <div class="column__item">Калейдоскоп</span></div>
                                    <div class="column__item">BBC World News</span></div>
                                    <div class="column__item">EuroNews</span></div>
                                    <div class="column__item">Nickelodeon</span></div>
                                    <div class="column__item">Paramount Comedy</span></div>
                                    <div class="column__item">MTV</span></div>
                                    <div class="column__item">English club</span></div>
                                    <div class="column__item">Министерство Идей</span></div>
                                    <div class="column__item">Беларусь 24</span></div>
                                    <div class="column__item">Красная линия</span></div>
                                    <div class="column__item">Твой дом</span></div>
                                    <div class="column__item">NHK World TV</span></div>
                                    <div class="column__item">Arirang</span></div>
                                    <div class="column__item">Рубль</span></div>
                                    <div class="column__item">О2</span></div>
                                    <div class="column__item">Три Ангела</span></div>
                                    <div class="column__item">Открытый мир</span></div>
                                    <div class="column__item">Наше ТВ</span></div>
                                    <div class="column__item">MTV Life HD</span></div>
                                    <div class="column__item">Россия 1 HD</span></div>
                                    <div class="column__item">Первый HD</span></div>
                                    <div class="column__item">Телеприключения HD</span></div>
                                    <div class="column__item">Еда HD</span></div>
                                    <div class="column__item">КИНО ТВ HD</span></div>
                                    <div class="column__item">Русский роман HD</span></div>
                                    <div class="column__item">Охотник и рыболов HD</span></div>
                                    <div class="column__item">Fox HD</span></div>
                                    <div class="column__item">Fox Life HD</span></div>
                                    <div class="column__item">National Geografic Channel HD</span></div>
                                    <div class="column__item">Nat Geo Wild HD</span></div>
                                    <div class="column__item">RTДок HD</span></div>
                                    <div class="column__item">RT HD</span></div>
                                    <div class="column__item">1HD</span></div>
                                    <div class="column__item">RTG HD</span></div>
                                    <div class="column__item">World Business Channel</span></div>
                                    <div class="column__item">Планета HD</span></div>
                                    <div class="column__item">Теледом HD</span></div>
                                    <div class="column__item">Телеканал 360 HD</span></div>
                                    <div class="column__item">МИР PREMIUM</span></div>
                                    <div class="column__item">СТРК Сочи HD</span></div>
                                    <div class="column__item">Fashion One HD</span></div>
                                    <div class="column__item">Матч ТВ HD</span></div>
                                    <div class="column__item">КБС рус HD</span></div>
                                    <div class="column__item">BRIDGE TV HD</span></div>
                                    <div class="column__item">Тлум HD</span></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                    <div class="column__item"></div>
                                </div>
                            </div>
                            <div class="column__wrapper column__wrapper-liteBasic">
                                <div class="column__title">Базовый</div>
                                <div class="operator-tariffs__column column">
                                    <div class="column__item"><span>Первый канал</span></div>
                                    <div class="column__item"><span>Россия 1</span></div>
                                    <div class="column__item"><span>Матч ТВ</span></div>
                                    <div class="column__item"><span>НТВ</span></div>
                                    <div class="column__item"><span>5 канал</span></div>
                                    <div class="column__item"><span>Россия-Культура</span></div>
                                    <div class="column__item"><span>Россия 24</span></div>
                                    <div class="column__item"><span>Карусель</span></div>
                                    <div class="column__item"><span>Мультимузыка</span></div>
                                    <div class="column__item"><span>ТВ-Центр</span></div>
                                    <div class="column__item"><span>РЕН-ТВ</span></div>
                                    <div class="column__item"><span>Спас</span></div>
                                    <div class="column__item"><span>СТС</span></div>
                                    <div class="column__item"><span>Домашний</span></div>
                                    <div class="column__item"><span>ТВ3</span></div>
                                    <div class="column__item"><span>Пятница</span></div>
                                    <div class="column__item"><span>Звезда</span></div>
                                    <div class="column__item"><span>Мир</span></div>
                                    <div class="column__item"><span>ТНТ</span></div>
                                    <div class="column__item"><span>Муз-ТВ</span></div>
                                    <div class="column__item"><span>Санкт-Петербург</span></div>
                                    <div class="column__item"><span>2х2</span></div>
                                    <div class="column__item"><span>Дисней</span></div>
                                    <div class="column__item"><span>Че</span></div>
                                    <div class="column__item"><span>Ю</span></div>
                                    <div class="column__item"><span>Deutsche Welle</span></div>
                                    <div class="column__item"><span>РБК-ТВ</span></div>
                                    <div class="column__item"><span>ТНТ Music</span></div>
                                    <div class="column__item"><span>BRIDGE TV</span></div>
                                    <div class="column__item"><span>СОЮЗ</span></div>
                                    <div class="column__item"><span>Russia Today</span></div>
                                    <div class="column__item"><span>France 24</span></div>
                                    <div class="column__item"><span>Нано ТВ</span></div>
                                    <div class="column__item"><span>Радость моя</span></div>
                                    <div class="column__item"><span>Первый образовательный</span></div>
                                    <div class="column__item"><span>Bridge TV Русский хит</span></div>
                                    <div class="column__item"><span>BRIDGE TV DANCE</span></div>
                                    <div class="column__item"><span>Мир 24</span></div>
                                    <div class="column__item"><span>78</span></div>
                                    <div class="column__item"><span>Домашний магазин</span></div>
                                    <div class="column__item"><span>Раз ТВ></span></div>
                                    <div class="column__item"><span>ТДК</span></div>
                                    <div class="column__item"><span>ТБН</span></div>
                                    <div class="column__item"><span>Shop24</span></div>
                                    <div class="column__item"><span>ТРО Союз</span></div>
                                    <div class="column__item"><span>Europa Plus TV</span></div>
                                    <div class="column__item"><span>RT Док</span></div>
                                    <div class="column__item"><span>BRIDGE TV CLASSIC</span></div>
                                    <div class="column__item"><span>GlobalStar TV</span></div>
                                    <div class="column__item"><span>8 канал</span></div>
                                    <div class="column__item"><span>Luxury World</span></div>
                                    <div class="column__item"><span>Известия</span></div>
                                    <div class="column__item"><span>MusicBoxTV</span></div>
                                    <div class="column__item"><span>MusicBoxRU</span></div>
                                    <div class="column__item"><span>Юмор ТВ</span></div>
                                    <div class="column__item"><span>TTS TV</span></div>
                                    <div class="column__item"><span>Hard Life</span></div>
                                    <div class="column__item"><span>Телеканал 360</span></div>
                                    <div class="column__item"><span>СТС Love</span></div>
                                    <div class="column__item"><span>Вместе РФ</span></div>
                                    <div class="column__item"><span>ТНВ-Планета</span></div>
                                    <div class="column__item"><span>ТНВ-Татарстан</span></div>
                                    <div class="column__item"><span>ЛДПР.ТВ</span></div>
                                    <div class="column__item"><span>Точка ТВ</span></div>
                                    <div class="column__item"><span>РЖД ТВ</span></div>
                                    <div class="column__item"><span>9 ВОЛНА</span></div>
                                    <div class="column__item"><span>TV MALL</span></div>
                                    <div class="column__item"><span>TOPSHOPTV</span></div>
                                    <div class="column__item"><span>Первый HD</span></div>
                                    <div class="column__item"><span>Россия 1 HD</span></div>
                                    <div class="column__item"><span>ЛОТ</span></div>
                                    <div class="column__item"><span>Большая Азия</span></div>
                                    <div class="column__item"><span>Просвещение</span></div>
                                    <div class="column__item"><span>ShoppingLive</span></div>
                                    <div class="column__item"><span>Калейдоскоп</span></div>
                                    <div class="column__item"><span>BBC World News</span></div>
                                    <div class="column__item"><span>EuroNews</span></div>
                                    <div class="column__item"><span>Nickelodeon</span></div>
                                    <div class="column__item"><span>Paramount Comedy</span></div>
                                    <div class="column__item"><span>MTV</span></div>
                                    <div class="column__item"><span>English club</span></div>
                                    <div class="column__item"><span>Министерство Идей</span></div>
                                    <div class="column__item"><span>RTG HD</span></div>
                                    <div class="column__item"><span>Красная линия</span></div>
                                    <div class="column__item"><span>Твой дом</span></div>
                                    <div class="column__item"><span>NHK World TV</span></div>
                                    <div class="column__item"><span>Arirang</span></div>
                                    <div class="column__item"><span>Рубль</span></div>
                                    <div class="column__item"><span>О2</span></div>
                                    <div class="column__item"><span>Три Ангела</span></div>
                                    <div class="column__item"><span>Открытый мир</span></div>
                                    <div class="column__item"><span>Наше ТВ</span></div>
                                    <div class="column__item"><span>МАТЧ! НАШ СПОРТ</span></div>
                                    <div class="column__item"><span>Fashion TV</span></div>
                                    <div class="column__item"><span>Сарафан</span></div>
                                    <div class="column__item"><span>Оружие</span></div>
                                    <div class="column__item"><span>КИНО ТВ HD</span></div>
                                    <div class="column__item"><span>Русский роман HD</span></div>
                                    <div class="column__item"><span>Наука 2.0</span></div>
                                    <div class="column__item"><span>Зоо ТВ</span></div>
                                    <div class="column__item"><span>Охотник и рыболов</span></div>
                                    <div class="column__item"><span>Телепутешествия</span></div>
                                    <div class="column__item"><span>Тонус ТВ</span></div>
                                    <div class="column__item"><span>Russian Travel Guide</span></div>
                                    <div class="column__item"><span>Nat Geo Wild</span></div>
                                    <div class="column__item"><span>Время</span></div>
                                    <div class="column__item"><span>National Geographic Channel</span></div>
                                    <div class="column__item"><span>Телекафе</span></div>
                                    <div class="column__item"><span>Моя планета</span></div>
                                    <div class="column__item"><span>Тлум HD</span></div>
                                    <div class="column__item"><span>Cartoon Network</span></div>
                                    <div class="column__item"><span>Рыжий</span></div>
                                    <div class="column__item"><span>Музыка первого</span></div>
                                    <div class="column__item"><span>Мультимузыка</span></div>
                                    <div class="column__item"><span>Fox Life</span></div>
                                    <div class="column__item"><span>Fox</span></div>
                                    <div class="column__item"><span>Кинопоказ</span></div>
                                    <div class="column__item"><span>BRIDGE TV HD</span></div>
                                    <div class="column__item"><span>КБС рус HD</span></div>
                                    <div class="column__item"><span>Дом кино</span></div>
                                    <div class="column__item"><span>Матч ТВ HD</span></div>
                                    <div class="column__item"><span>Русский роман</span></div>
                                    <div class="column__item"><span>Русский экстрим</span></div>
                                    <div class="column__item"><span>Fashion One HD</span></div>
                                    <div class="column__item"><span>СТРК Сочи HD</span></div>
                                    <div class="column__item"><span>МИР PREMIUM</span></div>
                                    <div class="column__item"><span>Телеканал 360 HD</span></div>
                                    <div class="column__item"><span>Теледом HD</span></div>
                                    <div class="column__item"><span>Кино ТВ</span></div>
                                    <div class="column__item"><span>История</span></div>
                                    <div class="column__item"><span>Русский бестселлер</span></div>
                                    <div class="column__item"><span>Футбол</span></div>
                                    <div class="column__item"><span>A1</span></div>
                                    <div class="column__item"><span>A2</span></div>
                                    <div class="column__item"><span>1HD</span></div>
                                    <div class="column__item"><span>Русский Детектив</span></div>
                                    <div class="column__item"><span>Мульт</span></div>
                                    <div class="column__item"><span>Мультимания</span></div>
                                    <div class="column__item"><span>RU.TV</span></div>
                                    <div class="column__item"><span>Мама</span></div>
                                    <div class="column__item"><span>РОДНОЕ КИНО</span></div>
                                    <div class="column__item"><span>МАТЧ! ФУТБОЛ 1</span></div>
                                    <div class="column__item"><span>ТНТ4</span></div>
                                    <div class="column__item"><span>Детский</span></div>
                                    <div class="column__item"><span>Ani</span></div>
                                    <div class="column__item"><span>Живая планета</span></div>
                                    <div class="column__item"><span>О!</span></div>
                                    <div class="column__item"><span>Бобёр</span></div>
                                    <div class="column__item"><span>КВН ТВ</span></div>
                                    <div class="column__item"><span>Доктор</span></div>
                                    <div class="column__item"><span>MTV Life HD</span></div>
                                    <div class="column__item"><span>Россия 1 HD</span></div>
                                    <div class="column__item"><span>Первый HD</span></div>
                                    <div class="column__item"><span>Телеприключения HD</span></div>
                                    <div class="column__item"><span>Еда HD</span></div>
                                    <div class="column__item"><span>Планета HD</span></div>
                                    <div class="column__item"><span>World Business Channel</span></div>
                                    <div class="column__item"><span>Охотник и рыболов HD</span></div>
                                    <div class="column__item"><span>Fox HD</span></div>
                                    <div class="column__item"><span>Fox Life HD</span></div>
                                    <div class="column__item"><span>National Geografic Channel HD</span></div>
                                    <div class="column__item"><span>Nat Geo Wild HD</span></div>
                                    <div class="column__item"><span>RTДок HD</span></div>
                                    <div class="column__item"><span>RT HD</span></div>
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