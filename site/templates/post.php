<?php snippet('header2') ?>
    <article>
        <h1><i><?= $page->title()->esc() ?></i></h1>
        <h4><?= $page->date()->toDate('M Y') ?></h4>

        <div class="gallery">
            <ul>
                <li>
                <img class="img" src="<?= $page->cover()->kirbytext()->url() ?>">
                </li>
                <?php foreach ($page->images() as $image): ?>
                    <li>
                        <a href="<?= $image->url() ?>">
                            <img class="img" src="<?= $image->resize(800, null)->url() ?>">
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>

        <p><?= $page->description()->esc() ?></p>
    </article>
<?php snippet('footer2') ?>