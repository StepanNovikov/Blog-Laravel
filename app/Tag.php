<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use Sluggable;

    public function posts(){
        return $this->belongsToMany(
            Post::class,
            'posts_tags',
            'tags_id',
            'post_id'
        );
    }

    public function sluggable():array{
        return [
            'slug' => [
                'source' => 'title'
            ]
        ]; //привет - privet
    }
}
