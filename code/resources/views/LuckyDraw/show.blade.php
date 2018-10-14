@extends('layouts.app')
@section('content')

<div class="col-6 offset-3">
	<h2 style="text-align: center;">抽奖系统</h2>

	<h4 style="margin-top: 40px;">立秋夕烛 —— 风の骨</h2>
	<div class="card">
		<div class="card-body">
			奖品：苏小糖牛轧糖一盒<br>
			抽奖方式：输入游戏ID点击抽奖（最终名称不一致取消资格）<br>
			开奖时间：2018年10月14日<br>
			中奖规则：随机数方式，网站代码开源保证公平。需加入阴阳寮［风の骨］以及相应QQ群<br>
			计算方式：系统对时间戳Hash取随机数然后对参与人数取模，获得中奖者<br>
		</div>
	</div>
	<img src="/image/sugar.png" style="width: 100%;margin-bottom: 0px;">	
  		
	<form action="/luckydraw" method="POST" style="margin-top: 20px;">
		@csrf
  		<div class="form-group">
    		<input type="text" class="form-control" id="gameId" placeholder="游戏ID" name='gameId'>
  		</div>
  		<p style="color: #a77">{!! $alert ?? '' !!}</p>
  		<div class="form-group raw">
  			<button type="submit" class="btn btn-primary"> 确定 </button>
  		</div>
	</form>

	<h2>已参与列表：</h2>
  	<ul class="list-group">
  		@foreach ($list as $i)
    		<li class="list-group-item">{{ $i->created_at }} : {{$i->gameId}} </li>
    	@endforeach
  	</ul>
</div>

@endsection