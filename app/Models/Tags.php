<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    // pholymopic Many to Many
    public function storis() {
        return $this->morphedByMany(Stories::class, 'taggable');
    }
}
