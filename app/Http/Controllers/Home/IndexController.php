<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class IndexController extends Controller
{
    /**
     * @return string
     */
    public function index()
    {


        //测试通过，redis 操作方式

        echo Redis::set('name','woooo');
        echo Redis::get('name');

        //cache 方式操作,需要填写分钟日期
        if(!Cache::has('name')){
            Cache::put('name','test',10);
        }
        return Cache::get('name');



        return "test";
    }
}
