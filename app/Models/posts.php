<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'user_id',
 
    ];

    public function user()
    {
        return $this->belongsTo(user::class,"user_id");
    }

    public function commentaires()
    {
        return $this->hasMany(commentaires::class,"post_id");
    }

    public function aimes()
    {
        return $this->hasMany(aimes::class,"posts_id");
    }
}
