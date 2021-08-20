<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'people_id',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
