<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/Workarea/xampp/htdocs/grav/grav-template/system/config/site.yaml',
    'modified' => 1493069681,
    'data' => [
        'title' => 'Grav',
        'default_lang' => 'en',
        'author' => [
            'name' => 'John Appleseed',
            'email' => 'john@email.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'My Grav Site'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
