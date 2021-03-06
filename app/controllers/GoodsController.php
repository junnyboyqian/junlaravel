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
		//Session::put('stest', 'yes');
		//Session::put('stest1', 'no');
		//echo Session::get('stest');
		//Cache::forget('uname');
		//Cache::add('uname', 'junnyboy', 1);
		//$value = Cache::get('uname', '13');
		//$value = Cache::rememberForever('uname', function(){ return array('a' => 132,'b'=> 456); });
		//var_dump($value); exit;
		/*if (Cache::has('uname'))
		{
		    $value = Cache::get('uname');
		    echo $value;
		} else {
			echo 'false';
		}*/
		//return Response::view('hello')->header('Content-Type',''); 输出hello视图页面
		//$url = Request::url(); //返回 url: http://xx.com/aa/bb
		//$uri = Request::getUri(); //返回 getUri: http://xx.com/aa/bb/?c=d
		//$ip = Request::getClientIp(); // 客户端ip
		//$qs = Request::getQueryString(); // c=d
		//$port = Request::getPort();
		//Request::segment(1); //Get a segment from the URI (1 based index)
		//$uri = Request::path(); 返回 goods/list
		//return Response::make('内容不存在', 404);
		//$cookie = Cookie::make('name', 'junnyboy');
		//echo  Cookie::get('name'),'<br/>';
		//Cookie::forget('name');
		//return Response::make('create cookie')->withCookie($cookie);
		//return Redirect::to('users')->with('message', 'Login Failed'); //跳转+快闪数据
		//return Redirect::to('junny');
		//return Redirect::action('PhotoController@anyProfile',array('user' => 1,'name' => 2)); //跳转到对应action 并传递参数
		//return Redirect::route('profile',array(1)); //回传根据路由名称的重定向跳转
		//$url = URL::action('GoodsController@goodsList');
		//$action = Route::currentRouteAction();
		//View::share('name', 'junnyboy'); 通常你应该在服务提供者的 boot 方法内使用 share 方法。
		//return View::make('goodslist')->nest('child', 'hello');
		//$users = User::all();
		//return View::make('goodslist')->nest('child', 'users',array('users' => $users)); //带参数渲染子页面到视图
		//$environment = App::environment(); 当前的环境
		//$view = view('greetings', $data); 传递数组到视图 注意必须为数组 [5.0以上版本]
		/* 数组的方式分页 */
		/*$page = Input::get('page') ? Input::get('page') : 1;
		$page -= 1;
		$totalCount = User::count();
		$alldata = DB::getAll("SELECT * FROM wp_users limit {$page},1");
		$paginator = Paginator::make($alldata, $totalCount , 1);
		视图输出 $paginator->links();*/
		/* 数组的方式分页 end */
		$alldata = User::paginate(2);
		//$alldata = DB::table('users')->paginate(1);
		//$alldata = DB::selectOne("SELECT email FROM wp_users where name='张三'"); //DB:模式 ->toArray()无效
		//$alldata = User::all()->toArray();
		//$alldata = DB::table('users')->where('name', '张三')->get();
		//var_dump($alldata);
		$title = '<span style="color:red">文章</span>';
		return View::make('goodslist', compact('alldata','title'));
		//return View::make('goodslist', compact('alldata','title','paginator'));
		//$aaa = 123;
		//return View::make('goodslist', compact('aaa','alldata'));//拼接新数组
		//return View::make('goodslist')->with('aaa', 123)->with('users', $alldata);
		//View::make('goodslist')->with('users', $users);
	}

}
