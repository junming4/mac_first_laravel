<?php

use zedisdog\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id')->comment('用户ID');
            $table->string('user_name')->comment('用户名')->unique();
            $table->char('mobile')->comment('手机号码');
            $table->string('email')->comment('邮箱');
            $table->string('password')->comment('密码');
            $table->rememberToken()->comment('忘记密码toke');
            $table->timestamps();
            $table->unique(['mobile','email'],'mobile_to_email');
            $table->comment = '用户表';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
