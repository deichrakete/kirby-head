<?php if ($site->head_google_tag_manager()->isNotEmpty() && $site->head_google_tag_toggle()->toBool() === false) : ?>
    /*
    USAGE: Put the following code directly after the opening BODY tag of your website
    <?php snippet('head_google_tag_manager/render', slots: true) ?><?php endsnippet() ?>
    */ ?>

    <?php slot('head_google_tag_manager') ?>

    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=<?= Str::esc($site->head_google_tag_manager()) ?>"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>

    <?php endslot() ?>
<?php endif ?>
