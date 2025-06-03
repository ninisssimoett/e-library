<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
    'title',
    'author',
    'publisher',
    'year',
    'stock',
    'cover',
    'category_id'
    
    ];

    // koneksi/relasi ke model category
    public function category() {
        return $this->belongsTo(category::class);
    }

}
