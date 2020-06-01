<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('occupation');
            $table->string('nrc');
            $table->string('company_register_no')->nullable();
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->string('point')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        \DB::statement('ALTER TABLE customers  AUTO_INCREMENT = 10000;');
       

    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
