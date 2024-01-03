<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{

    protected $guarded = [];
    use HasFactory;


    public function reservation() 
    {
        return $this->hasOne('App\Models\Reservation');
    }
}
