<?php
/**
 * @var Kirby\Cms\Page $page
 * @var Kirby\Cms\Site $site
 */

use Kirby\Filesystem\F;

?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php if ($page->head_title()->isNotEmpty() || $site->head_title()->isNotEmpty()) : ?>
    <title>
        <?php e(
            $page->head_title()->isNotEmpty(),
            $page->head_title(),
            $site->head_title()
        ) ?>
    </title>
<?php else: ?>
    <title><?= $page->title() ?> – <?= $site->title() ?></title>
<?php endif ?>

<?php if ($page->head_author()->isNotEmpty() || $site->head_author()->isNotEmpty()) : ?>
    <meta
        name="author"
        content="<?php e(
            $page->head_author()->isNotEmpty(),
            $page->head_author(),
            $site->head_author()
        ) ?>"
    >
<?php endif ?>

<?php if ($page->head_description()->isNotEmpty() || $site->head_description()->isNotEmpty()) : ?>
    <meta
        name="description"
        content="<?php e(
            $page->head_description()->isNotEmpty(),
            $page->head_description(),
            $site->head_description()
        ) ?>"
    >
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
        ) ?>"
    >
<?php endif ?>

<?php if ($page->head_robots()->toBool() === true || $site->head_robots()->toBool() === true): ?>
    <meta name="robots" content="nofollow, noindex">
<?php else: ?>
    <meta name="robots" content="follow, index">
<?php endif ?>

<?php if ($page->head_og_description()->isNotEmpty() || $site->head_og_description()->isNotEmpty()) : ?>
    <meta
        property="og:description"
        content="<?php e(
            $page->head_og_description()->isNotEmpty(),
            $page->head_og_description(),
            $site->head_description()
        ) ?>"
    >
<?php endif ?>

<?php if ($page->head_og_image()->toFile()): ?>
    <meta property="og:image" content="<?= $page->head_og_image()->toFile()->url() ?>">
<?php elseif ($site->head_og_image()->toFile()): ?>
    <meta property="og:image" content="<?= $site->head_og_image()->toFile()->url() ?>">
<?php endif ?>

<?php if ($site->head_og_site_name()->isNotEmpty()) : ?>
    <meta property="og:site_name" content="<?= $site->head_og_site_name() ?>">
<?php endif ?>

<?php if ($page->head_og_title()->isNotEmpty() || $site->head_og_title()->isNotEmpty()) : ?>
    <meta
        property="og:title"
        content="<?php e(
            $page->head_og_title()->isNotEmpty(),
            $page->head_og_title(),
            $site->title()
        ) ?>"
    >
<?php endif ?>

<meta name="twitter:card" content="summary">

<?php if ($site->head_twitter_site()->isNotEmpty()): ?>
    <meta name="twitter:site" content="<?= $site->head_twitter_site() ?>">
<?php endif ?>

<?php if ($page->head_twitter_description()->isNotEmpty() || $site->head_head_description()->isNotEmpty()) : ?>
    <meta
        name="twitter:description"
        content="<?php e(
            $page->head_twitter_description()->isNotEmpty(),
            $page->head_twitter_description(),
            $site->head_description()
        ) ?>"
    >
<?php endif ?>

<?php if ($page->head_twitter_title()->isNotEmpty() || $site->head_twitter_title()->isNotEmpty()) : ?>
    <meta
        name="twitter:title"
        content="<?php e(
            $page->head_twitter_title()->isNotEmpty(),
            $page->head_twitter_title(),
            $site->title()
        ) ?>"
    >
<?php endif ?>

<?php if ($page->head_twitter_image()->toFile()): ?>
    <meta property="twitter:image" content="<?= $page->head_twitter_image()->toFile()->url() ?>">
<?php elseif ($site->head_twitter_image()->toFile()): ?>
    <meta property="twitter:image" content="<?= $site->head_twitter_image()->toFile()->url() ?>">
<?php endif ?>

<?php if (F::exists('apple-touch-icon.png')) : ?>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<?php endif ?>

<?php if (F::exists('favicon-32x32.png')) : ?>
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<?php endif ?>

<?php if (F::exists('favicon-16x16.png')) : ?>
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<?php endif ?>

<?php if (F::exists('site.webmanifest')) : ?>
    <link rel="manifest" href="/site.webmanifest">
<?php endif ?>

<?php if (F::exists('safari-pinned-tab.svg')) : ?>
    <link
        rel="mask-icon"
        href="/safari-pinned-tab.svg"
        color="<?php e(
            $site->favicon_mask_icon_color()->isNotEmpty(),
            $site->favicon_mask_icon_color(),
            '#fff') ?>"
    >
<?php endif ?>

<?php if ($site->head_favicon_msapplication_tile_color()->isNotEmpty()) : ?>
    <meta name="msapplication-TileColor" content="<?= $site->head_favicon_msapplication_tilecolor() ?>>">
<?php endif ?>

<?php if ($site->head_favicon_theme_color()->isNotEmpty()) : ?>
    <meta name="theme-color" content="<?= $site->head_favicon_theme_color() ?>">
<?php endif ?>
