<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = ['id'];

    public function films() {
        return $this->belongsToMany(Film::class, 'film_categories');
    }

}
