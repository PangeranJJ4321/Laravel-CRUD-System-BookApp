<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // Tentukan atribut yang dapat diisi (fillable)
    protected $fillable = ['title', 'author', 'description'];
}
