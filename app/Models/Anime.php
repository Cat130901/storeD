<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'anime_name',
        'anime_image',
        'anime_detail'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
