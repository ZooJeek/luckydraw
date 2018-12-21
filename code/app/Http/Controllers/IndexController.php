<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
    	return view("login",['active_title' => '登入']);
    }

	public function regis()
    {
    	return view("regis",['active_title' => '注册']);
    }

    public function activity()
    {
    	return view("activity",['active_title' => '活动']);
    }

    public function loginHandle(Request $request)
    {
    	return $request->input('username').$request->input('password');
    }

	// NES 文档
    public function doc()
    {
        return view('doc');
    }
}
