<?php

namespace App\Models;


use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class TestMongo extends MongoModel
{
    protected $connection = 'mongodb';

    protected $table = 'test';

    protected $fillable = ['name', 'age', 'user_name'];

    //
    public function list2()
    {
        $users = $this->all();
        return $users;
    }

    public function createInfo()
    {
        return $this->create(['name' => 'John','age' => 20, 'sex' => 999, 'user_name' => 'jsjs']);
    }

}
