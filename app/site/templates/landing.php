<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="main landing" role="main"
  		style="background-image:url(<?php echo $page->image('landing.jpg')->url() ?>)">
	
	<h3 class="logo">Linqm</h3>

    <div class="text">
		<h2><?php echo $page->subTitle()->html() ?></h2>
		<h1><?php echo $page->landingTitle()->html() ?></h1>
		<a href="<?php echo $site->url() ?>/<?php echo $page->btnLink()->html() ?>" class="btn white"><?php echo $page->btnText() ?></a>
    </div>

  </main>

<?php snippet('footer') ?>