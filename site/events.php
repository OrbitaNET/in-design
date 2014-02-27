<?php $title = 'Лента событий - '; ?>
<?php require_once('../begin.php');?>
<table class="wrapper">
    <tr>
        <td class="main-sidebar">
            <ul class="nav nav-pills nav-stacked">
                <li class="thumbnail add" data-submenu="submenu-plus">
                    <a href="/" class="show text-center">
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
                <li class="active thumbnail" data-submenu="submenu-common">
                    <a href="/site/events.php" class="show text-center">
                        <i class="sidebar-common"></i>
                        <p>Общее</p>
                    </a>
                </li>
                <li class="thumbnail" data-submenu="submenu-company">
                    <a href="/cabinet/franchisee_list.php" class="show text-center">
                        <i class="sidebar-company"></i>
                        <p>Компания</p>
                    </a>
                </li>
                <li class="thumbnail" data-submenu="submenu-news">
                    <a href="/" class="show text-center">
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
                    <a href="/" class="show text-center">
                        <i class="sidebar-settings"></i>
                        <p>Настройки</p>
                    </a>
                </li>
            </ul>
        </td>
        <td class="second-sidebar col-lg-2 col-md-2">
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
            <ul class="nav nav-pills nav-stacked" id="submenu-common" style="display: block;">
                <li class="active">
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
                <li class="active">
                    <a href="/" class="show text-left">
                        Франчайзи
                    </a>
                </li>
                <li>
                    <a href="/" class="show text-left">
                        Сотрудники
                    </a>
                </li>
                <li>
                    <a href="/" class="show text-left">
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 events">
                <h1>
                    Лента событий
                </h1>
                <div class="filter-group-buttons">
                    <div class="btn-group pull-left" data-toggle="buttons">
                        <label class="btn btn-link btn-sm active">
                            <input type="checkbox" checked="true"> Комментарий
                        </label>
                        <label class="btn btn-link btn-sm active">
                            <input type="checkbox" checked="true"> Задача
                        </label>
                        <label class="btn btn-link btn-sm active">
                            <input type="checkbox" checked="true"> Новости
                        </label>
                        <label class="btn btn-link btn-sm active">
                            <input type="checkbox" checked="true"> Компания
                        </label>
                        <label class="btn btn-link btn-sm active">
                            <input type="checkbox" checked="true"> Руководства
                        </label>
                        <label class="btn btn-link btn-sm active">
                            <input type="checkbox" checked="true"> Университет
                        </label>
                    </div>
                    <div class="getPeopleList pull-right">
                        <i></i><label class="btn btn-link btn-sm">Выбрать людей</label>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="lenta-event">
                    <div class="media">
                        <div class="media-object pull-left add-task"></div>
                        <div class="media-body">
                            <h4 class="media-heading">Поставлена задача <a>Заплатить роялти</a></h4>
                            <div class="bs-callout bs-callout-success">
                                Срочно, иначе отключат нас от нашего любимого интранета ФоксБокс. И будет жопа в нашей компании. Счета возьми в бухгалтерии.
                                <div class="help-block"><small>+ вложенные файлы</small></div>
                            </div>
                            <p>Автор <a>Понин Дмитрий Владимирович</a></p>
                            <p>Ответственный <a>Понин Дмитрий Владимирович</a></p>
                            <div class="help-block"><p><small>Пятница, 7 мая 2014, 9:01</small></p></div>
                            <div class="feedback pull-left">
                                <div class="comment-block pull-left">
                                    <span class="glyphicon glyphicon-comment"></span><span class="count">30</span>
                                </div>
                                <a class="pull-left">Комментировать</a>
                                <a class="pull-left">Ответить</a>
                                <a class="delete pull-left">Удалить</a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-object pull-left ready-task"></div>
                        <div class="media-body">
                            <h4 class="media-heading">Выполнена задача <a>Заплатить роялти</a></h4>
                            <div class="bs-callout bs-callout-success">
                                Срочно, иначе отключат нас от нашего любимого интранета ФоксБокс. И будет жопа в нашей компании. Счета возьми в бухгалтерии.
                                <div class="help-block"><small>+ вложенные файлы</small></div>
                            </div>
                            <p>Автор <a>Понин Дмитрий Владимирович</a></p>
                            <p>Ответственный <a>Понин Дмитрий Владимирович</a></p>
                            <div class="help-block"><p><small>Пятница, 7 мая 2014, 9:01</small></p></div>
                            <div class="feedback pull-left">
                                <div class="comment-block pull-left">
                                    <span class="glyphicon glyphicon-comment"></span><span class="count">30</span>
                                </div>
                                <a class="pull-left">Комментировать</a>
                                <a class="pull-left">Ответить</a>
                                <a class="delete pull-left">Удалить</a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-object pull-left edit-task"></div>
                        <div class="media-body">
                            <h4 class="media-heading">Изменена задача <a>Заплатить роялти</a></h4>
                            <div class="bs-callout bs-callout-success">
                                Срочно, иначе отключат нас от нашего любимого интранета ФоксБокс. И будет жопа в нашей компании. Счета возьми в бухгалтерии.
                                <div class="help-block"><small>+ вложенные файлы</small></div>
                            </div>
                            <p>Автор <a>Понин Дмитрий Владимирович</a></p>
                            <p>Ответственный <a>Понин Дмитрий Владимирович</a></p>
                            <div class="help-block"><p><small>Пятница, 7 мая 2014, 9:01</small></p></div>
                            <div class="feedback pull-left">
                                <div class="comment-block pull-left">
                                    <span class="glyphicon glyphicon-comment"></span><span class="count">30</span>
                                </div>
                                <a class="pull-left">Комментировать</a>
                                <a class="pull-left">Ответить</a>
                                <a class="delete pull-left">Удалить</a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </td>
    </tr>
</table>
<?php require_once('../end.php');?>