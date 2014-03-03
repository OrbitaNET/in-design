<?php
/**
 * Created by PhpStorm.
 * User: abakumov
 * Date: 03.03.14
 * Time: 9:21
 */

?>

<?php $title = 'Сотрудники - '; ?>
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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 users">
            <h1>
                Сотрудники
            </h1>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="col-lg-6 col-md-6 col-sm-5 col-xs-6">
                            <a id="sort-by-name" class="pull-left table__link_header sorted-asc" href="/cabinet/franchisee/index/status/1/Franchisee_sort/name">Название (А-Я)</a>            <form class="form-inline" role="form">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Поиск..." type="text" name="User[name]" id="User_name">
                                </div>
                            </form>
                        </th>
                        <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            E-mail
                        </th>
                        <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            Телефон
                        </th>
                        <th class="col-lg-2 col-md-2 col-sm-3 col-xs-2">

                        </th>
                    </tr>
                </thead>
                <tr>
                    <td class="col-lg-6 col-md-6 col-sm-5 col-xs-6">
                        <div class="media">
                            <img class="media-object pull-left" src="/images/no_photo_200.png" width="35px"/>
                            <div class="media-body">
                                <h4 class="media-heading"><a>Абакумов Олег Александрович</a></h4>
                                <div class="text-muted pull-left">Охранник</div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </td>
                    <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <a href="mailto:orbitanet90@gmail.com">orbitanet90@gmail.com</a>
                    </td>
                    <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        8 (927) 443 51 81
                    </td>
                    <td class="col-lg-2 col-md-2 col-sm-3 col-xs-2">
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