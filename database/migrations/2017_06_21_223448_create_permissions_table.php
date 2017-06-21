<?php

use zedisdog\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('permissions', function (Blueprint $table) {      //权限操作表
            $table->increments('permission_id')->comment('权限ID');
            $table->string('permission_name')->comment('权限名');
            $table->string('permission_label')->nullable()->comment('权限备注');
            $table->timestamps();
            $table->comment= '权限表';
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
        Schema::dropIfExists('permissions');
    }
}
