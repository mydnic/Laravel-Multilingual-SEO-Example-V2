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

    /**
     * Custom method that searches through model translations.
     *
     * @return Builder
     */
    public static function whereTranslation($field, $value)
    {
        // Support for MariaDB and Mysql < 5.7
        // Still not optimal solution ...
        return static::where($field, 'like', '%' . $value . '%');
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
}
