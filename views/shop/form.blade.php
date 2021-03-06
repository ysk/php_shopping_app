@extends('layouts.site_frame')

@section('title', 'お客様情報の入力')

@section('content')

    <form method='POST' action="shop_form_check.php">
        <table border="1">
            <tr>
                <th>お名前</th>
                <td><input type="text" name="onamae" style="width: 150px;" value="<?php //echo $_SESSION['onamae']; ?>"></td>
            </tr>
            <tr>
            <th>メールアドレス</th>
                <td><input type="text" name="email" style="width: 150px;" value="<?php //echo $_SESSION['email']; ?>"></td>
            </tr>
            <tr>
                <th>郵便番号</th>
                <td><input type="text" name="postal1" style="width: 50px;" value="<?php //echo $_SESSION['postal1']; ?>">
                    - <input type="text" name="postal2" style="width: 50px;" value="<?php //echo $_SESSION['postal2']; ?>">
                </td>
            </tr>
            <tr>
                <th>住所</th>
                <td><input type="text" name="address" style="width: 500px;" value="<?php //echo $_SESSION['address']; ?>"></td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td><input type="text" name="tel" style="width: 150px;" value="<?php //echo $_SESSION['tel']; ?>"></td>
            </tr>
        </table>
        <br>

        <label><input type="radio" name="chumon" value="chumonkonkai" checked>今回だけの注文</label><br>
        <label><input type="radio" name="chumon" value="chumontouroku">会員登録しての注文</label><br>
        <br>
        ※会員登録するには以下の項目も入力して下さい<br>
        パスワードを入力して下さい<br>
        <input type="password" name="pass"><br>
        パスワードをもう一度入力して下さい<br>
        <input type="password" name="pass2"><br>
        <br>
        性別<br>
        <label><input type="radio" name="danjo" value="dan" checked>男性</label><br>
        <label><input type="radio" name="danjo" value="jo">女性</label><br>
        <br>
        生まれ年<br>
        <select name="birth">
            <option value="1910">1910年代</option>
            <option value="1920">1920年代</option>
            <option value="1930">1930年代</option>
            <option value="1940">1940年代</option>
            <option value="1950">1950年代</option>
            <option value="1960">1960年代</option>
            <option value="1970">1970年代</option>
            <option value="1980" selected>1980年代</option>
            <option value="1990">1990年代</option>
            <option value="2000">2000年代</option>
            <option value="2010">2010年代</option>
            <option value="2020">2020年代</option>
        <select><br>
        <br>
        <input type="button" onclick="history.back();" value="戻る">
        <input type="submit" value="OK">
    </form>
    <br>
    <br>
@endsection