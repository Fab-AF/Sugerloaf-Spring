<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms', function (Blueprint $table) {
            $table->id();
			$table->string('title');
			$table->string('slug')->nullable();
			$table->text('description')->nullable();
			$table->enum('status',['0','1'])->default(1)->comment('0:InActive, 1:Active');
			$table->enum('is_deletable',['0','1'])->default(1);
			$table->string("seo_title")->nullable();
			$table->text("seo_keyword")->nullable();
			$table->text("seo_description")->nullable();

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
        Schema::dropIfExists('cms');
    }
}
