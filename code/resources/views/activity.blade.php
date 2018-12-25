@extends('layouts.main')

@section('active_body')
@if($is_start)
  <p>抽奖活动开始啦！ 抽奖时间 21：00 —— 22:00</p>
  <p>登录过后点击下方的 “一发入魂” 即可参与，每人可抽100次，最高10000分</p>
  <button class="nes-btn is-error" onclick="locate('/draw');"> 一发入魂！ </button><br><br>
  本期奖品: 小西饼一盒 (口味自选)<br><br>
  <img src="/image/gift.jpg" class="col-12">

  @foreach($users as $user)
  <div class="row">
    <div class="col-3">{{ $user->username }}</div>
    <div class="col-2">欧气值：{{ $user->score }}</div>
    <div class="col-sm-7"><progress class="nes-progress is-primary" value="{{ $user->score }}" max="10000"></progress></div>
  </div>
  @endforeach

@endif

@if(!$is_start)
  <h2 class="title" style="margin-top: -50px;">* # 圣诞活动 # *</h2>
  <div class="containers" id='active_body'>
    <h2>开始时间：2018-12-25 21:00:00</h2>
  </div>
@endif
@endsection