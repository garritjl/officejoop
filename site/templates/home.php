<?php snippet('header2') ?>

<article>
  <?php $workspage = page('works') ?>

        <h1><?= $workspage->title()->esc() ?></h1>
        
        
        <ul>
          <?php foreach ($workspage->children()->listed()->flip() as $item): ?>
            <li>
              <a class="green" <?php e($item->isOpen(), 'aria-current="page"') ?> href="<?= $item->url() ?>">
                  <?= $item->title()->kti() ?>
                  <br>
                  <?= $item->subtitle()->kti() ?>
                  <div id="coverwrapper"><?= $item->cover()->kt() ?></div>
              </a>
            </li>
          <?php endforeach ?>
        </ul>
          

  </article>
  

  </main>

  <footer class="footer">
    <div>
      <?= $site->footer()->esc() ?>
    </div>
  </footer>

</body>
<div id="darkgradient" >&nbsp;</div>
</html>
