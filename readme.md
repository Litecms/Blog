Lavalite package that provides blog management facility for the cms.

## Installation

Installing this package using Composer.

    composer install litecms/blog


## Publishing files and migraiting database.

**Migration and seeds**

    php artisan migrate
    php artisan db:seed --class=Litecms\\BlogTableSeeder

**Publishing configuration**

    php artisan vendor:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --tag="config"

**Publishing language**

    php artisan vendor:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --tag="lang"

**Publishing views**

    php artisan vendor:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --tag="view"

**Publishing views to theme**

Publishes admin view
    php artisan theme:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --view=="admin" --theme=="admin"

Publishes client view
    php artisan theme:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --view=="default" --theme=="client"

Publishes user view
    php artisan theme:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --view=="default" --theme=="user"

Publishes public view
    php artisan theme:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --view=="public" --theme=="public"

