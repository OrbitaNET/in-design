<?php $title = 'Сообщения - '; ?>
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
                <li class="active thumbnail" data-submenu="submenu-common">
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
            <ul class="nav nav-pills nav-stacked" id="submenu-common"  style="display: block;">
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
                <li class="active">
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 im im-view">
                <ul class="nav nav-tabs">
                    <li><a>Список сообщений</a></li>
                    <li class="active"><a>Просмотр сообщений</a></li>
                    <li><a>Написать сообщение</a></li>
                    <li class="pull-right"><a>Выбрать несколько собеседников</a></li>
                </ul>
                <ul class="list-message-by-user__list col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <li class="badge">
                        Салих Фахрутдинов
                    </li>
                    <li class="badge">
                        Абакумов Олег
                    </li>
                </ul>
                <hr/>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <div class="well well-sm overflow read">
                                    <div class="media message">
                                        <img class="media-object pull-left" src="/images/no_photo_200.png" width="35px"/>
                                        <div class="media-body">
                                            <div class="pull-left author">
                                                Абакумов Олег
                                            </div>
                                            <div class="pull-right text-muted">
                                                24.02.2014 / 17:17:41
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="pull-left">
                                                о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет багао, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага
                                                <div class="bs-callout bs-callout-success margin20px0">
                                                    <div class="file-download overflow">
                                                        <a class="file-download__icon">
                                                            <img src="/images/type_of_files/png.png" alt="" width="25">
                                                        </a>
                                                        <p class="file-download__link"><a>1240835632_vyks...</a>&nbsp;(PNG, 33.9 Кб)</p>
                                                    </div>
                                                    <div class="file-download overflow">
                                                        <a class="file-download__icon">
                                                            <img src="/images/type_of_files/doc.png" alt="" width="25">
                                                        </a>
                                                        <p class="file-download__link"><a>1240835632_vyks...</a>&nbsp;(DOC, 33.9 Кб)</p>
                                                    </div>
                                                    <div class="file-download overflow">
                                                        <a class="file-download__icon">
                                                            <img src="/images/type_of_files/gif.png" alt="" width="25">
                                                        </a>
                                                        <p class="file-download__link"><a>1240835632_vyks...</a>&nbsp;(GIF, 33.9 Кб)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="well well-sm overflow read">
                                    <div class="media message">
                                        <img class="media-object pull-left" src="/images/no_photo_200.png" width="35px"/>
                                        <div class="media-body">
                                            <div class="pull-left author">
                                                Абакумов Олег
                                            </div>
                                            <div class="pull-right text-muted">
                                                24.02.2014 / 17:17:41
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="pull-left">
                                                о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет багао, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага
                                                <div class="bs-callout bs-callout-success margin20px0">
                                                    <div class="file-download overflow">
                                                        <a class="file-download__icon">
                                                            <img src="/images/type_of_files/png.png" alt="" width="25">
                                                        </a>
                                                        <p class="file-download__link"><a>1240835632_vyks...</a>&nbsp;(PNG, 33.9 Кб)</p>
                                                    </div>
                                                    <div class="file-download overflow">
                                                        <a class="file-download__icon">
                                                            <img src="/images/type_of_files/doc.png" alt="" width="25">
                                                        </a>
                                                        <p class="file-download__link"><a>1240835632_vyks...</a>&nbsp;(DOC, 33.9 Кб)</p>
                                                    </div>
                                                    <div class="file-download overflow">
                                                        <a class="file-download__icon">
                                                            <img src="/images/type_of_files/gif.png" alt="" width="25">
                                                        </a>
                                                        <p class="file-download__link"><a>1240835632_vyks...</a>&nbsp;(GIF, 33.9 Кб)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="well well-sm overflow read">
                                    <div class="media message">
                                        <img class="media-object pull-left" src="/images/no_photo_200.png" width="35px"/>
                                        <div class="media-body">
                                            <div class="pull-left author">
                                                Абакумов Олег
                                            </div>
                                            <div class="pull-right text-muted">
                                                24.02.2014 / 17:17:41
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="pull-left">
                                                о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет багао, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага о, нет бага
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="form form-message">
                    <form enableclientvalidation="1" id="im-form" action="/cabinet/im/dialog/id/1" method="post">
                        <div class="media">
                            <img class="media-object pull-left" src="/images/no_photo_200.png" width="35px"/>
                            <div class="media-body">
                                <div class="form-group">
                                    <div class="">
                                        <textarea rows="5" size="60" class="form-control" name="ImMessage[text]" id="ImMessage_text"></textarea>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="show-count-files btn btn-link btn-sm">Загружено файлов:<span>0</span></a>
                                </div>
                                <div class="pull-right add-files">
                                    <div class="js-preupload btn btn-link btn-sm js-fileapi-wrapper">
                                        <span class="glyphicon glyphicon-paperclip"></span>Прикрепить файлы
                                        <input type="file" name="filedata" multiple="">
                                    </div>
                                </div>
                                <input class="btn btn-default btn-sm writeMessage" type="submit"value="Написать">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </td>
    </tr>
</table>
<?php require_once('../end.php');?>