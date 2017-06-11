<?php

use zedisdog\LaravelSchemaExtend\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('job_id')->comment('任务ID');
            $table->string('queue')->comment('队列');
            $table->longText('payload')->comment('执行的任务');
            $table->tinyInteger('attempts')->unsigned()->commet('重置次数');
            $table->unsignedInteger('reserved_at')->nullable()->comment('重置时间');
            $table->unsignedInteger('available_at');
            $table->unsignedInteger('created_at');
            $table->index(['queue', 'reserved_at']);
            $table->comment = '队列表';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
