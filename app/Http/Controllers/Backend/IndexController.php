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
        $res = $this->userContract->find(1);
        dd($res);exit;
        redirect(route('admin::test'));
       // return "index";
    }

    public function test()
    {
        return "test";
    }
}
