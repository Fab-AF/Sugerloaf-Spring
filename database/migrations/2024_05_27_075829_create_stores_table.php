<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
			$table->string('name');			
			$table->string('slug')->nullable();
			$table->text('description')->nullable();
			$table->string('address')->nullable();
			$table->string('latitude')->nullable();
			$table->string('longitude')->nullable();
			$table->string('available_products')->nullable();
			$table->string('phone_prefix')->nullable();
			$table->string('phone')->nullable();
			$table->string('email')->unique();			
			$table->string('photo')->nullable();            
			$table->string('timezone')->nullable();
			$table->enum('status', ['0', '1'])->default('0');
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
        Schema::dropIfExists('stores');
    }
}
