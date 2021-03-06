<?php
/**
 * Created by PhpStorm.
 * User: abakumov
 * Date: 04.03.14
 * Time: 15:31
 */
?>

<?php $title = 'Добавление предприятий - '; ?>
<?php require_once('../begin.php');?>
    <table class="wrapper" xmlns="http://www.w3.org/1999/html">
    <tr>
    <td class="main-sidebar relative">
        <ul class="nav nav-pills nav-stacked">
            <li class="active thumbnail add" data-submenu="submenu-plus">
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
        <ul class="nav nav-pills nav-stacked" id="submenu-plus" style="display: block;">
            <li>
                <a href="/" class="show text-left">
                    Сотрудника
                </a>
            </li>
            <li class="active">
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
                <a href="/news/create.php" class="show text-left">
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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 create-franchisee">
            <h1>
                Добавить предприятие
            </h1>
            <ul class="nav nav-pills">
                <li><a>Основная информация</a><div class="triangle"></div></li>
                <li><div class="triangle-out"></div><a>Собственники</a><div class="triangle"></div></li>
                <li class="active"><div class="triangle-out"></div><a>Предприятия</a><div class="triangle"></div></li>
            </ul>
            <form role="form" class="col-lg-8 col-md-8 col-sm-8 col-xs-8 no-padding">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="bs-callout bs-callout-warning">
                        <span>Поля, отмеченые “звездочкой” обязательны для заполнения</span>
                    </div>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <label><small class="text-muted">Страна *</small></label>
                    <input type="text" class="form-control" value="Россия">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <label><small class="text-muted">Город *</small></label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <label><small class="text-muted">Улица *</small></label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <label><small class="text-muted">Номер дома *</small></label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <label><small class="text-muted">Офис</small></label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button type="button" class="btn btn-default btn-sm pull-left">Уточнить на карте</button>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" id="map">

                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6 has-error">
                    <label><small class="text-muted">День открытия</small></label>
                    <input type="text" readonly class="form-control datepicker date" data-date data-date-format="dd.mm.yyyy" data-picker-position="bottom-right">
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 phone">
                    <label><small class="text-muted">Телефон *</small></label>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-link btn-sm" type="button">&plus;&nbsp;Добавить телефон</button>
                        </span>
                    </div>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 phone ">
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-link btn-sm delete" type="button">&minus;&nbsp;Удалить телефон</button>
                        </span>
                    </div>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <label><small class="text-muted">E-mail *</small></label>
                    <input type="text" class="form-control">
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <label><small class="text-muted">Сайт *</small></label>
                    <input type="text" class="form-control">
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button type="submit" class="btn btn-default btn-sm pull-left">Сохранить</button>
                    <!--<div class="triangle"></div>-->
                </div>
            </form>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="b-error" id="franchisee-form_es_" style="display: block;">
                    <div class="b-error__header">
                        <h4 class="b-error__title">Пожалуйста исправьте ошибки</h4>
                    </div>
                    <ul class="b-error__list">
                        <li class="b-error__item">
                            <label for="Franchisee_name" class="b-error__link">Укажите название франчайзи</label>
                        </li>
                        <li class="b-error__item">
                            <label for="Franchisee_requisites" class="b-error__link">Укажите реквизиты франчайзи</label>
                        </li>
                        <li class="b-error__item">
                            <label for="Franchisee_date_connected" class="b-error__link">Укажите дату присоединения</label>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <table class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table">
                <tr class="data">
                    <td colspan="3">
                        <span>Россия, г. Санкт-Петербург, д. 12 корп. 2А, офис 13</span>
                    </td>
                </tr>
                <tr>
                    <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="text-muted"><small>Дата открытия</small></div>
                        <div class="clearfix"></div>
                        <div>23.07.1990</div>
                    </td>
                    <td class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <div class="text-muted"><small>E-mail</small></div>
                        <div class="clearfix"></div>
                        <a href="mailto:orbitanet@gmail.com">orbitanet@gmail.com</a>
                    </td>
                    <td class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <div class="text-muted"><small>Телефон</small></div>
                        <div class="clearfix"></div>
                        8 927 443 51 81<br>
                        8 927 443 51 81
                    </td>
                    <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <div class="text-muted"><small>Сайт</small></div>
                        <div class="clearfix"></div>
                        <a href="http://io-team.com" target="_blank">http://io-team.com</a>
                    </td>
                    <td class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <a class="edit-button pull-right">
                            <i></i><label class="btn btn-link btn-sm">Редактировать</label>
                        </a>
                        <div class="clearfix"></div>
                    </td>
                </tr>
            </table>
            <hr>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin0020px">
                <button type="button" class="btn btn-default btn-sm pull-left">Закончить добавление</button>
            </div>
        </div>
    </td>
    </tr>
    </table>
    <script src="//api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
<?php require_once('../end.php');?>