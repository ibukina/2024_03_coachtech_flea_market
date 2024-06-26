<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="ja">
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
            <a class="header-logo_link" href="/"><img class="header-logo_image" src="{{ asset('img/logo.svg') }}" alt="画像"></a>
        </div>
    </header>
    <main class="app-main">
        @yield('main_content')
    </main>
</body>
</html>