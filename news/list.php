<?php
/**
 * Created by PhpStorm.
 * User: abakumov
 * Date: 05.03.14
 * Time: 14:08
 */
?>


<?php $title = 'Все новости - '; ?>
<?php require_once('../begin.php');?>
    <table class="wrapper">
    <tr>
    <td class="main-sidebar relative">
        <ul class="nav nav-pills nav-stacked">
            <li class="thumbnail add" data-submenu="submenu-plus">
                <a class="show text-center">
                    <i class="sidebar-plus"></i>
                    <p>Добавить</p>
                </a>
            </li>
            <li class="thumbnail" data-submenu="submenu-desktop">
                <a href="/" class="show text-center">
                    <i class="sidebar-desktop"></i>
                    <p>Рабочий стол</p>
                </a>
            </li>
            <li class="thumbnail" data-submenu="submenu-common">
                <a class="show text-center">
                    <i class="sidebar-common"></i>
                    <p>Общее</p>
                </a>
            </li>
            <li class="thumbnail" data-submenu="submenu-company">
                <a class="show text-center">
                    <i class="sidebar-company"></i>
                    <p>Компания</p>
                </a>
            </li>
            <li class="active thumbnail" data-submenu="submenu-news">
                <a class="show text-center">
                    <i class="sidebar-news"></i>
                    <p>Новости</p>
                </a>
            </li>
            <li class="thumbnail" data-submenu="submenu-guides">
                <a href="/" class="show text-center">
                    <i class="sidebar-guides"></i>
                    <p>Руководства</p>
                </a>
            </li>
            <li class="thumbnail" data-submenu="submenu-university">
                <a href="/" class="show text-center">
                    <i class="sidebar-university"></i>
                    <p>Университет</p>
                </a>
            </li>
            <li class="thumbnail" data-submenu="submenu-settings">
                <a class="show text-center">
                    <i class="sidebar-settings"></i>
                    <p>Настройки</p>
                </a>
            </li>
        </ul>
    </td>
    <td class="second-sidebar col-lg-2 col-md-2 active relative" style="display: table-cell;">
        <ul class="nav nav-pills nav-stacked" id="submenu-guides"></ul>
        <ul class="nav nav-pills nav-stacked" id="submenu-university"></ul>
        <ul class="nav nav-pills nav-stacked" id="submenu-desktop"></ul>
        <ul class="nav nav-pills nav-stacked" id="submenu-plus">
            <li>
                <a href="/" class="show text-left">
                    Сотрудника
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Франчайзи
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Потенциального франчайзи
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Задачу
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Комментарий к франчайзи
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Сообщение
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Новость
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Руководство
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Университет
                </a>
            </li>
        </ul>
        <ul class="nav nav-pills nav-stacked" id="submenu-common">
            <li>
                <a href="/" class="show text-left">
                    Лента событий
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Календарь
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Сообщения
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Задачи
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Уведомления
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Обращения
                </a>
            </li>
        </ul>
        <ul class="nav nav-pills nav-stacked" id="submenu-company">
            <li>
                <a href="/cabinet/franchisee_list.php" class="show text-left">
                    Франчайзи
                </a>
            </li>
            <li class="active">
                <a href="/cabinet/users.php" class="show text-left">
                    Сотрудники
                </a>
            </li>
            <li>
                <a href="/cabinet/birthday.php" class="show text-left">
                    Дни рождения
                </a>
            </li>
        </ul>
        <ul class="nav nav-pills nav-stacked" id="submenu-news" style="display: block;">
            <li class="active">
                <a href="/" class="show text-left">
                    Все новости
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Новости франчайзинга
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Новости компании
                </a>
            </li>
        </ul>
        <ul class="nav nav-pills nav-stacked" id="submenu-settings">
            <li>
                <a href="/" class="show text-left">
                    Логи
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Права доступа
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Справочники
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Страница «О компании»
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Настройки администратора
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Настройка тестов
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Настройка новостей
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Настройка руководств
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Настройка университетов
                </a>
            </li>
            <li>
                <a href="/" class="show text-left">
                    Руководители компании
                </a>
            </li>
        </ul>
    </td>
    <td id="content">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 news">
            <h1>
                Все новости
            </h1>
            <hr/>
            <table class="table table-hover">
                <tr>
                    <td class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="media">
                            <img class="media-object pull-left" src="/images/news_100.png" width="100px"/>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="/news/view.php">Приглашаем Вас посетить первый в Тюмени фитнес «Синяя звезда»!</a></h4>
                                <div class="pull-left text-justify">«Синяя звезда»- это гораздо больше, чем просто тренировки. Это целый комплекс эффективных услуг для Вашей стройности, красоты и здоровья. Такой подход позволяет с легкостью решать любую Вашу задачу: будь то избавление от лишних килограммов, уменьшение объемов тела или укрепление мышц.
                                    Мы понимаем, что каждая женщина – уникальна, и для каждой нужна своя программа похудения. Поэтому мы гарантируем Вам исключительно индивидуальный подход, максимум внимания и поддержки от наших специалистов.</div>
                                <div class="clearfix"></div>
                                <div class="media media-block">
                                    <img class="media-object pull-left" src="/images/no_photo_200.png" width="39px">
                                    <div class="media-body">
                                        <h4 class="media-heading"><a>Абакумов Олег Александрович</a></h4>
                                        <div class="feedback pull-left">
                                            <span class="pull-left text-muted">Пятница, 7 мая 2014, 9:01</span>
                                            <div class="comment-block pull-left">
                                                <span class="glyphicon glyphicon-comment"></span><span class="count">30</span>
                                            </div>
                                            <a class="pull-left">Ответить</a>
                                            <a class="pull-left">Редактировать</a>
                                            <a class="delete pull-left">Удалить</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="media">
                            <img class="media-object pull-left" src="/images/news_100.png" width="100px"/>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="/news/view.php">Приглашаем Вас посетить первый в Тюмени фитнес «Синяя звезда»!</a></h4>
                                <div class="pull-left text-justify">«Синяя звезда»- это гораздо больше, чем просто тренировки. Это целый комплекс эффективных услуг для Вашей стройности, красоты и здоровья. Такой подход позволяет с легкостью решать любую Вашу задачу: будь то избавление от лишних килограммов, уменьшение объемов тела или укрепление мышц.
                                    Мы понимаем, что каждая женщина – уникальна, и для каждой нужна своя программа похудения. Поэтому мы гарантируем Вам исключительно индивидуальный подход, максимум внимания и поддержки от наших специалистов.</div>
                                <div class="clearfix"></div>
                                <div class="media media-block">
                                    <img class="media-object pull-left" src="/images/no_photo_200.png" width="39px">
                                    <div class="media-body">
                                        <h4 class="media-heading"><a>Абакумов Олег Александрович</a></h4>
                                        <div class="feedback pull-left">
                                            <span class="pull-left text-muted">Пятница, 7 мая 2014, 9:01</span>
                                            <div class="comment-block pull-left">
                                                <span class="glyphicon glyphicon-comment"></span><span class="count">30</span>
                                            </div>
                                            <a class="pull-left">Ответить</a>
                                            <a class="pull-left">Редактировать</a>
                                            <a class="delete pull-left">Удалить</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="media">
                            <div class="media-body">
                                <h4 class="media-heading"><a href="/news/view.php">Приглашаем Вас посетить первый в Тюмени фитнес «Синяя звезда»!</a></h4>
                                <div class="pull-left text-justify">«Синяя звезда»- это гораздо больше, чем просто тренировки. Это целый комплекс эффективных услуг для Вашей стройности, красоты и здоровья. Такой подход позволяет с легкостью решать любую Вашу задачу: будь то избавление от лишних килограммов, уменьшение объемов тела или укрепление мышц.
                                    Мы понимаем, что каждая женщина – уникальна, и для каждой нужна своя программа похудения. Поэтому мы гарантируем Вам исключительно индивидуальный подход, максимум внимания и поддержки от наших специалистов.</div>
                                <div class="clearfix"></div>
                                <div class="media media-block">
                                    <img class="media-object pull-left" src="/images/no_photo_200.png" width="39px">
                                    <div class="media-body">
                                        <h4 class="media-heading"><a>Абакумов Олег Александрович</a></h4>
                                        <div class="feedback pull-left">
                                            <span class="pull-left text-muted">Пятница, 7 мая 2014, 9:01</span>
                                            <div class="comment-block pull-left">
                                                <span class="glyphicon glyphicon-comment"></span><span class="count">30</span>
                                            </div>
                                            <a class="pull-left">Ответить</a>
                                            <a class="pull-left">Редактировать</a>
                                            <a class="delete pull-left">Удалить</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="media">
                            <img class="media-object pull-left" src="/images/news_100.png" width="100px"/>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="/news/view.php">Приглашаем Вас посетить первый в Тюмени фитнес «Синяя звезда»!</a></h4>
                                <div class="pull-left text-justify">«Синяя звезда»- это гораздо больше, чем просто тренировки. Это целый комплекс эффективных услуг для Вашей стройности, красоты и здоровья. Такой подход позволяет с легкостью решать любую Вашу задачу: будь то избавление от лишних килограммов, уменьшение объемов тела или укрепление мышц.
                                    Мы понимаем, что каждая женщина – уникальна, и для каждой нужна своя программа похудения. Поэтому мы гарантируем Вам исключительно индивидуальный подход, максимум внимания и поддержки от наших специалистов.</div>
                                <div class="clearfix"></div>
                                <div class="media media-block">
                                    <img class="media-object pull-left" src="/images/no_photo_200.png" width="39px">
                                    <div class="media-body">
                                        <h4 class="media-heading"><a>Абакумов Олег Александрович</a></h4>
                                        <div class="feedback pull-left">
                                            <span class="pull-left text-muted">Пятница, 7 мая 2014, 9:01</span>
                                            <div class="comment-block pull-left">
                                                <span class="glyphicon glyphicon-comment"></span><span class="count">30</span>
                                            </div>
                                            <a class="pull-left">Ответить</a>
                                            <a class="pull-left">Редактировать</a>
                                            <a class="delete pull-left">Удалить</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </td>
    </tr>
    </table>
<?php require_once('../end.php');?>