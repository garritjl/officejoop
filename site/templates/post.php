<?php snippet('header2') ?>
    <article>
        <h1><i><?= $page->title()->esc() ?></i></h1>
        <h4><?= $page->date()->esc() ?></h4>

        <div>
            <ul>
                <?php foreach ($page->images() as $image): ?>
                    <li>
                        <a href="<?= $image->url() ?>">
                            <img style="margin-top: 14pt;" class="img" src="<?= $image->url() ?>">
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>

        <span>
        <?php if ($cover = $page->cover()): ?>
        <a href="<?= $cover->url() ?>">
            <img style="margin-top: 14pt;" class="img" src="<?= $cover->url() ?>">
        </a>
        <?php endif ?>
        </span>
<br>
        <span>
        <?php if ($image = $page->image()): ?>
        <a href="<?= $image->url() ?>">
            <img style="margin-top: 14pt;" class="img" src="<?= $image->url() ?>" alt="none">
        </a>
        <?php endif ?>
        </span>

        <p><?= $page->description()->esc() ?></p>
    </article>
<?php snippet('footer2') ?>