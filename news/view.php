<?php
/**
 * Created by PhpStorm.
 * User: abakumov
 * Date: 05.03.14
 * Time: 14:08
 */
?>

<?php $title = 'Новости - '; ?>
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
            <li class="thumbnail" data-submenu="submenu-company">
                <a class="show text-center">
                    <i class="sidebar-company"></i>
                    <p>Компания</p>
                </a>
            </li>
            <li class="active thumbnail" data-submenu="submenu-news">
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
        <ul class="nav nav-pills nav-stacked" id="submenu-company">
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
        <ul class="nav nav-pills nav-stacked" id="submenu-news" style="display: block;">
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
            <li class="active">
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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 news-view">
            <h1 class="pull-left">
                «Летающий кенгуру» сократит пять тысяч рабочих мест
            </h1>
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-link btn-sm"><span class="glyphicon glyphicon-pencil"></span>Редактировать</button>
                <button type="button" class="btn btn-link btn-sm delete"><span class="glyphicon glyphicon-remove"></span>Удалить</button>
            </div>
            <div class="clearfix"></div>
            <div class="margin20px0 news-block">
                <img src="/images/news_280.png" class="pull-left">
                <div class="news-text">
                    <p>Крупнейшая авиакомпания Австралии Qantas в ближайшие три года сократит пять тысяч рабочих мест, или около 15 процентов от всего персонала. Об этом говорится в официальном пресс-релизе перевозчика.</p>
                    <p>Кроме того, Qantas намерена заморозить зарплаты оставшимся сотрудникам, а также продать более 50 устаревших самолетов. В результате мер экономии компания рассчитывает к 2017 году снизить издержки в общей сложности на два миллиарда австралийских долларов (1,8 миллиарда долларов США).</p>
                    <p>27 февраля в Qantas объявили финансовые результаты работы за вторую половину 2013 года. Доналоговый убыток перевозчика за этот период составил 252 миллиона австралийских долларов, выручка сократилась на четыре процента до 7,9 миллиарда долларов.</p>
                    <p>Как заявил генеральный директор Qantas Алан Джойс (Alan Joyce), подобный результат является неприемлемым для компании, поэтому руководство перевозчика вынуждено было принимать жесткие решения. Как указывает Agence France-Presse, в условиях экономии зарплата самого Джойса будет сокращена на 36 процентов.</p>
                </div>
                <img src="/images/news_280.png" class="pull-right">
                <div class="news-text">
                    <p>Крупнейшая авиакомпания Австралии Qantas в ближайшие три года сократит пять тысяч рабочих мест, или около 15 процентов от всего персонала. Об этом говорится в официальном пресс-релизе перевозчика.</p>
                    <p>Кроме того, Qantas намерена заморозить зарплаты оставшимся сотрудникам, а также продать более 50 устаревших самолетов. В результате мер экономии компания рассчитывает к 2017 году снизить издержки в общей сложности на два миллиарда австралийских долларов (1,8 миллиарда долларов США).</p>
                    <p>27 февраля в Qantas объявили финансовые результаты работы за вторую половину 2013 года. Доналоговый убыток перевозчика за этот период составил 252 миллиона австралийских долларов, выручка сократилась на четыре процента до 7,9 миллиарда долларов.</p>
                    <p>Как заявил генеральный директор Qantas Алан Джойс (Alan Joyce), подобный результат является неприемлемым для компании, поэтому руководство перевозчика вынуждено было принимать жесткие решения. Как указывает Agence France-Presse, в условиях экономии зарплата самого Джойса будет сокращена на 36 процентов.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="media media-block">
                <img class="media-object pull-left" src="/images/no_photo_200.png" width="39px">
                <div class="media-body">
                    <h4 class="media-heading"><a>Абакумов Олег Александрович</a></h4>
                    <div class="feedback pull-left">
                        <span class="pull-left text-muted">Пятница, 7 мая 2014, 9:01</span>
                        <div class="comment-block pull-left">
                            <span class="glyphicon glyphicon-comment"></span><span class="count">30</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr/>
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
                    <button class="btn btn-default btn-sm">Ответить</button>
                </div>
            </div>
        </div>
    </td>
    </tr>
    </table>
<?php require_once('../end.php');?>