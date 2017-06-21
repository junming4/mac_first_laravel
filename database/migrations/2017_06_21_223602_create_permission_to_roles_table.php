<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionToRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
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
        //
        Schema::dropIfExists('permission_roles');
    }
}
