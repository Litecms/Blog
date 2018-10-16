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
    'name'        => 'Blog',
    'names'       => 'Blogs',

    /**
     * Singlular and plural name of the module
     */
    'title'       => [
        'main'   => 'Blogs',
        'sub'    => 'Blogs',
        'list'   => 'List of blogs',
        'edit'   => 'Edit blog',
        'create' => 'Create new blog',
    ],

    /**
     * Options for select/radio/check.
     */
    'options'     => [
        'published' => ['yes' => 'yes', 'no' => 'no'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder' => [
        'id'               => 'Please enter id',
        'category_id'      => 'Please select category',
        'title'            => 'Please enter title',
        'description'      => 'Please enter description',
        'images'           => 'Please enter images',
        'tags'             => 'Please enter tags',
        'viewcount'        => 'Please enter viewcount',
        'slug'             => 'Please enter slug',
        'meta_title'       => 'Please enter title',
        'meta_description' => 'Please enter description',
        'meta_keyword'     => 'Please enter keyword',
        'published'        => 'Please select published',
        'published_at'     => 'Please select published at',
        'user_type'        => 'Please enter user type',
        'user_id'          => 'Please enter user id',
        'upload_folder'    => 'Please enter upload folder',
        'created_at'       => 'Please select created at',
        'updated_at'       => 'Please select updated at',
        'deleted_at'       => 'Please select deleted at',
    ],

    /**
     * Labels for inputs.
     */
    'label'       => [
        'id'               => 'Id',
        'category_id'      => 'Category',
        'title'            => 'Title',
        'description'      => 'Description',
        'images'           => 'Images',
        'tags'             => 'Tags',
        'viewcount'        => 'Viewcount',
        'slug'             => 'Slug',
        'meta_title'       => 'Meta title',
        'meta_description' => 'Meta description',
        'meta_keyword'     => 'Meta keyword',
        'published'        => 'Published',
        'published_at'     => 'Published at',
        'user_type'        => 'User type',
        'user_id'          => 'User id',
        'upload_folder'    => 'Upload folder',
        'created_at'       => 'Created at',
        'updated_at'       => 'Updated at',
        'deleted_at'       => 'Deleted at',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'     => [
        'id'           => ['name' => 'Id', 'data-column' => 1, 'checked'],
        'category_id'  => ['name' => 'Category id', 'data-column' => 2, 'checked'],
        'title'        => ['name' => 'Title', 'data-column' => 3, 'checked'],
        'viewcount'    => ['name' => 'Viewcount', 'data-column' => 4, 'checked'],
        'published'    => ['name' => 'Published', 'data-column' => 5, 'checked'],
        'published_at' => ['name' => 'Published at', 'data-column' => 6, 'checked'],
        'user_type'    => ['name' => 'User type', 'data-column' => 7, 'checked'],
        'created_at'   => ['name' => 'Created at', 'data-column' => 8, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'         => [
        'name' => 'Blogs',
    ],

    /**
     * Texts  for the module
     */
    'text'        => [
        'preview' => 'Click on the below list for preview',
    ],
];
