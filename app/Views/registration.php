<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="<?=url('assets/css/materialize.css')?>">
    <link rel="stylesheet" href="<?=url('assets/css/app.css')?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>


<nav>
    <div class="nav-wrapper teal lighten-1">
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li class="waves-effect"><a href="<?=url('/')?>">Главная</a></li>
            <li class="waves-effect"><a href="<?=url('authors')?>">Авторы</a></li>
            <li class="waves-effect"><a href="<?=url('objects')?>">Объекты</a></li>
            <li class="waves-effect"><a href="<?=url('users')?>">Пользователи</a></li>
        </ul>
    </div>
</nav>

<div class="section"></div>
<main class="col s12">
    <center>

        <div class="section"></div>

        <h5 class="teal-text text-lighten-1">Registration</h5>
        <div class="section"></div>

        <div class="container">
            <div class="row">
                <div class="z-depth-1 grey lighten-4 col s4 offset-s4" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                    <form class="col s12" method="post">
                        <div class='row'>
                            <div class='col s12'>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='text' name='name' id='name' />
                                <label for='name'>Логин</label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='email' name='email' id='email' />
                                <label for='email'>Email</label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='password' name='password' id='password' />
                                <label for='password'>Пароль</label>
                            </div>
    <!--                        <label style='float: right;'>-->
    <!--                            <a class='pink-text' href='#!'><b>Forgot Password?</b></a>-->
    <!--                        </label>-->
                        </div>

                        <br />
                        <center>
                            <div class='row'>
                                    <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect teal lighten-1'>Зарегистрироваться</button>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </div>
        <a href="<?=url('login')?>">Вход</a>
    </center>

    <div class="section"></div>
    <div class="section"></div>
</main>

<script src="<?=url('assets/js/jquery.js')?>"></script>
<script src="<?=url('assets/js/materialize.min.js')?>"></script>

</body>
</html>