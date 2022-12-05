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
        /**
         * USER TYPES *
         * USR---> CUSTOMER
         * ADM---> SUPER ADMIN
         * WHS---> WAREHOUSE MANAGER
         * DLV---> SHIPPING MANAGER
         * DRV---> DRIVER
         */

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('ID_NO');
            $table->string('phone');
            $table->string('user_type')->default('USR');
            $table->string('image')->nullable();
            $table->string('status')->nullable()->default('available');//for drivers only
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
