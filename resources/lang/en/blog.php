<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for blog in blog package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  blog module in blog package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name' => 'Blog',
    'names' => 'Blogs',
    'icon' => 'las la-list',

    /**
     * Singlular and plural name of the module
     */
    'title' => [
        'main' => 'Blogs',
        'sub' => 'Blogs'
    ],

    /**
     * Singlular and plural name of the module
     */
    'groups'         => [
        'main' => 'Main',
        'images' => 'Images',
        'details' => 'Details',
        'settings' => 'Settings'
    ],

    /**
     * Form sub section name for the module.
     */
    'sections' => [
        'main' => 'Main',
        'details' => 'Details',
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
        'published'           => ['yes'=>'yes','no'=>'no'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'category_id'                => 'Please select category',
        'title'                      => 'Please enter title',
        'description'                => 'Please enter description',
        'images'                     => 'Please enter images',
        'tags'                       => 'Please enter tags',
        'viewcount'                  => 'Please enter viewcount',
        'slug'                       => 'Please enter slug',
        'published'                  => 'Please select published',
        'published_at'               => 'Please enter published at',
        'user_id'                    => 'Please enter user id',
        'user_type'                  => 'Please enter user type',
        'created_at'                 => 'Please select created at',
        'updated_at'                 => 'Please select updated at',
        'deleted_at'                 => 'Please select deleted at',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'category_id'                => 'Category',
        'title'                      => 'Title',
        'description'                => 'Description',
        'images'                     => 'Images',
        'tags'                       => 'Tags',
        'viewcount'                  => 'Viewcount',
        'slug'                       => 'Slug',
        'published'                  => 'Published',
        'published_at'               => 'Published at',
        'user_id'                    => 'User id',
        'user_type'                  => 'User type',
        'created_at'                 => 'Created at',
        'updated_at'                 => 'Updated at',
        'deleted_at'                 => 'Deleted at',
    ],
];
