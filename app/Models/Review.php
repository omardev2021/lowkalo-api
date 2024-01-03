<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'rate',
        'notes',
        'average_rating',
        'soluation_id',
        'user_id',
    ];

    // protected static function booted()
    // {
    //     static::saved(function ($review) {
    //         if ($review->status == 5) {
    //         // When a review is saved, update the average rating for the associated solution
    //         $soluation = $review->soluation;
    //         $averageRating = $soluation->reviews()->average('rate') ?? 0;
    //         $soluation->update(['average_rating' => $averageRating]);
    //         }
    //     });


    //     static::updating(function ($review) {
    //         // Check if the 'status' attribute is being updated to 5
    //         if ($review->isDirty('status') && $review->status == 5) {
    //             // When a review is being updated to status 5, update the average rating
    //             $soluation = $review->soluation;
    //             $averageRating = $soluation->reviews()->where('status', 5)->average('rate') ?? 0;
    //             $soluation->update(['average_rating' => $averageRating]);
    //         }
    //     });
    // }


    public function soluation()
    {
        return $this->belongsTo(Soluation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
