# Installation

The instructions below will help you to properly install the generated package to the lavalite project.

## Location

Extract the package contents to the folder 

`/packages/litecms/blog/`

## Composer

Add the below entries in the `composer.json` file's autoload section and run the command `composer dump-autoload` in terminal.

```json

...
     "autoload": {
         ...

        "classmap": [
            ...
            
            "packages/litecms/blog/database/seeds",
            
            ...
        ],
        "psr-4": {
            ...
            
            "Litecms\\Blog\\": "packages/litecms/blog/src",
            
            ...
        }
    },
...

```

## Config

Add the entries in service provider in `config/app.php`

```php

...
    'providers'       => [
        ...
        
        Litecms\Blog\Providers\BlogServiceProvider::class,
        
        ...
    ],

    ...

    'alias'             => [
        ...
        
        'Blog'  => Litecms\Blog\Facades\Blog::class,
        
        ...
    ]
...

```

## Migrate

After service provider is set run the commapnd to migrate and seed the database.


    php artisan migrate
    php artisan db:seed --class=Litecms\\BlogTableSeeder

## Publishing


**Publishing configuration**

    php artisan vendor:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --tag="config"

**Publishing language**

    php artisan vendor:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --tag="lang"

**Publishing views**

    php artisan vendor:publish --provider="Litecms\Blog\Providers\BlogServiceProvider" --tag="view"


## URLs and APIs


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