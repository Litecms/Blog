Laravel package that provides content blog management facility for lavalite CMS.

## Installation

Require this package with composer. 

    composer require litecms/blog

Laravel 5.5 uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.


## Publishing

**Configuration**

    php artisan vendor:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --tag="config"

**Language**

    php artisan vendor:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --tag="lang"

**Files**

    php artisan vendor:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --tag="storage"

### Views

Publish views to resources\views\vendor directory

    php artisan vendor:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --tag="view"

Publishes admin view to admin theme

    php artisan theme:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --view="admin" --theme="admin"

Publishes public view to public theme

    php artisan theme:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --view="public" --theme="public"