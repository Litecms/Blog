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
    
## URLs and APIs

### Web Urls

**Admin**

    http://path-to-route-folder/admin/blogs/{modulename}

**User**

    http://path-to-route-folder/user/blogs/{modulename}

**Public**

    http://path-to-route-folder/blogs


#### API endpoints

**List**

    http://path-to-route-folder/api/user/blog/{modulename}
    METHOD: GET

**Create**

    http://path-to-route-folder/api/user/blog/{modulename}
    METHOD: POST

**Edit**

    http://path-to-route-folder/api/user/blog/{modulename}/{id}
    METHOD: PUT

**Delete**

    http://path-to-route-folder/api/user/blog/{modulename}/{id}
    METHOD: DELETE

**Public List**

    http://path-to-route-folder/api/blogs/{modulename}s
    METHOD: GET

**Public Single**

    http://path-to-route-folder/api/blog/{modulename}/{slug}
    METHOD: GET
