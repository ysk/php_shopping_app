<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/session_member.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/common/functions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '../lib/shop/shop_cartlook.php');
?>
@extends('layouts.site_frame')

@section('title', 'カートの中を見る')

@section('content')

<?php if(check_cart($max)): ?>

<!-- カートに商品がある場合 -->
<form method="post" action="kazu_change.php">
    <?php $total=0; ?>
    <table border="1">
        <tr>
            <th>商品</th>
            <th>画像</th>
            <th>価格</th>
            <th>数量</th>
            <th>小計</th>
            <th>削除</th>
        </tr>

        <?php for($i=0; $i<$max; $i++): ?>
            <tr>
                <td><?php echo $pro_name[$i]; ?></td>
                <td><?php echo $pro_gazou[$i]; ?></td>
                <td><?php echo number_format($pro_price[$i]); ?>円</td>
                <td><input type="text" name="kazu<?php echo $i; ?>" value="<?php echo $kazu[$i]; ?>" style="width:50px;">個</td>
                <td><?php echo number_format($pro_price[$i]*$kazu[$i]); ?>円</td>
                <td><label><input type="checkbox" name="sakujo<?php echo $i; ?>">削除する</label></td>
            <?php $total += $pro_price[$i]*$kazu[$i]; ?>
            </tr>
        <?php endfor;?>
            <tr>
                <td colspan="6" align="right">
                    <p>合計金額<br>
                    <?php echo number_format($total); ?>円</p>
                </td>
            </tr>
        </table>

        <br>
        <input type="hidden" name="max" value="<?php echo $max; ?>">
        <input type="submit" value="数量変更">
        <input type="button" onclick="history.back();" value="戻る">
    </form>
<br>
<a href="shop_form.php">ご購入手続きへ進む</a>

<?php else: ?>
    <!-- カートが空の場合 -->
    <p>カートに商品が入っていません</p>
    <p><a href="shop_list.php">商品一覧へ戻る</a></p>
<?php endif; ?>

@endsection