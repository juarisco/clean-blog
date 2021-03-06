<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//    protected $fillable = ['title', 'subtitle', 'slug', 'body', 'status'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
