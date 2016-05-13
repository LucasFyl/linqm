<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="main default" role="main" id="gallery">

    <div class="half left">

    	<div class="text">
            <div class="vertical-center">
                <h1><?php echo $page->title()->html() ?></h1>
                <p><?php echo $page->text()->kirbyText() ?></p>
            </div>
        </div>

    	<div class="gallery-content">
    		<?php foreach($page->children()->visible() as $subpage): ?>
			<div class="text">
                <div class="vertical-center">
                    <h2><?php echo $subpage->title()->html() ?></h2>
                    <p><?php echo $subpage->text()->kirbyText() ?></p>
                </div>
	    	</div>
    		<?php endforeach; ?>
    	</div>

		<a href="<?php echo $page->btnLink() ?>" class="btn red"><?php echo $page->btnText() ?></a>
    </div>

    <div class="half right">
		<div class="gallery-nav">
            <!-- <a href class="arrow top"></a>
            <a href class="arrow bottom"></a> -->
			<ul>
				<?php foreach($page->children()->visible() as $subpage): ?>
    			<li><?php echo $subpage->title()->html() ?></li>
	    		<?php endforeach; ?>
			</ul>
		</div>
    </div>

  </main>

<?php snippet('footer') ?>