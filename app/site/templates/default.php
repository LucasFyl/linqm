<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="main default" role="main" id="default">

    <div class="half left">
    	<div class="scroller" id="trigger">
    		<h1><?php echo $page->title()->html() ?></h1>
    		<?php echo $page->text()->kirbytext() ?>
    		<a href="<?php echo $site->url() ?>/<?php echo $page->btnLink()->html() ?>" class="btn red"><?php echo $page->btnText() ?></a>
    	</div>
    </div>

    <p class="super-title"><?php echo $page->title()->html() ?></p>

    <?php if($image = $page->image()): ?>
    <div class="half right"
        style="background:url('<?php echo $image->url() ?>') no-repeat center center;background-size:cover;">
    </div>
    <?php endif ?>

  </main>

<?php snippet('footer') ?>