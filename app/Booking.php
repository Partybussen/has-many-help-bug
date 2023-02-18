<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function departure()
    {
        return $this->belongsTo(Departure::class);
    }
}
