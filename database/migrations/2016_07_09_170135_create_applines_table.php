<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplinesTable extends Migration
{
    /*
     описание:
    Таблица Строки Заявки:
    - ссылка на profile спортсмена,
    - ссылка на таблицу весовых категорий,
    - ссылка на profile тренера
     */
    public function up()
    {
        Schema::create('applines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('profile_id');
            $table->string('category_id');
            $table->string('coach_id');
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
        Schema::drop('applines');
    }
}
