<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public function employees() {
        $this->belongsToMany(Roles::class);
    }
}
