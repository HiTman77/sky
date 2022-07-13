<?php global $Wcms ?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<title><?= $Wcms->page('title') ?> - <?= $Wcms->get('config', 'siteTitle') ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="title" content="<?= $Wcms->page('title') ?> - <?= $Wcms->get('config', 'siteTitle') ?>" />
<meta name="description" content="<?= $Wcms->page('description') ?>">
<meta property="og:url" content="<?= $this->url() ?>" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
<meta name="twitter:site" content="<?= $this->url() ?>" />
<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />
<link rel="shortcut icon" href="/data/files/favicon.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?= $Wcms->css() ?>
<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>?v<?php echo(rand(1,33));?><?php echo(rand(1,20));?>">
</head>
<body>
<?= $Wcms->settings() ?>
<?= $Wcms->alerts() ?>
<section id="topMenu">
<a class="navbar-brand" href="/"><img src="/data/files/logo.png" height="100" srcset="/data/files/logo.png"></a>
<div class="inner"><nav><ul class="menu"><?= $Wcms->menu() ?></ul></nav></div>
</section>
<div id="wrapper">
<section id="intro" class="wrapper style1 fullscreen">
<div class="inner">
<div style="text-align:center;padding-top:80px;"><h2><?= $Wcms->page('description') ?></h2>
<h1><?= $Wcms->page('keywords') ?></h1></div>
<?= $Wcms->page('content') ?>
</div>
</section>
<section class="wrapper style2">
<div class="inner">
<?= $Wcms->block('subside') ?>
</div>
</section>
</div>
<footer class="wrapper style2"><div class="inner"><?= $Wcms->footer() ?></div></footer>
<?= $Wcms->js() ?>
</body>
</html>