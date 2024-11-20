<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class waterBills extends Model
{
    // waterbills can have for both landlords and tenets
    public function billable() {
        return $this->morphTo();
    }
}
