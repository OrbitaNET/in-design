<?php $title = 'Задача - '; ?>
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
            <ul class="nav nav-pills nav-stacked" id="submenu-common" style="display: block;">
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
                <li class="active">
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 task">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 no-padding-right">
                    <h1 class="pull-left">
                        Просмотр задачи
                    </h1>
                    <div class="clearfix"></div>
                    <div class="btn-group">
                        <button class="btn btn-sm btn-default">Завершить</button>
                        <button class="btn btn-sm btn-link">Редактировать</button>
                        <button class="btn btn-sm btn-link delete">Удалить</button>
                    </div>
                    <hr class="clearfix">
                    <dl class="info">
                        <dt class="text-muted">Задача</dt>
                        <dd><strong>Заполнить профиль</strong></dd>
                        <dt class="text-muted">Крайний срок</dt>
                        <dd><span class="badge label-danger">12.05.2014 / 12.00</span></dd>
                        <dt class="text-muted">Описание</dt>
                        <dd>
                            банька по русски печное отопление отдельно парилка,моющее отделение а так-же комната отдыха уютно комфортно и не дорого 500 р. час работаем круглосуточно телефон для справок 89114313421. 271918 (сергей)
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
                        </dd>
                    </dl>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 status-block">
                    <dl class="info">
                        <dt class="text-muted">Статус</dt>
                        <dd><span class="badge label-warning">Открытая</span></dd>
                        <dt class="text-muted">Приоритет</dt>
                        <dd><span class="badge label-success">Важная</span></dd>
                        <dt class="text-muted">Постановщик</dt>
                        <dd><a>Абакумов Олег Александрович</a></dd>
                        <dt class="text-muted">Ответственный</dt>
                        <dd><a>Абакумов Олег Александрович</a></dd>
                        <dt class="text-muted">Франчайзи</dt>
                        <dd><a>ООО "Ромашка"</a></dd>
                    </dl>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
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
            </div>
        </td>
    </tr>
</table>
<?php require_once('../end.php');?>