<!doctype html>
<html lang="ru">
<? require_once (__DIR__.'/components/head.php')?>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__content container">
                <div class="header__content-mail">
                    <i class="header__icon icon-mail"></i>
                    <span>companymail@company.com</span>
                </div>
                <div class="header__content-address">
                    <i class="header__icon icon-address"></i>
                    <span>Москва, Бумажная улица, д.19</span>
                </div>
                <div class="header__content-worktime">
                    <i class="header__icon icon-clock"></i>
                    <span>Пн-Пт 9:00 - 18:00</span>
                </div>
            </div>
        </header>
        <div class="menu">
            <nav class="menu__navigation container">
                <a class="menu__navigation-link logo" href="#">
                    <img src="source/icons/logo.svg">
                </a>
                <div class="menu__navigation-links">
                    <div class="menu__dropdown">
                        <span class="menu__navigation-link">
                            Услуги
                            <i class="icon-dropdown-arrow menu__dropdown-icon menu__dropdown-icon_minimized"></i>
                            <i class="icon-dropdown-arrow-up menu__dropdown-icon menu__dropdown-icon_deployed"></i>
                        </span>
                        <div class="menu__dropdown-wrapper">
                            <div class="menu__dropdown-content">
                                <div class="menu__dropdown-item">
                                    <div class="menu__dropdown-item-icon menu__dropdown-icon_chart">
                                        <i class="icon-chart-line"></i>
                                    </div>
                                    <div class="menu__dropdown-category">
                                        <span>Бухгалтерский учёт</span>
                                        <p>Сопровождение бухгалтерии и отдела кадров предприятий</p>
                                    </div>
                                </div>
                                <div class="menu__dropdown-item">
                                    <div class="menu__dropdown-item-icon menu__dropdown-icon_money">
                                        <i class="icon-money"></i>
                                    </div>
                                    <div class="menu__dropdown-category">
                                        <span>Зарплата и кадры</span>
                                        <p>Кадровое делопроизводство с нуля, учет и начисление зарплаты</p>
                                    </div>
                                </div>
                                <div class="menu__dropdown-item">
                                    <div class="menu__dropdown-item-icon menu__dropdown-icon_arrow">
                                        <i class="icon-round-arrow"></i>
                                    </div>
                                    <div class="menu__dropdown-category">
                                        <span>Восстановление учёта и отчётности</span>
                                        <p>Восстановим бухгалтерский учёт и отчетность в любом состоянии</p>
                                    </div>
                                </div>
                                <div class="menu__dropdown-item">
                                    <div class="menu__dropdown-item-icon menu__dropdown-icon_question">
                                        <i class="icon-question"></i>
                                    </div>
                                    <div class="menu__dropdown-category">
                                        <span>Консультация бухгалтера</span>
                                        <p>Консультация главного бухгалтера для руководителей предприятий</p>
                                    </div>
                                </div>
                                <div class="menu__dropdown-item">
                                    <div class="menu__dropdown-item-icon menu__dropdown-icon_tablet">
                                        <i class="icon-paper-tablet"></i>
                                    </div>
                                    <div class="menu__dropdown-category">
                                        <span>Нулевая отчётность</span>
                                        <p>Подготовим и сдадим нулевую отчетность в ИФНС и ПФР</p>
                                    </div>
                                </div>
                                <div class="menu__dropdown-item">
                                    <div class="menu__dropdown-item-icon menu__dropdown-icon_check">
                                        <i class="icon-check"></i>
                                    </div>
                                    <div class="menu__dropdown-category">
                                        <span>Регистрация ООО</span>
                                        <p>Регистрация, внесение изменений и ликвидация ООО с внесением в ЕГРЮЛ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="menu__navigation-link">Тарифы</a>
                    <a class="menu__navigation-link">Блог</a>
                    <a class="menu__navigation-link">О нас</a>
                    <a class="menu__navigation-link">Контакты</a>
                </div>
                <div class="menu__navigation-number">
                    <i class="icon-phone menu__icon"></i>
                    <a href="tel:+78005553535">8 (800) 555-35-35</a>
                </div>
            </nav>
        </div>
        <div class="info container">
            <div class="banner">
                <div class="banner__textbox">
                    <h1>Аутсорсинг бухгалтерского учёта</h1>
                    <p>Полный или частичный учет бухгалтерии для организаций малого и среднего бизнеса</p>
                    <div class="banner__buttonbox">
                        <button>
                            Оставить заявку
                        </button>
                        <button>
                            Услуги и цены
                        </button>
                    </div>
                </div>
            </div>
            <img class="banner__image_linechart" src="./source/img/linechart.png">
            <img class="banner__image_circlechart" src="./source/img/circlechart.png">
            <img class="banner__image_dotchart" src="./source/img/dotchart.png">
            <img class="banner__image_barchart" src="./source/img/barchart.png">
            <img class="banner__image_histogram" src="./source/img/histogram.png">
        </div>
        <div class="company-info container">
            <div class="company-info__content">
                <span>Бухгалтерская компания «НеГа Консалтинг»</span>
                <h2>
                    <b>Более 20 лет</b> мы успешно оказываем полный спектр услуг по бухгалтерскому учету предприятиям и индивидуальным предпринимателям
                </h2>
                <div class="company-info__switcher">
                    <button class="company-info__button active">Комплексный учет</button>
                    <button class="company-info__button">Отчетность</button>
                    <button class="company-info__button">Программа и консультация</button>
                    <button class="company-info__button">Расчет заработной платы</button>
                    <button class="company-info__button">Кадровый учет</button>
                </div>
            </div>
        </div>
    </div>
    <? require_once (__DIR__.'/components/scripts.php')?>
</body>
</html>