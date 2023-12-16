<?php snippet('header2') ?>
    <article>
        <h1><?= $page->title()->kti() ?></h1>
        <h2><?= $page->subtitle()->kti() ?></h2>
        <h4><?= $page->date()->toDate('M Y') ?></h4>

        <div class="gallery">
            <ul>
                <?php foreach ($page->images() as $image): ?>
                    <li>
                        <a href="<?= $image->url() ?>">
                            <img src="<?= $image->url() ?>">
                        </a>
                        <h5 class="caption"><?= $image->caption()->esc() ?></h5>
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