<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'content'];

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan Comment
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Relasi dengan Vote
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
