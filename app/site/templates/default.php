<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="main default" role="main">

    <div class="half left">
    	<div class="scroller">
    		<h1><?php echo $page->title()->html() ?></h1>
    		<p><?php echo $page->text()->kirbyText() ?></p>
    		<a href="<?php echo $page->btnLink() ?>" class="btn red"><?php echo $page->btnText() ?></a>
    	</div>
    </div>

    <div class="half right">
    	<?php if ($page->hasImages()) : ?>
    		<img src="<?php echo $page->images->first() ?>" alt="<?php echo $page->title()->html() ?>" />
    	<?php endif; ?>
    </div>

  </main>

<?php snippet('footer') ?>