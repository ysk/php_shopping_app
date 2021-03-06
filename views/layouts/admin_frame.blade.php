<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.minjs" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" defer></script>
    <title>管理画面 - @yield('title')</title>
    <style>
        body{
            font-family: 'Noto Sans JP', sans-serif;
            font-feature-settings: "palt";
        }
        .footer {

background-color: #f5f5f5;
text-align: center;
padding: 20px;
}
body > .container{
    padding-bottom: 50px;
}
    </style>
</head>
<body>
    
    @isset($_SESSION['login'])
        @include('admin.includes.header')
    @endisset

    <div class="container">
        <h1 class="pb-2 mt-4 mb-4 border-bottom">@yield('title')</h1>
        <main class="content pb-2">
        @yield('content')
        </main>
    </div>

    @isset($_SESSION['login'])
        @include('admin.includes.footer')
    @endisset

</body>
</html>