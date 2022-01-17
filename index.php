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
                <div class="company-info__contentbox">
                    <div class="company-info__textbox active">
                        <div class="company-info__textbox-item">
                            <span>Кому подходит комплексный учет бухгалтерии?</span>
                            <p>
                                Для ООО и ИП с сотрудниками независимо от оборота компании и сферы деятельности бизнеса.
                            </p>
                        </div>
                        <div class="company-info__textbox-item">
                            <span>Какие задачи решает:</span>
                            <p>
                                Передает все заботы о ведении бухгалтерского учета профессионалам.
                            </p>
                        </div>
                        <div class="company-info__textbox-item">
                            <span>Преимущества:</span>
                            <p>
                                Бухгалтер всегда на связи, удаленный доступ к учетной базе, оплата только за услуги по факту и объему выполненных работ.
                            </p>
                        </div>
                    </div>
                    <div class="company-info__textbox">
                        <div class="company-info__textbox-item">
                            <span>Кому подходит тариф Отчетность в ФНС?</span>
                            <p>
                                ООО и ИП, которые самостоятельно вводят все данные в программу «1С:Бухгалтерия»
                            </p>
                        </div>
                        <div class="company-info__textbox-item">
                            <span>Какие задачи решает:</span>
                            <p>
                                Составление и сдача отчетности. Консультации по вопросам ведения бухгалтерского и налогового учета в 1С:Бухгалтерия.
                            </p>
                        </div>
                        <div class="company-info__textbox-item">
                            <span>Преимущества:</span>
                            <p>
                                Налоги рассчитываются верно, отчетность корректно сформирована и сдана в срок. Минимальная стоимость сдачи отчетности.
                            </p>
                        </div>
                    </div>
                    <div class="company-info__textbox">
                        <div class="company-info__textbox-item">
                            <span>Кому подходит 1С:Предприятие и консультация бухгалтеров?</span>
                            <p>
                                Для владельцев и руководителей, кто самостоятельно ведет учет своего бизнеса в 1С:Предприятие и/или 1С:Бухгалтерия.
                            </p>
                        </div>
                        <div class="company-info__textbox-item">
                            <span>Какие задачи решает:</span>
                            <p>
                                Вести учет и сдавать отчеты без специальных знаний с помощью понятной онлайн-бухгалтерии; контролировать показатели своего бизнеса.
                            </p>
                        </div>
                        <div class="company-info__textbox-item">
                            <span>Преимущества:</span>
                            <p>
                                Обучение работе с программой и часы гарантированных консультаций от партнера сети 1С:БухОбслуживание.
                            </p>
                        </div>
                    </div>
                    <div class="company-info__textbox">
                        <div class="company-info__textbox-item">
                            <span>Кому подходит расчет заработной платы?</span>
                            <p>
                                Для компаний с любыми системами оплаты труда, которые организовали ведение кадрового делопроизводства самостоятельно.
                            </p>
                        </div>
                        <div class="company-info__textbox-item">
                            <span>Какие задачи решает:</span>
                            <p>
                                Расчет всех видов выплат, начислений, удержаний, предусмотренных системой оплаты труда в компании и действующим законодательством.
                            </p>
                        </div>
                        <div class="company-info__textbox-item">
                            <span>Преимущества:</span>
                            <p>
                                Передать расчет заработной платы в 1С:БО выгоднее, чем брать в штат сотрудника на этот блок работ.
                            </p>
                        </div>
                    </div>
                    <div class="company-info__textbox">
                        <div class="company-info__textbox-item">
                            <span>Кому подходит ведение кадрового учета:</span>
                            <p>
                                Для компаний, которые организовали ведение бухучета самостоятельно, но не готовы вникать в тонкости кадрового учета.
                            </p>
                        </div>
                        <div class="company-info__textbox-item">
                            <span>Какие задачи решает:</span>
                            <p>
                                Обслуживание сотрудников клиента от момента приема на работу, до расчета выплат по больничным листам, расчета зарплат,
                                премий и т. д.
                            </p>
                        </div>
                        <div class="company-info__textbox-item">
                            <span>Преимущества:</span>
                            <p>
                                Все задачи решаются строго в установленный законом срок, конфиденциально, с предоставлением пояснений сотрудникам по оформлению
                                документов и суммам начисленного вознаграждения.
                            </p>
                        </div>
                    </div>
                    <div class="company-info__imagebox">
                        <img src="./source/img/diagram.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="service container">
            <div class="service__background"></div>
            <div class="service__content">
                <div class="service__content-details">
                    <div class="service__content-details-box">
                        <span>Сервис</span>
                        <h1>
                            Аутсорсинг бухгалтерских услуг
                            малому и среднему бизнесу
                        </h1>
                        <button>
                            Подробнее
                            <i class="icon-arrow-right icon"></i>
                        </button>
                    </div>
                    <div class="service__content-details-slider">
                        <div class="textbox">
                            <div class="swiper textbox__content">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <p>
                                            Дружная команда профессиональных бухгалтеров и юристов НеГа Консалтинг.
                                            Более 20 лет оказываем бухгалтерские
                                            и юридический услуги малому и среднему бизнесу.
                                        </p>
                                        <p class="lower">
                                            Срочная помощь в ведении бизнеса для начинающих предпринимателей.
                                        </p>
                                    </div>
                                    <div class="swiper-slide">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                        </p>
                                        <p class="lower">
                                            Bottom text
                                        </p>
                                    </div>
                                    <div class="swiper-slide">
                                        <p>
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                            sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>
                                        <p class="lower">
                                            Bottom text
                                        </p>
                                    </div>
                                    <div class="swiper-slide">
                                        <p>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                        </p>
                                        <p class="lower">
                                            Bottom text
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service__content-details-slider-nav">
                            <div class="pagination"></div>
                            <button class="prevElement">
                                <i class="icon-arrow-left icon"></i>
                            </button>
                            <button class="nextElement">
                                <i class="icon-arrow-right icon"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? require_once (__DIR__.'/components/scripts.php')?>
</body>
</html>