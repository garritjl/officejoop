<?php snippet('header2') ?>
    <article>
        <h1><i><?= $page->title()->esc() ?></i></h1>
        <h4><?= $page->date()->esc() ?></h4>

        <div class="gallery">
            <ul>
                <?php foreach ($page->images() as $image): ?>
                    <li>
                        <a href="<?= $image->url() ?>">
                            <img class="img" src="<?= $image->url() ?>">
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>

        <p><?= $page->description()->esc() ?></p>
    </article>
<?php snippet('footer2') ?>