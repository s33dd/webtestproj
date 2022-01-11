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
                                    <div class="menu__dropdown-item-icon">
                                        <i class="icon-chart-line menu__dropdown-icon_chart"></i>
                                    </div>
                                    <div class="menu__dropdown-category">
                                        <span>Бухгалтерский учёт</span>
                                    </div>
                                </div>
                                <div class="menu__dropdown-item">
                                    <div class="menu__dropdown-item-icon">
                                        <i class="icon-money menu__dropdown-icon_money"></i>
                                    </div>
                                    <div class="menu__dropdown-category">
                                        <span>Зарплата и кадры</span>
                                    </div>
                                </div>
                                <div class="menu__dropdown-item">
                                    <div class="menu__dropdown-item-icon">
                                        <i class="icon-round-arrow menu__dropdown-icon_arrow"></i>
                                    </div>
                                    <div class="menu__dropdown-category">
                                        <span>Восстановление учёта и отчётности</span>
                                    </div>
                                </div>
                                <div class="menu__dropdown-item">
                                    <div class="menu__dropdown-item-icon">
                                        <i class="icon-question menu__dropdown-icon_question"></i>
                                    </div>
                                    <div class="menu__dropdown-category">
                                        <span>Консультация бухгалтера</span>
                                    </div>
                                </div>
                                <div class="menu__dropdown-item">
                                    <div class="menu__dropdown-item-icon">
                                        <i class="icon-paper-tablet menu__dropdown-icon_tablet"></i>
                                    </div>
                                    <div class="menu__dropdown-category">
                                        <span>Нулевая отчётность</span>
                                    </div>
                                </div>
                                <div class="menu__dropdown-item">
                                    <div class="menu__dropdown-item-icon">
                                        <i class="icon-check menu__dropdown-icon_check"></i>
                                    </div>
                                    <div class="menu__dropdown-category">
                                        <span>Регистрация ООО</span>
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
    </div>
</body>
</html>