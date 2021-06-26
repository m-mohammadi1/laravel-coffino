<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->char('payment_id', 32)->index();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('service_count');
            $table->text('service_link');
            $table->unsignedBigInteger('paid');
            $table->unsignedTinyInteger('status')->default(1); // 0 : failed, 1: in progress, 2: success
            $table->text('invoice_details')->nullable();
            $table->string('transaction_id')->nullable();
            $table->text('transaction_result')->nullable();

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
        Schema::dropIfExists('transactions');
    }
}
