<?php

namespace Litecms\Blog\Forms;

use Litepie\Form\FormInterpreter;

class Blog extends FormInterpreter
{

    /**
     * Sets the form and form elements.
     * @return null.
     */
    public static function setAttributes()
    {

        self::$urls = [
            'new' => [
                'url' => guard_url('blog/blog/new'),
                'method' => 'GET',
            ],
            'create' => [
                'url' => guard_url('blog/blog/create'),
                'method' => 'GET',
            ],
            'store' => [
                'url' => guard_url('blog/blog'),
                'method' => 'POST',
            ],
            'update' => [
                'url' => guard_url('blog/blog'),
                'method' => 'PUT',
            ],
            'list' => [
                'url' => guard_url('blog/blog'),
                'method' => 'GET',
            ],
            'delete' => [
                'url' => guard_url('blog/blog'),
                'method' => 'DELETE',
            ],
        ];
        self::$search = [
            'name' => [
                "type" => 'text',
                "label" => trans('blog::blog.label.name'),
                "placeholder" => trans('blog::blog.placeholder.name'),
                "rules" => '',
                "group" => "main",
                "section" => "first",
                "col" => "4",
                "roles" => [],
            ]
        ];
        self::$groups = [
            'main' => trans('blog::blog.groups.main'),
            'details' => trans('blog::blog.groups.details'),
            'images' => trans('blog::blog.groups.images'),
            'settings' => trans('blog::blog.groups.settings'),
        ];
        self::$list = [
            [
                'key' => "ref",
                'label' => trans('blog::blog.label.ref'),
                'sortable' => 'true',
                'roles' => [],
            ],
            [
                'key' => "id",
                'label' => trans('blog::blog.label.id'),
                'sortable' => 'true',
                'roles' => [],
            ],
            [
                'key' => "name",
                'label' => trans('blog::blog.label.name'),
                'sortable' => 'true',
                'roles' => [],
            ],
            [
                'key' => "status",
                'label' => trans('blog::blog.label.status'),
                'sortable' => 'true',
                'roles' => [],
            ],
        ];
        self::$fields = [
                'category_id' => [
                "element" => 'select',
                "type" => 'select',
                "label" => trans('blog::blog.label.category_id'),
                "placeholder" => trans('blog::blog.placeholder.category_id'),
                "rules" => '',
                "group" => "main",
                "section" => "first",
                "col" => "6",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
            'title' => [
                "element" => 'text',
                "type" => 'text',
                "label" => trans('blog::blog.label.title'),
                "placeholder" => trans('blog::blog.placeholder.title'),
                "rules" => '',
                "group" => "main",
                "section" => "first",
                "col" => "6",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
            'description' => [
                "element" => 'html_editor',
                "type" => 'html_editor',
                "label" => trans('blog::blog.label.description'),
                "placeholder" => trans('blog::blog.placeholder.description'),
                "rules" => '',
                "group" => "main",
                "section" => "first",
                "col" => "12",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
            'images' => [
                "element" => 'file',
                "type" => 'images',
                "label" => trans('blog::blog.label.images'),
                "placeholder" => trans('blog::blog.placeholder.images'),
                "rules" => '',
                "group" => "main",
                "section" => "first",
                "col" => "12",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
            'tags' => [
                "element" => 'text',
                "type" => 'text',
                "label" => trans('blog::blog.label.tags'),
                "placeholder" => trans('blog::blog.placeholder.tags'),
                "rules" => '',
                "group" => "main",
                "section" => "first",
                "col" => "6",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
            'viewcount' => [
                "element" => 'numeric',
                "type" => 'numeric',
                "label" => trans('blog::blog.label.viewcount'),
                "placeholder" => trans('blog::blog.placeholder.viewcount'),
                "rules" => '',
                "group" => "main",
                "section" => "first",
                "col" => "6",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
            'published' => [
                "element" => 'select',
                "type" => 'select',
                "label" => trans('blog::blog.label.published'),
                "placeholder" => trans('blog::blog.placeholder.published'),
                'options'   => trans('blog::blog.options.published'),
                "rules" => '',
                "group" => "main",
                "section" => "first",
                "col" => "6",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
            'published_at' => [
                "element" => 'text',
                "type" => 'date',
                "label" => trans('blog::blog.label.published_at'),
                "placeholder" => trans('blog::blog.placeholder.published_at'),
                "rules" => '',
                "group" => "main",
                "section" => "first",
                "col" => "6",
                "append" => null,
                "prepend" => null,
                "roles" => [],
                "attributes" => [
                    'wrapper' => [],
                    "label" => [],
                    "element" => [],

                ],
            ],
        ];

        return new static();
    }
}
