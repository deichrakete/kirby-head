<?php

/**
 * @var Kirby\Cms\Page $page
 * @var Kirby\Cms\Site $site
 */

use Kirby\Filesystem\F;

?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php foreach ($kirby->languages() as $language): ?>
    <?php if ($kirby->language() == $language) continue; ?>
    <link rel="alternate" href="<?= $page->url($language->code()) ?>" hreflang="<?= $language->code() ?>" />
<?php endforeach; ?>

<?php if ($page->head_title()->isNotEmpty() || $site->head_title()->isNotEmpty()) : ?>
    <title>
        <?php e(
            $page->head_title()->isNotEmpty(),
            $page->head_title(),
            $site->head_title()
        ) ?>
    </title>
<?php else: ?>
    <title><?= $page->title() ?> - <?= $site->title() ?></title>
<?php endif ?>

<?php if ($page->head_author()->isNotEmpty() || $site->head_author()->isNotEmpty()) : ?>
    <meta
        name="author"
        content="<?php e(
                        $page->head_author()->isNotEmpty(),
                        $page->head_author(),
                        $site->head_author()
                    ) ?>">
<?php endif ?>

<?php if ($page->head_description()->isNotEmpty() || $site->head_description()->isNotEmpty()) : ?>
    <meta
        name="description"
        content="<?php e(
                        $page->head_description()->isNotEmpty(),
                        $page->head_description(),
                        $site->head_description()
                    ) ?>">
<?php endif ?>

<?php if ($site->head_google_site_verification()->isNotEmpty()): ?>
    <meta name="google-site-verification" content="<?= $site->head_google_site_verification() ?>">
<?php endif ?>

<?php if ($page->head_keywords()->isNotEmpty() || $site->head_keywords()->isNotEmpty()): ?>
    <meta
        name="keywords"
        content="<?php e(
                        $page->head_keywords()->isNotEmpty(),
                        $page->head_keywords(),
                        $site->head_keywords()
                    ) ?>">
<?php endif ?>

<?php if ($page->head_robots()->toBool() || option('deichrakete.head.staging')): ?>
    <meta name="robots" content="noindex">
<?php else: ?>
    <meta name="robots" content="index">
<?php endif ?>

<?php if ($page->head_og_description()->isNotEmpty() || $site->head_og_description()->isNotEmpty()) : ?>
    <meta
        property="og:description"
        content="<?php e(
                        $page->head_og_description()->isNotEmpty(),
                        $page->head_og_description(),
                        $site->head_description()
                    ) ?>">
<?php endif ?>

<?php if ($page->head_og_image()->toFile()): ?>
    <meta property="og:image" content="<?= $page->head_og_image()->toFile()->crop(1200, 630)->url() ?>">
    <meta property="og:image:type" content="image/<?= $page->head_og_image()->toFile()->extension() ?>">
    <meta property="og:image:height" content="630">
    <meta property="og:image:width" content="1200">
<?php elseif ($site->head_og_image()->toFile()): ?>
    <meta property="og:image" content="<?= $site->head_og_image()->toFile()->crop(1200, 630)->url() ?>">
    <meta property="og:image:type" content="image/<?= $site->head_og_image()->toFile()->extension() ?>">
    <meta property="og:image:height" content="630">
    <meta property="og:image:width" content="1200">
<?php endif ?>

<?php if ($site->head_og_site_name()->isNotEmpty()) : ?>
    <meta property="og:site_name" content="<?= $site->head_og_site_name() ?>">
<?php endif ?>

<meta
    property="og:title"
    content="<?php e(
                    $page->head_og_title()->isNotEmpty(),
                    $page->head_og_title(),
                    $page->title()
                ) ?>">

<meta property="og:url" content="<?= $page->url() ?>">

<meta name="twitter:card" content="summary">

<?php if ($site->head_twitter_site()->isNotEmpty()): ?>
    <meta name="twitter:site" content="<?= $site->head_twitter_site() ?>">
<?php endif ?>

<?php if ($page->head_twitter_description()->isNotEmpty() || $site->head_description()->isNotEmpty()) : ?>
    <meta
        name="twitter:description"
        content="<?php e(
                        $page->head_twitter_description()->isNotEmpty(),
                        $page->head_twitter_description(),
                        $site->head_description()
                    ) ?>">
<?php endif ?>

<meta
    name="twitter:title"
    content="<?php e(
                    $page->head_twitter_title()->isNotEmpty(),
                    $page->head_twitter_title(),
                    $page->title()
                ) ?>">

<?php if ($page->head_twitter_image()->toFile()): ?>
    <meta property="twitter:image" content="<?= $page->head_twitter_image()->toFile()->crop(1200, 630)->url() ?>">
<?php elseif ($site->head_twitter_image()->toFile()): ?>
    <meta property="twitter:image" content="<?= $site->head_twitter_image()->toFile()->crop(1200, 630)->url() ?>">
<?php endif ?>

<?php if (F::exists('favicon-96x96.png') || F::exists('public/favicon-96x96.png')) : ?>
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<?php endif ?>

<?php if (F::exists('favicon.svg') || F::exists('public/favicon.svg')) : ?>
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
<?php endif ?>

<?php if (F::exists('favicon.ico') || F::exists('public/favicon.ico')) : ?>
    <link rel="shortcut icon" href="/favicon.ico">
<?php endif ?>

<?php if (F::exists('apple-touch-icon.png') || F::exists('public/apple-touch-icon.png')) : ?>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<?php endif ?>

<?php if (F::exists('site.webmanifest') || F::exists('public/site.webmanifest')) : ?>
    <link rel="manifest" href="/site.webmanifest">
<?php endif ?>

<?php if ($page->head_canonical()->isNotEmpty()) : ?>
    <link rel="canonical" href="<?= $page->head_canonical() ?>" />
<?php else: ?>
    <link rel="canonical" href="<?= $page->url() ?>" />
<?php endif ?>
