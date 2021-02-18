<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" defer></script>
    <title>管理画面 - @yield('title')</title>
    <style>
        body{
            font-family: 'Noto Sans JP', sans-serif;
            font-feature-settings: "palt";
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="pb-2 mt-4 mb-4 border-bottom">@yield('title')</h1>
        <main class="content">
        @yield('content')
        </main>
    </div>
</body>
</html>