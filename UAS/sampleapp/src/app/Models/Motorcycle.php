<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorcycle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'smart_locate_code', 'eco_friendly', 'nav_ride_status',
    ];

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
}
