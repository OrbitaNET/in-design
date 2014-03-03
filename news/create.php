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
                <ul class="nav nav-pills nav-stacked" id="submenu-company"  style="display: block;">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 news">
                    <h1>
                        Добавить новость
                    </h1>
                    <form role="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Категория новости</label>
                                <div id="dd" class="wrapper-dropdown-2" tabindex="1">Sign in with
                                    <ul class="dropdown">
                                        <li class="active"><a href="#"><i class="icon-twitter icon-large"></i>Twitter</a></li>
                                        <li><a href="#"><i class="icon-github icon-large"></i>Github</a></li>
                                        <li><a href="#"><i class="icon-facebook icon-large"></i>Facebook</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </td>
        </tr>
    </table>
    <script type="text/javascript" src="/js/dropdown/modernizr.custom.js"></script>
    <script type="text/javascript">
        function DropDown(el) {
            this.dd = el;
            this.initEvents();
        }
        DropDown.prototype = {
            initEvents : function() {
                var obj = this;

                obj.dd.on('click', function(event){
                    $(this).toggleClass('active');
                    event.stopPropagation();
                });
            }
        }

        $(function() {

            var dd = new DropDown( $('#dd') );

            $(document).click(function() {
                // all dropdowns
                $('.wrapper-dropdown-2').removeClass('active');
            });

        });
    </script>


<?php require_once('../end.php');?>