<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Competition;

use App\Thesis_file;

use Illuminate\Http\Request;

use App\Http\Requests;

use Storage;

//use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

class CompetitionController extends Controller
{
    protected $competitions;

    public function index()
    {
        //$competitions = DB::table('competitions')->get();

        return view('head_coach.competition');
    }

    /*public function store(Request $request)
    {
        $this->validate($request, [

            'name' => 'required|max:255',

            'date_start' => 'required',

            'date_end' => 'required|date|after:date_start',

            'level' => 'required',

            'place' => 'required',

            'dead_line' => 'required',

        ]);

        $competition = new Competition;

        $competition -> name = $request->name;
        $competition -> date_start = $request->date_start;
        $competition -> date_end = $request->date_end;
        $competition -> level = $request->level;
        $competition -> place = $request->place;
        $competition -> dead_line = $request->dead_line;

        $competition->save();

        //return redirect('/success');
    }*/

    public function add(Request $request)
    {
        //проверка правильного ввода соревнований:
        $this->validate($request, [
            'name' => 'required|max:255',
            'date_start' => 'required',
            'date_end' => 'required|date|after:date_start',
            'level' => 'required',
            'place' => 'required',
            'dead_line' => 'required',
        ]);

        //сохранение положения о проведени соревнований:
        $file = $request -> file('thesis_file');
        $extension = $file -> getClientOriginalExtension();
        Storage::disk('public') -> put($file -> getFilename().'.'.$extension, File::get($file));
        $thesis_file = new Thesis_file();
        $thesis_file -> mime = $file -> getClientMimeType();
        $thesis_file -> original_filename = $file -> getClientOriginalName();
        $thesis_file -> filename = $file -> getFilename().'.'.$extension;
        $thesis_file -> save();

        $competition = new Competition;
        $competition -> name = $request -> name;
        $competition -> date_start = $request -> date_start;
        $competition -> date_end = $request -> date_end;
        $competition -> level = $request -> level;
        $competition -> place = $request -> place;
        $competition -> dead_line = $request -> dead_line;
        $competition -> file_id = $thesis_file -> id;
        $competition->save();

        return redirect('current_competition');

    }

    public function getDownload($file_id)
    {
        $for_file = Thesis_file::where('id', '=', $file_id) -> firstOrFail();
        $file = $for_file -> filename;

        $for_header = $for_file -> mime;
        $headers = array(
            'Content-Type' => $for_header,
        );

        $filepath = storage_path()."/app/public/".$file;

        return response()->download($filepath, $file, $headers);
    }

}
