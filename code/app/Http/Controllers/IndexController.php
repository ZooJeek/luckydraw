<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisRequest;
use App\User;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login(Request $request)
    {
        if($request->session()->has('username'))
            return view('loged', ['username' => $request->session()->get('username')]);
        return view("login");
    }

    public function logout(Request $request)
    {
        $request->session()->forget('username');
        return redirect()->route('index');
    }

	public function regis()
    {
    	return view("regis");
    }

    public function activity()
    {
        $startTime = Carbon::parse("2018-12-25 15:42:00", 'Asia/Shanghai');
        $now = Carbon::now('Asia/Shanghai');
        $start = false;
        if($startTime->lt($now)){
            $is_start = True;
        }
        $users = User::where('score','>',0)->orderBy('score', 'desc')->get();
    	return view("activity", ['is_start' => $is_start, 'users'=>$users]);
    }

    public function regisHandle(RegisRequest $request)
    {
        $validated = $request->validated();
        $user = new User();
        $user->username = $request->input('username');
        $user->password = $request->input('password');
        $res = $user->save();
        if($res){
            $request->session()->put('username', $user->username);
        }
        return redirect()->route('index')->with('alert', '注册成功，已自动登录！');
    }

    public function loginHandle(LoginRequest $request)
    {
        if($request->session()->has('user'))
            return "你他妈干啥？";
        $validated = $request->validated();
        $user = User::where('username', $request->input('username'))
                ->where('password', $request->input('password'))
                ->first();
        if($user){
            $request->session()->put('username', $user->username);
            return redirect()->route('index')->with('alert', '登录成功');
        }else{
            return redirect()->route('login')->with('failLogin','名称或密码错误');
        }
    }

    public function draw(Request $request)
    {
        $time = $request->session()->get('time');
        $time = $time+1;
        $request->session()->put('time',$time);
        $user = User::where('username', $request->session()->get('username'))->first();
        if($time > 70)
           return redirect()->route('activity')->with('alert', '次数封顶');
        else
        $score = rand(42,10000);
        $user->score = $score;
        $user->save();
        return redirect()->route('activity')->with('alert', '你的欧气值是：'.$score);
    }

	// NES 文档
    public function doc()
    {
        return view('doc');
    }
}
