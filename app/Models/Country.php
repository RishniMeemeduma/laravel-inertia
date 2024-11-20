<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
//     country
//     id - integer
//     name - string

//      user
//     id - integer
//     country_id - integer
//     name - string

//      games
//     id - integer
//     user_id - integer
//     title - string
    // get all the games belongs to country

    public function games() {
        return $this->hasManyThrough(Games::class, User::class);
    }
}
