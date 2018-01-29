<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use Sluggable, HasTranslations;

    protected $fillable = ['title', 'content'];

    public $translatable = ['title', 'slug', 'content'];

    protected $casts = [
        'slug' => 'array',
    ];

    public static function whereTranslation($field, $value)
    {
        return static::where($field, json_encode([
            app()->getLocale() => $value
        ]));
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

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
