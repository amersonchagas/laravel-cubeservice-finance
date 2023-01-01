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
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_section_id');
            $table->string('uuid')->unique();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('slug')->unique();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('product_section_id')
            ->references('id')
            ->on('product_sections')
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
        Schema::dropIfExists('product_categories');
    }
};
