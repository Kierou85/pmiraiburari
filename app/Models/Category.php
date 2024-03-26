<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name']; // Kolom yang dapat diisi

    // Relasi dengan tabel Book (jika diperlukan)
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}