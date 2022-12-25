<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unwatchlist extends Model
{
    use HasFactory;
    protected $fillable = [
        'unwatch_name'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
