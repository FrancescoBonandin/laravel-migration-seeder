<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {

            $table->id();

            $table->string('company', 64)->nullable(false);

            $table->string('departure_station', 64)->nullable(false);

            $table->string('arrival_station', 64)->nullable(false);

            $table->time('departure_time', 2)->nullable(false);

            $table->time('arrival_time', 2)->nullable(false);

            $table->string('train_code', 8)->nullable(false);

            $table->unsignedTinyInteger('cart_number')->nullable(false);

            $table->boolean('in_time')->default(true);

            $table->boolean('canceled')->default(false);

            $table->timestamps();

            $table->unique('train_code');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('train');
    }
};
