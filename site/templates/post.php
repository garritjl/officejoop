<?php snippet('header2') ?>
    <article>
        <h1><i><?= $page->title()->esc() ?></i></h1>
        <h4><?= $page->date()->esc() ?></h4>

        <span>
        <?php if($cover = $page->cover()->toFile()): ?>
        <a href="<?= $cover()->toFile() ?>">
            <img style="margin-top: 14pt;" class="img" src="<?= $cover()->toFile() ?>">
        </a>
        <?php endif ?>
        </span>
<br>
        <span>
        <?php if($image = $page->image()): ?>
        <a href="<?= $image->url() ?>">
            <img style="margin-top: 14pt;" class="img" src="<?= $image->url() ?>" alt="none">
        </a>
        <?php endif ?>
        </span>

        <p><?= $page->description()->esc() ?></p>
    </article>
<?php snippet('footer2') ?>