<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    //
    protected $fillable = [ 'name', 'date_start', 'date_end', 'level', 'place', 'dead_line', 'thesis_file'];

}
