<?php
use Kirby\Cms\App as Kirby;

Kirby::plugin('deichrakete/head', [
    'blueprints' => [
        'head/head_author' => __DIR__ . '/blueprints/fields/head_author.yml',
        'head/head_canonical' => __DIR__ . '/blueprints/fields/head_canonical.yml',
        'head/head_description' => __DIR__ . '/blueprints/fields/head_description.yml',
        'head/head_google_site_verification' => __DIR__ . '/blueprints/fields/head_google_site_verification.yml',
        'head/head_keywords' => __DIR__ . '/blueprints/fields/head_keywords.yml',
        'head/head_og_description' => __DIR__ . '/blueprints/fields/head_og_description.yml',
        'head/head_og_image' => __DIR__ . '/blueprints/fields/head_og_image.yml',
        'head/head_og_site_name' => __DIR__ . '/blueprints/fields/head_og_site_name.yml',
        'head/head_og_title' => __DIR__ . '/blueprints/fields/head_og_title.yml',
        'head/head_robots' => __DIR__ . '/blueprints/fields/head_robots.yml',
        'head/head_title' => __DIR__ . '/blueprints/fields/head_title.yml',
        'head/head_twitter_description' => __DIR__ . '/blueprints/fields/head_twitter_description.yml',
        'head/head_twitter_image' => __DIR__ . '/blueprints/fields/head_twitter_image.yml',
        'head/head_twitter_site' => __DIR__ . '/blueprints/fields/head_twitter_site.yml',
        'head/head_twitter_title' => __DIR__ . '/blueprints/fields/head_twitter_title.yml',
        'head/site' => __DIR__ . '/blueprints/tabs/site.yml',
        'head/page' => __DIR__ . '/blueprints/tabs/page.yml',
    ],
    'options' => [
        'staging' => false,
    ],
    'snippets' => [
        'head/render' => __DIR__ . '/snippets/head.php',
    ],

]);
