<?php

//共同前缀 'as' => 'admin::'
// 以后统一使用 route 命名方式跳转
Route::group(['namespace' => 'Backend', 'as' => 'admin::', 'prefix' => 'admin'], function ($route) {

    $route->get('/', 'IndexController@index');

    $route->get('test', 'IndexController@test');
    //这里存放权限部分数据
    /*$route->group(['middleware' => 'auth.admin'], function ($router) {

    });*/

});
