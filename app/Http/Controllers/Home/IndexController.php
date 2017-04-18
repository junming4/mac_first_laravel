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
        echo Cache::put('name', 'Taylor');
        echo Cache::get('name');
        return "test";
    }
}
