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

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
