<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ショッピングサイト - @yield('title')</title>
</head>
<body>
    <div class="container">
        <h1 class="title">@yield('title')</h1>
        <main class="content">
        @yield('content')
        </main>
    </div>
</body>
</html>