<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorialSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorial_sections', function (Blueprint $table) {
            $table->id();
            $table->string('tutorial_id');
            $table->string('heading')->nullable();
            $table->longtext('description')->nullable();
            $table->longtext('content')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('tutorial_sections');
    }
}
