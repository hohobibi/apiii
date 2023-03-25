<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,"user_id");
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaires::class,"post_id");
    }

    public function aimes()
    {
        return $this->hasMany(Aimes::class,"posts_id");
    }
}
