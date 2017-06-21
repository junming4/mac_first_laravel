<?php

namespace App\Http\Controllers\Backend;

use App\Repositories\User\UserContract;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    protected $userContract;
    public function __construct(UserContract $userContract)
    {
       $this->userContract = $userContract;
    }
    //
    public function index()
    {
        return view('backend.index');
       // return "index";
    }

    public function test()
    {
        return "test";
    }
}
