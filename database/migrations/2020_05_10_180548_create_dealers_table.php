<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateDealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('shopname');
            $table->string('email')->unique()->nullable();
            $table->string('latitude');
            $table->string('longitude');
            $table->string('phone');
            $table->string('address');
            $table->string('township');
            $table->string('state');
            $table->string('region');
            $table->string('fax_number');
            $table->string('point')->nullable();
            $table->timestamps();
        });
        \DB::statement('ALTER TABLE dealers  AUTO_INCREMENT = 1000000;');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dealers');
    }
}
