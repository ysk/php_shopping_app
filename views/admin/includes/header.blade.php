


<nav class="navbar navbar-light bg-light" style="padding: 20px">

    @isset($_SESSION['login'])
    {{$_SESSION['staff_name']}}さんログイン中<br>
    @else
    
    @endisset
    
    @isset($_SESSION['login'])
    <a href="/admin/staff_login/staff_logout.php">ログアウト</a>
    @else
    <a href="/admin/staff_login/index.html">ログイン</a>
    @endisset
  </nav>