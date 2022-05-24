<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityMunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_muns', function (Blueprint $table) {
            $table->id();
            $table->string('refCityMunId');
            $table->string('psgsCode');
            $table->string('citymunDesc');
            $table->string('regCode');
            $table->string('provCode');
            $table->string('citymunCode');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city_muns');
    }
}
