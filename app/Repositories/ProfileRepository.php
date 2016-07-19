<?php

namespace App\Repositories;

use App\User;

use App\Profile;

class ProfileRepository
{
    public function forUser(User $user)
    {
        return Profile::where('user_id', $user->id)
                        ->orderBy('created_at', 'asc')
                        ->get();
    }
}
