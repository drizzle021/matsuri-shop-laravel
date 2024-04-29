<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Uuid;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string('email', 320)->unique();
            $table->string('password', 60);           // still needs bcrypt
            $table->integer('matsuri_points');
            $table->enum('role', ['ADMIN', 'CUSTOMER']);
            $table->timestamps();                                   // created_at, updated_at
        });

//        Schema::create('password_reset_tokens', function (Blueprint $table) {
//            $table->string('email')->primary();
//            $table->string('token');
//            $table->timestamp('created_at')->nullable();
//        });
//
//        Schema::create('sessions', function (Blueprint $table) {
//            $table->string('id')->primary();
//            $table->foreignId('user_id')->nullable()->index();
//            $table->string('ip_address', 45)->nullable();
//            $table->text('user_agent')->nullable();
//            $table->longText('payload');
//            $table->integer('last_activity')->index();
//        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
//        Schema::dropIfExists('password_reset_tokens');
//        Schema::dropIfExists('sessions');
    }

//    v migracnom subore pridavame aj data
//    vytvarame tabulky a logiku databazy - nie v pgadmine napisem databazu
//    metoda je = function ----- neriesit, len sa to tak vola

//    lazy loading - eager loading - mozno pouzit pri user - produkt aby sa to nacitalo po prihlaseni

//    cez cookies - tokeny - ulozia sa veci - cez controllery viem vytiahnut cookies a tokens

// treba pracovat s cache - napr. admin pridava produkt, update produktu, delete
// urcite nepouzivat cache v default - vo filesysteme
// redis - stiahnut a pouzit driver, nastavit v config


};
