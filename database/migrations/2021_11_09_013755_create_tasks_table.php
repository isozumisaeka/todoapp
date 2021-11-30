<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// use Carbon\Carbon;

class CreateTasksTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id')->nullable(false);
            $table->string('task')->nullable(false);
            $table->unsignedInteger('book_id')->nullable(false);
            //$table->unsignedInteger('book_id')->nullable(false);
            $table->integer('start_page')->nullable(false);
            $table->integer('end_page')->nullable(false);
            $table->integer('total_page')->nullable();
            $table->date('start_date')->nullable(false);
            $table->time('start_time')->nullable(false);
            // $table->date('end_date')->nullable(false);
            $table->time('end_time')->nullable(false);
            $table->string('reward')->nullable(true);
            $table->string('memo')->nullable(true);
            $table->unsignedInteger('understand_id')->nullable(true);
            $table->unsignedInteger('status_id')->nullable(true);
            $table->timestamp('updated_at')->useCurrent()->nullable();
            $table->timestamp('created_at')->useCurrent()->nullable();
            // $table->timestamps();
            $table->softDeletes();

            
            //外部キー
            $table->foreign('book_id')
                    ->references('id')
                    ->on('books')->cascadeOnDelete();
            $table->foreign('understand_id')
                    ->references('id')
                    ->on('understands')->cascadeOnDelete();
            $table->foreign('status_id')
                    ->references('id')
                    ->on('statuses')->cascadeOnDelete();

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
