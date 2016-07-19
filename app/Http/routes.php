<?php

//use App\Profile;

//use Illuminate\Http\Request;

Route::group(['middleware' => 'web'], function() {

//-----------------------------------------------------------------------------
    // Authentication Routes...

    Route::get('/', function(){

        return view('home');

    })->middleware('guest');

    Route::get('/profiles', 'ProfileController@index');
    Route::post('/profile', 'ProfileController@store');
    Route::delete('/profile/{profile}', 'ProfileController@destroy');

    Route::auth();

//-------------------------------------------------------------------------------

    Route::get('/home', function(){

        return view('home');

    });

    Route::get('/news', function(){

        return view('news');

    });

    Route::get('/categories', function(){

        return view('categories');

    });




});
/*
    // ���� ��� ����� ���������� ������
    Route::get('/profile', function() {
        $profiles = Profile::orderBy('created_at', 'asc')->get();

        return view('profiles', [
            'profiles' => $profiles
        ]);
    });*/

    // ���� ��� ����������� ������� ������
    /*Route::get('/profile', function (Request $request) {
        //
    });*/


    /*
    // ���� ��� �������� ������
    Route::delete('/profile/{profile}', function (Profile $profile) {
       //
        $profile->delete();
        return redirect('/profile');


    });


    Route::post('/profile', function (Request $request) {

       $validator = Validator::make($request->all(),[

           'name' => 'required|max:255',
       ]);


        if ($validator ->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);


        }

        $profile = new Profile;
        $profile->name = $request->name;
        $profile->surname = $request->surname;
        $profile->last_name = $request->last_name;
        $profile->birth_date = $request->birth_date;
        $profile->sport_level = $request->sport_level;;
        $profile->sex = $request->sex;




        $profile->save();

        return redirect('/profile');

    });*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/*
Route::get('/', 'PostController@index');

Route::resource('lists', 'ListsController');
*/


//Route::get('/home', 'HomeController@index');
