<?php

use Illuminate\Support\Facades\Storage;

Route::group(['middleware' => 'web'], function() {


//-----------------------------------------------------------------------------
    // Authentication Routes...

    //Route::get('admin', 'frozennode\src\Frozennode\Administrator\AdminController@dashboard');

    Route::get('/', function(){

        return view('news');

    })->middleware('guest');

    Route::get('/profiles', 'ProfileController@index');
    Route::post('/profile', 'ProfileController@store');
    Route::delete('/profile/{profile}', 'ProfileController@destroy');

    Route::auth();

//-------------------------------------------------------------------------------

    Route::get('/news', function(){

        return view('news');

    });

//-------------------------------------------------------------------------------
   // Роуты интерфейса главного тренера:

    //Route::post('/competition', 'CompetitionController@store');


    //страница добавления соревнований:
    /*Route::get('/competition', function(){

        return view('head_coach.competition');

    });*/

    //успешная запись соревнования:
    Route::get('/success', function() {

       return view ('head_coach.success');
    });

    //просмотр текущих соревнований:
    Route::get('/current_competition', function(){

        $competitions = DB::table('competitions')->get();

        return view('head_coach.current_competition', ['competitions' => $competitions]);

    });

    Route::get('competition', 'CompetitionController@index');

    Route::get('competition/get/{filename}', [
        'as' => 'getfile', 'uses' => 'CompetitionController@get']);

    Route::post('competition/add', [
       'as' => 'addfile', 'uses' => 'CompetitionController@add']);

    Route::get('/download/getDownload/{file_id}', [
        'as' => 'filedownload', 'uses' => 'CompetitionController@getDownload']);


});






