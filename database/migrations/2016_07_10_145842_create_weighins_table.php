<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeighinsTable extends Migration
{
    /*
     описание:
    Таблица Взвешивание
    - соревнование,
    - profile спортсмена,
    - реальный вес спортсмена на взвешивании.
     */
    public function up()
    {
        Schema::create('weighins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('competition_id');
            $table->string('profile_id');
            $table->double('real_weight');

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
        Schema::drop('weighins');
    }
}
