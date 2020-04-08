<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePageAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_page_abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('sub_title');
            $table->text('description');
            $table->string('third_image');
            $table->string('first_image');
            $table->string('second_image');
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
        Schema::dropIfExists('home_page_abouts');
    }
}
