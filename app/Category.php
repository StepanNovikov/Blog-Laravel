<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Sluggable;

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function sluggable():array{
        return [
            'slug' => [
                'source' => 'title'
            ]
        ]; //привет - privet
    }
}
