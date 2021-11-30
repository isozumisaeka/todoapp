<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// use Carbon\Carbon;

class CreateUnderstandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('understands', function (Blueprint $table) {
            $table->increments('id')->nullable(false)->unique();
            $table->integer('understand_flg')->nullable(false);
            $table->string('understand_level')->nullable(false);
            // $table->timestamp('updated_at')->Carbon::now();;
            // $table->timestamp('created_at')->Carbon::now();;
            $table->timestamps();
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
        Schema::dropIfExists('understands');
    }
}
