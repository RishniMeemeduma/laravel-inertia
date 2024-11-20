<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stories extends Model
{
    //Pholymopic many to many
    public function tags() {
        return $this->morphToMany(Tags::class, 'taggable');
    }
}
