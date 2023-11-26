<?php snippet('header2') ?>
    <article>
        <h1><i><?= $page->title()->esc() ?></i></h1>
        <h4><?= $page->date()->esc() ?></h4>

        <span>
        <a href="<?= $page->cover()->url() ?>">
            <img style="margin-top: 14pt;" class="img" src="<?= $page->cover()->url() ?>">
        </a>
        </span>

        <p><?= $page->description()->esc() ?></p>
    </article>
<?php snippet('footer2') ?>