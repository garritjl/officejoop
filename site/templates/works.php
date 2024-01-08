<?php snippet('header2') ?>

<article>
  
  <?php $item = $page->children()->listed()->flip() ?>

  <?php if($tag = param('tag')) {
  $item = $item->filterBy('tags', $tag, ',');
}
?>

        <h1><a class="email" href="/works"><?= $page->title()->esc() ?></a></h1>
        
        <p class="tagsp" onclick="showtags()"><span id="showtags">sort by tag <span style="color:red">▾</span></span></p>

        <div id="tags" style="display:none;">
        <?php $tags = $page->children()->listed()->pluck('tags', ',', true);
        asort($tags); ?>
        <p class="tagsp">
        <?php foreach($tags as $tag): ?>
          
            <a class="taglink" href="<?= url('works', ['params' => ['tag' => $tag]]) ?>">
            <?= html($tag) ?></a>&nbsp; 
        <?php endforeach ?><a class="email" href="/works">show all</a>
        </p></div>

<script>
function showtags() {
  var x = document.getElementById("tags");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

        
        
        

        <ul style="margin-top:2pt;">
          <?php foreach ($item as $item): ?>
            <li>
              <a class="green" <?php e($item->isOpen(), 'aria-current="page"') ?> href="<?= $item->url() ?>">
                  <?= $item->title()->kti() ?><br>
                  <?= $item->subtitle()->kti() ?></a>
          </li>
          <li>
                  <svg id="b" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 275.542 250.613" fill="rgb(180, 180, 180)">
                    <g id="c" data-name="Layer 1">
                    <path d="M174.666,66.613c-25.737,14.328-44.516,30.438-57.715,47.599-.566.035-1.124.059-1.66.059,0,0-95.784-1.944-39.64-114.271C75.651,0,0,26.693,0,102.382s52.411,97.627,76.703,101.982c5.158.925,9.981,1.665,14.547,2.232,1.206,12.869,3.969,25.653,7.842,38.111,0,0,92.565,30.188,176.449-45.925,0,0-74.823-47.361-100.875-132.168Z" stroke-width="0"/>
                    </g>
                  </svg>
          </li>
          <li class="workspagethumb" >
                  <a <?php e($item->isOpen(), 'aria-current="page"') ?> href="<?= $item->url() ?>"><?php if ($cover = $item->cover()->toFile()): ?>
                  <img class="coverimage" src="<?= $cover->resize(850)->url() ?>" alt="<?= $cover->alt()->esc() ?>">
                  <?php endif ?></a>
            </li>
          <?php endforeach ?>
        </ul>
          

  </article>
  
  <div id="darkgradient" >&nbsp;</div>
 
<?php snippet('footer2') ?>