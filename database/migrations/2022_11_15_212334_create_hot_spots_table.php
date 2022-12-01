<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hot_spots', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('status');
            $table->string('postcode')->unique();
            $table->string('lat');
            $table->string('lng');
            $table->text('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hot_spots');
    }
};
