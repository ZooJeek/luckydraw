@extends('layouts.main')

@section('active_body')
@if($username == '原来是蕾蕾耶')

当前收获信息：
{{ $address ?? "未填写" }}<br><br>

恭喜您获得奖励，请填写收货信息（可使用化名）:<br>
<form action="/address" method="post">
	@csrf
	<textarea rows="3" cols="20" name="address">

	</textarea><br>
	<button type="submit" class="nes-btn" style="margin-top: 10px;"> 提交 </button>
</form>

@endif

@if(@$username != '原来是蕾蕾耶')
<h3>活动已结束</h3>
@endif
@endsection