<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    public function users() {
        $this->belongsTo(Users::class);
    }
}
