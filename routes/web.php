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
    return view('vue');
});

Route::get('/test',function (){
   return "ok";
});

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
