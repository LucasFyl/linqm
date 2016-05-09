<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="main default" role="main">

    <div class="half left">
    	<div class="scroller">
    		<h1><?php echo $page->title()->html() ?></h1>
    		<?php echo $page->text()->kirbytext() ?>
    		<a href="<?php echo $site->url() ?>/<?php echo $page->btnLink()->html() ?>" class="btn red"><?php echo $page->btnText() ?></a>
    	</div>
    </div>

    <p class="super-title"><?php echo $page->title()->html() ?></p>

    <div class="half right">
    	<?php if($image = $page->image()): ?>
        <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
        <?php endif ?>
    </div>

  </main>

<?php snippet('footer') ?>