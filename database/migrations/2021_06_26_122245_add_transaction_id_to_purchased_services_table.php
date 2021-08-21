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
        Schema::table('purchased_services', function (Blueprint $table) {
            $table->foreignId('transaction_id')->constrained()->onDelete('cascade')->onUpdate('cascade')->after('user_id');
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
            $table->dropConstrainedForeignId('transaction_id');
        });
    }
}
