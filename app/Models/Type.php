<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama'
    ];


    public function postings()
    {
        return $this->HasMany(Posting::class);
    }
}
