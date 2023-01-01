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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_category_id');
            $table->string('uuid')->unique();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('description');
            $table->string('text')->nullable();
            $table->string('font')->nullable();
            $table->string('image_credits')->nullable();
            $table->string('image_subtitle')->nullable();
            $table->enum('status', ['draft', 'published']);
            $table->integer('hits');

            $table->unsignedBigInteger('user_created_id');
            $table->unsignedBigInteger('user_updated_id')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('product_category_id')
            ->references('id')
            ->on('product_categories')
            ->onDelete('cascade');

            $table->foreign('user_created_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('user_updated_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
