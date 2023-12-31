<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dream extends Model
{
    use HasFactory;
    protected $table = 'dreams';
    protected $fillable = [
        'user_id',
        'dream_price',
        'comment',
    ];

}
