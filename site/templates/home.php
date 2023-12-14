<?php snippet('header2') ?>
  <article>
  <?php $workspage = page('works') ?>

        <h1><?= $workspage->title()->esc() ?></h1>
        
        
        <ul>
          <?php foreach ($workspage->children()->listed()->flip() as $item): ?>
            <li>
              <a class="green" <?php e($item->isOpen(), 'aria-current="page"') ?> href="<?= $item->url() ?>">
                  <?= $item->title()->kti() ?>
                  <?= $item->cover()->kt() ?>
              </a>
            </li>
          <?php endforeach ?>
        </ul>
          

  </article>
<?php snippet('footer2') ?>
