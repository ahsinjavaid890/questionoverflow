<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlltemplatecategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alltemplatecategories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->longtext('description')->nullable();
            $table->string('image');
            $table->longtext('metta_tittle')->nullable();
            $table->longtext('metta_description')->nullable();
            $table->longtext('metta_keywords')->nullable();
            $table->string('status');
            $table->string('order');
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
        Schema::dropIfExists('alltemplatecategories');
    }
}
