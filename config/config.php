<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'litecms',

    /*
     * Package.
     */
    'package'   => 'blog',

    /*
     * Modules.
     */
    'modules'   => ['category', 
'blog', 
'comment', 
'tag'],

    'category'       => [
        'model' => [
            'model'                 => \Litecms\Blog\Models\Category::class,
            'table'                 => 'blog_categories',
            'presenter'             => \Litecms\Blog\Repositories\Presenter\CategoryPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'created_at', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'name',  'slug',  'status',  'user_type',  'user_id',  'upload_folder',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'blog/category',
            'uploads'               => [
            
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            
            ],

            'casts'                 => [
            
                'images'    => 'array',
                'file'      => 'array',
            
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litecms',
            'package'   => 'Blog',
            'module'    => 'Category',
        ],

    ],

    'blog'       => [
        'model' => [
            'model'                 => \Litecms\Blog\Models\Blog::class,
            'table'                 => 'blogs',
            'presenter'             => \Litecms\Blog\Repositories\Presenter\BlogPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'title'],
            'dates'                 => ['deleted_at', 'created_at', 'updated_at', 'published_at'],
            'appends'               => [],
            'fillable'              => ['id',  'category_id',  'title',  'description',  'images',  'tags',  'viewcount',  'slug',  'published',  'published_at',  'user_type',  'user_id',  'upload_folder',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'blog/blog',
            'uploads'               => [
            
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            
            ],

            'casts'                 => [
            
                'images'    => 'array',
                'tags'      => 'array',
            
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'title'  => 'like',
                'status',
                'tags' => 'like',

            ]
        ],

        'controller' => [
            'provider'  => 'Litecms',
            'package'   => 'Blog',
            'module'    => 'Blog',
        ],

    ],

    'comment'       => [
        'model' => [
            'model'                 => \Litecms\Blog\Models\Comment::class,
            'table'                 => 'blog_comments',
            'presenter'             => \Litecms\Blog\Repositories\Presenter\CommentPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'author'],
            'dates'                 => ['deleted_at', 'created_at', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'comment',  'author',  'email', 'mobile', 'slug', 'published',  'user_id',  'user_type',  'blog_id',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'blog/comment',
            'uploads'               => [
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

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litecms',
            'package'   => 'Blog',
            'module'    => 'Comment',
        ],

    ],

    'tag'       => [
        'model' => [
            'model'                 => \Litecms\Blog\Models\Tag::class,
            'table'                 => 'blog_tags',
            'presenter'             => \Litecms\Blog\Repositories\Presenter\TagPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'created_at', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'name',  'frequency',  'slug',  'published',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'blog/tag',
            'uploads'               => [
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

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litecms',
            'package'   => 'Blog',
            'module'    => 'Tag',
        ],

    ],
];
