<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function soluations()
    {
        return $this->hasMany(Soluation::class);
    }
        public function soluationuae()
    {
        return $this->hasMany(Soluation::class)->where('origin','uae');
    }
    public function soluationkw()
    {
        return $this->hasMany(Soluation::class)->where('origin','kw');
    }
    public function soluationksa()
    {
        return $this->hasMany(Soluation::class)->where('origin','ksa');
    }
}
