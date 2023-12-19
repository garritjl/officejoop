<?php snippet('header2') ?>

<article>
  <?php $workspage = page('works') ?>
  <?php $item = $workspage->children()->listed()->filterBy('tags', param('tag'), ',')->flip() ?>

  <?php if($tag = param('tag')) {
  $item = $item->filterBy('tags', $tag, ',');
}
?>
        <h1><?= $workspage->title()->esc() ?></h1>
        
        <?php $tags = $workspage->children()->listed()->pluck('tags', ',', true); ?>
        <ul class="tags">
          <?php foreach($tags as $tag): ?>
          <li>
            <a href="<?= url('works', ['params' => ['tag' => $tag]]) ?>">
            <?= html($tag) ?>
            </a>
          </li>
        <?php endforeach ?>
        </ul>
        
        <ul>
          <?php foreach ($item as $item): ?>
            <li>
              <a class="green" <?php e($item->isOpen(), 'aria-current="page"') ?> href="<?= $item->url() ?>">
                  <?= $item->title()->kti() ?>
                  <br>
                  <?= $item->subtitle()->kti() ?>
                  <?= $item->cover()->kt() ?>
              </a>
            </li>
          <?php endforeach ?>
        </ul>
          

  </article>
  
  <div id="darkgradient" >&nbsp;</div>
 
<?php snippet('footer2') ?>
