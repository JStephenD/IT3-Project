<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityMunsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('city_muns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id');
            $table->string('type');
            $table->string('name');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();

            $table->index('region_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('city_muns');
    }
}
