<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'synopsis', 'poster', 'year', 'available', 'genre_id'];

    public $incrementing = false;
    protected $keyType = 'string';

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'movie_id');
    }

    public function casts()
    {
        return $this->belongsToMany(Cast::class, 'cast_movies', 'movie_id', 'cast_id');
    }
}
