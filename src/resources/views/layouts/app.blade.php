<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>  <!-- 住所保管用のYubinBango.js読み込み -->
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
    @livewireStyles()
</head>
<body>
    <header class="header">
        <div class="header__inner">
            @yield('title')
        </div>
    </header>

    <main>
        @yield('content')
        @livewireScripts()
    </main>
</body>
</html>