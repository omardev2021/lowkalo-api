<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $guarded = [];
    use HasFactory;


    public function videos() {
        return $this->hasMany('App\Models\Video');
    }
}
