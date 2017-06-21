<?php

use zedisdog\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserToRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //用户关联角色表
        Schema::create('user_roles', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->comment('用户ID');
            $table->integer('role_id')->unsigned()->comment('角色ID');
            $table->foreign('user_id')    //外键
            ->references('user_id')
                ->on('users')
                ->onDelete('cascade') ;
            $table->foreign('role_id')    //外键
            ->references('role_id')
                ->on('roles')
                ->onDelete('cascade') ;
            $table->timestamps();
            $table->primary(['user_id','role_id']) ;
            $table->comment = '用户关联角色表';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('user_roles');
    }
}
