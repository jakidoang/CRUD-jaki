<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public $incrementing = false;
    protected $keyType = 'string';

    public function movies()
    {
        return $this->hasMany(Movie::class, 'genre_id');
    }
}
