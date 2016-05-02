<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="main gallery" role="main">

    <div class="half left">

    	<div class="text">
    		<h1><?php echo $page->title()->html() ?></h1>
    		<p><?php echo $page->text()->kirbyText() ?></p>
    	</div>

    	<div class="gallery-content">
    		<?php foreach($page->children()->visible() as $subpage): ?>
			<div class="text">
	    		<h1><?php echo $subpage->title()->html() ?></h1>
	    		<p><?php echo $subpage->text()->kirbyText() ?></p>
	    	</div>
    		<?php endforeach; ?>
    	</div>

		<a href="<?php echo $page->btnLink() ?>" class="btn red"><?php echo $page->btnText() ?></a>
    </div>

    <div class="half right">
		<div class="gallery-nav">
			<ul>
				<?php foreach($page->children()->visible() as $subpage): ?>
    			<li><?php echo $subpage->title()->html() ?></li>
	    		<?php endforeach; ?>
			</ul>
		</div>
    </div>

  </main>

<?php snippet('footer') ?>