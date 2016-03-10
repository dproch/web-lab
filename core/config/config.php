<?php
return [
    "SiteName" => "My simple mvc framework",
    "DefaultRoute" => "site/index",
    "components" => [
        "twig" => [
            "cache_path" => "./../core/Templates/cache",
            "template_path" => "./../core/Templates",
        ],
        "db"=>[
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'web_lab',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => ''
        ],
    ],
];

