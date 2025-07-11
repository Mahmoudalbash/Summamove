<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function performances()
    {
        return $this->hasMany(Performance::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
