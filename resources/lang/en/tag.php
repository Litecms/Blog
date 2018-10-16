<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for tag in blog package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  tag module in blog package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Tag',
    'names'         => 'Tags',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Tags',
        'sub'   => 'Tags',
        'list'  => 'List of tags',
        'edit'  => 'Edit tag',
        'create'    => 'Create new tag'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'status'           => ['show' => 'show','hide' => 'hide'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'name'                       => 'Please enter name',
        'frequency'                  => 'Please enter frequency',
        'slug'                       => 'Please enter slug',
        'status'                  => 'Please select status',
        'created_at'                 => 'Please select created at',
        'updated_at'                 => 'Please select updated at',
        'deleted_at'                 => 'Please select deleted at',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'name'                       => 'Name',
        'frequency'                  => 'Frequency',
        'slug'                       => 'Slug',
        'status'                  => 'status',
        'created_at'                 => 'Created at',
        'updated_at'                 => 'Updated at',
        'deleted_at'                 => 'Deleted at',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'id'                         => ['name' => 'Id', 'data-column' => 1, 'checked'],
        'name'                       => ['name' => 'Name', 'data-column' => 2, 'checked'],
        'frequency'                  => ['name' => 'Frequency', 'data-column' => 3, 'checked'],
        'status'                  => ['name' => 'Status', 'data-column' => 4, 'checked'],
        'created_at'                 => ['name' => 'Created at', 'data-column' => 5, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Tags',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
