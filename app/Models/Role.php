<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = 'roles';
    protected $primaryKey = 'role_id';

    protected $fillable = [
        'user_name', 'nick_name', 'mobile', 'email', 'password',
    ];

}
