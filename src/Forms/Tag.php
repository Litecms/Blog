<?php

namespace Litecms\Blog\Forms;

use Litepie\Form\FormInterpreter;

class Tag extends FormInterpreter
{

    /**
     * Sets the form and form elements.
     * @return null.
     */
    public static function setAttributes()
    {

        self::$urls = [
            'new' => [
                'url' => guard_url('blog/tag/new'),
                'method' => 'GET',
            ],
            'create' => [
                'url' => guard_url('blog/tag/create'),
                'method' => 'GET',
            ],
            'store' => [
                'url' => guard_url('blog/tag'),
                'method' => 'POST',
            ],
            'update' => [
                'url' => guard_url('blog/tag'),
                'method' => 'PUT',
            ],
            'list' => [
                'url' => guard_url('blog/tag'),
                'method' => 'GET',
            ],
            'delete' => [
                'url' => guard_url('blog/tag'),
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
                'name' => [
                "element" => 'text',
                "type" => 'text',
                "label" => trans('blog::tag.label.name'),
                "placeholder" => trans('blog::tag.placeholder.name'),
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
        ];

        return new static();
    }
}
