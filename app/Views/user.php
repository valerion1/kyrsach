<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$user->name?> | Пользователь</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="<?=url('assets/css/materialize.css')?>">
    <link rel="stylesheet" href="<?=url('assets/css/app.css')?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<ul id="dropdown1" class="dropdown-content">
    <li><a href="<?=url('objects')?>">Все</a></li>
    <li class="divider"></li>
    <li><a href="<?=url('objects/add')?>">Добавить</a></li>
    <li class="divider"></li>
    <li><a href="<?=url('objects/search')?>">Поиск</a></li>
</ul>

<ul id="dropdown2" class="dropdown-content">
    <li><a href="<?=url('authors')?>">Все</a></li>
    <li class="divider"></li>
    <li><a href="<?=url('authors/add')?>">Добавить</a></li>
    <li class="divider"></li>
    <li><a href="<?=url('authors/search')?>">Поиск</a></li>
</ul>

<ul id="dropdown3" class="dropdown-content">
    <li><a href="<?=url('roles')?>">Все</a></li>
    <li class="divider"></li>
    <li><a href="<?=url('roles/add')?>">Добавить</a></li>
</ul>

<nav>
    <div class="nav-wrapper teal lighten-1">
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li class="waves-effect"><a href="<?=url('/')?>">Главная</a></li>

            <?php if(\Framework\App\Auth::check() && \Framework\App\Auth::user()->isAdmin()): ?>
                <li class="">
                    <a class="dropdown-button waves-effect" href="javascript:;" data-activates="dropdown2">Авторы<i class="material-icons right">arrow_drop_down</i></a>
                </li>
                <li class="">
                    <a class="dropdown-button waves-effect" href="javascript:;" data-activates="dropdown3">Роли<i class="material-icons right">arrow_drop_down</i></a>
                </li>
            <?php else: ?>
                <li class="waves-effect"><a href="<?=url('authors')?>">Авторы</a></li>
            <?php endif; ?>

            <li class="">
                <a class="dropdown-button waves-effect" href="javascript:;" data-activates="dropdown1">Объекты<i class="material-icons right">arrow_drop_down</i></a>
            </li>

            <?php if(\Framework\App\Auth::check() && \Framework\App\Auth::user()->isAdmin()): ?>
                <li class="waves-effect"><a href="<?=url('users')?>">Пользователи</a></li>
            <?php endif; ?>
        </ul>

        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <?php if(\Framework\App\Auth::check()): ?>
                <li class="waves-effect active"><a href="<?=url('/profile/' . \Framework\App\Auth::user()->id)?>"><?=\Framework\App\Auth::user()->name?></a></li>
                <li class="waves-effect"><a href="<?=url('/logout')?>">Выход</a></li>
            <?php else: ?>
                <li class="waves-effect"><a href="<?=url('/login')?>">Вход</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

    <div class="container">
        <div class="row">
            <div class="col s12 m12 s12">
                <div class="card teal lighten-1 white-text">
                    <div class="card-content">
                        <span class="card-title"><?=$user->name?></span>
                        <p><b>Email:</b> <?=$user->email?></p>
                        <p><b>Моб.:</b> <?=$user->phone?></p>
                        <p><b>Тип:</b> <?=$user->type?></p>
                        <p><b>Дата регистрации:</b> <?=date("d.m.Y H:i", strtotime($user->create_at))?></p>
                        <p><b>Последние скачивания:</b></p>
                        <ul class="collection teal-text">
                            <?php foreach ($user->downloads() as $download): ?>
                                <li class="collection-item">
                                    <a href="<?=url('object/' . $download->id)?>">
                                        <?="$download->name, дата: " . date("d.m.Y H:i", strtotime($download->create_at))?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="<?=url('assets/js/jquery.js')?>"></script>
<script src="<?=url('assets/js/materialize.min.js')?>"></script>
<script src="<?=url('assets/js/app.js')?>"></script>

</body>
</html>