<?php

return [

    /**
     * Provider.
     */
    'provider' => 'dentist',

    /*
     * Package.
     */
    'package'  => 'blog',

    /*
     * Modules.
     */
    'modules'  => ['blog', 'category'],

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
        'fillable'      => ['user_id', 'category_id', 'title', 'description', 'viewcount', 'status', 'posted_on', 'published'],

        'upload-folder' => '/uploads/blog/blog',
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
        'fillable'      => ['user_id', 'name', 'status'],

        'upload-folder' => '/uploads/blog/category',
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
