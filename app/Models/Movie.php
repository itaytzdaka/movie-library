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

    protected $casts = [
        'release_date' => 'date',
        'runtime_minutes' => 'integer',
    ];


    public function getRuntimeFormattedAttribute(): string
    {
        if (!$this->runtime_minutes) {
            return "";
        }

        $hours = intdiv($this->runtime_minutes, 60);
        $minutes = $this->runtime_minutes % 60;

        return sprintf('%dh %02dm', $hours, $minutes);
    }


    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
