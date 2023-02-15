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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('name');
            $table->string('cpf')->unique();
            $table->string('email')->unique()->nullable();

            $table->date('birth_date')->nullable();
            $table->string('sex')->nullable();

            $table->string('password');
            $table->string('token')->unique()->nullable();
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();

            $table->timestamps();
            $table->softDeletes();

        });

        Schema::create('user_phones', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('user_id');

            $table->string('type')->nullable();
            $table->string('number')->nullable();
            $table->boolean('main');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });


        Schema::create('user_adresses', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('district_id');


            $table->string('type')->nullable();
            $table->string('street')->nullable();
            $table->string('complement')->nullable();
            $table->string('reference')->nullable();
            $table->string('number')->nullable();
            $table->string('zipcode')->nullable();
            $table->boolean('main');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
