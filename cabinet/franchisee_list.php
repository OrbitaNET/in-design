<?php $title = 'Франчайзи - '; ?>
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
            <ul class="nav nav-pills nav-stacked" id="submenu-company"  style="display: block;">
                <li class="active">
                    <a href="/cabinet/franchisee_list.php" class="show text-left">
                        Франчайзи
                    </a>
                </li>
                <li>
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 franchisee_list">
                <h1>
                    Франчайзи
                </h1>
                <ul class="nav nav-tabs">
                    <li class="active"><a>Действующие / <span>8</span></a></li>
                    <li><a>Потенциальные / <span>3</span></a></li>
                    <li><a>Бывшие / <span>1</span></a></li>
                </ul>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="col-lg-7 col-md-7 col-sm-6 col-xs-7">
                                <a id="sort-by-name" class="pull-left table__link_header sorted-asc" href="/cabinet/franchisee/index/status/1/Franchisee_sort/name">Название (А-Я)</a>            <form class="form-inline" role="form">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Поиск..." type="text" name="Franchisee[name]" id="Franchisee_name">
                                    </div>
                                </form>
                            </th>
                            <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                <a id="sort-by-city" class="pull-left table__link_header sorted-asc" href="/cabinet/franchisee/index/status/1/Franchisee_sort/city">Город</a>
                            </th>
                            <th class="col-lg-3 col-md-3 col-sm-4 col-xs-3">

                            </th>
                        </tr>
                    </thead>
                    <tr>
                        <td class="col-lg-7 col-md-7 col-sm-6 col-xs-7">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="/cabinet/franchisee_view.php">Абакумов Олег Александрович</a></h4>
                                    <div class="address pull-left"><a href="/cabinet/enterprise.php">Россия, г.Тюмень, ул.Домостроителей, д.12а</a></div>
                                    <div class="clearfix"></div>
                                    <div class="address pull-left"><a href="/cabinet/enterprise.php">Россия, г.Тюмень, ул.Ремесленников, д.24</a></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </td>
                        <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            Кострома
                        </td>
                        <td class="col-lg-3 col-md-3 col-sm-4 col-xs-3">
                            <div class="edit-button pull-right">
                                <i></i><label class="btn btn-link btn-sm">Редактировать</label>
                            </div>
                            <div class="clearfix"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-7 col-md-7 col-sm-6 col-xs-7">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="/cabinet/franchisee_view.php">Абакумов Олег Александрович</a></h4>
                                    <div class="address pull-left"><a href="/cabinet/enterprise.php">Россия, г.Тюмень, ул.Домостроителей, д.12а</a></div>
                                    <div class="clearfix"></div>
                                    <div class="address pull-left"><a href="/cabinet/enterprise.php">Россия, г.Тюмень, ул.Ремесленников, д.24</a></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </td>
                        <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            Кострома
                        </td>
                        <td class="col-lg-3 col-md-3 col-sm-4 col-xs-3">
                            <div class="edit-button pull-right">
                                <i></i><label class="btn btn-link btn-sm">Редактировать</label>
                            </div>
                            <div class="clearfix"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-7 col-md-7 col-sm-6 col-xs-7">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="/cabinet/franchisee_view.php">Абакумов Олег Александрович</a></h4>
                                    <div class="address pull-left"><a href="/cabinet/enterprise.php">Россия, г.Тюмень, ул.Домостроителей, д.12а</a></div>
                                    <div class="clearfix"></div>
                                    <div class="address pull-left"><a href="/cabinet/enterprise.php">Россия, г.Тюмень, ул.Ремесленников, д.24</a></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </td>
                        <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            Кострома
                        </td>
                        <td class="col-lg-3 col-md-3 col-sm-4 col-xs-3">
                            <div class="edit-button pull-right">
                                <i></i><label class="btn btn-link btn-sm">Редактировать</label>
                            </div>
                            <div class="clearfix"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-7 col-md-7 col-sm-6 col-xs-7">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="/cabinet/franchisee_view.php">Абакумов Олег Александрович</a></h4>
                                    <div class="address pull-left"><a href="/cabinet/enterprise.php">Россия, г.Тюмень, ул.Домостроителей, д.12а</a></div>
                                    <div class="clearfix"></div>
                                    <div class="address pull-left"><a href="/cabinet/enterprise.php">Россия, г.Тюмень, ул.Ремесленников, д.24</a></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </td>
                        <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            Кострома
                        </td>
                        <td class="col-lg-3 col-md-3 col-sm-4 col-xs-3">
                            <div class="edit-button pull-right">
                                <i></i><label class="btn btn-link btn-sm">Редактировать</label>
                            </div>
                            <div class="clearfix"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-7 col-md-7 col-sm-6 col-xs-7">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="/cabinet/franchisee_view.php">Абакумов Олег Александрович</a></h4>
                                    <div class="address pull-left"><a href="/cabinet/enterprise.php">Россия, г.Тюмень, ул.Домостроителей, д.12а</a></div>
                                    <div class="clearfix"></div>
                                    <div class="address pull-left"><a href="/cabinet/enterprise.php">Россия, г.Тюмень, ул.Ремесленников, д.24</a></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </td>
                        <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            Кострома
                        </td>
                        <td class="col-lg-3 col-md-3 col-sm-4 col-xs-3">
                            <div class="edit-button pull-right">
                                <i></i><label class="btn btn-link btn-sm">Редактировать</label>
                            </div>
                            <div class="clearfix"></div>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>
<?php require_once('../end.php');?>