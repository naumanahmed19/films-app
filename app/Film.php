<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\Media as Media2;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;
class Film extends Model implements HasMediaConversions
{
    use Sluggable, HasMediaTrait;


    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       'media'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'films_categories');
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
                'source' => 'title'
            ]
        ];
    }

    public function registerMediaConversions(Media2 $media = null)
    {
        $this->addMediaConversion('thumb')
            ->width(460)
            ->height(260);
    }

    public function featuredImage($request){
        if ($request->hasFile('file')) {
            if ($this->media()->where('collection_name', 'featured')->exists()) {
                $mediaId = $this->getMedia('featured')->first();
                $this->deleteMedia($mediaId);
            }
            $this->addMedia($request->file)->toMediaCollection('featured');
        }
    }




}