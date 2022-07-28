<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    use HasFactory;

    protected $fillable = [
        'video','nama', 'image','thumbnail','deskripsi','id_band','id_genre', 'id_type'
    ];

    public function genres()
    {
        return $this->belongsTo(Genre::class, 'id_genre');
    }

    public function bands()
    {
        return $this->belongsTo(Band::class, 'id_band');
    }

    public function types()
    {
        return $this->belongsTo(Type::class, 'id_type');
    }
}
