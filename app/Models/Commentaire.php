<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $fillable = ['auteur', 'contenu'];

public function commentable()
{
    return $this->morphTo();
}
}
