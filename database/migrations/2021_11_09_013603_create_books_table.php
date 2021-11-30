<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// use Carbon\Carbon;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id')->nullable(false)->unique();
            $table->String('img')->nullable(true);
            $table->string('title')->nullable(false);
            $table->integer('start_page')->nullable(false);
            $table->integer('end_page')->nullable(false);
            //     $table->timestamp('updated_at')->Carbon::now();
            // $table->timestamp('created_at')->Carbon::now();
            $table->timestamp('updated_at')->useCurrent()->nullable();
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
