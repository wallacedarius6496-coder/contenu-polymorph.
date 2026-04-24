<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['titre', 'url', 'duree'];

public function commentaires()
{
    return $this->morphMany(Commentaire::class, 'commentable');
}

public function images()
{
    return $this->morphMany(Image::class, 'imageable');
}

public function tags()
{
    return $this->morphToMany(Tag::class, 'taggable');
}
}
