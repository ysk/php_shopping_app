@extends('layouts.admin_frame')

@section('title', 'CSV注文ダウンロード')

@section('content')
<p>ダウンロードしたい注文日を選択して下さい。</p>
<form method="post" action="order_download_done.php">
{{ select_year() }}
年
{{ select_month() }}
月
{{ select_day() }}
日<br>
<br>
<input type="submit" value="CSVをダウンロードする">
</form>
@endsection