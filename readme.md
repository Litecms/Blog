Lavalite package that provides blog management facility for the cms.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `litecms/blog`.

    "litecms/blog": "dev-master"

Next, update Composer from the Terminal:

    composer update

Once this operation completes execute below cammnds in command line to finalize installation.

    Litecms\Blog\Providers\BlogServiceProvider::class,

And also add it to alias

    'Blog'  => Litecms\Blog\Facades\Blog::class,

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


### Web Urls

**Admin**

    http://path-to-route-folder/admin/blog/{modulename}

**User**

    http://path-to-route-folder/user/blog/{modulename}

**Public**

    http://path-to-route-folder/blogs


### API endpoints

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

    http://path-to-route-folder/api/blog/{modulename}
    METHOD: GET

**Public Single**

    http://path-to-route-folder/api/blog/{modulename}/{slug}
    METHOD: GET