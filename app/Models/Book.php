<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = 'id_bo';
    use HasFactory;

    public $timestamps = true;
    protected $fillable = [
        'judul', 'pengarang', 'penerbit', 'tahun_terbit', 'jumlah_halaman', 'deskripsi', 'image', 'download', 'jml_pengunj', 'jml_dl', 'created_at', 'updated_at', 'id_cat'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_cat');
    }
}