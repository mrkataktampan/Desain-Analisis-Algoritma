<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'user_id', 'motorcycle_id', 'message',
    ];

    // Relasi ke tabel users
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke tabel motorcycles
    public function motorcycle()
    {
        return $this->belongsTo(Motorcycle::class);
    }
}
