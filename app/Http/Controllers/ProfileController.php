<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Profile;
use App\Repositories\ProfileRepository;


class ProfileController extends Controller
{

    protected $profiles;

    //
    public function __construct(ProfileRepository $profiles)
    {
       $this->middleware('auth');

        $this->profiles = $profiles;
    }


    public function index(Request $request)
    {
        return view('profiles.index', [

            'profiles' => $this->profiles->forUser($request->user()),
        ]);

    }


    public function store(Request $request)
    {
        $this->validate($request, [

            'name' => 'required|max:255',

            'surname' => 'required|max:255',

            'last_name' => 'required|max:255',

            'birth_date' => 'required|max:10',

            'sport_level' => 'required|max:4',

            'sex' => 'required|max:4',

        ]);

        $request->user()->profiles()->create([

            'name' => $request->name,

            'surname' => $request->surname,

            'last_name' => $request->last_name,

            'birth_date' => $request->birth_date,

            'sport_level' => $request->sport_level,

            'sex' => $request->sex,


        ]);

        return redirect('/profiles');

    }

    public function destroy(Request $request, Profile $profile)
    {
        $this->authorize('destroy', $profile);

        $profile->delete();

        return redirect('/profiles');
    }

}
