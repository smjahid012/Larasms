<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->increments('fee_id');

	        $table->unsignedInteger('academic_id');
	        $table->unsignedInteger('level_id');
	        $table->unsignedInteger('fee_type_id');

	        $table->foreign('academic_id')->references('academic_id')->on('academics');
	        $table->foreign('level_id')->references('level_id')->on('levels');
	        $table->foreign('fee_type_id')->references('fee_type_id')->on('feetypes');

	        $table->string('fee_heading', 100)->nullable();
	        $table->float('amount', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fees');
    }
}
