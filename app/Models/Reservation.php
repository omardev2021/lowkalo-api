<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = [];
    use HasFactory;


    public function date() 
    {
        return $this->belongsTo(Date::class);
    }


    public function time() 
    {
        return $this->belongsTo(Time::class);
    }
}
