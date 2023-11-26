<?php snippet('header2') ?>
    <article>
        <h1><i><?= $page->title()->esc() ?></i></h1>
        <h4><?= $page->date()->esc() ?></h4>

        <span>
        <a href="<?= $page->cover()->url() ?>">
            <img style="margin-top: 14pt;" class="img" src="<?= $page->cover()->url() ?>">
        </a>
        </span>
<br>
        <span>
        <a href="/content/4_works/1_siblingstory/1_siblingstory.png">
            <img style="margin-top: 14pt;" class="img" src="/content/4_works/1_siblingstory/1_siblingstory.png">
        </a>
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