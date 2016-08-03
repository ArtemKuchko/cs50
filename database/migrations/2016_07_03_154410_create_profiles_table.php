<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /* описание:
    Таблица Профайлы:
    - фамилия,
    - имя,
    - отчество,
    - разряд,
    - пол,
    - роль (администратор, главный судья, тренер, спортсмен)
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->string('name');
            $table->string('surname');
            $table->string('last_name');
            $table->date('birth_date');
            $table->string('sport_level');
            $table->string('sex');
            /*$table->string('role');*/

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
        Schema::drop('profiles');
    }
}
