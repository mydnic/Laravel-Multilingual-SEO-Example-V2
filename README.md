# Achieved Goals

- Enforcing the Language Code in the URL
- Having localized models, meaning : you can write the same blog post in several languages, editable by logged in user.
- Having the ability to add as many language as you want through config file
- Translate the blog post's slugs
- Having localized URL's for both static pages and Eloquent Models with the translated slugs
- Updating the slug of a page on the fly when switching language


# Current Issues

- Sluggable package can't properly check uniqueness of model's slug
- No way to find a model by its translation in a practical way

# Notes
## whereTranslations()
The [spatie/laravel-translatable](https://github.com/spatie/laravel-translatable) package lacks of a whereTranslations() method that works with MariaDB and MySQL < 5.7

Current solution is not optimal (cf [Post.php](https://github.com/mydnic/Laravel-Multilingual-SEO-Example-V2/blob/master/app/Post.php#L22))

