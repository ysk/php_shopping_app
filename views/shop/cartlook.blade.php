@extends('layouts.site_frame')

@section('title', 'カートの中を見る')

@section('content')

    @if(check_cart($max))

    <!-- カートに商品がある場合 -->
    <form method="post" action="kazu_change.php">
        @php $total=0; @endphp
        <table border="1">
            <tr>
                <th>商品</th>
                <th>画像</th>
                <th>価格</th>
                <th>数量</th>
                <th>小計</th>
                <th>削除</th>
            </tr>

            @for($i=0; $i<$max; $i++)
                <tr>
                    <td>{{ $pro_name[$i] }}</td>
                    <td>{!! $pro_gazou[$i] !!}</td>
                    <td>{{ number_format($pro_price[$i]) }}円</td>
                    <td><input type="text" name="kazu{{ $i }}" value="{{ $kazu[$i] }}" style="width:50px;">個</td>
                    <td>{{ number_format($pro_price[$i]*$kazu[$i]) }}円</td>
                    <td><label><input type="checkbox" name="sakujo{{$i}}">削除する</label></td>
               </tr>
               @php $total += $pro_price[$i]*$kazu[$i] @endphp
            @endfor
                <tr>
                    <td colspan="6" align="right">
                        <p>合計金額<br>
                        {{number_format($total)}}円</p>
                    </td>
                </tr>
            </table>

            <br>
            <input type="hidden" name="max" value="{{$max}}">
            <input type="submit" value="数量変更">
            <input type="button" onclick="history.back();" value="戻る">
        </form>
    <br>
    <a href="shop_form.php">ご購入手続きへ進む</a><br>
        @isset($is_login)
            <a href="shop_kantan_check.php">会員かんたん注文へ進む</a>
        @endisset
    @else
        <!-- カートが空の場合 -->
        <p>カートに商品が入っていません</p>
        <p><a href="shop_list.php">商品一覧へ戻る</a></p>
    @endif

@endsection