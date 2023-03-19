<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aimes extends Model
{
    use HasFactory;
    protected $fillable = [
        'posts_id',
        'user_id',
 
    ];

    public function user()
    {
        return $this->belongsTo(user::class,"user_id");
    }
    
    public function post()
    {
        return $this->belongsTo(posts::class,"posts_id");
    }
}
