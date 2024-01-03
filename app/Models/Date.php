<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function times()
    {
        return $this->hasMany(Time::class);
    }

    public function reservation() 
    {
        return $this->hasOne('App\Models\Reservation');
    }
}
