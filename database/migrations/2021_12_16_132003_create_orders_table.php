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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->enum('type', ['income', 'expense']);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('order_group_id')->nullable();
            $table->string('number');
            $table->string('description')->nullable();
            $table->double('amount', 10,2);
            $table->double('fee', 10,2)->nullable();
            $table->integer('installments');
            $table->double('installment_fee', 10,2)->nullable();
            $table->double('discount', 10,2)->nullable();
            $table->enum('payment_type', ['cash', 'creditcard', 'debitcard', 'pix', 'free']);
            $table->enum('status', ['open', 'analyzing', 'approved', 'refused', 'canceled']);

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('order_group_id')
                ->references('id')
                ->on('order_groups')->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')->onDelete('cascade');

        });

        Schema::create('order_itens', function(Blueprint $table){
            $table->id();
            $table->uuid('uuid')->unique();
            $table->unsignedBigInteger('order_id');
            $table->string('number');
            $table->timestamp('due_date');
            $table->timestamp('payment_date');
            $table->string('print_code')->nullable();
            $table->string('description')->nullable();
            $table->double('value', 10,2);
            $table->double('fee', 10,2)->default(0);
            $table->double('installment_fee', 10,2)->nullable();
            $table->double('discount', 10,2)->default(0);
            $table->enum('payment_type', ['cash', 'creditcard', 'debitcard', 'pix', 'free']);
            $table->enum('status', ['open', 'approved', 'canceled']);
            $table->string('number_receipt');
            $table->timestamps();

            $table->foreign('order_id')
                ->references('id')
                ->on('orders')
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
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_itens');
    }
};
