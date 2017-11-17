<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Baum;

use Baum\Node;

use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Node {


    use Sluggable;


    protected $table = 'categories';

    protected $guarded = ['id'];

    public function films() {

        return $this->belongsToMany(Film::class, 'film_categories');
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}