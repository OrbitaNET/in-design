<?php $title = 'Предприятие - '; ?>
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 enterprise">
                <p class="breadcrumbs"><small class="text-muted"><a class="text-muted" href="/cabinet/franchisee_list.php">Франчайзи</a> / <a class="text-muted" href="/cabinet/franchisee_view.php">ООО «Зуксель Интерпрайзис»</a> / </small></p>
                <div class="clearfix"></div>
                <h1 class="pull-left">
                    ул. Адмиралтейская, д.2, корп.21А, офис 123
                </h1>
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-link"><span class="glyphicon glyphicon-pencil"></span>Редактировать</button>
                </div>
                <div class="clearfix"></div>
                <p><small class="text-muted">Последние изменения 3.02.14 в 16:54</small></p>
                <div class="clearfix"></div>
                <ul class="nav nav-tabs">
                    <li class="active"><a>Предприятие</a></li>
                    <li><a>Сотрудники / <span>3</span></a></li>
                    <li><a>Задачи / <span>1</span></a></li>
                </ul>
                <dl class="dl-horizontal col-lg-12 col-md-12 col-sm-12 col-xs-12 info">
                    <dt class="text-muted col-lg-3 col-md-3 col-sm-3 col-xs-3">Статус</dt>
                    <dd class="col-lg-9 col-md-9 col-sm-9 col-xs-9"><span class="badge label-primary">Действующий</span></dd>
                    <dt class="text-muted col-lg-3 col-md-3 col-sm-3 col-xs-3">Адрес</dt>
                    <dd class="col-lg-9 col-md-9 col-sm-9 col-xs-9">ул. Адмиралтейская, д.2, корп.21А, офис 123</dd>
                    <dt class="text-muted col-lg-3 col-md-3 col-sm-3 col-xs-3">Дата открытия</dt>
                    <dd class="col-lg-9 col-md-9 col-sm-9 col-xs-9">16 января 2012 года</dd>
                    <dt class="text-muted col-lg-3 col-md-3 col-sm-3 col-xs-3">Телефон</dt>
                    <dd class="col-lg-9 col-md-9 col-sm-9 col-xs-9">8 800 200 52 52<br>8 800 200 52 53</dd>
                    <dt class="text-muted col-lg-3 col-md-3 col-sm-3 col-xs-3">E-mail предприятия</dt>
                    <dd class="col-lg-9 col-md-9 col-sm-9 col-xs-9"><a href="mailto:piter1@mail.ru">piter1@mail.ru</a></dd>
                    <dt class="text-muted col-lg-3 col-md-3 col-sm-3 col-xs-3">Сайт предприятия</dt>
                    <dd class="col-lg-9 col-md-9 col-sm-9 col-xs-9"><a href="http://mail.ru" target="_blank">http://mail.ru</a></dd>
                </dl>
                <hr class="clearfix">
                <div id="map" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
                <script src="//api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
                <div class="clearfix"></div>
                <h1>
                    Комментарии
                </h1>
                <div class="comment">
                    <div class="comment_text well">Добрый день! Меня очень заинтересовала Ваша клевая франшиза, хотел бы получить более подробную информацию. г.Ростов-на-Дону</div>
                    <div class="comment_text_triangle"></div>
                    <div class="media col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img class="media-object pull-left" src="/images/no_photo_200.png" width="39px"/>
                        <div class="media-body">
                            <h4 class="media-heading"><a>Абакумов Олег Александрович</a></h4>
                            <div class="feedback pull-left">
                                <span class="pull-left text-muted">Пятница, 7 мая 2014, 9:01</span>
                                <a class="pull-left">Ответить</a>
                                <a class="pull-left">Редактировать</a>
                                <a class="delete pull-left">Удалить</a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="comment">
                    <div class="comment_text well">Добрый день! Меня очень заинтересовала Ваша клевая франшиза, хотел бы получить более подробную информацию. г.Ростов-на-Дону</div>
                    <div class="comment_text_triangle"></div>
                    <div class="media col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <img class="media-object pull-left" src="/images/no_photo_200.png" width="39px"/>
                        <div class="media-body">
                            <h4 class="media-heading"><a>Абакумов Олег Александрович</a></h4>
                            <div class="feedback pull-left">
                                <span class="pull-left text-muted">Пятница, 7 мая 2014, 9:01</span>
                                <a class="pull-left">Ответить</a>
                                <a class="pull-left">Редактировать</a>
                                <a class="delete pull-left">Удалить</a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="comment_all">
                    <a class="show text-center">Показать все комментарии</a>
                </div>
                <div class="media col-lg-12 col-md-12 col-sm-12 col-xs-12 add_comment">
                    <img class="media-object pull-left" src="/images/no_photo_200.png" width="39px"/>
                    <div class="media-body">
                        <textarea placeholder="Комментировать..."></textarea>
                        <div class="js-preupload btn btn-link js-fileapi-wrapper">
                            <span>Прикрепить файлы</span>
                            <input type="file" name="filedata" multiple="">
                        </div>
                        <div class="clearfix"></div>
                        <button class="btn btn-default btn-sm">Ответить</button>
                    </div>
                </div>
            </div>
        </td>
    </tr>
</table>
<?php require_once('../end.php');?>