<?php

return [

    /**
     * Provider.
     */
    'provider' => 'litecms',

    /*
     * Package.
     */
    'package'  => 'blog',

    /*
     * Modules.
     */
    'modules'  => ['blog', 'category'],
    /*
    /* Image size.
     */
    'image'    => [

        'sm' => [
            'width'     => '140',
            'height'    => '140',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],

        'md' => [
            'width'     => '370',
            'height'    => '420',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],

        'lg' => [
            'width'     => '780',
            'height'    => '497',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],
        'xl' => [
            'width'     => '800',
            'height'    => '530',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],

    ],

    'blog'     => [
        'model'         => 'Litecms\Blog\Models\Blog',
        'table'         => 'blogs',
        'presenter'     => \Litecms\Blog\Repositories\Presenter\BlogItemPresenter::class,
        'hidden'        => [],
        'visible'       => [],
        'guarded'       => ['*'],
        'slugs'         => ['slug' => 'title'],
        'dates'         => ['deleted_at'],
        'appends'       => [],
        'fillable'      => ['user_id', 'user_type', 'category_id', 'title', 'description', 'viewcount', 'status', 'posted_on', 'published', 'upload_folder'],

        'upload_folder' => 'blog/blog',
        'uploads'       => [
            'single'   => ['image'],
            'multiple' => ['images'],
        ],
        'casts'         => [
            'image'  => 'array',
            'images' => 'array',
        ],
        'revision'      => [],
        'perPage'       => '20',
        'search'        => [
            'title' => 'like',
            'status',
            'posted_on',
            'published',
            'category_id',
        ],
    ],
    'category' => [
        'model'         => 'Litecms\Blog\Models\Category',
        'table'         => 'blog_categories',
        'presenter'     => \Litecms\Blog\Repositories\Presenter\CategoryItemPresenter::class,
        'hidden'        => [],
        'visible'       => [],
        'guarded'       => ['*'],
        'slugs'         => ['slug' => 'name'],
        'dates'         => ['deleted_at'],
        'appends'       => [],
        'fillable'      => ['user_id', 'user_type', 'name', 'status', 'upload_folder'],

        'upload_folder' => '/blog/category',
        'uploads'       => [
            'single'   => [],
            'multiple' => [],
        ],
        'casts'         => [
        ],
        'revision'      => [],
        'perPage'       => '20',
        'search'        => [
            'name' => 'like',
            'status',
        ],
    ],
];
