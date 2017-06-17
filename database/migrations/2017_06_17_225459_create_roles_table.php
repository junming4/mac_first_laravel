<?php

use zedisdog\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('role_id')->comment('自定增ID');
            $table->integer('user_id')->unsigned()->index()->comment('用户ID');
            $table->string('role_name')->comment('角色名');
            $table->string('role_dec')->comment('角色描述');
            $table->timestamps();
            $table->foreign('user_id')
                ->references('user_id')->on('users')
                ->onDelete('cascade');
            $table->comment = '角色表';
        });

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

        Schema::create('permissions', function (Blueprint $table) {      //权限操作表
            $table->increments('permission_id')->comment('权限ID');
            $table->string('permission_name')->comment('权限名');
            $table->string('permission_label')->nullable()->comment('权限备注');
            $table->timestamps();
            $table->comment= '权限表';
        });

        Schema::create('permission_roles', function (Blueprint $table) {  //权限操作关联表
            $table->integer('permission_id')->unsigned()->commet('权限ID');
            $table->integer('role_id')->unsigned()->comment('角色ID');
            $table->foreign('permission_id')    //外键
            ->references('permission_id')
                ->on('permissions')
                ->onDelete('cascade') ;
            $table->foreign('role_id')    //外键
            ->references('role_id')
                ->on('roles')
                ->onDelete('cascade') ;
            $table->timestamps();
            $table->primary(['permission_id','role_id']) ;
            $table->comment = '权限关联角色表';
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
        Schema::dropIfExists('user_roles');
        Schema::dropIfExists('permissions');
    }
}
