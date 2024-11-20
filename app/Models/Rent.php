<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    // One to Many, get tenent for the rent
    public function Tenant() {
        return $this->belongsTo(Tenant::class);
    }

    // Has one Through
    public function rentLandlord() {
        return $this->hasOneThrough(Landlord::class, Tenant::class);
    }
}
