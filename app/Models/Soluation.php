<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soluation extends Model
{
    use HasFactory;
    protected $fillable = [
       
        'average_rating',
       
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function visits()
    {
        return $this->hasMany(Visit::class);
    }
}
