<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="main landing" role="main" id="landing"
  		style="background:url(<?php echo $page->image('landing.jpg')->url() ?>) no-repeat center center;background-size:cover;">
	
	<h3 class="logo">Linqm</h3>

    <div class="text">
		<h2><?php echo $page->subTitle()->html() ?></h2>
		<h1><?php echo $page->landingTitle()->html() ?></h1>
		<?php if($page->id() === 'contact'): ?>
			<a href="mailto:<?php echo $page->btnLink()->html() ?>" class="btn white"><?php echo $page->btnText() ?></a>
		<?php else: ?>
			<a href="<?php echo $site->url() ?>/<?php echo $page->btnLink()->html() ?>" class="btn white"><?php echo $page->btnText() ?></a>
		<?php endif; ?>
    </div>

  </main>

<?php snippet('footer') ?>