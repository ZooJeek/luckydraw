@extends('layouts.main')

@section('active_body')
当前登录:<span style="color:#db8839"> {{ $username }}</span><br>
<button type="button" class="nes-btn" style="margin-top: 10px;" onclick="locate('/logout');"> 退 出 </button>
@endsection