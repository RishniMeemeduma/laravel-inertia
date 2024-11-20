<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    //pholymoprism
    public function waterBill() {
        return $this->mophToOne(waterBill::class, 'billable');
    }
}
