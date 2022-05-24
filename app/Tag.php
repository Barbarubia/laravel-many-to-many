<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // Relazione Many-to-Many con la tabella posts
    public function posts() {
        return $this->belongsToMany('App\Post');
    }
}
