<?php snippet('header2') ?>
    <article>
        <h1><?= $page->title()->esc() ?></h1>
        
        <ul>
            <?php foreach ($page->children()->listed() as $item): ?>
            <a class="green" <?php e($item->isOpen(), 'aria-current="page"') ?> href="<?= $item->url() ?>"><li><?= $item->title()->esc() ?></li></a>
            <?php endforeach ?>
        </ul>

    </article>
<?php snippet('footer2') ?>