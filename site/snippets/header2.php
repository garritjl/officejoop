<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This header snippet is reused in all templates.
  It fetches information from the `site.txt` content file
  and contains the site navigation.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->esc() ?></title>

  <link href="/style.css" rel="stylesheet" type="text/css" media="all">
  <link rel="stylesheet" href="https://use.typekit.net/sak3gzo.css">

  <?= css([
    'assets/css/post.css',
    '@auto'
  ]) ?>

  <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
</head>
<body>

  <header class="header">
    <span class="logo">
    <a class="green" href="<?= $site->url() ?>">
      <?= $site->title()->esc() ?>
    </a>
  </span>

    <nav class="menu">

      <span class="navlinks">

      <a class="green" href="https://garrit.net">garrit.net Home</a>
    
    <a class="green" href="<?= $site->url() ?>">
    archive Home</a>
    
    <a class="green" href="https://form.jotform.com/garritj6/principalities-mailing-list">
    Principalities Mailing List</a>
    

      </span>
      //
      <?php snippet('social') ?>
    </nav>
  </header>

  <main class="main">
