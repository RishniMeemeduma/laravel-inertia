<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
//     rent
//     id - integer
//     name - string
//     value - double

// tenants
//     id - integer
//     name - string
//     rent_id - integer

// landlord
//     id - integer
//     name - string
//     tenant_id - integer
    // One to many
    public function Rent() {
        return $this->hasMany(Rent::class);     // $rent = Tenant::find(10)->rent; hasone
        // $rent = Tenant::find(10)->rent()->where('payment' ,'>', '5000')->first();
    }

    //One to many, latestofMay
    public function latestRent() {
        return $this->hasOne(Rent::class)->latestOfMany();
    }

    //One to many, oldestOfMany
    public function OldestRent() {
        return $this->hasOne(Rent::class)->oldestOfMany();
    }

    // One to Many, custom
    public function latestRentByPriceMin() {
        return $this->hasOne(Rent::class)->ofMany('price', 'min');
    }

    // pholymoprisam
    public function waterBill() {
        return $this->morphOne(waterBill::class, 'billable');
    }

    


}
