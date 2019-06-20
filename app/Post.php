<?php

namespace proyectojp;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function author(){//relacion
        return $this->belongsTo(User::class, 'author_id');
    }
}
