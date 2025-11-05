<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'release_date',
        'poster_url',
        'director',
        'runtime_minutes',
        'actors',
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
