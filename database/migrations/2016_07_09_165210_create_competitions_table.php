<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionsTable extends Migration
{
    /*
    Описание:
    таблица Соревнования:
    - начало соревнований,
    - конец соревнований,
    - уровень соревнований (городской, областной, национальный)
    - дедлайн заявки,
    - ссылка на id файла о положении проведения соревнований

     */
    public function up()
    {
        Schema::create('competitions', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('level');
            $table->string('place');
            $table->string('name');
            $table->date('dead_line');

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
        Schema::drop('competitions');
    }
}
