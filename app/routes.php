<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
{
	return View::make('hello');
});

Route::get('junny', function()
{
    return 'junny!';
});
/*Route::get('user/{id}', 'UserController@showProfile'); 传参*/
Route::post('foo/bar', function()
{
    return 'Hello World';
});
Route::resource('photo', 'PhotoController'); //默认访问 PhontController 中的 index 方法
Route::controller('photos', 'PhotoController');// 使用 photos/profile 访问 photoController 中的 anyProfile方法
Route::get('goods/list', 'GoodsController@goodsList');

Route::get('user/profile', array(
	'as' => 'profile',  //为路由定义一个名字
	'uses' =>'PhotoController@anyProfile'
));
//Route::resource('goods', 'GoodsController');
Route::get('/admin/login', 'LoginController@login');
Route::get('/admin/auth', 'AuthController@auth');
/*Route::get('users', 'HomeController@showWelcome');*/

/*Route::get('users', function()
{
	return View::make('users');
});*/

Route::match(array('GET', 'POST'), '/', function()
{
    return View::make('hello');
});

Route::get('users', function()
{
    $users = User::all();

    return View::make('users')->with('users', $users);
});

//在一个路由中回应所有 HTTP 请求
Route::any('foo', function()
{
    return 'Hello World';
});

//过滤器
/*Route::get('profile', array('before' => 'auth',
    'uses' => 'UserController@showProfile'
));*/
/*
绑定参数至模型
Route::model('user', 'User');
Route::model('user', 'User', function()
{
    throw new NotFoundHttpException; //找不到路由报错
});
接着，定义一个路由并包括一个 {user} 参数：
Route::get('profile/{user}', function(User $user)
{
    
});
既然我们绑定了 {user} 参数到 User 模型，则 User 实体就会被注入到路由内。因此，假定有一个请求送至 profile/1 则会注入一个 ID 为 1 的 User 实体。
注意： 假如在数据库内没有任何一个模型实体符合，则会抛出 404 错误。

手动触发 404 错误
App::abort(404);
*/
//注册基于类的筛选器 默认情况下PublicFilter的 checkLocale方法会被调用
//Route::filter('public.checkLocale',   'TypiCMS\Filters\PublicFilter@checkLocale');
//Route::when('admin',   'admin.setLocale|user.auth|user.hasAccess'); 
//Route::when('admin/*', 'admin.setLocale|user.auth|user.hasAccess');//以admin 开头的访问 都经过筛选处理