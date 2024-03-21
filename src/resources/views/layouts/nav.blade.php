<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <title>coachtechフリマ</title>
</head>
<body>
    <header class="app-header">
        <div class="header-logo">
            <img class="header-logo_image" src="{{ asset('img/logo.png') }}" alt="画像">
        </div>
        <div class="content-nav">
            <div class="search-form_wrapper">
                <form class="search-form" action="/search" method="post">
                    @csrf
                    <input class="search-form_item" name="keyword" type="text" placeholder="なにをお探しですか？">
                </form>
            </div>
            @if(Auth::check())
            <nav class="menu-nav">
                <form class="form-logout" action="/logout" method="post">
                    @csrf
                    <button class="menu-nav_link logout-form_button">ログアウト</button>
                </form>
                <a href="/mypage" class="menu-nav_link">マイページ</a>
                <a href="/sell" class="menu-nav_link menu-nav_link-sell">出品</a>
            </nav>
            @else
            <nav class="menu-nav">
                <a href="/login" class="menu-nav_link">ログイン</a>
                <a href="/register" class="menu-nav_link">会員登録</a>
                <a href="/sell" class="menu-nav_link menu-nav_link-sell">出品</a>
            </nav>
            @endif
        </div>
    </header>
    <main class="app-main">
        @yield('main_content')
    </main>
</body>
</html>