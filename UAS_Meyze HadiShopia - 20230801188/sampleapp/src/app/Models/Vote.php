<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model {
    use HasFactory;
    protected $fillable = ['user_id', 'thread_id', 'type'];
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function thread() {
        return $this->belongsTo(Thread::class);
    }
}