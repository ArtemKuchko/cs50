<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThesisFilesTable extends Migration
{
    /*
     описание:
    Таблица Положение о проведении соревнований
    - название файла,
    - тип файла (расширение),
    - исходное название файла
     */
    public function up()
    {
        Schema::create('thesis_files', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('filename');
            $table->string('mime');
            $table->string('original_filename');
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
        Schema::table('thesis_files', function (Blueprint $table) {
            //
        });
    }
}
