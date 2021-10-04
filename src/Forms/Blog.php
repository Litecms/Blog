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
                "element" => 'input',
                "type" => 'text',
                "label" => trans('blog::blog.label.title'),
                "placeholder" => trans('blog::blog.label.title'),
                "col" => "12",
            ],

            'category_id[]' => [
                "element" => 'select',
                "type" => 'text',
                "options" => function () {
                    return \Blog::options('category');
                },
                "label" => trans('blog::blog.label.title'),
                "placeholder" => trans('blog::blog.label.category_id'),
                "col" => "12",
            ],

            'tags' => [
                "element" => 'tags',
                "type" => 'text',
                "options" => function () {
                    return \Blog::options('category');
                },
                "label" => trans('blog::blog.label.title'),
                "placeholder" => trans('blog::blog.label.tags'),
                "col" => "12",
            ],
            'count[min]' => [
                "element" => 'text',
                "type" => 'numeric',
                "label" => trans('blog::blog.label.title'),
                "placeholder" => trans('blog::blog.label.viewcount'),
                "col" => "6",
            ],
            'count[max]' => [
                "element" => 'text',
                "type" => 'numeric',
                "label" => trans('blog::blog.label.title'),
                "placeholder" => trans('blog::blog.label.viewcount'),
                "col" => "6",
            ],
        ];
        self::$orderBy = [
            'created_at' => trans('blog::blog.label.created_at'),
            'name' => trans('blog::blog.label.title'),
            'viewcount' => trans('blog::blog.label.viewcount'),
            'status' => trans('blog::blog.label.status'),
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
            'title' => [
                "element" => 'text',
                "type" => 'text',
                "label" => trans('blog::blog.label.title'),
                "placeholder" => trans('blog::blog.placeholder.title'),
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
            'category_id' => [
                "element" => 'select',
                "type" => 'select',
                "label" => trans('blog::blog.label.category_id'),
                "placeholder" => trans('blog::blog.placeholder.category_id'),
                "rules" => '',
                "group" => "main",
                "section" => "first",
                "options" => function () {
                    return \Blog::options('category');
                },
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
            'description' => [
                "element" => 'html_editor',
                "type" => 'html_editor',
                "label" => trans('blog::blog.label.description'),
                "placeholder" => trans('blog::blog.placeholder.description'),
                "rules" => '',
                "class" => 'form-control html-editor',
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
                "group" => "images",
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
                "element" => 'tags',
                "type" => 'text',
                "name" => 'tags[]',
                "label" => trans('blog::blog.label.tags'),
                "placeholder" => trans('blog::blog.placeholder.tags'),
                "rules" => '',
                "group" => "main",
                "maxItems" => 8,
                "multiple" => "multiple",
                "section" => "first",
                "col" => "12",
                "options" => function () {
                    return \Blog::options('tag', 'slug', 'name');
                },
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
