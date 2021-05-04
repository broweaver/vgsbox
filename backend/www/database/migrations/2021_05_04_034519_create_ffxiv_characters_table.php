<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFfxivCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ffxiv_characters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('portrait');
            $table->string('avatar');
            $table->string('server');
            $table->string('dc');
            $table->integer('id_lodestone');
            $table->string('free_company_name');
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
        Schema::dropIfExists('ffxiv_characters');
    }
}
