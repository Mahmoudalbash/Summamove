<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;

    protected $fillable = ['username_id', 'exercise_id', 'duration', 'speed', 'distance'];

    public function user()
    {
        return $this->belongsTo(User::class, 'username_id');
    }

    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }
}
