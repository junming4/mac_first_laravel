<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    //return view('vue');
    //$res = \App\Models\User::find(2);
    //dump($res);

    //$res = (new \App\Models\TestMongo)->createInfo();
    //var_dump($res);

    /*$res = \App\Models\User::create([
        'user_name' => '肖俊明',
        'mobile' => '13512719787',
        'email' => '2284876299@qq.com',
        'password' => 13333
    ]);

    dump($res);*/
    /*for ($i=0; $i <= 1000; $i++){
        $this->dispatch(new \App\Jobs\TestJob());
    }*/


});

Route::get('/test','Home\IndexController@index');

Route::get('/isEmail',function (){
   $res =  isEmail('2284876299@qq.com');
   if($res) {
       return "ok";
   }else{
       return "no";
   }
});


/*Route::group(['namespace' => 'Home'], function ($route) {
    $route->get('/test',['as'=>'index','uses' => 'IndexController@index']);
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
