<?php $title = 'Франчайзи - '; ?>
<?php require_once('../begin.php'); ?>
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
        <ul class="nav nav-pills nav-stacked" id="submenu-company" style="display: block;">
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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 user view">
            <h1 class="pull-left">
                Абакумов Олег Александрович
            </h1>

            <div class="btn-group pull-right">
                <button type="button" class="btn btn-link btn-sm"><span class="glyphicon glyphicon-pencil"></span>Редактировать
                </button>
                <button type="button" class="btn btn-link btn-sm"><span class="glyphicon glyphicon-arrow-right"></span>Переместить
                </button>
                <button type="button" class="delete btn btn-link btn-sm"><span
                        class="glyphicon glyphicon-remove"></span>Удалить
                </button>
            </div>
            <div class="clearfix"></div>
            <div class="media col-lg-12 col-md-12 col-sm-12 col-xs-12 user">
                <img class="media-object pull-left" src="/images/no_photo_200.png" width="100px">

                <div class="media-body">
                    <dl class="dl-horizontal col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <dt class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4">Должность</dt>
                        <dd class="col-lg-8 col-md-8 col-sm-8 col-xs-8">Старший менеджер</dd>
                        <div class="clearfix"></div>
                        <dt class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4">День рождения</dt>
                        <dd class="col-lg-8 col-md-8 col-sm-8 col-xs-8">16 января 2012 года</dd>
                        <div class="clearfix"></div>
                        <dt class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4">Личный E-mail</dt>
                        <dd class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><a href="mailto:index@brosko.ru">index@brosko.ru</a></dd>
                        <div class="clearfix"></div>
                        <dt class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4">Телефон</dt>
                        <dd class="col-lg-8 col-md-8 col-sm-8 col-xs-8">+7 927 443 51 81<br>+7 927 443 51 81</dd>
                        <div class="clearfix"></div>
                        <dt class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4">Изменение информации</dt>
                        <dd class="col-lg-8 col-md-8 col-sm-8 col-xs-8">16 января 2014 года / 15.00</dd>
                        <div class="clearfix"></div>
                        <dt class="text-muted col-lg-4 col-md-4 col-sm-4 col-xs-4">Время последнего входа</dt>
                        <dd class="col-lg-8 col-md-8 col-sm-8 col-xs-8">16 января 2014 года / 15.00</dd>
                    </dl>
                </div>
            </div>
            <ul class="nav nav-tabs">
                <li><a href="user_view.php">Лента событий</a></li>
                <li class="active"><a href="user_view_2.php">Задачи / 24</a></li>
            </ul>
            <div class="filter-group-buttons overflow margin0020px">
                <div class="btn-group pull-left">
                    <button class="btn btn-link btn-sm active">Текущие / 12</button>
                    <button class="btn btn-link btn-sm">Будущие / 12</button>
                    <button class="btn btn-link btn-sm">Завершенные / 12</button>
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                            <a id="sort-by-name" class="pull-left table__link_header sorted-asc"
                               href="/cabinet/franchisee/index/status/1/Franchisee_sort/name">Название (А-Я)</a>

                            <form class="form-inline" role="form">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Поиск..." type="text" name="Franchisee[name]"
                                           id="Franchisee_name">
                                </div>
                            </form>
                        </th>
                        <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <a id="sort-by-city" class="pull-left table__link_header sorted-asc"
                               href="/cabinet/franchisee/index/status/1/Franchisee_sort/city">Крайний срок</a>
                        </th>
                        <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <a id="sort-by-city" class="pull-left table__link_header sorted-asc"
                               href="/cabinet/franchisee/index/status/1/Franchisee_sort/city">Постановщик</a>
                        </th>
                        <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <a id="sort-by-city" class="pull-left table__link_header sorted-asc"
                               href="/cabinet/franchisee/index/status/1/Franchisee_sort/city">Отвественный</a>
                        </th>
                        <th class="col-lg-1 col-md-1 col-sm-1 col-xs-1">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                            <a>Заполнить форму</a>
                        </td>
                        <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            21.07.2014 / 19.00
                        </td>
                        <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <a>Абакумов Олег Александрович</a>
                        </td>
                        <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <a>Абакумов Олег Александрович</a>
                        </td>
                        <td class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                            <button class="btn btn-default btn-sm"><span class="glyphicon glyphicon-align-justify"></span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                            <a>Заполнить форму</a>
                        </td>
                        <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            21.07.2014 / 19.00
                        </td>
                        <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <a>Абакумов Олег Александрович</a>
                        </td>
                        <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <a>Абакумов Олег Александрович</a>
                        </td>
                        <td class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                            <button class="btn btn-default btn-sm"><span class="glyphicon glyphicon-align-justify"></span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                            <a>Заполнить форму</a>
                        </td>
                        <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            21.07.2014 / 19.00
                        </td>
                        <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <a>Абакумов Олег Александрович</a>
                        </td>
                        <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <a>Абакумов Олег Александрович</a>
                        </td>
                        <td class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                            <button class="btn btn-default btn-sm"><span class="glyphicon glyphicon-align-justify"></span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                            <a>Заполнить форму</a>
                        </td>
                        <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            21.07.2014 / 19.00
                        </td>
                        <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <a>Абакумов Олег Александрович</a>
                        </td>
                        <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <a>Абакумов Олег Александрович</a>
                        </td>
                        <td class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                            <button class="btn btn-default btn-sm"><span class="glyphicon glyphicon-align-justify"></span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="clearfix"></div>
        </div>
    </td>
    </tr>
    </table>
<?php require_once('../end.php'); ?>