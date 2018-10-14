<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LuckyDrawController extends Controller
{
    public function show()
    {
    	$list = DB::table('draw_list')->get();
    	return view('LuckyDraw.show',['list'=>$list]);
    }

    public function draw(Request $request)
    {
    	$gameId = $request->input("gameId");
    	$user = DB::table('draw_list')->where('gameId',$gameId)->first();
    	$list = DB::table('draw_list')->get();
    	if(!empty($user)){
    		return view('LuckyDraw.show',['alert' =>'你已经参与过本次抽奖，请等待抽奖结果','list'=> $list]);
    	}
    	$t = date('Y-m-d H:i:s');
    	$id = DB::table('draw_list')->insert([
    		'gameId' => $gameId,
    		'created_at' => $t
    	]);
    	if($id){
    		return view('LuckyDraw.show',[
    			'alert' => '参与成功，请等待活动结束',
    			'list'=>$list]);
    	}
    }
}
