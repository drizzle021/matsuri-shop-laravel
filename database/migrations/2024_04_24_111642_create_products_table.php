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
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', 130);
            $table->string('description', 1500);
            $table->uuid('category_id');
            $table->uuid('series_id');
            $table->decimal('price');
            $table->decimal('discount');
            $table->integer('stock');
            $table->string('main_img', 100);
            $table->string('side_img_1', 100);
            $table->string('side_img_2', 100);
            $table->string('publisher', 50);
            $table->string('author', 100);
            $table->integer('pages');
            $table->string('dimensions', 21);
            $table->timestamps();

            //Foreign keys
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('series_id')->references('id')->on('series')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};


// at kell nevezni hogy jo sorrendben createlje oket
