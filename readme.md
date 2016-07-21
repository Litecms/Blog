This is a Litecms 5 package that provides blog management facility for lavalite framework.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `litecms/blog`.

    "litecms/blog": "dev-master"

Next, update Composer from the Terminal:

    composer update

Once this operation completes execute below cammnds in command line to finalize installation.

```php
Litecms\Blog\Providers\BlogServiceProvider::class,

```

And also add it to alias

```php
'Blog'  => Litecms\Blog\Facades\Blog::class,
```

Use the below commands for publishing

Migration and seeds

    php artisan vendor:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --tag="migrations"
    php artisan vendor:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --tag="seeds"

Configuration

    php artisan vendor:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --tag="config"

Language files

    php artisan vendor:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --tag="lang"

View files

    php artisan vendor:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --tag="views"

Public folders

    php artisan vendor:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --tag="public"
    

Publish admin views only if it is necessary.

## Usage


