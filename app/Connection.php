<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    //
    protected $fillable = [
        'application'=> 'boolen',
    ];

    protected $casts = [
        'profile_id' => 'int',
        'team_id' => 'int',
    ];



}
