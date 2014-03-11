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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 user view">
                <h1 class="pull-left">
                    Абакумов Олег Александрович
                </h1>
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-link btn-sm"><span class="glyphicon glyphicon-pencil"></span>Редактировать</button>
                    <button type="button" class="btn btn-link btn-sm"><span class="glyphicon glyphicon-arrow-right"></span>Переместить</button>
                    <button type="button" class="delete btn btn-link btn-sm"><span class="glyphicon glyphicon-remove"></span>Удалить</button>
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
                    <li class="active"><a href="user_view.php">Лента событий</a></li>
                    <li><a href="user_view_2.php">Задачи / 24</a></li>
                </ul>
                <div class="lenta-event">
                    <div class="media">
                        <div class="media-object pull-left create_task"></div>
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
                        <div class="media-object pull-left close_task"></div>
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
                        <div class="media-object pull-left create_task"></div>
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