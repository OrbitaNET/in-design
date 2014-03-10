<?php $title = 'Дни рождения - '; ?>
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
                <li class="active thumbnail" data-submenu="submenu-company">
                    <a class="show text-center">
                        <i class="sidebar-company"></i>
                        <p>Компания</p>
                    </a>
                </li>
                <li class="thumbnail" data-submenu="submenu-news">
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
            <a class="text-center toTop"><p class="glyphicon glyphicon-chevron-up"></p>Наверх</a>
        </td>
        <td class="second-sidebar col-lg-2 col-md-2 active relative"  style="display: table-cell;">
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
                    <a href="/site/events.php"  class="show text-left">
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
            <ul class="nav nav-pills nav-stacked" id="submenu-company"  style="display: block;">
                <li>
                    <a href="/cabinet/franchisee_list.php" class="show text-left">
                        Франчайзи
                    </a>
                </li>
                <li>
                    <a href="/cabinet/users.php" class="show text-left">
                        Сотрудники
                    </a>
                </li>
                <li class="active">
                    <a href="/cabinet/birthday.php" class="show text-left">
                        Дни рождения
                    </a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-stacked" id="submenu-news">
                <li>
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 birthday">
                <h1>
                    Дни рождения
                </h1>
                <table class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table">
                    <tr class="data">
                        <td colspan="3">
                            <span>Сегодня</span>
                        </td>
                    </tr>
                    <tr class="hover">
                        <td class="col-lg-5 col-md-5 col-sm-4 col-xs-5">
                            <div class="media">
                                <img class="media-object pull-left" src="/images/no_photo_200.png" width="35px"/>
                                <div class="media-body">
                                    <h4 class="media-heading"><a>Абакумов Олег Александрович</a></h4>
                                    <div class="pull-left">24 года</div><div class="text-muted pull-left"><small>(23.07.1990)</small></div>
                                    <div class="clearfix"></div>
                                    <div class="pull-left"><a class="text-muted">ООО "Ромашка"</a></div>
                                    <div class="clearfix"></div>
                                    <div class="text-muted pull-left">Охранник</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </td>
                        <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="text-muted">Гороскоп</div>
                            <div class="clearfix"></div>
                            Обезьяна, имеющая влияние. Сможет удержать Тигра за хвост
                        </td>
                        <td class="col-lg-3 col-md-3 col-sm-4 col-xs-3">
                            <div class="pull-left phone">
                                <span class="glyphicon glyphicon-phone"></span><label class="btn btn-link btn-sm">8 (927) 443 51 81</label>
                            </div>
                            <div class="clearfix"></div>
                            <a class="pull-left write-message">
                                <i></i><label class="btn btn-link btn-sm">Написать сообщение</label>
                            </a>
                            <div class="clearfix"></div>
                        </td>
                    </tr>
                    <tr class="data">
                        <td colspan="3">
                            <span>Завтра</span>
                        </td>
                    </tr>
                    <tr class="hover">
                        <td class="col-lg-5 col-md-5 col-sm-4 col-xs-5">
                            <div class="media">
                                <img class="media-object pull-left" src="/images/no_photo_200.png" width="35px"/>
                                <div class="media-body">
                                    <h4 class="media-heading"><a>Абакумов Олег Александрович</a></h4>
                                    <div class="pull-left">24 года</div><div class="text-muted pull-left"><small>(23.07.1990)</small></div>
                                    <div class="clearfix"></div>
                                    <div class="pull-left"><a class="text-muted">ООО "Ромашка"</a></div>
                                    <div class="clearfix"></div>
                                    <div class="text-muted pull-left">Охранник</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </td>
                        <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="text-muted">Гороскоп</div>
                            <div class="clearfix"></div>
                            Обезьяна, имеющая влияние. Сможет удержать Тигра за хвост
                        </td>
                        <td class="col-lg-3 col-md-3 col-sm-4 col-xs-3">
                            <div class="pull-left phone">
                                <span class="glyphicon glyphicon-phone"></span><label class="btn btn-link btn-sm">8 (927) 443 51 81</label>
                            </div>
                            <div class="clearfix"></div>
                            <a class="pull-left write-message">
                                <i></i><label class="btn btn-link btn-sm">Написать сообщение</label>
                            </a>
                            <div class="clearfix"></div>
                        </td>
                    </tr>
                    <tr class="hover">
                        <td class="col-lg-5 col-md-5 col-sm-4 col-xs-5">
                            <div class="media">
                                <img class="media-object pull-left" src="/images/no_photo_200.png" width="35px"/>
                                <div class="media-body">
                                    <h4 class="media-heading"><a>Абакумов Олег Александрович</a></h4>
                                    <div class="pull-left">24 года</div><div class="text-muted pull-left"><small>(23.07.1990)</small></div>
                                    <div class="clearfix"></div>
                                    <div class="pull-left"><a class="text-muted">ООО "Ромашка"</a></div>
                                    <div class="clearfix"></div>
                                    <div class="text-muted pull-left">Охранник</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </td>
                        <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="text-muted">Гороскоп</div>
                            <div class="clearfix"></div>
                            Обезьяна, имеющая влияние. Сможет удержать Тигра за хвост
                        </td>
                        <td class="col-lg-3 col-md-3 col-sm-4 col-xs-3">
                            <div class="pull-left phone">
                                <span class="glyphicon glyphicon-phone"></span><label class="btn btn-link btn-sm">8 (927) 443 51 81</label>
                            </div>
                            <div class="clearfix"></div>
                            <a class="pull-left write-message">
                                <i></i><label class="btn btn-link btn-sm">Написать сообщение</label>
                            </a>
                            <div class="clearfix"></div>
                        </td>
                    </tr>
                    <tr class="hover">
                        <td class="col-lg-5 col-md-5 col-sm-4 col-xs-5">
                            <div class="media">
                                <img class="media-object pull-left" src="/images/no_photo_200.png" width="35px"/>
                                <div class="media-body">
                                    <h4 class="media-heading"><a>Абакумов Олег Александрович</a></h4>
                                    <div class="pull-left">24 года</div><div class="text-muted pull-left"><small>(23.07.1990)</small></div>
                                    <div class="clearfix"></div>
                                    <div class="pull-left"><a class="text-muted">ООО "Ромашка"</a></div>
                                    <div class="clearfix"></div>
                                    <div class="text-muted pull-left">Охранник</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </td>
                        <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="text-muted">Гороскоп</div>
                            <div class="clearfix"></div>
                            Обезьяна, имеющая влияние. Сможет удержать Тигра за хвост
                        </td>
                        <td class="col-lg-3 col-md-3 col-sm-4 col-xs-3">
                            <div class="pull-left phone">
                                <span class="glyphicon glyphicon-phone"></span><label class="btn btn-link btn-sm">8 (927) 443 51 81</label>
                            </div>
                            <div class="clearfix"></div>
                            <a class="pull-left write-message">
                                <i></i><label class="btn btn-link btn-sm">Написать сообщение</label>
                            </a>
                            <div class="clearfix"></div>
                        </td>
                    </tr>
                    <tr class="data">
                        <td colspan="3">
                            <span>25 мая</span><span>через 5 дней</span>
                        </td>
                    </tr>
                    <tr class="hover">
                        <td class="col-lg-5 col-md-5 col-sm-4 col-xs-5">
                            <div class="media">
                                <img class="media-object pull-left" src="/images/no_photo_200.png" width="35px"/>
                                <div class="media-body">
                                    <h4 class="media-heading"><a>Абакумов Олег Александрович</a></h4>
                                    <div class="pull-left">24 года</div><div class="text-muted pull-left"><small>(23.07.1990)</small></div>
                                    <div class="clearfix"></div>
                                    <div class="pull-left"><a class="text-muted">ООО "Ромашка"</a></div>
                                    <div class="clearfix"></div>
                                    <div class="text-muted pull-left">Охранник</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </td>
                        <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="text-muted">Гороскоп</div>
                            <div class="clearfix"></div>
                            Обезьяна, имеющая влияние. Сможет удержать Тигра за хвост
                        </td>
                        <td class="col-lg-3 col-md-3 col-sm-4 col-xs-3">
                            <div class="pull-left phone">
                                <span class="glyphicon glyphicon-phone"></span><label class="btn btn-link btn-sm">8 (927) 443 51 81</label>
                            </div>
                            <div class="clearfix"></div>
                            <a class="pull-left write-message">
                                <i></i><label class="btn btn-link btn-sm">Написать сообщение</label>
                            </a>
                            <div class="clearfix"></div>
                        </td>
                    </tr>
                    <tr class="hover">
                        <td class="col-lg-5 col-md-5 col-sm-4 col-xs-5">
                            <div class="media">
                                <img class="media-object pull-left" src="/images/no_photo_200.png" width="35px"/>
                                <div class="media-body">
                                    <h4 class="media-heading"><a>Абакумов Олег Александрович</a></h4>
                                    <div class="pull-left">24 года</div><div class="text-muted pull-left"><small>(23.07.1990)</small></div>
                                    <div class="clearfix"></div>
                                    <div class="pull-left"><a class="text-muted">ООО "Ромашка"</a></div>
                                    <div class="clearfix"></div>
                                    <div class="text-muted pull-left">Охранник</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </td>
                        <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="text-muted">Гороскоп</div>
                            <div class="clearfix"></div>
                            Обезьяна, имеющая влияние. Сможет удержать Тигра за хвост
                        </td>
                        <td class="col-lg-3 col-md-3 col-sm-4 col-xs-3">
                            <div class="pull-left phone">
                                <span class="glyphicon glyphicon-phone"></span><label class="btn btn-link btn-sm">8 (927) 443 51 81</label>
                            </div>
                            <div class="clearfix"></div>
                            <a class="pull-left write-message">
                                <i></i><label class="btn btn-link btn-sm">Написать сообщение</label>
                            </a>
                            <div class="clearfix"></div>
                        </td>
                    </tr>
                    <tr class="hover">
                        <td class="col-lg-5 col-md-5 col-sm-4 col-xs-5">
                            <div class="media">
                                <img class="media-object pull-left" src="/images/no_photo_200.png" width="35px"/>
                                <div class="media-body">
                                    <h4 class="media-heading"><a>Абакумов Олег Александрович</a></h4>
                                    <div class="pull-left">24 года</div><div class="text-muted pull-left"><small>(23.07.1990)</small></div>
                                    <div class="clearfix"></div>
                                    <div class="pull-left"><a class="text-muted">ООО "Ромашка"</a></div>
                                    <div class="clearfix"></div>
                                    <div class="text-muted pull-left">Охранник</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </td>
                        <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="text-muted">Гороскоп</div>
                            <div class="clearfix"></div>
                            Обезьяна, имеющая влияние. Сможет удержать Тигра за хвост
                        </td>
                        <td class="col-lg-3 col-md-3 col-sm-4 col-xs-3">
                            <div class="pull-left phone">
                                <span class="glyphicon glyphicon-phone"></span><label class="btn btn-link btn-sm">8 (927) 443 51 81</label>
                            </div>
                            <div class="clearfix"></div>
                            <a class="pull-left write-message">
                                <i></i><label class="btn btn-link btn-sm">Написать сообщение</label>
                            </a>
                            <div class="clearfix"></div>
                        </td>
                    </tr>
                    <tr class="data">
                        <td colspan="3">
                            <span>26 мая</span><span>через 6 дней</span>
                        </td>
                    </tr>
                    <tr class="hover">
                        <td class="col-lg-5 col-md-5 col-sm-4 col-xs-5">
                            <div class="media">
                                <img class="media-object pull-left" src="/images/no_photo_200.png" width="35px"/>
                                <div class="media-body">
                                    <h4 class="media-heading"><a>Абакумов Олег Александрович</a></h4>
                                    <div class="pull-left">24 года</div><div class="text-muted pull-left"><small>(23.07.1990)</small></div>
                                    <div class="clearfix"></div>
                                    <div class="pull-left"><a class="text-muted">ООО "Ромашка"</a></div>
                                    <div class="clearfix"></div>
                                    <div class="text-muted pull-left">Охранник</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </td>
                        <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="text-muted">Гороскоп</div>
                            <div class="clearfix"></div>
                            Обезьяна, имеющая влияние. Сможет удержать Тигра за хвост
                        </td>
                        <td class="col-lg-3 col-md-3 col-sm-4 col-xs-3">
                            <div class="pull-left phone">
                                <span class="glyphicon glyphicon-phone"></span><label class="btn btn-link btn-sm">8 (927) 443 51 81</label>
                            </div>
                            <div class="clearfix"></div>
                            <a class="pull-left write-message">
                                <i></i><label class="btn btn-link btn-sm">Написать сообщение</label>
                            </a>
                            <div class="clearfix"></div>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>
<?php require_once('../end.php');?>