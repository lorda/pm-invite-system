<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title><?= $page->title()->html() . " | " . $site->title()->html() ?></title>
    <meta name="description" content="<?= $site->description()->html() ?>">

    <meta property="og:title" content="<?= $site->title()->html() ?>" />
    <meta property="og:description" content="<?= $site->description()->html() ?>" />
    <meta property="og:url" content="<?= $page->url() ?>" />
    <meta property="og:image" content="" />

    <?= css('assets/css/main.css') ?>

  </head>
  <body id="<?= $page->intendedTemplate(); ?>">
