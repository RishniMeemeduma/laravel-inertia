<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
//     employees
//     id - integer
//     name - string

//      roles 
//     id - integer
//     name - string

//      role_employees
//     user_id - integer
//     role_id - integer
    public function Roles() {
        $this->belongsToMany(Roles::class);
    }
}
