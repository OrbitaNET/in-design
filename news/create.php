<?php
/**
 * Created by PhpStorm.
 * User: abakumov
 * Date: 03.03.14
 * Time: 16:58
 */

?>

<?php $title = 'Добавление новости - '; ?>
<?php require_once('../begin.php');?>
    <table class="wrapper">
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
                        <a href="/news/create.php" class="show text-left">
                            Сообщение
                        </a>
                    </li>
                    <li class="active">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 create-news">
                    <h1>
                        Добавить новость
                    </h1>
                    <hr/>
                    <form role="form">
                        <div class="form-group">
                            <label><small class="text-muted">Категория новости *</small></label>
                            <select class="form-control">
                                <option value="1">Новости франчайзинга</option>
                                <option value="2">Новости компании</option>
                                <option value="3">Черновик</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><small class="text-muted">Заголовок *</small></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label><small class="text-muted">Анонс *</small></label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label><small class="text-muted">Фото анонса</small></label>
                            <div class="js-preupload btn btn-default btn-sm js-fileapi-wrapper">
                                <span>Загрузить</span>
                                <input type="file" name="filedata" multiple="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label><small class="text-muted">Текст новости *</small></label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default btn-sm">Сохранить</button>
                    </form>
                </div>
            </td>
        </tr>
    </table>
    <script type="text/javascript" src="/js/selectize.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(function() {
                $('select').selectize({
                    create: true
                });
            });
        });
    </script>


<?php require_once('../end.php');?>