<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key_name');
            $table->enum('text_type', ['textarea', 'richtext', 'text'])->default('richtext');
            $table->string('mentions', 1000)->nullable();
            $table->longText('text',  100000)->nullable();
            $table->string('lang')->default('nl');
            $table->unique(['key_name', 'lang']);
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
        Schema::dropIfExists('texts');
    }
}
