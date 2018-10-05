<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for comment in blog package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  comment module in blog package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Comment',
    'names'         => 'Comments',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Comments',
        'sub'   => 'Comments',
        'list'  => 'List of comments',
        'edit'  => 'Edit comment',
        'create'    => 'Create new comment'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'published'           => ['yes' =>'yes', 'no' =>'no'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'comment'                    => 'Please enter comment',
        'author'                     => 'Please enter author',
        'email'                      => 'Please enter email',
        'mobile'                      => 'Please enter mobile',
        'published'                  => 'Please select published',
        'user_id'                    => 'Please enter user id',
        'user_type'                  => 'Please enter user type',
        'blog_id'                    => 'Please enter blog id',
        'created_at'                 => 'Please select created at',
        'updated_at'                 => 'Please select updated at',
        'deleted_at'                 => 'Please select deleted at',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'comment'                    => 'Comment',
        'author'                     => 'Author',
        'email'                      => 'Email',
        'mobile'                      => 'Mobile',
        'slug'                       => 'Slug',
        'published'                  => 'Published',
        'user_id'                    => 'User id',
        'user_type'                  => 'User type',
        'blog_id'                    => 'Blog id',
        'created_at'                 => 'Created at',
        'updated_at'                 => 'Updated at',
        'deleted_at'                 => 'Deleted at',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'id'                         => ['name' => 'Id', 'data-column' => 1, 'checked'],
        'author'                     => ['name' => 'Author', 'data-column' => 2, 'checked'],
        'email'                      => ['name' => 'Email', 'data-column' => 3, 'checked'],
        'mobile'                      => ['name' => 'Mobile', 'data-column' => 4, 'checked'],
        'published'                  => ['name' => 'Published', 'data-column' => 5, 'checked'],
        'user_type'                  => ['name' => 'User type', 'data-column' => 6, 'checked'],
        'blog_id'                    => ['name' => 'Blog id', 'data-column' => 7, 'checked'],
        'created_at'                 => ['name' => 'Created at', 'data-column' => 8, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Comments',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
