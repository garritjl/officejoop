<?php snippet('header2') ?>

<article>
  
  <?php $item = $page->children()->listed()->flip() ?>

  <?php if($tag = param('tag')) {
  $item = $item->filterBy('tags', $tag, ',');
}
?>

        <a class="email" href="/works"><h1><?= $page->title()->esc() ?></h1></a>
        
        <?php $tags = $page->children()->listed()->pluck('tags', ',', true); ?>
        <p>
        <?php foreach($tags as $tag): ?>
          
            <a class="green" href="<?= url('works', ['params' => ['tag' => $tag]]) ?>">
            <?= html($tag) ?></a>,
        <?php endforeach ?>
        </p>
        <br>
        
        

        <ul>
          <?php foreach ($item as $item): ?>
            <li>
              <a class="green" <?php e($item->isOpen(), 'aria-current="page"') ?> href="<?= $item->url() ?>">
                  <?= $item->title()->kti() ?><br>
                  <?= $item->subtitle()->kti() ?></a>
          </li>
          <li>
                  <a <?php e($item->isOpen(), 'aria-current="page"') ?> href="<?= $item->url() ?>"><?php if ($cover = $item->cover()->toFile()): ?>
                  <img class="coverimage" src="<?= $cover->resize(850)->url() ?>" alt="<?= $cover->alt()->esc() ?>">
                  <?php endif ?></a>
            </li>
          <?php endforeach ?>
        </ul>
          

  </article>
  
  <div id="darkgradient" >&nbsp;</div>
 
<?php snippet('footer2') ?>