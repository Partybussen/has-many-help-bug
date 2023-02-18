<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departure extends Model
{
    public function organiser()
    {
        return $this->belongsTo(Customer::class);
    }
}
