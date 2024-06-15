<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
			$table->string('email')->unique();
			$table->string('password')->nullable();
			$table->string('role', 3)->comment("A: Admin"); 
			$table->string('phone_prefix')->nullable();
			$table->string('phone')->nullable();			
			$table->enum('is_active', ['0', '1'])->default('0');
			$table->string('photo')->nullable();
            $table->timestamp('email_verified_at')->nullable();
			$table->string('timezone')->nullable();
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
}
