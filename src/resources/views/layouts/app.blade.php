<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
<header class="header">
    <div class="header__inner">
        <div class="header-utilities">
            <a class="header__logo" >
            Pigly
            </a>
            <div class="header-item">
                <form class="form" action="/wight_logs/goal_setting" method="post">
                @csrf
                <button class="header-nav__button">目標体重設定</button>
                </form>
                <form class="form" action="/logout" method="post">
                @csrf
                <button class="header-nav__button">ログアウト</button>
                </form>
            </div>
        </div>
    </div>
</header>

<main>
    @yield('content')
</main>

</body>
</html>