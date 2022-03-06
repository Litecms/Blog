<?php

return [

    /**
     * Provider.
     */
    'provider' => 'litecms',

    /*
     * Package.
     */
    'package' => 'blog',

    /*
     * Modules.
     */
    'modules' => ['blog', 'category', 'tag'],

    'blog' => [
        'model' => [
            'model' => \Litecms\Blog\Models\Blog::class,
            'repository' => \Litecms\Blog\Repositories\Eloquent\BlogRepository::class,
            'table' => 'blogs',
            'hidden' => [],
            'visible' => [],
            'guarded' => ['*'],
            'slugs' => ['slug' => 'title'],
            'dates' => ['deleted_at', 'createdat', 'updated_at'],
            'appends' => [],
            'fillable' => [
                'id', 'category_id', 'title', 'description', 'images', 'tags', 'viewcount',
                'slug', 'status', 'user_id', 'user_type', 'created_at', 'updated_at', 'deleted_at',
            ],
            'translatables' => [],
            'upload_folder' => 'blog/blog',
            'uploads' => [
                /*
                'file' => [
                'count' => 1,
                'type'  => 'file',
                ],
                 */
                'images' => [
                    'count' => 1,
                    'type' => 'image',
                ],
            ],

            'casts' => [
                /*

                'file'      => 'array',
                 */
                'images' => 'array',
                'tags' => 'array',
            ],

            'revision' => [],
            'perPage' => '20',
            'search' => [
                'name' => 'like',
                'status',
            ],
        ],

        'controller' => [
            'provider' => 'Litecms',
            'package' => 'Blog',
            'module' => 'Blog',
        ],
    ],
    'category' => [
        'model' => [
            'model' => \Litecms\Blog\Models\Category::class,
            'repository' => \Litecms\Blog\Repositories\Eloquent\CategoryRepository::class,
            'table' => 'blog_categories',
            'hidden' => [],
            'visible' => [],
            'guarded' => ['*'],
            'slugs' => ['slug' => 'name'],
            'dates' => ['deleted_at', 'createdat', 'updated_at'],
            'appends' => [],
            'fillable' => ['id', 'name', 'slug', 'status', 'user_id', 'user_type', 'created_at', 'updated_at', 'deleted_at'],
            'translatables' => [],
            'upload_folder' => 'blog/category',
            'uploads' => [
                /*
            'images' => [
            'count' => 10,
            'type'  => 'image',
            ],
            'file' => [
            'count' => 1,
            'type'  => 'file',
            ],
             */
            ],

            'casts' => [
                /*
            'images'    => 'array',
            'file'      => 'array',
             */
            ],

            'revision' => [],
            'perPage' => '20',
            'search' => [
                'name' => 'like',
                'status',
            ],
        ],

        'controller' => [
            'provider' => 'Litecms',
            'package' => 'Blog',
            'module' => 'Category',
        ],
    ],
    'tag' => [
        'model' => [
            'model' => \Litecms\Blog\Models\Tag::class,
            'repository' => \Litecms\Blog\Repositories\Eloquent\TagRepository::class,
            'table' => 'blog_tags',
            'hidden' => [],
            'visible' => [],
            'guarded' => ['*'],
            'slugs' => ['slug' => 'name'],
            'dates' => ['deleted_at', 'createdat', 'updated_at'],
            'appends' => [],
            'fillable' => ['id', 'name', 'slug', 'status', 'user_id', 'user_type', 'created_at', 'updated_at', 'deleted_at'],
            'translatables' => [],
            'upload_folder' => 'blog/tag',
            'uploads' => [
                /*
            'images' => [
            'count' => 10,
            'type'  => 'image',
            ],
            'file' => [
            'count' => 1,
            'type'  => 'file',
            ],
             */
            ],

            'casts' => [
                /*
            'images'    => 'array',
            'file'      => 'array',
             */
            ],

            'revision' => [],
            'perPage' => '20',
            'search' => [
                'name' => 'like',
                'status',
            ],
        ],

        'controller' => [
            'provider' => 'Litecms',
            'package' => 'Blog',
            'module' => 'Tag',
        ],
    ],
];
