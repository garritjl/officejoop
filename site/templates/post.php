<?php snippet('header2') ?>
    
<?php $workspage = page('works') ?>
<?php $item = $workspage->children()->listed()->flip() ?>

  <?php if($tag = param('tag')) {
  $item = $item->filterBy('tags', $tag, ',');
}
?>

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
                        <?php if ($image->caption()->isNotEmpty()): ?>
                        <h5 class="caption">➔ <?= $image->caption()->esc() ?></h5>
                        <?php endif ?>
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

        <?php $tags = $page->pluck('tags', ',', true); ?>
        <p class="marginleft">
        <strong>tags:</strong>
        <?php foreach($tags as $tag): ?>
          
            <a class="green" href="<?= url('works', ['params' => ['tag' => $tag]]) ?>">
            <?= html($tag) ?></a>,
        <?php endforeach ?>
        </p>

        <a href="javascript:history.back()">
        <img src="/content/backbut.svg" alt="back button" height="151" width="136">
        </a>
    </article>
<?php snippet('footer2') ?>