


<nav class="navbar navbar-light bg-light" style="padding: 20px">

  <div>
    <a href="/admin/staff_login/staff_top.php">管理画面TOPへ</a>
    @isset($_SESSION['login'])
      <p>{{$_SESSION['staff_name']}}さんログイン中</p>
    @else
      <p>ログインしていません</p>
    @endisset
  </div>

  <div>
    @isset($_SESSION['login'])
      <a href="/admin/staff_login/staff_logout.php" class="btn btn-primary">ログアウト</a>
    @else
      <a href="/admin/staff_login/index.html">ログイン</a>
    @endisset
  </div>
</nav>