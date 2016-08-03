<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorysTable extends Migration
{
    /*
     описание:
    Таблица Весовые категории
    - название категории (напрмер до 48кг, до 52кг, до 56 кг, свыше 90 кг и т.д.)
    - минимальный допустимый вес (например, 52.100 кг)
    - максимальный допустимый вес вес ( например, 56.00 кг)
     */
    public function up()
    {
        Schema::create('categorys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->double('min_weight');
            $table->double('max_weight');
            $table->string('group');

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
        Schema::drop('categorys');
    }
}
