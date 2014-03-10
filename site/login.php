<?php $title = 'Вход - '; ?>
    <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <title><?= $title; ?>Броско Фитнес - FoxBox.Франчайзинг</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link rel="stylesheet/less" href="/less/bootstrap.less?v=<?= time(); ?>">

        <link rel="apple-touch-icon" sizes="57x57" href="http://brosko.ru/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="http://brosko.ru/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="http://brosko.ru/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="http://brosko.ru/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="http://brosko.ru/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="http://brosko.ru/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="http://brosko.ru/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="http://brosko.ru/apple-touch-icon-152x152.png">
        <link rel="icon" type="image/png" href="http://brosko.ru/favicon-196x196.png" sizes="196x196">
        <link rel="icon" type="image/png" href="http://brosko.ru/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="http://brosko.ru/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="http://brosko.ru/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="http://brosko.ru/favicon-16x16.png" sizes="16x16">
        <link rel="shortcut icon" href="http://brosko.ru/favicon.ico">

        <script type="text/javascript" src="/js/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="/js/selectize.js"></script>
        <script type="text/javascript" src="/js/less-1.6.3.min.js"></script>
        <script type="text/javascript" src="/js/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
        <script type="text/javascript" src="/js/datetimepicker/js/locales/bootstrap-datetimepicker.ru.js"></script>

        <link rel="stylesheet" type="text/css" href="/css/selectize.bootstrap3.css">
        <link rel="stylesheet" type="text/css" href="/js/datetimepicker/css/bootstrap-datetimepicker.css">
        <link rel="stylesheet" type="text/css" href="/css/checkbox.css">
    </head>
    <body>
        <div class="background"></div>
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 wrap">
            <form class="b-signin" id="login-form" action="/site/login" method="post">
                <div class="img_wrap">
                    <img height="70" class="b-signin__logo" src="http://in.brosko.ru/image/getImage?id=1&class_name=Settings&attr_name=logo">
                </div>
                <div class="form_wrap">
                    <div class="form-group login">
                        <div class="img"></div>
                        <input class="form-control b-signin__control" placeholder="Логин" name="LoginForm[username]" id="LoginForm_username" type="text">
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group password">
                        <div class="img"></div>
                        <input class="form-control b-signin__control" placeholder="Пароль" name="LoginForm[password]" id="LoginForm_password" type="password">
                        <span class="help-block"></span>
                    </div>
                    <input class="btn b-signin__submit btn-default btn-sm" type="submit" name="yt0" value="Войти">
                </div>
            </form>
        </div>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>
    </body>
</html>