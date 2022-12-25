<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TVseries extends Model
{
    use HasFactory;
    protected $fillable = [
        'tv_name',
        'tv_image',
        'tv_detail'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
