<?php

Kirby::plugin('foerdeliebe/head', [
    'blueprints' => [
        'head/site' => __DIR__ . '/blueprints/tabs/site.yml',
        'head/page' => __DIR__ . '/blueprints/tabs/page.yml',
    ],
    'snippets' => [
        'head/render' => __DIR__ . '/snippets/head.php',
    ]
]);
