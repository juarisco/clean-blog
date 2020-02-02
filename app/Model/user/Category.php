<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
        return $this->belongsToMany(Post::class)->orderBy('created_at', 'DESC')->simplePaginate(5);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
