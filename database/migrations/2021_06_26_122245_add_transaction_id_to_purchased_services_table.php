<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTransactionIdToPurchasedServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $driver = Schema::connection($this->getConnection())->getConnection()->getDriverName();

        Schema::table('purchased_services', function (Blueprint $table) use ($driver) {
            $column = $table->unsignedBigInteger('transaction_id');

            // should not be nullable in production
            if ($driver == 'sqlite') {
                $column->nullable();
            }

            $table->foreign('transaction_id')
                ->references('id')
                ->on('transactions')
                ->onDelete('cascade')
                ->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('purchased_services', function (Blueprint $table) {
            $table->dropColumn('transaction_id');
        });
    }

}
