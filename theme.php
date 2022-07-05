<?php global $Wcms ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?= $Wcms->page('title') ?> - <?= $Wcms->get('config', 'siteTitle') ?></title>
		<meta name="title" content="<?= $Wcms->page('title') ?> - <?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
		<meta property="og:url" content="<?= $this->url() ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
		<meta name="twitter:site" content="<?= $this->url() ?>" />
		<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />
		<?= $Wcms->css() ?>
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>?v1">
	</head>
	<body>
		<?= $Wcms->settings() ?>
		<?= $Wcms->alerts() ?>
		<section id="topMenu">
			<div class="inner">
<a class="navbar-brand" href="<?=$Wcms->url()?>" title="<?=$Wcms->page('title')?> on <?=$Wcms->get('config','siteTitle')?>"><img src="/data/files/logo.png" alt="<?=$Wcms->page('title')?>"></a>
				<nav>
					<ul class="menu">
						<?= $Wcms->menu() ?>
					</ul>
				</nav>
			</div>
		</section>
		<div id="wrapper">
			<section id="intro" class="wrapper style1 fullscreen">
				<div class="inner">
				<h3 align="center"><?= $Wcms->page('keywords') ?></h3>
				<h4 align="center"><?= $Wcms->page('description') ?></h4>
					<?= $Wcms->page('content') ?>
				</div>
			</section>
			<section class="wrapper style2">
					<div class="inner">
						<?= $Wcms->block('subside') ?>

					</div>
			</section>
		</div>
		<footer class="wrapper style2">
			<div class="inner">
				<?= $Wcms->footer() ?>
			</div>
		</footer>
		<?= $Wcms->js() ?>
	</body>
</html>
