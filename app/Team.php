<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $fillable = ['name', 'level'];

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }
}
