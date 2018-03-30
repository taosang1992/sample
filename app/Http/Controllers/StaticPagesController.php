<?php
// 命名空间
namespace App\Http\Controllers;
// 导入类，引用之后便可以对其进行调用
use Illuminate\Http\Request;
// 继承父类Controller
class StaticPagesController extends Controller
{
    public function home(){
    	// return '主页';
    	return view('static_pages/home');
    }
    public function help(){
    	// return '帮助页';
    	return view('static_pages/help');
    }
    public function about(){
    	// return '关于页';
    	return view('static_pages/about');
    }
}
