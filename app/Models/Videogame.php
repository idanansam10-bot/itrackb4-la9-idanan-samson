<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    protected $fillable = ['title', 'developer', 'genre', 'year'];

    protected function casts(): array
    {
        return [
            'year' => 'integer',
        ];
    }
}