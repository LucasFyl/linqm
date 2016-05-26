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
		<div class="social">
			<ul>
			  <li class="linkedin"><a href="https://www.linkedin.com/company/linqm" target="_blank">LinkedIn</a></li>
			  <li class="facebook"><a href="https://www.facebook.com/LINQM/" target="_blank">Facebook</a></li>
			  <li class="twitter"><a href="https://twitter.com/AaronRecruiter" target="_blank">Twitter</a></li>
			</ul>
		</div>
		<?php else: ?>
		<a href="<?php echo $site->url() ?>/<?php echo $page->btnLink()->html() ?>" class="btn white"><?php echo $page->btnText() ?></a>
		<?php endif; ?>
    </div>

  </main>

<?php snippet('footer') ?>