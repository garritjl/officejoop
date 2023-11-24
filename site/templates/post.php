<?php snippet('header2') ?>
    <article>
        <h1><i><?= $page->title()->esc() ?></i></h1>
        <h2><?= $page->date()->esc() ?></h2>
        <p><?= $page->description()->esc() ?></p>
    </article>
<?php snippet('footer2') ?>