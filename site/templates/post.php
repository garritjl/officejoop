<?php snippet('header2') ?>
    <article>
        <h1><i><?= $page->title()->esc() ?></i></h1>
        <h4><?= $page->date()->toDate('M Y') ?></h4>

        <div class="gallery">
            <ul>
                <?php foreach ($page->images() as $image): ?>
                    <li>
                        <a href="<?= $image->url() ?>">
                            <img src="<?= $image->resize(600, null)->url() ?>">
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>

        <p class="marginleft" >
            <?= $page->description()->kti() ?>
        </p>
        <?php if ($page->hasChildren()) snippet('listpagechildren')?>
        <p class="marginleft">
        <strong>tags:</strong> <?= $page->tags()->kti() ?>
        </p>
        
    </article>
<?php snippet('footer2') ?>