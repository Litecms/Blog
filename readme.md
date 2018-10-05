Lavalite package that provides blog management facility for the cms.

## Installation

Installing this package using Composer.

    composer require litecms/blog

## Migration and seeds

    php artisan migrate
    php artisan db:seed --class=Litecms\\BlogTableSeeder

## Publishing files.

**Configuration**

    php artisan vendor:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --tag="config"

**Language**

    php artisan vendor:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --tag="lang"

**Images**

    php artisan vendor:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --tag="storage"

### Publishing views

Publishes admin view to resources/vendor

    php artisan vendor:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --tag="view"

Publishes admin view to admin theme

    php artisan theme:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --view="admin" --theme="admin"

Publishes public view to public theme

    php artisan theme:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --view="public" --theme="public"

