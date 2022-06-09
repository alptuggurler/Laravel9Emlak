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
        Schema::create('houses', function (Blueprint $table) {
            $table->id(); //+
            $table->foreignId('category_id')->nullable();;
            $table->foreignId('user_id')->nullable();;
            $table->string('title');
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->text('detail')->nullable();
            $table->bigInteger('price')->nullable();//+
            $table->integer('square')->nullable();/* m^2 */ //+
            $table->string('number_of_room')->nullable();//+
            $table->integer('floor_location')->nullable();//+ kat sayısı
            $table->integer('number_of_floors')->nullable(); // bulunduğu kat+
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();//+
            $table->year('year_built')->nullable();//+
            $table->string('parking')->nullable();//+
            $table->string('heating')->nullable();//+
            $table->integer('dues')->nullable();/* aidat *///+
            $table->string('salers')->nullable();/* emlak or sahibinden */
            $table->string('sehir')->nullable();//+
            $table->string('status',6)->default('False');//+
            $table->string('sehir',30)->nullable();//+
            $table->string('ilce',30)->nullable();//+

            $table->timestamps(); //+
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
};
