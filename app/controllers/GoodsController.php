<?php

class GoodsController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	/*public function __construct() {
		过滤器
		$this->beforeFilter('auth', array('except' => 'getLogin'));
		闭合函数
		$this->beforeFilter(function()
        {
            
        });
        控制器里的方法做过滤器
        $this->beforeFilter('@filterRequests');
        $this->beforeFilter('csrf', array('on' => 'post'));

        $this->afterFilter('log', array('only' =>array('fooAction', 'barAction')));
	}*/
	public function goodsList()
	{
		//return Response::view('hello')->header('Content-Type',''); 输出hello视图页面
		//$uri = Request::path(); 返回 goods/list
		//return Response::make('内容不存在', 404);
		//$cookie = Cookie::make('name', 'junnyboy');
		//echo  Cookie::get('name'),'<br/>';
		//return Response::make('create cookie')->withCookie($cookie);
		//return Redirect::to('users')->with('message', 'Login Failed'); 跳转+快闪数据
		//return Redirect::to('junny');
		//return Redirect::action('PhotoController@anyProfile',array('user' => 1,'name' => 2)); //跳转到对应action 并传递参数
		//return Redirect::route('profile',array(1)); //回传根据路由名称的重定向跳转
		//$url = URL::action('GoodsController@goodsList');
		//$action = Route::currentRouteAction();
		//View::share('name', 'junnyboy');
		//return View::make('goodslist')->nest('child', 'hello');
		//$users = User::all();
		//return View::make('goodslist')->nest('child', 'users',array('users' => $users)); //带参数渲染子页面到视图
		//$environment = App::environment(); 当前的环境
		$alldata = DB::getRow("SELECT * FROM wp_users where name='张三'");
		//$alldata = DB::selectOne("SELECT email FROM wp_users where name='张三'"); //DB:模式 ->toArray()无效
		//$alldata = User::all()->toArray();
		//$alldata = DB::table('users')->where('name', '张三')->get();aaa
		var_dump($alldata);
		return View::make('goodslist');
	}

}
