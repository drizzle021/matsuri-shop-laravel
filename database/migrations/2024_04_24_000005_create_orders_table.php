<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->uuid('user_id');
            $table->uuid('address_id');
            $table->uuid('payment_method_id');
            $table->uuid('shipping_method_id');
            $table->enum('order_status', ['PENDING', 'FINISHED']);
            $table->timestamps();

            //Foreign keys
            $table->foreign('user_id')->references('uuid')->on('users')->onDelete('cascade');
            $table->foreign('address_id')->references('uuid')->on('shipping_addresses')->onDelete('cascade');
            $table->foreign('payment_method_id')->references('uuid')->on('payment_methods')->onDelete('cascade');
            $table->foreign('shipping_method_id')->references('uuid')->on('shipping_methods')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
