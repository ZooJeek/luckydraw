@extends('layouts.main')

@section('active_body')

<h2 class="title" style="margin-top: -50px;">注册</h2>
<div class="containers" id='active_body'>
    <i class="nes-pokeball"></i>
    <form action="/regis" method="post">
		@csrf
		<div class="nes-field" style="margin-top: 5px;">
    		<label for="name_field">名 称：</label>
			<input type="text" id="name_field" class="nes-input" name="username" value="{{ old('username') }}">
		</div>

		<div class="nes-field" style="margin-top: 5px;">
    		<label for="pass_field">密 码：</label>
			<input type="password" id="pass_field" class="nes-input" name="password">
		</div>

		<div class="nes-field" style="margin-top: 5px;">
    		<label for="pass_field">确认密码：</label>
			<input type="password" id="pass_field" class="nes-input" name="password_confirmation">
		</div>
		@if($errors->first())
			{{ $errors->first() }}
		@endif
		<button type="submit" class="nes-btn" style="margin-top: 10px;"> 注 册 </button>
    </form>
</div>
@endsection