<?php snippet('header2') ?>
    <article>
        <h1><i><?= $page->title()->esc() ?></i></h1>
        <h4><?= $page->date()->esc() ?></h4>
        <p><?= $page->description()->esc() ?></p>
    </article>
<?php snippet('footer2') ?>